<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index"><img src="../assets/img/logoweb.svg" alt="logo" /></a>
          <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a> -->
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
           <!--  <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form> -->
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="profile" data-toggle="dropdown" aria-expanded="false">
               <!--  <div class="nav-profile-img">
                  <img src="assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div> -->
                <div class="">
                 <?php
                $users = $_SESSION['mobile'];
                $get_user = "SELECT * FROM reg WHERE mobile='$users'";
                $run_user = mysqli_query($con,$get_user);
                $row=mysqli_fetch_array($run_user);        
                $user_id = $row['user_id'];
                $name = $row['name'];
                $user = $row['user'];
                
                 ?><!-- 
            <span class="prfil-img"><img src="profile/<?php echo $admin_photo ?>" width="50px" height="50px;" alt=""> </span> -->
            <!-- <div class="user-name"> -->
              <div class="nav-profile-text">
              <p class="mb-1 text-black"><?php echo $name ?></p>
              <!-- <span><?php echo $admin_role ?></span> -->
            </div>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="profile">
                  <i class="mdi mdi-cached mr-2 text-success"></i> Profile </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../logout">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
           <!--  <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li> -->

<!-- =========================================================================================================== -->

            <!-- <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li> -->

           <!--  <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li> -->
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="profile" class="nav-link">
                <!-- <div class="nav-profile-image">
                  <img src="assets/images/faces/" alt="profile">
                  <span class="login-status online"></span>
                  
                </div> -->
                <div class="nav-profile-text d-flex flex-column">
                  <!-- <span class="font-weight-bold mb-2">Maroof</span>
                  <span class="text-secondary text-small">Project Manager</span> -->

                  <?php
                $users = $_SESSION['mobile'];
                $get_user = "SELECT * FROM reg WHERE mobile='$users'";
                $run_user = mysqli_query($con,$get_user);
                $row=mysqli_fetch_array($run_user);        
                $user_id = $row['user_id'];
                $name = $row['name'];
                $user = $row['user'];
                
                 ?><!-- 
            <span class="prfil-img"><img src="profile/<?php echo $admin_photo ?>" width="50px" height="50px;" alt=""> </span> -->
            <!-- <div class="user-name"> -->
              
              <span class="font-weight-bold mb-2"><?php echo $name ?></span>
               <span class="text-secondary text-small"><?php echo $user ?></span>
                
            

                </div>
                <!-- <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> -->
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i><!-- home icon -->
              </a>
            </li>
           <!--  <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="myLoads">
                <span class="menu-title">New Loads</span>
                <i class="mdi mdi-book-multiple menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quotedLoads">
                <span class="menu-title">Quoted Loads</span>
                <i class="mdi mdi-comment menu-icon"></i>
              </a>
            </li>
          <!--   <li class="nav-item">
              <a class="nav-link" href="pendingLoads">
                <span class="menu-title">Pending Loads</span>
                <i class="mdi mdi-account-clock menu-icon"></i>
              </a>
            </li> -->
             <li class="nav-item">
              <a class="nav-link" href="confirmedLoads">
                <span class="menu-title">Confirmed Loads</span>
                <i class="mdi mdi-account-clock menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="completedLoads">
                <span class="menu-title">Completed Loads</span>
                <i class="mdi mdi-calendar-check menu-icon"></i>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="transporter">
                <span class="menu-title">Transporters</span>
                <i class="mdi mdi-account-card-details menu-icon"></i>
              </a>
            </li> -->
           <!--  <li class="nav-item">
              <a class="nav-link" href="shipper">
                <span class="menu-title">Shipper</span>
                <i class="mdi mdi-account-card-details menu-icon"></i>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li> -->
            <li class="nav-item sidebar-actions">
              <span class="nav-link"> 
                <!-- <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">Projects</h6>
                </div> -->
             <!--   <a class="nav-link" href="createLoads"><button class="btn btn-block btn-lg btn-gradient-primary mt-4" >+ Add Quote</button> </a> -->
                <!-- <div class="mt-4">
                  <div class="border-bottom">
                    <p class="text-secondary">Categories</p>
                  </div>
                  <ul class="gradient-bullet-list mt-4">
                    <li>Free</li>
                    <li>Pro</li>
                  </ul>
                </div> -->
               </span>
            </li>
          </ul>
        </nav>
        <!-- partial -->