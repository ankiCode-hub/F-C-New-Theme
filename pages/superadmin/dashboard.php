<?php 

if(!defined('included')){
    header('Location: /FC/error-page.html');
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
                <!-- <li class="active"><a href="dashboard"> <i class="la la-home"></i> Dashboard</a></li> -->
                <li class="active"><a href="dashboard"> <i class="la la-home"></i> Dashboard</a></li>
                <li><a href="profile"><i class="la la-user"></i>Profile</a></li>
                <li><a href="listing"><i class="la la-envelope"></i> Listing </a></li>
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
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="ui-item">
                        <div class="left">
                            <h4>19</h4>
                            <p>Published Listings</p>
                        </div>
                        <div class="right">
                            <i class="icon flaticon-computer"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="ui-item bg-purple">
                        <div class="left">
                            <h4>15</h4>
                            <p>Pending Listings</p>
                        </div>
                        <div class="right">
                            <i class="icon flaticon-school-material"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="ui-item bg-pink">
                        <div class="left">
                            <h4>22</h4>
                            <p>Visits this week</p>
                        </div>
                        <div class="right">
                            <i class="icon flaticon-tour-guide"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="ui-item bg-yellow">
                        <div class="left">
                            <h4>05</h4>
                            <p>Times Bookmarked</p>
                        </div>
                        <div class="right">
                            <i class="icon flaticon-heart"></i>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- End Dashboard -->

</div><!-- End Page Wrapper -->


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


<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="js/chart.min.js"></script>
<script>
    Chart.defaults.global.defaultFontFamily = "Nunito";
    Chart.defaults.global.defaultFontColor = '#888';
    Chart.defaults.global.defaultFontSize = '14';

    var ctx = document.getElementById('chart').getContext('2d');
    var ctx_2 = document.getElementById('chart2').getContext('2d');
    var ctx_3 = document.getElementById('chart3').getContext('2d');

</script>
</body>

<!-- Mirrored from creativelayers.net/themes/listdo-html/dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Apr 2023 08:18:24 GMT -->
</html>


