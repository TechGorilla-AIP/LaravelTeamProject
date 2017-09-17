<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Administrator panel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        Administrator Panel
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                    	<ul class="nav navbar-nav">
					    	<li><a href="/admin/dash">Administrator</a></li>
					    </ul>
					    <ul class="nav navbar-nav">
					    	<li><a href="/admin/articles">Manage posts</a></li>
					    </ul>
					    <ul class="nav navbar-nav">
					    	<li><a href="/admin/types">Manage categories</a></li>
					    </ul>
					    <ul class="nav navbar-nav">
					    	<li><a href="/admin/users">Manage subscribers</a></li>
					    </ul>
					    <ul class="nav navbar-nav">
					    	<li><a href="/admin/admins">Admin management</a></li>
					    </ul>
					      <ul class="nav navbar-nav">
					    	<li><a href="/admin/announcements">Admin Info</a></li>
					    </ul>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->   
                        <?php if(empty(auth('admin')->user()->name)): ?>
                            <li><a href="<?php echo e(route('admin.login')); ?>">Login</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(auth('admin')->user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(route('admin.logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form-admin').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form-admin" action="<?php echo e(route('admin.logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

</body>
</html>
