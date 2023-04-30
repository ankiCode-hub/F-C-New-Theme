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
                <li class="active"><a href="profile"><i class="la la-user"></i>Profile</a></li>
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
                <div class="col-lg-6">
                    <!-- Form Widget -->
                    <div class="form-widget ls-widget">
                        <div class="widget-title"><h4><span class="icon flaticon-user"></span> Profile Details</h4></div>
                        <div class="widget-content">
                            <div class="uploading-outer">
                                <div class="uploadButton">
                                    <input class="uploadButton-input" type="file"  name="attachments[]" accept="image/*, application/pdf" id="upload" multiple/>
                                    <label class="uploadButton-button ripple-effect" for="upload">Upload Profile Photo</label>
                                    <span class="uploadButton-file-name"></span>
                                </div>
                            </div>

                            <!-- Comment Form -->
                            <div class="default-form">
                                <!--Comment Form-->
                                <form>
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" name="fname" placeholder="" required value="<?php echo $name;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" placeholder="" required value="<?php echo $phone;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" name="email" placeholder="" required value="<?php echo $email;?>">
                                    </div>
                                    <div class="form-group">
                                        <button class="theme-btn btn-style-two" type="submit" name="submit-form">Save Changes</button>
                                    </div> 
                                </form>
                            </div>
                            <!--End Comment Form -->
                        </div>
                    </div>

                    <!-- Form Widget -->
                    <div class="form-widget ls-widget">
                        <div class="widget-title"><h4><span class="icon flaticon-lock"></span> Change Password</h4></div>
                        <div class="widget-content">
                            <!-- Comment Form -->
                            <div class="default-form">
                                <!--Comment Form-->
                                <form>
                                   <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" name="fname" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm New Password</label>
                                        <input type="password" name="fname" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <button class="theme-btn btn-style-two" type="submit" name="submit-form">Save Changes</button>
                                    </div> 
                                </form>
                            </div>
                            <!--End Comment Form -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Form Widget -->
                    <div class="form-widget ls-widget">
                        <div class="widget-title"><h4><span class="icon flaticon-user"></span> Follow</h4></div>
                        <div class="widget-content">
                            <!-- Comment Form -->
                            <div class="default-form">
                                <!--Comment Form-->
                                <form>
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" name="fname" placeholder="" required value="<?php echo $twitter;?>">
                                        <span class="icon fab fa-twitter"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" name="fname" placeholder="" required value="<?php echo $facebook;?>">
                                        <span class="icon fab fa-facebook"></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" name="fname" placeholder="" required value="<?php echo $instagram;?>">
                                        <span class="icon fab fa-instagram"></span>
                                    </div>
                                
                                    <div class="form-group">
                                        <button class="theme-btn btn-style-two" type="submit" name="submit-form">Save Changes</button>
                                    </div> 
                                </form>
                            </div>
                            <!--End Comment Form -->
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
</body>

<!-- Mirrored from creativelayers.net/themes/listdo-html/dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Apr 2023 08:18:24 GMT -->
</html>


