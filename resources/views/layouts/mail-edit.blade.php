<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exhibit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ url('/frontend/images/favicon.png') }}" />
    <link href="https://fonts.googleapis.com/css?family=Rambla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/frontend/css/animate.css">
    <link rel="stylesheet" href="/frontend/css/themify-icons.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
</head>

<body>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$error}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforeach
    @endif

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @include('sections.backtotop')

    <div id="techynaf-page">

        {{-- @include('sections.aside') --}}

        <!-- Main Section -->
        <div id="techynaf-main">

            @yield('content')

        </div>

        @include('sections.script')
    </div>
</body>

</html>
