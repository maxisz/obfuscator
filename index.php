<?php require 'src/Obfuscator.php';

?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SoftLand - Software and SaaS Landing Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-alpha-1.min.css">
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/upload.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- ========================= header start ========================= -->
    <header class="header">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img class="logo" src="assets/img/logo/logo.svg" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                  
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#subscribe">feartures</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar collapse -->
                        </nav>
                        <!-- navbar -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- navbar area -->

    </header>
    <!-- ========================= header end ========================= -->
      <?php
       if(isset($_POST['encrypt'])){

           $sData= $_POST['code'];
           if($sData==''){
               $message = '<div class="wrapper">
               <div class="alert col-md-4 alert-danger">
                                       <strong>Error!</strong> Please Enter Your Code.
                                   </div>
               </div>';}else{
           $sData = str_replace(array('<?php', '<?', '?>'), '', $sData); // We strip the open/close PHP tags
           $sObfusationData = new Obfuscator($sData, 'Class/Code NAME');
           $encrypted = '<?php '.$sObfusationData;
        //    echo $encrypted;
                        }
       }

        ?>
    <!-- ========================= slider-section start ========================= -->
    <section id="home" class="hero-section img-bg" style="background-image: url(assets/img/hero/hero-bg.svg)">
    <?php if(isset($message)){echo $message;}?>
    
    <form action="" method="post">
        
        <div class="wrapper">
          
            <div class="cmd">
                <div class="title-bar"><?php if(isset($encrypted)){echo "Now Select everything in the box";}else{ echo "Encrypt My PhP ~DEMO"; }; ?></div>

                <div class="tool-bar">
                    <ul>
                        <li><a href="#">file</a></li>
                        <li><a href="#">edit</a></li>
                        <li><a href="#" id="link"  >copy</a></li>
                    </ul>
                </div>

                <textarea name="code" id="code" class="textarea" placeholder="paste Your code ....." ><?php if(isset($encrypted)){echo $encrypted;}; ?></textarea>
            </div>
            
        </div>
         <div class="justify-content-center">
            <div class="wrapper col-xl-12  pl-150">
                <div class="form-group">
                <button name="encrypt" type="submit" class="theme-btn">Encrypt</button>
                </div>
            </div>
        </form>
    

    </section>
    <!-- ========================= slider-section end ========================= -->
    <!-- ========================= subscribe-section start ========================= -->

    <!-- ========================= subscribe-section end ========================= -->

    <section id="process"></section>




    <!-- ========================= footer start ========================= -->
    <footer class="footer pt-150 gray-bg">
        <img src="assets/img/shape/footer-bg.svg" alt="" class="footer-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer-links text-center">
                        <a href="index.html" class="logo"><img src="assets/img/logo/logo-2.svg" alt=""> </a>
                        <br>
                        <br>
                        <br>
                        <div class="footer-social-links">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-facebook-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-twitter-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-linkedin-original"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-instagram-original"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <nav class="footer-menu">
                            <ul>
                             
                                <li><a href="#team">facebook</a></li>
                                <li><a href="#blog">Instagram</a></li>
                                <li><a href="#contact">Whatsapp</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="copyright-area text-center">
                <p class="mb-0">Designed and Developed by <a href="https://maxisz.is-great.org" rel="nofollow" target="_blank">Maxisz</a></p>
            </div>
        </div>
    </footer>
    <!-- ========================= footer end ========================= -->


    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.bundle-5.0.0.alpha-1-min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/upload.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<script type="text/javascript">
    $('a#link').click(function(){ 
        /* ... action ... */
        var copyText = document.getElementById("code");
       copyText.select();
       copyText.setSelectionRange(0, 99999);
       navigator.clipboard.writeText(copyText.value);
       alert('copied');
        })
</script>

</body>

</html>