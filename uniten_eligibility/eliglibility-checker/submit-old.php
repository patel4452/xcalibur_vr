<?php 

//email template
            
      $msg    = '<h3>Thank you! The result are</h3><h1>You are '.$_POST['eleigibileResult'].'</h1><h3>Our counsellor will be in touch with you soon.</h3>';
      
      
      require_once 'mandrill/src/Mandrill.php';
        $mandrill           =   new Mandrill('BdToF9imlAPbwEG1P8UqSg');
        $from_name          =   'Open University Malaysia';
        $emailId = $_POST['studentEmail'];
         // $emailId = clean_text($str_email);
      
      $message = array(
            'subject'       =>  "Thank you for your interest in Open University Malaysia",
            'html'          =>  $msg, // or just use 'html' to support HTMl markup
            'from_email'    =>  'enquiries@oum.edu.my', //'info@educliff.com'
            'from_name'     =>  'Open University Malaysia',//$collegeName['collegeName'], //optional
            'to'            =>  array(
                              array('email' =>trim($emailId),'name' =>'','type' => 'to'),
                        ),
      );
      $mandrill->messages->send($message)
      
   
?>
<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="format-detection" content="telephone=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <meta name="description" content="MSU is Malaysia's leading transformative global university based in Shah Alam, Selangor. We offer up to 170 programs and have been rated as a 5 Star university by QS World University Ranking ">
      <meta name="keywords" content="MSU, Management Science University">
      <meta name="robots" content="noindex,nofollow">
      <link rel="canonical" href="https://uniten-coe-eligibility.pagedemo.co">
      <link rel="shortcut icon" href="images/59051542-0-MSU-logo.png" type="image/ico">
      <title>MSU - Management Science University</title>
      <meta property="og:locale" content="en_US">
      <meta property="og:type" content="article">
      <meta property="og:title" content>
      <meta property="og:description" content>
      <meta property="og:site_name" content>
      <meta property="og:url" content="https://uniten-coe-eligibility.pagedemo.co">
      <link rel="preload" as="script" href="//g.fastcdn.co/js/utils.4307b753f6f392018c32.js">
      <link rel="preload" as="script" href="//g.fastcdn.co/js/Cradle.4dac59f2328b0387640d.js">
      <link rel="preload" as="script" href="//g.fastcdn.co/js/LazyImage.b311ea858a228d7bc9b2.js">
      <link rel="preload" as="script" href="//g.fastcdn.co/js/Form.5384e09c582c919e5a8f.js">
      <link rel="preconnect dns-prefetch" href="https://fonts.gstatic.com" crossorigin>
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/jquery.steps.css">
      <link type="text/css" rel="stylesheet" href="css/css.css">
      <style type="text/css" media="screen">
         body{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;margin:0;width:100%;font-family:Montserrat;font-weight:400;background:rgb(255,255,255);}a{text-decoration:none;color:inherit;cursor:pointer;}a:not(.btn):hover{text-decoration:underline;}input,select,textarea,p,h1,h2,h3,h4,h5,h6{margin:0;font-size:inherit;font-weight:inherit;}main{overflow:hidden;}u > span{text-decoration:inherit;}ol,ul{padding-left:2.5rem;margin:.625rem 0;}p{word-wrap:break-word;}h1 > span,h2 > span,h3 > span,h4 > span,h5 > span,h6 > span{display:block;word-wrap:break-word;}iframe{border:0;}*{box-sizing:border-box;}:root.js-text-scaling{--mobile-font-size:4vw;--default-font-size:16px;}.item-absolute{position:absolute;}.item-relative{position:relative;}.item-block{display:block;height:100%;width:100%;}.item-cover{z-index:1000030;}.item-breakword{word-wrap:break-word;}.item-content-box{box-sizing:content-box;}.hidden{display:none;}.clearfix{clear:both;}sup{margin-left:0.1rem;line-height:0;}@keyframes slide-down{from{opacity:0;transform:translateY(-50px);}}@keyframes fade-in{from{opacity:0;}}@supports (-webkit-overflow-scrolling:touch){@media (-webkit-min-device-pixel-ratio:2), (min-resolution:192dpi){.image[src$=".svg"]{width:calc(100% + 1px);}}}.show-for-sr{border:0 !important;clip:rect(1px,1px,1px,1px) !important;-webkit-clip-path:inset(50%) !important;clip-path:inset(50%) !important;height:1px !important;margin:-1px !important;overflow:hidden !important;padding:0 !important;position:absolute !important;width:1px !important;white-space:nowrap !important;}.headline{font-family:Montserrat;font-weight:700;}.section-fit{max-width:400px;}:root{--section-relative-margin:0 auto;}.section-relative{position:relative;margin:0 auto;}.js-text-scaling .section-relative{margin:var(--section-relative-margin);}.section-inner{height:100%;}#page-block-sdywy8nf21n{height:69.6875rem;max-width:100%;}#page-block-sdywy8nf21n .section-holder-border{border:0;}#page-block-sdywy8nf21n .section-block{background:rgb(255,255,255);height:69.6875rem;}#page-block-sdywy8nf21n .section-holder-overlay{display:none;}#element-1148{top:0;left:6rem;height:8.3125rem;width:13.0625rem;z-index:10;}#element-1148 .cropped{background:url(images/59356752-0-Universiti-Tenaga-Na.png) 0 0 / 12.9375rem 8.8125rem;}#element-2580{top:11.875rem;left:1.25rem;height:4.375rem;width:22.5rem;z-index:15;color:#37465A;font-size:1.6099rem;line-height:2.275rem;text-align:center;}#element-2580 .x_47b745f5{text-align:center;line-height:2.25rem;font-size:1.6099rem;}#element-2580 .x_a269ab78{color:#37465A;}#element-2593{top:10.9375rem;left:1.25rem;height:31.4375rem;width:22.5rem;z-index:11;}.circle{border-radius:50%;}.shape{height:inherit;}.line-horizontal{height:.625rem;}.line-vertical{height:100%;margin-right:.625rem;}[class*='line-']{box-sizing:content-box;}#element-2593 .shape{border:0;background:rgb(240,243,245);}#element-2588{top:44.375rem;left:0;height:25.3125rem;width:25rem;z-index:13;}#element-2588 .cropped{background:url(images/59546956-0-5-2.jpg) -0.0625rem -0.0625rem / 25.125rem 25.1875rem;}#element-2591{top:15.5625rem;left:2.125rem;height:1.875rem;width:20.625rem;z-index:14;color:#37465A;font-size:1.6099rem;line-height:1.95rem;text-align:center;}#element-2591 .x_64e665fe{text-align:center;line-height:1.9375rem;font-size:1.6099rem;}#element-2591 .x_a269ab78{color:#37465A;}#element-2585{top:17.1875rem;left:2.1875rem;height:9rem;width:20.625rem;z-index:12;}.btn{cursor:pointer;text-align:center;transition:border .5s;width:100%;border:0;white-space:normal;display:table-cell;vertical-align:middle;padding:0;line-height:120%;}.btn-shadow{box-shadow:0 1px 3px rgba(1,1,1,0.5);}.lightbox{display:none;position:fixed;width:100%;height:100%;top:0;}.lightbox-dim{background:rgba(0,0,0,0.85);height:100%;animation:fade-in .5s ease-in-out;overflow-x:hidden;display:flex;align-items:center;padding:30px 0;}.lightbox-content{background-color:#fefefe;border-radius:3px;position:relative;margin:auto;animation:slide-down .5s ease-in-out;}.lightbox-opened{display:block;}.lightbox-close{width:26px;right:0;top:-10px;cursor:pointer;}.lightbox-close-btn{padding:0;border:none;background:none;}.lightbox-btn-svg{display:block;}.lightbox-close-icon{fill:#fff;}.notification-text{font-size:1.5rem;color:#fff;text-align:center;width:100%;}.modal-on{overflow:hidden;}.form{font-size:1.25rem;}fieldset{margin:0;padding:0;border:0;min-width:0;}.form-input{color:transparent;background-color:transparent;border:1px solid transparent;border-radius:3px;font-family:inherit;width:100%;height:3.5rem;margin:0.5rem 0;padding:0.5rem 0.625rem 0.5625rem;}.form-input::placeholder{opacity:1;color:transparent;}.form-textarea{display:inline-block;vertical-align:top;}.form-select{background:url("images/select-arrow-drop-down.png") no-repeat right;-webkit-appearance:none;-moz-appearance:none;color:transparent;}.form-label{display:inline-block;color:transparent;}.form-label-title{display:block;line-height:1.1;width:100%;padding:0.75rem 0 0.5625rem;margin:0.5rem 0 0.125rem;}.form-multiple-label:empty{display:block;height:0.8rem;margin-top:.375rem;}.form-label-outside{margin:0.3125rem 0 0;}.form-multiple-input{position:absolute;opacity:0;}.form-multiple-label{position:relative;padding-top:0.75rem;line-height:1.05;margin-left:1.5625rem;}.form-multiple-label:before{content:"";display:inline-block;box-sizing:inherit;width:1rem;height:1rem;background-color:#fff;border-radius:0.25rem;border:1px solid #8195a8;margin-right:0.5rem;vertical-align:-2px;position:absolute;left:-1.5625rem;}.form-checkbox-label:after{content:"";width:0.25rem;height:0.5rem;position:absolute;top:0.8rem;left:-1.25rem;transform:rotate(45deg);border-right:0.1875rem solid;border-bottom:0.1875rem solid;color:#fff;}.form-radio-label:before{border-radius:50%;}.form-multiple-input:focus + .form-multiple-label:before{border:2px solid #308dfc;}.form-multiple-input:checked + .form-radio-label:before{border:0.3125rem solid #308dfc;}.form-multiple-input:checked + .form-checkbox-label:before{background-color:#308dfc;border:0;}.form-btn{-webkit-appearance:none;-moz-appearance:none;background-color:transparent;border:0;cursor:pointer;min-height:100%;}.form-input-inner-shadow{box-shadow:inset 0 1px 3px rgba(0,0,0,0.28);}body#landing-page .user-invalid-label{color:#e85f54;}body#landing-page .user-invalid{border-color:#e85f54;}.form-messagebox{transform:translate(0.4375rem,-0.4375rem);}.form-messagebox:before{content:"";position:absolute;display:block;width:0.375rem;height:0.375rem;transform:rotate(45deg);background-color:#e85f54;top:-0.1875rem;left:25%;}.form-messagebox-contents{font-size:0.875rem;font-weight:500;color:#fff;background-color:#e85f54;padding:0.4375rem 0.9375rem;max-width:250px;word-wrap:break-word;margin:auto;}.form-messagebox-top{transform:translate(0,-1rem);}.form-messagebox-top:before{bottom:-0.1875rem;top:auto;}#element-2585 .btn.btn-effect3d:active{box-shadow:none;}#element-2585 .btn:hover{background:#000000;color:#FFFFFF;}#element-2585 .btn{background:#F00000;color:#FFFFFF;font-size:1.1146rem;font-family:Arial;font-weight:700;height:3.125rem;width:20.625rem;border-radius:41px;}#element-2585 .form-label{color:#5E6C7B;}#element-2585 ::placeholder{color:#5E6C7B;}#element-2585 .form-input{color:#000000;background-color:#FFFFFF;border-color:#A3BAC6;}#element-2585 .user-invalid{border-color:#E12627;}#element-2585 input::placeholder,#element-2585 .form-label-inside{color:#5E6C7B;}#element-2585 select.valid{color:#000000;}#element-2585 .form-btn-geometry{top:21.3125rem;left:0;height:3.125rem;width:20.625rem;z-index:12;}#element-2592{top:26.875rem;left:2.1875rem;height:1.5625rem;width:5.625rem;z-index:16;color:#37465A;font-size:0.9907rem;line-height:1.6rem;text-align:left;}#element-2592 .x_8b9ce48e{text-align:left;line-height:1.625rem;font-size:0.9907rem;}#element-2592 .x_a269ab78{color:#37465A;}#page-block-03easlvuo4sb{height:6.25rem;max-width:100%;}#page-block-03easlvuo4sb .section-holder-border{border:0;}#page-block-03easlvuo4sb .section-block{background:rgb(251,251,251);height:6.25rem;}#page-block-03easlvuo4sb .section-holder-overlay{display:none;}#element-33{top:2.5rem;left:1.5rem;height:1.3125rem;width:21.875rem;z-index:9;color:#37465A;font-size:0.8669rem;line-height:1.4rem;text-align:center;}#element-33 .x_938e8cfc{text-align:center;line-height:1.375rem;font-size:0.8669rem;}@media screen and (max-width:400px){:root{font-size:4vw;}:root.js-text-scaling{font-size:var(--mobile-font-size);}}@media screen and (min-width:401px) and (max-width:767px){:root{font-size:16px;}:root.js-text-scaling{font-size:var(--default-font-size);}}@media screen and (min-width:768px) and (max-width:1200px){:root{font-size:1.33vw;}}@media screen and (max-width:767px){.hidden-mobile{display:none;}}@media screen and (min-width:768px){.section-fit{max-width:60rem;}#page-block-sdywy8nf21n{height:40.8125rem;max-width:100%;}#page-block-sdywy8nf21n .section-holder-border{border:0;}#page-block-sdywy8nf21n .section-block{background:rgb(255,255,255);height:40.8125rem;}#page-block-sdywy8nf21n .section-holder-overlay{display:none;}#element-1148{top:0;left:46.5625rem;height:8.4375rem;width:13.4375rem;z-index:10;}#element-1148 .cropped{background:url(images/59356752-0-Universiti-Tenaga-Na.png) 0 0 / 13.3125rem 9rem;}#element-2580{top:2.25rem;left:1.3125rem;height:5.625rem;width:32.75rem;z-index:15;color:#37465A;font-size:2.3529rem;line-height:2.85rem;text-align:center;}#element-2580 .x_b614627d{text-align:center;line-height:2.875rem;font-size:2.3529rem;}#element-2580 .x_a269ab78{color:#37465A;}#element-2593{top:11.1875rem;left:1.3125rem;height:29.625rem;width:57.4375rem;z-index:11;}#element-2593 .shape{border:0;background:rgb(240,243,245);}#element-2588{top:11.1875rem;left:1.3125rem;height:29.625rem;width:29.3125rem;z-index:13;}#element-2588 .cropped{background:url(images/59546956-0-5-2.jpg) -0.0625rem -0.0625rem / 29.4375rem 29.5625rem;}#element-2591{top:13.5625rem;left:34.5rem;height:1.875rem;width:20.625rem;z-index:14;color:#37465A;font-size:1.6099rem;line-height:1.95rem;text-align:left;}#element-2591 .x_56c6f2d0{text-align:left;line-height:1.9375rem;font-size:1.6099rem;}#element-2591 .x_a269ab78{color:#37465A;}#element-2585{top:16.6875rem;left:34.5625rem;height:7.375rem;width:20.625rem;z-index:12;}.notification-text{font-size:3.125rem;}.form{font-size:0.8125rem;}.form-input{font-size:0.9375rem;height:2.4875rem;}.form-textarea{height:6.25rem;}.form-label-title{margin:0.3125rem 0 0.5rem;font-size:0.89375rem;padding:0;line-height:1.1875rem;}.form-multiple-label{margin-bottom:0.625rem;font-size:0.9375rem;line-height:1.1875rem;padding:0;}.form-multiple-label:empty{display:inline;}.form-checkbox-label:after{top:0.1rem;}.form-label-outside{margin-bottom:0;}.form-multiple-label:before{transition:background-color 0.1s,border 0.1s;}.form-radio-label:hover:before{border:0.3125rem solid #9bc7fd;}.form-messagebox{transform:translate(0);display:flex;}.form-messagebox-left{transform:translateX(-100%);left:-0.625rem;}.form-messagebox-right{transform:translateX(100%);right:-0.625rem;}.form-messagebox:before{top:calc(50% - 0.1875rem);left:auto;}.form-messagebox-left:before{right:-0.1875rem;}.form-messagebox-right:before{left:-0.1875rem;}#element-2585 .btn.btn-effect3d:active{box-shadow:none;}#element-2585 .btn:hover{background:#000000;color:#FFFFFF;}#element-2585 .btn{background:#F00000;color:#FFFFFF;font-size:1.1146rem;font-family:Arial;font-weight:700;height:3.125rem;width:20.9375rem;border-radius:41px;}#element-2585 .form-label{color:#5E6C7B;}#element-2585 ::placeholder{color:#5E6C7B;}#element-2585 .form-input{color:#000000;background-color:#FFFFFF;border-color:#A3BAC6;}#element-2585 .user-invalid{border-color:#E12627;}#element-2585 input::placeholder,#element-2585 .form-label-inside{color:#5E6C7B;}#element-2585 select.valid{color:#000000;}#element-2585 .form-btn-geometry{top:19.25rem;left:-0.125rem;height:3.125rem;width:20.9375rem;z-index:12;}#element-2592{top:26.25rem;left:34.5rem;height:1.5625rem;width:5.5625rem;z-index:16;color:#37465A;font-size:0.9907rem;line-height:1.6rem;text-align:left;}#element-2592 .x_3579aa00{text-align:left;line-height:1.625rem;font-size:0.9907rem;}#element-2592 .x_a269ab78{color:#37465A;}#page-block-03easlvuo4sb{height:5.3125rem;max-width:100%;}#page-block-03easlvuo4sb .section-holder-border{border:0;}#page-block-03easlvuo4sb .section-block{background:rgb(251,251,251);height:5.3125rem;}#page-block-03easlvuo4sb .section-holder-overlay{display:none;}#element-33{top:1.75rem;left:19rem;height:1.3125rem;width:21.9375rem;z-index:9;color:#37465A;font-size:0.8669rem;line-height:1.4rem;text-align:center;}#element-33 .x_938e8cfc{text-align:center;line-height:1.375rem;font-size:0.8669rem;}}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.form-messagebox{height:auto !important;}} 
      </style>
      <style>
         .wizard > .content{
         min-height: 26em;
         }
         #page-block-sdywy8nf21n {
         height: 50rem;
         }
         #element-2585 {
         top: 16.6875rem;
         left: 32rem;
         height: 7.375rem;
         width: 25rem;
         z-index: 12;
         }
         .wizard > .steps > ul > li {
         width: 33%;
         }
         #element-2593,#element-2588 {
         height: 35rem;;
         }
         #element-2588 .cropped {
         background: url(images/59546956-0-5-2.jpg) -0.0625rem -0.0625rem / 29.4375rem 36rem !important;
         }
         .wizard > .actions a{
         background: #E54225;
         }
         .wizard > .actions a:hover,
         .wizard > .actions a:active {
         background: #C03515;
         }
      </style>
      <script src="js/modernizr-2.6.2.min.js"></script>
      <script src="js/jquery-1.9.1.min.js"></script>
      <script src="js/jquery.cookie-1.3.1.js"></script>
      <script src="js/jquery.steps.js"></script>
      <script>
         jQuery(function ()
         {
          jQuery("#wizard").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft",
          });
         });
         
         
      </script>
   </head>
   <body id="landing-page">
      <main>
         <section class="section section-relative " id="page-block-sdywy8nf21n" data-at="section">
            <div class="section-holder-border item-block item-absolute" data-at="section-border"></div>
            <div class="section-holder-overlay item-block item-absolute" data-at="section-overlay"></div>
            <div class="section-block">
               <div class="section-inner section-fit section-relative">
                  <div class="widget item-absolute  " id="element-1148">
                     <div class="contents cropped item-block" data-at="image-cropp">
                     </div>
                  </div>
                  <div class="widget item-absolute headline  " id="element-2580" data-at="headline">
                     <div class="contents">
                        <h1>
                           <span class="x_b614627d x_47b745f5"><span class="x_a269ab78">College of Engineering Eligibility Checker</span></span>
                        </h1>
                     </div>
                  </div>
                  <div class="widget item-absolute " id="element-2593">
                     <div class="contents shape  box figure " data-at="shape"></div>
                  </div>
                  <div class="widget item-absolute  " id="element-2588">
                     <div class="contents cropped item-block" data-at="image-cropp">
                     </div>
                  </div>
                  <div class="widget item-absolute headline hidden-mobile " id="element-2591" data-at="headline">

                     <?php if($_POST['eleigibileResult']=='Eligible'){?> 
                        <div class="contents" style="margin-top: 38%;">
                           <h4 style="font-weight: normal;"></h4>
                           <h1>
                              <span class="x_56c6f2d0 x_64e665fe">
                                 <span class="x_a269ab78">
                                    <br>
                                   ???Congratulations! You are <?php echo strtoupper($_POST['eleigibileResult']); ?>???<br>
                                   
                                </span>
                              </span>
                           </h1><br>
                           <h4 style="font-weight: normal;"></h4>
                        </div>
                     <?php }else{?> 
                     <div class="contents" style="margin-top: 38%;">
                        <h4 style="font-weight: normal;"></h4>
                        <h1>
                           <span class="x_56c6f2d0 x_64e665fe">
                              <span class="x_a269ab78">
                                 <br>
                                ???You are <?php echo strtoupper($_POST['eleigibileResult']); ?>???<br>
                                
                             </span>
                           </span>
                        </h1><br>
                        <h4 style="font-weight: normal;">Our counsellor will be in touch with you soon.</h4>
                     </div>
                     <?php } ?>
                  </div>
                  <div class="widget item-absolute  " id="element-2585">
                     

                     <div id="form-validation-error-box-element-2585" class="item-cover item-absolute form-messagebox" data-at="form-validation-box" style="display:none;">
                        <div class="form-messagebox-contents" data-at="form-validation-box-message"></div>
                     </div>
                  </div>
                  <!--<div class="widget item-absolute paragraph  " id="element-2592" data-at="paragraph">
                     <div class="contents">
                       <p class="x_3579aa00 x_8b9ce48e"><span class="x_a269ab78">Results</span></p>
                     </div>
                     </div>-->
               </div>
            </div>
         </section>
         <section class="section section-relative " id="page-block-03easlvuo4sb" data-at="section">
            <div class="section-holder-border item-block item-absolute" data-at="section-border"></div>
            <div class="section-holder-overlay item-block item-absolute" data-at="section-overlay"></div>
            <div class="section-block">
               <div class="section-inner section-fit section-relative">
                  <div class="widget item-absolute paragraph  " id="element-33" data-at="paragraph">
                     <div class="contents">
                        <p class="x_938e8cfc">Copyright ?? 2021. All rights reserved.</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <div id="submit-popup" class="lightbox submit-lb item-cover" tabindex="0" role="button" style="display:none;">
         <div class="lightbox-dim">
            <div class="notification-text">Thank You!</div>
         </div>
      </div>
      <!-- custom FOOTER code-->
      <!-- end custom FOOTER code-->
      <script src="js/utils.4307b753f6f392018c32.js"></script>
      <script src="js/Cradle.4dac59f2328b0387640d.js"></script>
      <script src="js/LazyImage.b311ea858a228d7bc9b2.js"></script>
      <script src="js/Form.5384e09c582c919e5a8f.js"></script>
      <script async src="js/lib.js"></script>
      <script type="text/javascript">
        $('document').ready(function(){
          $('.nextbut').css({"pointer-events": "none"});
        });
         $(document).change(function(){ 
            
         
           $('#field-2d8df455721e442b7b255ff7e5b746ad-0').click(function(){
         
             var thisValue = $(this).val();
         
             var addOption = '';
             if(thisValue == 'Foundation in Engineering'){
               addOption = addOption + '<option class="hidden" value disabled selected>Qualification</option><option class="form-select-option" value="SPM" data-at="form-select-option">SPM</option><option class="form-select-option" value="O Level" data-at="form-select-option">O Level</option><option class="form-select-option" value="IGCSE" data-at="form-select-option">IGCSE</option><option class="form-select-option" value="UEC" data-at="form-select-option">UEC</option>';
               $('#field-2d8df455721e442b7b255ff7e5b746ad-1').html('');
               $('#field-2d8df455721e442b7b255ff7e5b746ad-1').html(addOption);
             }   
         
             if(thisValue == 'Diploma in Mechanical Engineering' || thisValue =='Diploma in Electrical Engineering'){
               addOption = addOption + '<option class="hidden" value disabled selected>Qualification</option><option class="form-select-option" value="SPM" data-at="form-select-option">SPM</option><option class="form-select-option" value="O Level" data-at="form-select-option">O Level</option><option class="form-select-option" value="IGCSE" data-at="form-select-option">IGCSE</option><option class="form-select-option" value="UEC" data-at="form-select-option">UEC</option><option class="form-select-option" value="Vocational Certificate" data-at="form-select-option">Vocational Certificate</option><option class="form-select-option" value="Engineering Certificate" data-at="form-select-option">Engineering Certificate</option>';
               $('#field-2d8df455721e442b7b255ff7e5b746ad-1').html('');
               $('#field-2d8df455721e442b7b255ff7e5b746ad-1').html(addOption);
             }   
         
             if(thisValue == 'Bachelor of Mechanical Engineering (Hons)' || thisValue == 'Bachelor of Electrical & Electronics Engineering (Hons)' || thisValue == 'Bachelor of Electrical Power Engineering (Hons)' || thisValue == 'Bachelor of Civil Engineering (Hons)'){
               addOption = addOption + '<option class="hidden" value disabled selected>Qualification</option><option class="form-select-option" value="STPM" data-at="form-select-option">STPM</option><option class="form-select-option" value="A-Level" data-at="form-select-option">A-Level</option><option class="form-select-option" value="Matriculation" data-at="form-select-option">Matriculation</option><option class="form-select-option" value="Foundation" data-at="form-select-option">Foundation</option><option class="form-select-option" value="Diploma" data-at="form-select-option">Diploma</option><option class="form-select-option" value="UEC" data-at="form-select-option">UEC</option><option class="form-select-option" value="IB Diploma" data-at="form-select-option">IB Diploma</option><option class="form-select-option" value="HND (UK) Diploma" data-at="form-select-option">HND (UK) Diploma</option><option class="form-select-option" value="SAME/WACE/AUSMAT" data-at="form-select-option">SAME/WACE/AUSMAT</option>';
               $('#field-2d8df455721e442b7b255ff7e5b746ad-1').html('');
               $('#field-2d8df455721e442b7b255ff7e5b746ad-1').html(addOption);
             }  
         
           });  
         
           $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
            $('.nextbut').css({"pointer-events": ""});
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if(programVal == 'Foundation in Engineering' && courseVal =='SPM'){
         
               addSubject = addSubject + '<div class="form-block-select"><input class="form-input form-input-text required" data-at="form-text" type="text" name="fie-spm-english" data-describedby="form-validation-error-box-element-2585" value="English" title="English" placeholder="English" data-label-inside="English" required aria-required="true" style="width: 55%; float: left;" disabled="disabled"><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-spm-english-result"  id="fie-spm-english-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><input class="form-input form-input-text required" data-at="form-text" type="text" name="fie-spm-mathematics" data-describedby="form-validation-error-box-element-2585" value="Mathematics" title="Mathematics" placeholder="Mathematics" data-label-inside="Mathematics" required aria-required="true" style="width: 55%; float: left;" disabled="disabled"><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-spm-mathematics-result" id="fie-spm-mathematics-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option class="hidden" value disabled selected>Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><input class="form-input form-input-text required" data-at="form-text" type="text" name="fie-spm-additional-maths" data-describedby="form-validation-error-box-element-2585" value="Additional Maths" title="Additional Maths" placeholder="Additional Maths" data-label-inside="Additional Maths" required aria-required="true" style="width: 55%; float: left;" disabled="disabled"><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-spm-additional-maths-result" id="fie-spm-additional-maths-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option class="hidden" value disabled selected>Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><input class="form-input form-input-text required" data-at="form-text" type="text" name="fie-spm-physics" data-describedby="form-validation-error-box-element-2585" value="Physics" title="Physics" placeholder="Physics" data-label-inside="Physics" required aria-required="true" style="width: 55%; float: left;" disabled="disabled"><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-spm-physics-result" id="fie-spm-physics-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option class="hidden" value disabled selected>Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><input class="form-input form-input-text required" data-at="form-text" type="text" name="fie-spm-chemistry" id="fie-spm-chemistry" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true" style="width: 55%; float: left;" disabled="disabled"><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-spm-chemistry-result" id="fie-spm-chemistry-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option class="hidden" value disabled selected>Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true" ></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           });  
         
           $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if(programVal == 'Foundation in Engineering' && courseVal =='O Level'){
         
               addSubject = addSubject + '<div class="form-block-select"><input class="form-input form-input-text required" data-at="form-text" type="text" name="fie-olevel-english" data-describedby="form-validation-error-box-element-2585" value="English" title="English" placeholder="English" data-label-inside="English" required aria-required="true" style="width: 55%; float: left;" disabled="disabled"><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-olevel-english-result"  id="fie-olevel-english-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><input class="form-input form-input-text required" data-at="form-text" type="text" name="fie-olevel-mathematics" data-describedby="form-validation-error-box-element-2585" value="Mathematics" title="Mathematics" placeholder="Mathematics" data-label-inside="Mathematics" required aria-required="true" style="width: 55%; float: left;" disabled="disabled"><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-olevel-mathematics-result" id="fie-olevel-mathematics-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><input class="form-input form-input-text required" data-at="form-text" type="text" name="fie-olevel-additional-maths" data-describedby="form-validation-error-box-element-2585" value="Additional Maths" title="Additional Maths" placeholder="Additional Maths" data-label-inside="Additional Maths" required aria-required="true" style="width: 55%; float: left;" disabled="disabled"><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-olevel-additional-maths-result" id="fie-olevel-additional-maths-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><input class="form-input form-input-text required" data-at="form-text" type="text" name="fie-olevel-physics" data-describedby="form-validation-error-box-element-2585" value="Physics" title="Physics" placeholder="Physics" data-label-inside="Physics" required aria-required="true" style="width: 55%; float: left;" disabled="disabled"><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-olevel-physics-result" id="fie-olevel-physics-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><input class="form-input form-input-text required" data-at="form-text" type="text" name="fie-olevel-chemistry" id="fie-olevel-chemistry" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true" style="width: 55%; float: left;" disabled="disabled"><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-olevel-chemistry-result" id="fie-olevel-chemistry-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true" disabled="disabled"></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           }); 
         
           $('#fie-spm-english-result, #fie-spm-mathematics-result, #fie-spm-additional-maths-result, #fie-spm-physics-result, #fie-spm-chemistry-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if(programVal == 'Foundation in Engineering' && courseVal =='SPM'){
         
               var fiespmenglishresult = $('#fie-spm-english-result').val(); 
               var fiespmmathematicsresult = $('#fie-spm-mathematics-result').val(); 
               var fiespmadditionalmathsresult = $('#fie-spm-additional-maths-result').val();
               var fiespmphysicsresult = $('#fie-spm-physics-result').val();
               var fiespmchemistryresult = $('#fie-spm-chemistry-result').val();          
         
               if((fiespmenglishresult == 'A+' ||  fiespmenglishresult == 'A' || fiespmenglishresult == 'A-' || fiespmenglishresult == 'B+' || fiespmenglishresult == 'B' || fiespmenglishresult == 'C+' || fiespmenglishresult == 'C') && (fiespmmathematicsresult == 'A+' ||  fiespmmathematicsresult == 'A' || fiespmmathematicsresult == 'A-' || fiespmmathematicsresult == 'B+' || fiespmmathematicsresult == 'B' || fiespmmathematicsresult == 'C+' || fiespmenglishresult == 'C') && (fiespmadditionalmathsresult == 'A+' ||  fiespmadditionalmathsresult == 'A' || fiespmadditionalmathsresult == 'A-' || fiespmadditionalmathsresult == 'B+' || fiespmadditionalmathsresult == 'B' || fiespmadditionalmathsresult == 'C+' || fiespmadditionalmathsresult == 'C') && (fiespmphysicsresult == 'A+' ||  fiespmphysicsresult == 'A' || fiespmphysicsresult == 'A-' || fiespmphysicsresult == 'B+' || fiespmphysicsresult == 'B' || fiespmphysicsresult == 'C+' || fiespmphysicsresult == 'C') && (fiespmchemistryresult == 'A+' ||  fiespmchemistryresult == 'A' || fiespmchemistryresult == 'A-' || fiespmchemistryresult == 'B+' || fiespmchemistryresult == 'B' || fiespmchemistryresult == 'C+' || fiespmchemistryresult == 'C' || fiespmchemistryresult == 'D' || fiespmchemistryresult == 'E')){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });
         
           $('#fie-olevel-english-result, #fie-olevel-mathematics-result, #fie-olevel-additional-maths-result, #fie-olevel-physics-result, #fie-olevel-chemistry-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if(programVal == 'Foundation in Engineering' && courseVal =='O Level'){ 
         
               var fiespmenglishresult = $('#fie-olevel-english-result').val(); 
               var fiespmmathematicsresult = $('#fie-olevel-mathematics-result').val(); 
               var fiespmadditionalmathsresult = $('#fie-olevel-additional-maths-result').val();
               var fiespmphysicsresult = $('#fie-olevel-physics-result').val();
               var fiespmchemistryresult = $('#fie-olevel-chemistry-result').val();          
         
               if((fiespmenglishresult == 'A*' ||  fiespmenglishresult == 'A' || fiespmenglishresult == 'B' || fiespmenglishresult == 'C') && (fiespmmathematicsresult == 'A*' ||  fiespmmathematicsresult == 'A' || fiespmmathematicsresult == 'B' || fiespmenglishresult == 'C') && (fiespmadditionalmathsresult == 'A*' ||  fiespmadditionalmathsresult == 'A' || fiespmadditionalmathsresult == 'B' || fiespmadditionalmathsresult == 'C') && (fiespmphysicsresult == 'A*' ||  fiespmphysicsresult == 'A' || fiespmphysicsresult == 'B' || fiespmphysicsresult == 'C') && (fiespmchemistryresult == 'A*' ||  fiespmchemistryresult == 'A' || fiespmchemistryresult == 'B' || fiespmchemistryresult == 'C' || fiespmchemistryresult == 'D' || fiespmchemistryresult == 'E')){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });
         
          
          
         
         });
         
         
         
      </script>
      <!-- Generated at: 2021-11-09T01:57:02.739Z -->
      <!--
         -->