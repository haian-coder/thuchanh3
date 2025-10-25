<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div  class="box">
        @include('partials.header')
    </div>
    

    <main>
        @yield('content')
    </main>
     
    <div class="box">
        @include('partials.footer')
    </div>
</body>
</html>