
<?php
if (!isset($_SESSION['email'])) {
    header('Location: /FC/');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from creativelayers.net/themes/listdo-html/dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Apr 2023 08:18:23 GMT -->
<head>
<meta charset="utf-8">
<title>Listdo | Just another HTML Template | Dashboard </title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>

<body>

<div class="page-wrapper dashboard">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
    <header class="main-header alternate fixed">
        
        <!-- Main box -->
        <div class="main-box h-5">
            <div class="logo-box">
                <div class="logo"><a href="index"><img class="h-12 w-12 border-2 rounded-full" src="uploads/26/logo.png" alt="" title=""></a></div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer">
                <nav class="nav main-menu">
                    <ul class="navigation" id="navbar">                        
                        <li><a href="contact">Contact</a></li>
                        <li class="mm-add-listing"><a href="add-listing" class="theme-btn btn-style-three"><span class="flaticon-plus-symbol"></span>Add Listing</a></li>
                    </ul>
                </nav>
                <!-- Main Menu End-->

                <div class="outer-box">
                    <!-- Add Listing -->
                    <a href="add-listing" class="add-listing"> <span class="flaticon-plus-symbol"></span> Add Listing</a>

                    <!-- Cart btn -->
                    <!-- Dashboard Option -->
                    <div class="dropdown dashboard-option">
                        <a class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false"> 
                            <img  src="<?php echo $ProfileImage;?>" alt="avatar" class="thumb"> 
                            <span class="name">Ali Tufan</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item active" href="dashboard"> <i class="la la-home"></i> Dashboard</a>
                            <a class="dropdown-item" href="profile"><i class="la la-user"></i>Profile</a>
                            <a class="dropdown-item" href="messages"><i class="la la-envelope"></i> Messages </a>
                            <a class="dropdown-item" href="favorites"><i class="la la-thumbs-o-up"></i>Favorites</a>
                            <a class="dropdown-item" href="index"><i class="la la-sign-out"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="index"><img src="images/logo.png" alt="" title=""></a></div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">

                <div class="outer-box">
                    <!-- Search Btn -->
                    <div class="search-box">
                        <button class="search-btn mobile-search-btn"><i class="flaticon-magnifying-glass"></i></button>
                    </div>

                    <!-- Cart btn -->
                    <div class="cart-btn">
                        <a href="shopping-cart"><i class="icon flaticon-shopping-bag"></i> <span class="count">2</span></a>
                    </div>

                    <button id="toggle-user-sidebar"><img src="images/resource/user-img.jpg" alt="avatar" class="thumb"></button>

                    <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="fa fa-bars"></span></a>
                </div>
            </div>
        </div>

        <!-- Mobile Nav -->
        <div id="nav-mobile"></div>

        <!-- Header Search -->
        <div class="search-popup">
            <span class="search-back-drop"></span>
            
            <div class="search-inner">
                <button class="close-search"><span class="fa fa-times"></span></button>
                <form method="post" action="https://creativelayers.net/themes/listdo-html/blog-showcase">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Search..." required="">
                        <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Header Search -->

    </header>
    <!--End Main Header -->