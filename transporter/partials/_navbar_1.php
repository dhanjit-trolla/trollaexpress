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
          
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>


        <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
           <ul class="nav">
             <li class="nav-item nav-profile">
              <a href="profile" class="nav-link">
               
                <div class="nav-profile-text d-flex flex-column">
               

                  <?php
                $users = $_SESSION['mobile'];
                $get_user = "SELECT * FROM reg WHERE mobile='$users'";
                $run_user = mysqli_query($con,$get_user);
                $row=mysqli_fetch_array($run_user);        
                $user_id = $row['user_id'];
                $name = $row['name'];
                $user = $row['user'];
                
                 ?>
              
              <span class="font-weight-bold mb-2"><?php echo $name ?></span>
               <span class="text-secondary text-small"><?php echo $user ?></span>
                
            

                </div>
              
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="index">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i><!-- home icon -->
              </a>
            </li>
             <li class="nav-item">
              
<div class="row">
                 <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                 
                   
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Username</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Remember me </label>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              </div>


            </li>
           </ul>
        </nav>
      
      