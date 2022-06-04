<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\album;
use Illuminate\Support\Facades\Storage;
//エイリアスに追加したファサードを呼び出す。
// use InterventionImage;

class AlbumController extends Controller
{

    public function index()
    {
        $albums = album::orderBy('created_at', 'desc')->get();
        return view('index', ['albums' => $albums]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $content = $request->validate(['profile_img' => 'required|file']);
        $filename = $request->profile_img->getClientOriginalName();
        //formからの画像リクエストはimagefileで受け付けしたのでimagefileを設定しています。formに合わせて変更してください。
        $file = $request->file('imagefile');
        // $file = $request->file('profile_img');
        //アスペクト比を維持、画像サイズを横幅1080pxにして保存する。
        // InterventionImage::make($file)->resize(300, null, function ($constraint) {$constraint->aspectRatio();})->save(public_path('/storage/' . $filename ) );;
        $img = $request->profile_img->storeAs('', $filename, 'public');
        album::create(['content' => $filename]);
        return redirect()->route('index');
    }


    public function update(Request $request)
    {
        $album = album::find($request->id);
        $content = $request->validate(['profile_img' => 'required|file']);
        $album->fill($content)->save();
        return redirect()->route('index');
    }


    public function delete(Request $request)
    {
        $album = album::find($request->id);
        $album->delete();
        Storage::disk('public')->delete($album->content);
        return redirect()->route('index');
    }
}
