<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exhibit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ url('/frontend/images/favicon.png') }}" />
    <link href="https://fonts.googleapis.com/css?family=Rambla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- Start of Async Drift Code -->
    <script>
        "use strict";
        
        !function() {
        var t = window.driftt = window.drift = window.driftt || [];
        if (!t.init) {
            if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
            t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
            t.factory = function(e) {
            return function() {
                var n = Array.prototype.slice.call(arguments);
                return n.unshift(e), t.push(n), t;
            };
            }, t.methods.forEach(function(e) {
            t[e] = t.factory(e);
            }), t.load = function(t) {
            var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
            o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
            var i = document.getElementsByTagName("script")[0];
            i.parentNode.insertBefore(o, i);
            };
        }
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('rt39v3ctu8dw');
    </script>
    <!-- End of Async Drift Code -->
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
