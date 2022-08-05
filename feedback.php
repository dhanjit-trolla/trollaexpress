<?php
include("includes/config.php");
?>

<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Contact</title>
    <link rel="shortcut icon" href="assets/img/mono.png">
    <link rel="stylesheet" href="nicepage.css?v=<?= $version ?>" media="screen">
<link rel="stylesheet" href="Contact.css?v=<?= $version ?>" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js?v=<?= $version ?>" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js?v=<?= $version ?>" defer=""></script>
     
<!--     <script class="u-script" type="text/javascript" src="jquery1.js" defer=""></script>
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
  <body data-home-page="home" data-home-page-title="Home" class="u-body u-overlap u-overlap-contrast u-overlap-transparent"><header class="u-align-center-sm u-align-center-xs u-black u-clearfix u-header u-header" id="sec-cf8a"><div class="u-clearfix u-sheet u-sheet-1">
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
    
    
<section class="u-clearfix u-image u-shading u-valign-middle-md u-section-1" id="carousel_2375" data-image-width="1280" data-image-height="853">
      <div class="u-list u-list-1">
          
        </div>
      </div>
      
      <div class="u-clearfix u-gutter-14 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
            <div class="u-align-left u-black u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-4">
                <h3 class="u-text u-text-body-alt-color u-text-default u-text-7">Contact info</h3>
                <div class="u-expanded-width-sm u-expanded-width-xs u-form">
                  <form action="" method="POST" id="myForm" class="" style="padding: 30px;" >
                    <div class="u-form-email u-form-group u-form-partition-factor-2">
                      <label for="email-319a" class="u-custom-font u-label u-text-body-alt-color u-label-1"></label>
                      <input type="email" placeholder="Email" id="email" name="email" class="u-border-1 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-input u-input-rectangle u-input-1" required="">
                    </div><br>
                    <div class="u-form-group u-form-name u-form-partition-factor-2">
                      <label for="name-319a" class="u-custom-font u-label u-text-body-alt-color u-label-2"></label>
                      <input type="text" placeholder="Your Name" id="name" name="name" onkeyup="numbersOnly(this)" class="u-border-1 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-input u-input-rectangle u-input-2" required=""><br>
                    </div>
                    <!-- <div class="u-form-group u-form-group-3">
                      <label for="text-5dc1" class="u-custom-font u-label u-text-body-alt-color u-label-3"></label>
                      <input type="text" placeholder="Subject" id="subject" name="subject" class="u-border-1 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-input u-input-rectangle u-input-3">
                    </div><br> -->
                    <div class="u-form-group u-form-message">
                      <label for="message-319a" class="u-custom-font u-label u-text-body-alt-color u-label-4"></label>
                      <textarea placeholder="Enter your feedback" rows="4" cols="50" id="feedback"  name="feedback" class="u-border-1 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-input u-input-rectangle u-input-4" required=""></textarea>
                    </div>
                    <div class="u-align-left u-form-group u-form-submit">
                      <!-- <a href="#" class="u-btn u-btn-submit u-button-style u-custom-font u-white u-btn-1">Submit</a>
                      <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true"> -->
                      <button type="submit" onclick="sendEmail()" value="submit" name="submit" class="u-btn u-btn-submit u-button-style u-custom-font u-white u-btn-1" wfd-invisible="true">SUBMIT</button>
                    </div>
                    <?php include("insert_feedback.php")?>
                  </form>
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
              <!-- =====================Scripting for contact php mailer Start============================== -->

          <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            // var subject = $("#subject");
            var subject = "Customer feedback"
            var message = $("#feedback");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(feedback)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: $subject,
                       feedback: feedback.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Feedback Sent Successfully, thank you for your valuable feedback");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>       
     

<!-- =====================Scripting for contact php mailer End============================== -->      
  </body>
</html>