<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="vh-100 d-flex justify-content-center text-center">
            <div class="w-75 mt-3">
                <div class="text-black-50 text-left border-bottom mt-5">
                    <h1>アルバム</h1>
                    <p>画像はリサイズしてください。サイズは600x600が推奨です。</p>
                </div>

            <div>
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>