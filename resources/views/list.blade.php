<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TechGorilla - Community</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional fonts for this theme -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this theme -->
    <link href="{{ asset('css/clean-blog.min.css') }}" rel="stylesheet">

    <!-- Temporary navbar container fix until Bootstrap 4 is patched -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="{{ url('/') }}">TechGorilla</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ url('index/work') }}">Gorilla's Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ url('index/share') }}">Share</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ url('index/about') }}">About</a>
                    </li>
                    
                
                    
                 	 @if (Route::has('login'))
		                    @if (Auth::check())
		                        <li class="nav-item"><a class="nav-link page-scroll" href="{{ url('/home') }}">HomeCenter</a></li>
		                           <li class="nav-item">
                                        <a class="nav-link page-scroll" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
		                    @else
		    					<li class="nav-item"><a class="nav-link page-scroll" href="{{ url('/login') }}">Login</a></li>
								<li class="nav-item"><a class="nav-link page-scroll" href="{{ url('/register') }}" class="call-to-action">Get Started</a></li>
		                    @endif
	            		@endif
                </ul>
            </div>
        </div>
    </nav>
 

    <!-- Page Header -->
    <header class="intro-header" style="background-image: url('{{ asset('img/home-bg.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="site-heading">
                        <h1>Share your PC</h1>
                        <span class="subheading">Get your free remaster service here</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
            
  
 @foreach ($articles as $article)
                
                <div class="post-preview">
                    <a href="{{ URL('article/show/'.$article->id) }}">
                        <h2 class="post-title">
                            {{ $article->title }}
                        </h2>
                    </a>
                    <p class="post-meta">Posted by {{ App\User::find($article->user_id)->name }}  on {{ $article->created_at }}</p>
                </div>
                <hr>
 @endforeach
              

     

                <!-- Pager -->
                <div class="clearfix">
                   <?php echo $articles->render(); ?>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; TechGorilla - Team Gorilla UTS-AIP 2017. </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Version 3.1.1 -->
    <script src="{{ asset('lib/jquery/jquery.js') }}"></script>

    <!-- Tether -->
    <script src="{{ asset('lib/tether/tether.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ asset('js/clean-blog.min.js') }}"></script> 

</body>

</html>
