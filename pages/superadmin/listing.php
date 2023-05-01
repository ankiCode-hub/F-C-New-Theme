<?php 

if(!defined('included')){
    header('Location: /FC/error-page');
    exit;
}
include "header.php";


?>

    <!-- Sidebar Backdrop -->
    <div class="sidebar-backdrop"></div>

    <!-- User Sidebar -->
    <div class="user-sidebar">
        <div class="sidebar-inner">
            <div class="sidebar-header">
            <div class="user-box">
                    <figure class="user-image"><img src="<?php echo $ProfileImage;?>" alt=""></figure>
                    <h4 class="user-name">Hello, <?php echo $name;?></h4>
                </div>
            </div>

            <ul class="navigation">
            <li><a href="dashboard"> <i class="la la-home"></i> Dashboard</a></li>
                <li><a href="profile"><i class="la la-user"></i>Profile</a></li>
                <li class="active"><a href="listing"><i class="la la-envelope"></i> Listing </a></li>
                <li><a href="user"><i class="la la-thumbs-o-up"></i>User</a></li>
                <li><a href="Catecories"><i class="la la-thumbs-o-up"></i>Catecories</a></li>
                <li><a href="Country"><i class="la la-thumbs-o-up"></i>Country</a></li>
                <li><a href="Ribbon"><i class="la la-thumbs-o-up"></i>Ribbon Tags</a></li>
                <li><a href="BlogCategory"><i class="la la-thumbs-o-up"></i>Blog Categories</a></li>
                <li><a href="Blog"><i class="la la-thumbs-o-up"></i>Blog</a></li>
                <li><a href="Plans"><i class="la la-thumbs-o-up"></i>Plans</a></li>
                <li><a href="Payments"><i class="la la-thumbs-o-up"></i>Payments</a></li>
                <li><a href="index"><i class="la la-sign-out"></i>Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- End User Sidebar -->
    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <!-- Listing Filters -->
            <div class="listing-filters">
                <!-- Filter List -->
                <ul class="filters-list">
                    <li><a href="#"><span class="icon flaticon-wireframe"></span> Published</a></li>
                    <li><a href="#"><span class="icon flaticon-stopwatch"></span> In Review</a></li>
                    <li class="active"><a href="#"><span class="icon flaticon-ticket-1"></span> Unpaid</a></li>
                    <li><a href="#"><span class="icon flaticon-hourglass"></span> Expired</a></li>
                    <li><a href="#"><span class="icon flaticon-lock"></span> Temporary Close</a></li>
                    <li><a href="#"><span class="icon flaticon-edit"></span> Editing</a></li>
                </ul>

                <div class="search-outer">
                    <div class="search-form">
                        <input type="text" name="search" placeholder="Search">
                        <span class="search-btn"><i class="flaticon-magnifying-glass"></i></span>
                    </div>

                    <div class="sort-by">
                        <select class="chosen-select">
                            <option>Sort By</option>
                            <option>Residential</option>
                            <option>Commercial</option>
                            <option>Industrial</option>
                            <option>Apartments</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- My Listings -->

            <div class="my-listing-widget ls-widget" id="features">
                <div class="widget-title"><h4><span class="icon flaticon-list"></span> My Listings</h4></div>
                <div class="widget-content" id="app">
                    <!-- Listing Block Seven -->

                    <div id="listing_div">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Dashboard -->

</div><!-- End Page Wrapper -->

<script src="pages/superadmin/js/listing.js"></script> 
<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/chosen.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.modal.min.js"></script>
<script src="js/jquery.hideseek.min.js"></script>
<script src="js/mmenu.polyfills.js"></script>
<script src="js/mmenu.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/listdo-html/dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Apr 2023 08:18:24 GMT -->
</html>


