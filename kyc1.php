
<?php
session_start();
include("includes/config.php");
include("includes/functions.php"); 

if(!isset($_SESSION['mobile'])){
  header("location:login");
}
else{
?> 


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Know Your Customer </title>
    <link rel="shortcut icon" href="assets/img/mono.png">
    <link rel="stylesheet" href="nicepage.css?v=<?= $version ?>" media="screen">
<link rel="stylesheet" href="LoginSignup.css?v=<?= $version ?>" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js?v=<?= $version ?>" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js?v=<?= $version ?>" defer=""></script>
     
    <!-- <script class="u-script" type="text/javascript" src="jquery1.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage1.js" defer=""></script> -->
    
     <!-----google analytics--->
    
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3J3RSSWVSS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3J3RSSWVSS');
</script>
    
    
    <!-----google analytics--->


    <script>
function lettersOnly(input) {
    var regex = /[^a-zA-Z- ']/gi;
    input.value = input.value.replace(regex, "");
}
</script>

<script>
function numbersOnly(input) {
    var regex = /[^a-zA-Z0-9- ']/gi;
    input.value = input.value.replace(regex, "");
}
</script>
  
  </head>
  <body data-home-page="home" data-home-page-title="Home" class="u-body u-overlap u-overlap-contrast u-overlap-transparent">


    <!-- ---------------------- define all table head from database--------------- -->

<?php

            $users = $_SESSION['mobile'];
                $get_user = "SELECT * FROM reg WHERE mobile='$users'";
                $run_user = mysqli_query($con,$get_user);
                $row=mysqli_fetch_array($run_user);        
                $user_id = $row['user_id'];
                $user = $row['user'];
                $name = $row['name'];
                $email = $row['email'];
                $mobile =$row['mobile'];
                $password = $row['password'];
                $industry = $row['industry'];
                $route = $row['route'];
                $company_name = $row['company_name'];
                $gst_number = $row['gst_number'];
                $attch_file = $row['attch_file'];
                $pan_number = $row['pan_number'];
                $attch_file1 = $row['attch_file1'];
                $alt_num = $row['alt_num'];
                $gender = $row['gender'];
                $dob = $row['dob'];
                $material = $row['material'];
                $partner = $row['partner'];
                $add1 = $row['add1'];
                $add2 = $row['add2'];
                $state = $row['state'];
                $city = $row['city'];
                $postcode = $row['postcode'];
                $country = $row['country'];

                

            ?>

<!-- -------------------------------end of define---------------------------------- -->


    <header class="u-align-center-sm u-align-center-xs u-black u-clearfix u-header u-header" id="sec-cf8a"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="home" data-page-id="81999359" class="u-image u-logo u-image-1" data-image-width="2333" data-image-height="794" title="Home">
          <img src="images/logoforwebsite.svg" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-align-left u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse u-custom-font" style="font-size: 1rem; letter-spacing: 0px; font-family: CeraProLight; font-weight: 700;">
            <a class="u-button-style u-custom-active-color u-custom-border u-custom-border-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8a8f"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-8a8f" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-custom-color-1 u-text-white" href="about" style="padding: 10px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-custom-color-1 u-text-white" href="services" style="padding: 10px;">Services</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-custom-color-1 u-text-white" href="contact" style="padding: 10px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-custom-color-1 u-text-white" href="login" style="padding: 10px;">Login/Signup</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="about" style="padding: 10px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="services" style="padding: 10px;">Services</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="contact" style="padding: 10px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="login" style="padding: 10px;">Login/Signup</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
         <div class="u-hidden-xs u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/Trollaexpress-101391802454922"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c358"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-c358"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" data-type="LinkedIn" title="LinkedIn" href="https://www.linkedin.com/company/trollaexpress"><span class="u-icon u-social-icon u-social-linkedin u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-66f0"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-66f0"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" data-type="Email" title="Email" href="contact"><span class="u-icon u-social-email u-social-icon u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-919e"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-919e"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path id="path3864" fill="#FFFFFF" d="M27.2,28h57.6c4,0,7.2,3.2,7.2,7.2l0,0v42.7c0,3.9-3.2,7.2-7.2,7.2l0,0H27.2
  c-4,0-7.2-3.2-7.2-7.2V35.2C20,31.1,23.2,28,27.2,28 M56,52.9l28.8-17.8H27.2L56,52.9 M27.2,77.7h57.6V43.5L56,61.3L27.2,43.5V77.7z
  "></path></svg></span>
          </a>
        </div>
      </div></header> 
    
    
<section class="u-align-center u-clearfix u-image u-shading u-section-3" id="carousel_f0d2" data-image-width="1600" data-image-height="1067">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-tab-links-align-justify u-tabs u-tabs-1">
          <ul class="u-tab-list u-unstyled" role="tablist">
            <li class="u-tab-item" role="presentation">
              <a class=" u-active-white u-black u-border-6 u-border-active-custom-color-1 u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-custom-font u-hover-white u-tab-link u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true">Shipper</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="active u-active-white u-black u-border-6 u-border-active-custom-color-1 u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-custom-font u-hover-white u-tab-link u-tab-link-2" id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7" aria-selected="false">Transporter</a>
            </li>
          </ul>
          <div class="u-tab-content">
            <div class="u-container-style u-opacity u-opacity-80 u-tab-active u-tab-pane u-white u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
              <div class="u-container-layout u-container-layout-1">
                <img src="images/Screenshot3.png" alt="" class="u-image u-image-round u-radius-8 u-image-1" data-image-width="440" data-image-height="953">
                <div class="u-form u-form-1">
                  <form action="" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form-1" style="padding: 10px;" enctype="multipart/form-data">
                    <div class="u-form-group u-form-name">
                      <label for="name-5405" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Enter your Name" id="name-5405" name="name" onkeyup="lettersOnly(this)" style="border-color: transparent;" class="u-border-1 u-custom-font u-input u-input-rectangle u-radius-7 u-white u-input-1" required="">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-2">
                      <label for="text-60bf" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Enter your company name" id="text-60bf" name="company_name" style="border-color: transparent;" onkeyup="numbersOnly(this)" class="u-border-1 u-custom-font u-input u-input-rectangle u-radius-7 u-white u-input-2">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-6">
                      <!-- <label for="text-773e" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="" id="text-773e" name="text-4" class="u-border-1 u-border-custom-color-1 u-custom-font u-input u-input-rectangle u-radius-7 u-white u-input-6"> -->
                      <label for="select-3032" class="u-form-control-hidden u-label"></label>
                  <div class="u-form-select-wrapper">
                    <select id="select-3032" name="industry" style="border-color: transparent;" class="u-border-1 u-custom-font u-input u-input-rectangle u-radius-7 u-white u-input-1">
                      <option value="">Industry</option>
                          <option value="Aluminium/ Zinc Manufacturer">Aluminium/ Zinc Manufacturer</option>
                          <option value="Biocoal &amp; Pellets Manufacturer">Biocoal &amp; Pellets Manufacturer</option>
                          <option value="Brick Kiln/ Bhatta Owner">Brick Kiln/ Bhatta Owner</option>
                          <option value="Captive Power Plant">Captive Power Plant</option>
                          <option value="Cement Plant">Cement Plant</option>
                          <option value="Ceramics / Porcelain Manufacturer">Ceramics / Porcelain Manufacturer</option>
                          <option value="Chemicals Plant / Solvents">Chemicals Plant / Solvents</option>
                          <option value="Concrete Blocks Manufacturer">Concrete Blocks Manufacturer</option>
                          <option value="Distillery">Distillery</option>
                          <option value="Dyeing House / Textile Unit / Textile Printing Unit">Dyeing House / Textile Unit / Textile Printing Unit</option>
                          <option value="Ferro Alloys">Ferro Alloys</option>
                          <option value="Food Processing Unit">Food Processing Unit</option>
                          <option value="Forging Unit">Forging Unit</option>
                          <option value="Foundry/ Casting/Machine Tools">Foundry/ Casting/Machine Tools</option>
                          <option value="Glass Manufacturers">Glass Manufacturers</option>
                          <option value="Iron &amp; Steel Plant/ Rolling Mill">Iron &amp; Steel Plant/ Rolling Mill</option>
                          <option value="Lime Manufacturer / Lime Kiln">Lime Manufacturer / Lime Kiln</option>
                          <option value="Manufacturer of Pharmaceuticals">Manufacturer of Pharmaceuticals</option>
                          <option value="Mettalurgical Coke Manufacturer">Mettalurgical Coke Manufacturer</option>
                          <option value="Milk Processing Unit / Food Processing Unit">Milk Processing Unit / Food Processing Unit</option>
                          <option value="Misc">Misc</option>
                          <option value="Miscelleneous">Miscelleneous</option>
                          <option value="Paper Mill/ Paper Printing">Paper Mill/ Paper Printing</option>
                          <option value="Plaster of Paris (POP) Manufacturer">Plaster of Paris (POP) Manufacturer</option>
                          <option value="Plastic Product Manufacturer">Plastic Product Manufacturer</option>
                          <option value="Plywood/Laminates">Plywood/Laminates</option>
                          <option value="Refactory">Refactory</option>
                          <option value="Rubber/ Tyre Product manufacturer">Rubber/ Tyre Product manufacturer</option>
                          <option value="Scrrened Coal Manufaturer / Supplier">Scrrened Coal Manufaturer / Supplier</option>
                          <option value="Themocol/Corrugated box">Themocol/Corrugated box</option>
                          <option value="Trader/Importer">Trader/Importer</option>
                    </select>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                  </div>
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-3">
                      <label for="text-2027" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Enter your company GST number" id="text-2027" name="gst_number" onkeyup="numbersOnly(this)" style="border-color: transparent;" class="u-border-1 u-custom-font u-input u-input-rectangle u-radius-7 u-white u-input-3">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-4">
                      <label for="text-c21d" class="u-form-control-hidden u-label"></label>
                      <input type="file" placeholder="" id="text-c21d" name="attch_file" style="border-color: transparent;" class="u-border-1 u-custom-font u-input u-input-rectangle u-radius-7 u-white u-input-4">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-5">
                      <label for="text-f517" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Enter your company PAN number " id="text-f517" name="pan_number" onkeyup="numbersOnly(this)" style="border-color: transparent;" class="u-border-1 u-custom-font u-input u-input-rectangle u-radius-7 u-white u-input-5">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-6">
                      <label for="text-773e" class="u-form-control-hidden u-label"></label>
                      <input type="file" placeholder="" id="text-773e" name="attch_file1" style="border-color: transparent;" class="u-border-1 u-custom-font u-input u-input-rectangle u-radius-7 u-white u-input-6">
                    </div>
                    <div class="u-align-center u-form-group u-form-submit">
                      <!-- <a href="#" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-custom-font u-hover-white u-radius-7 u-text-hover-custom-color-1 u-btn-1">KYC Submit</a>
                      <input type="submit" value="submit" class="u-form-control-hidden"> -->
                       <button type="submit" value="submit" name="submit" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-custom-font u-hover-white u-radius-7 u-text-hover-custom-color-1 u-btn-1">KYC UPDATE</button>
                    </div>
                      <?php include("kyc_insert.php")?>
                  </form>
                </div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-opacity u-opacity-80 u-tab-pane u-white u-tab-pane-2" id="tab-14b7" role="tabpanel" aria-labelledby="link-tab-14b7">
              <div class="u-container-layout u-container-layout-2">
                <img src="images/Screenshot2.png" alt="" class="u-image u-image-round u-radius-8 u-image-2" data-image-width="445" data-image-height="940">
                <div class="u-form u-form-2">
                  <form action="" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form-1" style="padding: 10px;" enctype="multipart/form-data">
                    <div class="u-form-group u-form-name">
                      <label for="name-5405" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Enter your Name" id="name-5405" name="name" onkeyup="lettersOnly(this)" style="border-color: transparent;" class="u-border-1 u-custom-font u-input u-input-rectangle u-radius-7 u-white u-input-7" required="">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-9">
                      <label for="text-60bf" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Enter your company name" id="text-60bf" name="company_name" onkeyup="lettersOnly(this)" style="border-color: transparent;" class="u-border-1 u-custom-font u-input u-input-rectangle u-radius-7 u-white u-input-8">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-13">
                       <label for="select-3032" class="u-form-control-hidden u-label"></label>
                  <div class="u-form-select-wrapper">
                    <select id="select-3032" name="route" style="border-color: transparent;" class="u-border-1 u-custom-font u-input u-input-rectangle u-radius-7 u-white u-input-1">
                     
                           <option value="">Transporter Route</option>
                          <option value="Assam">Assam</option>
                          <option value="Andhra Pradesh">Andhra Pradesh</option>
                          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                          <option value="Bihar">Bihar</option>
                          <option value="Chhattisgarh">Chhattisgarh</option>
                          <option value="Goa">Goa</option>
                          <option value="Gujarat">Gujarat</option>
                          <option value="Haryana">Haryana</option>
                          <option value="Himachal Pradesh">Himachal Pradesh</option>
                          <option value="Jharkhand">Jharkhand</option>
                          <option value="Karnataka">Karnataka</option>
                          <option value="Kerala">Kerala</option>
                          <option value="Madhya Pradesh">Madhya Pradesh</option>
                          <option value="Maharashtra">Maharashtra</option>
                          <option value="Odisha">Odisha</option>
                          <option value="Punjab">Punjab</option>
                          <option value="West Bengal">West Bengal</option>
                          <option value="Rajasthan">Rajasthan</option>
                          <option value="Meghalaya">Meghalaya</option>
                          <option value="Mizoram">Mizoram</option>
                          <option value="Telangana">Telangana</option>
                          <option value="Tamil Nadu">Tamil Nadu</option>
                    </select>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                    </div>
                  </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-10">
                      <label for="text-2027" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Enter your company GST number" id="text-2027" name="gst_number" style="border-color: transparent;" onkeyup="numbersOnly(this)" class="u-border-1 u-custom-font u-input u-input-rectangle u-radius-7 u-white u-input-9">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-11">
                      <label for="text-c21d" class="u-form-control-hidden u-label"></label>
                      <input type="file" placeholder="" id="text-c21d" name="attch_file" style="border-color: transparent;" class="u-border-1 u-custom-font u-input u-input-rectangle u-radius-7 u-white u-input-10">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-12">
                      <label for="text-f517" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Enter your company PAN number" id="text-f517" name="pan_number" onkeyup="numbersOnly(this)" style="border-color: transparent;" class="u-border-1 u-custom-font u-input u-input-rectangle u-radius-7 u-white u-input-11">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-13">
                      <label for="text-773e" class="u-form-control-hidden u-label"></label>
                      <input type="file" placeholder="" id="text-773e" name="attch_file1" style="border-color: transparent;" class="u-border-1 u-custom-font u-input u-input-rectangle u-radius-7 u-white u-input-12">
                    </div>
                    <div class="u-align-center u-form-group u-form-submit">
                       <button type="submit" value="submit" name="submit" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-custom-font u-hover-white u-radius-7 u-text-hover-custom-color-1 u-btn-1">KYC UPDATE</button>
                    </div>
                      <?php include("kyc_insert.php")?>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-90" id="sec-e1ec"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-custom-font u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1"> © Copyright&nbsp;Stella Express And Logistics Private Limited. All Rights Reserved</p>
        <a href="home" data-page-id="81999359" class="u-image u-logo u-image-1" data-image-width="2333" data-image-height="794" title="Home">
          <img src="images/logoforwebsite.svg" class="u-logo-image u-logo-image-1">
        </a>
        <p class="u-align-center-xs u-align-left-md u-align-left-sm u-custom-font u-text u-text-default-lg u-text-default-xl u-text-2">STELLA EXPRESS and LOGISTICS PRIVATE LIMITED<br>
          <br>1st floor, Unique Plaza, near ISUZU Showroom<br>Tripura Road , Beltola, Guwahati,Assam<br>
          <br>+91 7099033359<br>
          <br>Contact@trollaexpress.com 
        </p>
        <ul class="u-align-left-md u-align-left-sm u-align-left-xs u-custom-font u-spacing-10 u-text u-text-3">
          <!-- <li>
            <a href="about" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1">About Us</a>
          </li>
          <li>
            <a href="services" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-2">Services</a>
          </li>
          <li>
            <a href="contact" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-3">Contact us</a>
          </li> -->
            <li>
            <a href="feedback" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-3">Feedback</a>
          </li>
          <li>
             <a href="terms-and-conditions" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-3"> Terms and condition</a>
           
          </li>
          <li>
             <a href="privacy-policy" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-3">Privacy and Policy</a>
            </li>
            <li>
             <a href="refunds-and-cancellation-policy" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-3">Refunds & cancellation policy</a>
          </li>
    
        </ul>
        <ul class="u-spacing-10 u-text u-text-4">
       
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-custom-font u-hover-none u-none u-text-body-alt-color u-btn-4" href="services">
            <li>Fleet management</li>
            <li>Insurance Services</li>
            <li>Inbuilt Tracking</li>
            <li>Earning Management</li>
          </a>
        </ul>
      </div></footer>
    
  </body>
</html>
<?php
}
?>