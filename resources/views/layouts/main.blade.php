<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Foundation | Welcome</title>
        <link rel="stylesheet" href="{{asset('css/foundation.css')}}" />
        <script src="{{asset('js/vendor/modernizr.js')}}"></script>
    </head>

<body>

    <!-- Header and Nav -->
 
    <nav class="top-bar" data-topbar>
        <ul class="title-area">
            <li class="name">
                <h1><a href="#">ODOT</a></h1>
            </li>
        </ul>
    </nav>
 
    <!-- End Header and Nav -->

   @if (session('status'))
    <div class="alert-box success">
        {{ session('status') }}
    </div>
@endif

    <div class="row">
        <div class="large-12">
            @yield('content')
        </div>
    </div>
 
 
    <!-- Footer -->
 
    <footer class="row">
        <div class="large-12 columns">
            <hr />
            <div class="row">
                <div class="large-6 columns">
                    <p>© Long Distribution</p>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{ URL::asset('js/vendor/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/foundation.min.js') }}"></script>
    
    <script>
      $(document).foundation();
    </script>
    </body>
</html>