<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="favicon-A.ico">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">



    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">


    <meta name="theme-color" content="#fafafa">
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg">
            <div class="container px-5">
                <a class="navbar-brand text-dark" href="index.html"><span class="logo">CECCHI.</span></a>
                <a href="#sidebar" data-bs-toggle="offcanvas" role="button" aria-controls="sidebar"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/Menu burger.svg"></a>
            </div>
        </nav>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebar-label">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title logo" id="offcanvasNavbarLabel">CECCHI.</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <ul>
                <li>Works</li>
                <li>Who i am</li>
                <li>Hire me</li>
            </ul>
        </div>
        </div>
        </nav>