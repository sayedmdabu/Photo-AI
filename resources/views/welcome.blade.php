<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Photo AI</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">

    <link href="{{asset('/assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="{{asset('/assets/css/headers.css')}}" rel="stylesheet">
</head>

<body>


<main>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="{{ asset('assets/image/logo/Intelcaffe-logo.png') }}" width="120px" class="img-fluid" alt="...">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">For who</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Reviews</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Styles</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Buy giftcard</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Packs</a></li>
      </ul>

      <div class="col-md-3 text-end">
        {{-- <button type="button" class="btn btn-outline-primary me-2">Login</button> --}}
        {{-- <button type="button" class="btn btn-primary">Sign-up</button> --}}
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">Create your PFP</a>
                        @endif
                    @endauth
                </div>
            @endif
      </div>
    </header>
  </div>

</main>


<script src="{{asset('/assets/dist/js/bootstrap.bundle.min.js')}}"></script>

      
</body>
</html>
