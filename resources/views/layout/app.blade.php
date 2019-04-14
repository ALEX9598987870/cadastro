<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
    <div class="container">
        @component('navbar')
        @endcomponent
        <main role="main">
            @hasSection ('body')
                @yield('body')   
            @endif
        </main>
    </div>
    
    <script src="{{asset('js/app.js')}}" type="text/javascript">
    </script>
</body>
</html>