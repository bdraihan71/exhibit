<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tasnim's Exhibit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ url('/frontend/images/favicon.png') }}" />
    <link href="https://fonts.googleapis.com/css?family=Rambla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

     <!-- Global site tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145375324-7"></script>
     <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         gtag('config', 'UA-145375324-7');
     </script>
</head>



    @include('sections.backtotop')

    <div id="techynaf-page">

        @include('sections.aside')

        <!-- Main Section -->
        <div id="techynaf-main">

            @yield('content')

        </div>

        @include('sections.script')
    </div>
</body>

</html>
