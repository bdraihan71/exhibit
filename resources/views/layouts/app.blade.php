<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exhibit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="{{ url('/frontend/image/png') }}" href="images/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Rambla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/frontend/css/animate.css">
    <link rel="stylesheet" href="/frontend/css/themify-icons.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
</head>

<body>
        
    @include('sections.backtotop')

    <div id="techynaf-page"> 

        @include('sections.aside')

        <!-- Main Section -->
        <div id="techynaf-main">
            
            @include('sections.informations')

            @include('sections.experience')

            @include('sections.education')

            @include('sections.skills')

            @include('sections.projects')

            @include('sections.testimonials')

            @include('sections.contact')

            @include('sections.footer')

        </div>

        @include('sections.script')
    </div>
</body>

</html>