<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{env('APP_URL')}}/css/bootstrap.css" rel="stylesheet">
    <link href="{{env('APP_URL')}}/css/member.css" rel="stylesheet">
    <link href="{{env('APP_URL')}}/css/style.css" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div class="container">       
        @yield('content')
   </div> 
</section><!-- /.content -->
    </div>
     @yield('js')
</body>
</html>