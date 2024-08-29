<?php
include 'header.php';
?>


    <style>
        .html,
        .body,
        .stage,
        .ring,
        .img {
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            user-select: none;
        }

        .html,
        .body,
        .stage {
            overflow: hidden;
            background: #fff;
        }

        .html,
        .body,
        .stage,
        .containerSlider,
        .ring,
        .img,
        svg {
            position: absolute;
        }

        .containerSlider {
            perspective: 2000px;
            width: 300px;
            height: 400px;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }


        /* Text Marquee Effect */
        .dateSize
        {
            font-size:22px;
        }
        .marqueeHead
        {
            position: absolute;
            z-index: 999999999;
            bottom:158px;
            left:50px;
            transform: rotate(-2deg) scale(1.1);
            overflow:visible; 
            font-family: "Dancing Script", cursive;
            letter-spacing: 2px;
            color: white;
            padding-left: 40px;
            font-size: 22px;
        }
        
        .desktopHide
        {
            display:none;
        }
        .desktopShow
        {
            display:block;
        }
        
        @media (max-width: 1025px)
        {
            .marqueeHead
            {
                bottom:163px;
                left:50px;
            }
        }
        @media (max-width: 780px)
        {
            .marqueeHead
            {
                bottom:179px;
                left:298px;
            }
        }
        /*MOBILE*/
        @media (max-width: 430px)
        {
            .mobShow
            {
                display:block;
            }
            .mobHide
            {
                display:none;
            }
            .marqueeHead
            {
                font-size:19px;
                bottom:175px;
                left:90px;
            }
            .dateSize {
                font-size: 14px;
            }
        }
        @media (max-width: 380px)
        {
            .marqueeHead
            {
                font-size:16px;
                bottom:175px;
                left:47px;
            }
        }
        @media (max-width: 325px)
        {
            .marqueeHead
            {
                font-size:18px;
                bottom:178px;
                left:57px;
            }
            .dateSize {
                font-size: 9px;
            }
        }
.marquee {
  white-space: nowrap;
  overflow: hidden;
  margin: 0 auto;
  
  margin-top: 5rem;
  transform: rotate(-2deg) scale(1.1);
  background-color: #b78948;
  position: absolute;
  width:100%;
  z-index: 999;
  bottom:140px;
  opacity: 0.8;

  .marquee__text {
    display: inline-block;
    padding-left: 100%;
    font-size: 3.5rem;
    text-transform: uppercase;
    color: white;
    animation: marquee-direction var(--_speed) linear infinite;
    font-family: 'Black Ops One', sans-serif;

    &[data-direction="rtl"] {
      /* DON'T CHANGE */
      --_right: 0%;
      --_left: -100%;
    }

    &[data-direction="ltr"] {
      /* DON'T CHANGE */
      --_right: -100%;
      --_left: 0%;
    }
  }
}

@keyframes marquee-direction {
  0%   { transform: translateX(var(--_right)); }
  100% { transform: translateX(var(--_left)); }
}
    </style>


<div class="page-content">

    <!-- Slider -->
    <section id="slider" class="home-slider style-home-slider-hp-1">
        <div id="rev_slider_1" class="rev_slider fullscreenbanner" data-version="5.4.5">
            
            <div class="marqueeHead desktopShow mobHide"> --- Latest Rates ( <span class="dateSize"> <?= date("d-m-Y",strtotime($rates['created_at'])) ?> </span> ) --- </div>
            <div class="marqueeHead mobShow desktopHide"> Latest Rates ( <span class="dateSize"> <?= date("d-m-Y",strtotime($rates['created_at'])) ?> </span> )</div>
            <div class="marquee">
                <h2 class="marquee__text" data-direction="rtl" style="--_speed: 30s; ">

                    <?php
                        $repeatCount = 2;
                        for ($i=0; $i < 2; $i++) 
                        {
                    ?>
                            <span style="display:inline-block; padding-left: 150px; margin-top:6px;"> Gold Rate (22ct per gm)  :- <?= $rates['gold_rate'] ?> /-</span>
                            <span style="display:inline-block; padding-left: 150px; margin-top:6px;"> Silver Rate (per 1kg) :- <?= $rates['silver_rate'] ?> /-</span>
                    <?php
                        }
                    ?>
                </h2>
            </div>
            <ul>
                <li data-transition="boxslide">

                    <img src="assets/photos/12.webp" alt="slide-1" class="rev-slidebg">


                    <div class="tp-caption tp-resizeme slide-caption-title-2 headFontChange" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:-20px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-fontsize="['90', '90', '80', '80']" data-lineheight="['70', '70', '60', '60']" data-color="#fff" data-textalign="['center', 'center', 'center', 'center']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-hoffset="['0', '0', '0', '0']" data-voffset="['-180', '-117', '-110', '-190']" data-width="['1200', '850', '850', '800']" data-whitespace="normal" data-basealign="slide" data-responsive_offset="off">
                        <span>S.K </span> JEWELLERS
                    </div>
                    <div class="tp-caption tp-resizeme slide-caption-title-1" data-frames="[{&quot;delay&quot;:500,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:-20px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-fontsize="['20', '25', '30', '35']" data-lineheight="['32', '35', '40', '45']" data-color="#d59f9f" data-textalign="['center', 'center', 'center', 'center']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-hoffset="['0', '0', '0', '0']" data-voffset="['-115', '-200', '-175', '-160']" data-width="['500', '250', '300', '750']" data-whitespace="normal" data-basealign="slide" data-responsive_offset="off">
                        Rishto aur sundarta ka vaada
                    </div>

                    <div class="tp-caption tp-resizeme slide-caption-title-3" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-fontsize="['80', '80', '80', '90']" data-lineheight="['60', '60', '50', '50']" data-color="['#666','#fff','#fff','#fff']" data-textalign="['center', 'center', 'center', 'center']" data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']" data-hoffset="['27', '18', '18', '60']" data-voffset="['28', '30', '30', '30']" data-width="['250', '250', '300', '350']" data-whitespace="normal" data-basealign="slide" data-responsive_offset="off">
                        01
                    </div>
                    <div class="tp-caption tp-resizeme slide-caption-title-3" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-fontsize="['13', '15', '20', '35']" data-lineheight="['32', '35', '40', '45']" data-color="['#666','#fff','#fff','#fff']" data-textalign="['center', 'center', 'center', 'center']" data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']" data-hoffset="['14', '-23', '-20', '35']" data-voffset="['63', '56', '50', '37']" data-width="['187', '250', '300', '350']" data-whitespace="normal" data-basealign="slide" data-responsive_offset="off">
                        /
                    </div>
                    <div class="tp-caption tp-resizeme slide-caption-title-3" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-fontsize="['20', '25', '30', '40']" data-lineheight="['32', '35', '40', '45']" data-color="['#666','#fff','#fff','#fff']" data-textalign="['center', 'center', 'center', 'center']" data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']" data-hoffset="['-6', '-43', '-40', '15']" data-voffset="['63', '56', '50', '37']" data-width="['187', '250', '300', '350']" data-whitespace="normal" data-basealign="slide" data-responsive_offset="off">
                        03
                    </div>

                </li>


                <li data-transition="boxslide">

                    <img src="assets/photos/17.jpg" alt="slide-2" class="rev-slidebg">


                    <div class="tp-caption tp-resizeme slide-caption-title-2 headFontChange" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:-20px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-fontsize="['90', '90', '80', '80']" data-lineheight="['70', '70', '60', '60']" data-color="#fff" data-textalign="['center', 'center', 'center', 'center']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-hoffset="['0', '0', '0', '0']" data-voffset="['-180', '-117', '-110', '-190']" data-width="['1200', '850', '850', '800']" data-whitespace="normal" data-basealign="slide" data-responsive_offset="off">
                        <span>S.K </span> JEWELLERS
                    </div>
                    <div class="tp-caption tp-resizeme slide-caption-title-1" data-frames="[{&quot;delay&quot;:500,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:-20px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-fontsize="['20', '25', '30', '35']" data-lineheight="['32', '35', '40', '45']" data-color="#d59f9f" data-textalign="['center', 'center', 'center', 'center']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-hoffset="['0', '0', '0', '0']" data-voffset="['-115', '-200', '-175', '-160']" data-width="['500', '250', '300', '750']" data-whitespace="normal" data-basealign="slide" data-responsive_offset="off">
                        Rishto aur sundarta ka vaada
                    </div>
                    <div class="tp-caption tp-resizeme slide-caption-title-3" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-fontsize="['80', '80', '80', '90']" data-lineheight="['60', '60', '50', '50']" data-color="['#666','#fff','#fff','#fff']" data-textalign="['center', 'center', 'center', 'center']" data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']" data-hoffset="['27', '27', '27', '60']" data-voffset="['28', '30', '30', '30']" data-width="['250', '250', '300', '350']" data-whitespace="normal" data-basealign="slide" data-responsive_offset="off">
                        02
                    </div>
                    <div class="tp-caption tp-resizeme slide-caption-title-3" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-fontsize="['13', '15', '20', '35']" data-lineheight="['32', '35', '40', '45']" data-color="['#666','#fff','#fff','#fff']" data-textalign="['center', 'center', 'center', 'center']" data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']" data-hoffset="['3', '-23', '-20', '32']" data-voffset="['63', '56', '50', '37']" data-width="['187', '250', '300', '350']" data-whitespace="normal" data-basealign="slide" data-responsive_offset="off">
                        /
                    </div>
                    <div class="tp-caption tp-resizeme slide-caption-title-3" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-fontsize="['20', '25', '30', '40']" data-lineheight="['32', '35', '40', '45']" data-color="['#666','#fff','#fff','#fff']" data-textalign="['center', 'center', 'center', 'center']" data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']" data-hoffset="['-17', '-43', '-40', '15']" data-voffset="['63', '56', '50', '37']" data-width="['187', '250', '300', '350']" data-whitespace="normal" data-basealign="slide" data-responsive_offset="off">
                        03
                    </div>

                </li>


                <li data-transition="boxslide">

                    <img src="assets/photos/14.webp" alt="slide-3" class="rev-slidebg">

                    <div class="tp-caption tp-resizeme slide-caption-title-2 headFontChange" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:-20px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-fontsize="['90', '90', '80', '80']" data-lineheight="['70', '70', '60', '60']" data-color="#fff" data-textalign="['center', 'center', 'center', 'center']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-hoffset="['0', '0', '0', '0']" data-voffset="['-180', '-117', '-110', '-190']" data-width="['1200', '850', '850', '800']" data-whitespace="normal" data-basealign="slide" data-responsive_offset="off">
                        <span>S.K </span> JEWELLERS
                    </div>
                    <div class="tp-caption tp-resizeme slide-caption-title-1" data-frames="[{&quot;delay&quot;:500,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:-20px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-fontsize="['20', '25', '30', '35']" data-lineheight="['32', '35', '40', '45']" data-color="#d59f9f" data-textalign="['center', 'center', 'center', 'center']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-hoffset="['0', '0', '0', '0']" data-voffset="['-115', '-200', '-175', '-160']" data-width="['500', '250', '300', '750']" data-whitespace="normal" data-basealign="slide" data-responsive_offset="off">
                        Rishto aur sundarta ka vaada
                    </div>
                    <div class="tp-caption tp-resizeme slide-caption-title-3" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-fontsize="['80', '80', '80', '90']" data-lineheight="['60', '60', '50', '50']" data-color="['#666','#fff','#fff','#fff']" data-textalign="['center', 'center', 'center', 'center']" data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']" data-hoffset="['27', '27', '27', '60']" data-voffset="['28', '30', '30', '30']" data-width="['250', '250', '300', '350']" data-whitespace="normal" data-basealign="slide" data-responsive_offset="off">
                        03
                    </div>
                    <div class="tp-caption tp-resizeme slide-caption-title-3" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-fontsize="['13', '15', '20', '35']" data-lineheight="['32', '35', '40', '45']" data-color="['#666','#fff','#fff','#fff']" data-textalign="['center', 'center', 'center', 'center']" data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']" data-hoffset="['3', '-23', '-20', '32']" data-voffset="['63', '56', '50', '37']" data-width="['187', '250', '300', '350']" data-whitespace="normal" data-basealign="slide" data-responsive_offset="off">
                        /
                    </div>
                    <div class="tp-caption tp-resizeme slide-caption-title-3" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-fontsize="['20', '25', '30', '40']" data-lineheight="['32', '35', '40', '45']" data-color="['#666','#fff','#fff','#fff']" data-textalign="['center', 'center', 'center', 'center']" data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']" data-hoffset="['-17', '-43', '-40', '15']" data-voffset="['63', '56', '50', '37']" data-width="['187', '250', '300', '350']" data-whitespace="normal" data-basealign="slide" data-responsive_offset="off">
                        03
                    </div>

                </li>

            </ul>
        </div>
    </section>

    <!-- What SKJ Deals In -->
    <section id="products" class="two-columns-section three-columns-section gallery-grid-section section-box">
        <div class="container">
            <div class="two-columns-content">
                <!-- <h1>Portfolio Gallery!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.</p> -->
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="two-columns-detail">
                            <a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You.">
                                <img src="assets/photos/productImg_1.webp" alt="product">
                                <div class="overlay"></div>
                            </a>
                            <div class="product-info">
                                <h4><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You.">Elegant Bracelets</a></h4>
                                <span><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You."> Explore Now </a></span>
                                <!--<span><a href="#">Furniture</a></span>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="two-columns-detail">
                            <a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You.">
                                <img src="assets/photos/productImg_2.webp" alt="product">
                                <div class="overlay"></div>
                            </a>
                            <div class="product-info">
                                <h4><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You.">Beautiful Pochi</a></h4>
                                <span><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You.">Explore Now</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="two-columns-detail">
                            <a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You.">
                                <img src="assets/photos/productImg_3.webp" alt="product">
                                <div class="overlay"></div>
                            </a>
                            <div class="product-info">
                                <h4><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You.">Stunning Studs</a></h4>
                                <span><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You.">Explore Now</a></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="two-columns-detail">
                            <a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You.">
                                <img src="assets/photos/productImg_4.webp" alt="product">
                                <div class="overlay"></div>
                            </a>
                            <div class="product-info">
                                <h4><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You.">Men's Bracelets</a></h4>
                                <span><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You.">Explore Now</a></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="two-columns-detail">
                            <a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You.">
                                <img src="assets/photos/productImg_5.webp" alt="product">
                                <div class="overlay"></div>
                            </a>
                            <div class="product-info">
                                <h4><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You.">Kundan Collection</a></h4>
                                <span><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You.">Explore Now</a></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="two-columns-detail">
                            <a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You.">
                                <img src="assets/photos/productImg_6.webp" alt="product">
                                <div class="overlay"></div>
                            </a>
                            <div class="product-info">
                                <h4><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You.">Ravishing Rings</a></h4>
                                <span><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You.">Explore Now</a></span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Banner -->
    <section id="collection" class="banner-hp-6 banner-page-3 section-box show-desktop-header">
        <div class="container-fluid">
            <div class="banner-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="banner-details">
                            <a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="bg-image">
                                <img src="assets/photos/banner_desk_1.webp" alt="banner">
                            </a>
                            <div class="info d-none">
                                <h3>BRIDAL COLLECTION</h3>
                                <p>Enchanting Elegance</p>
                                <a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="shop">Explore Now<i class="zmdi zmdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="banner-details">
                            <a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="bg-image">
                                <img src="assets/photos/banner_desk_3.jpg" alt="banner">
                            </a>
                            <div class="info d-none">
                                <h3>MAHARANI COLLECTION</h3>
                                <p>The embraced ectasy</p>
                                <a href="shop-full-width.html" class="shop">Explore Now<i class="zmdi zmdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="collection" class="banner-hp-6 banner-page-3 section-box show-mobile-header">
        <div class="container-fluid">
            <div class="banner-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12 pl-0 pr-0 pb-2">
                        <div class="banner-details">
                            <a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="bg-image">
                                <img src="assets/photos/banner_mob_1.webp" alt="banner">
                            </a>
                            <div class="info d-none">
                                <h3>BRIDAL COLLECTION</h3>
                                <p>Enchanting Elegance</p>
                                <a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="shop">Explore Now<i class="zmdi zmdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12 pl-0 pr-0 pt-2">
                        <div class="banner-details">
                            <a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="bg-image">
                                <img src="assets/photos/banner_mob_2.webp" alt="banner">
                            </a>
                            <div class="info d-none">
                                <h3>MAHARANI COLLECTION</h3>
                                <p>The embraced ectasy</p>
                                <a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="shop">Explore Now<i class="zmdi zmdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Photos -->
    <section id="testimonial" class="text-center">
        <h1 style="font-family: 'Dancing Script', cursive;" class="pb-3"> Customers</h1>
        <div style="position: relative; width: 100%; height:380px !important;">     
            <div class="html">
                <div class="body">
                    <div class="stage">
                        <div class="containerSlider">
                            <div class="ring">
                                <div class="img"></div>
                                <div class="img"></div>
                                <div class="img"></div>
                                <div class="img"></div>
                                <div class="img"></div>
                                <div class="img"></div>
                                <div class="img"></div>
                                <div class="img"></div>
                                <div class="img"></div>
                                <div class="img"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Instagram -->
    <section id="instagram" class="insta-hp-1 section-box testimontals border-top mt-4 pt-4">
        <div class="container">
            <h2>Follow us on</h2>
            <span> <a href="https://www.instagram.com/s.k_jewellers_jaipur/"> @s.k_jewellers_jaipur </a></span>


            <div class="row ">

                <?php
                    $count = 0;
                    $limit = 6;

                    foreach ($getInstaPhotos as $key => $instaData)
                    {
                        $count++;
                        if ($count <= 6)
                        {
                ?>
                            <div class="col-lg-4 col-6 pt-3">
                                <div class="insta-detail">
                                    <a href="<?= $instaData->permalink; ?>" class="insta-image">
                                        <img src="<?= $instaData->media_url; ?>" alt="insta-1">
                                        <!--<div class="overlay"></div>-->
                                    </a>
                                </div>
                            </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    
    </section>
    
    <!-- Why Shop with SkJ -->
    <section class="d__why_shop_section">
        <div class="container-fluid">
            <div class="cf-padding">
                <h2 class="d__home_heading text-center">Why Shop with S.K JEWELLERS?</h2>
                <div class="row">
                    <div class="col-4 col-sm-4">
                        <div class="d__why_manubhai_box d-flex align-items-center justify-content-center">
                            <img src="assets/photos/icon_2.jpeg" alt="Leading Jewellery Brand for over 30 years" title="Leading Jewellery Brand for over 30 years">
                            <div>
                                <h3>Leading Jewellery Brand for over <span class="muli">30</span> years</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 col-sm-4">
                        <div class="d__why_manubhai_box d-flex align-items-center justify-content-center">
                            <img src="assets/photos/icon_3.jpeg" alt="Certified Diamond Jewellery" title="Certified Diamond Jewellery">
                            <div>

                                <h3>Certified Diamond Jewellery</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 col-sm-4">
                        <div class="d__why_manubhai_box d-flex align-items-center justify-content-center">
                            <img src="assets/photos/icon_7.jpeg" alt="Pay 10% and book your piece" title="Pay 10% and book your piece">
                            <div>
                                <h3>Pay <span class="muli">10%</span> and book your piece</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: none;">
                    <div class="row">
                        <div class="col-4 col-sm-4">
                            <div class="d__why_manubhai_box d-flex align-items-center justify-content-center">
                                <img src="assets/photos/icon_9.jpeg" alt="BIS Hallmarked Gold" title="BIS Hallmarked Gold">
                                <h3>BIS Hallmarked Gold</h3>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4">
                            <div class="d__why_manubhai_box d-flex align-items-center justify-content-center">
                                <img src="assets/photos/icon_8.jpeg" alt="Free doorstep delivery" title="Free doorstep delivery">
                                <h3>Free doorstep delivery</h3>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4">
                            <div class="d__why_manubhai_box d-flex align-items-center justify-content-center">
                                <img src="assets/photos/icon_5.jpeg" alt="Over 8000+ Google Reviews with 4.8 star rating" title="Over 8000+ Google Reviews with 4.8 star rating">
                                <div>
                                    <h3></span> Google Reviews with <span class="muli">4.8</span>-star rating</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4">
                            <div class="d__why_manubhai_box d-flex align-items-center justify-content-center">
                                <img src="assets/photos/icon_6.jpeg" alt="Crafted by Seasoned Craftsmen" title="Crafted by Seasoned Craftsmen">
                                <div>
                                    <h3>Crafted by Seasoned Craftsmen</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4">
                            <div class="d__why_manubhai_box d-flex align-items-center justify-content-center">
                                <img src="assets/photos/icon_1.jpeg" alt="Trusted by Hundreds of Thousands of our customers" title="Trusted by Hundreds of Thousands of our customers">
                                <h3>Trusted by Hundreds of Thousands of our customers</h3>
                            </div>
                        </div>
                        
                        <div class="col-4 col-sm-4">
                            <div class="d__why_manubhai_box d-flex align-items-center justify-content-center">
                                <img src="assets/photos/icon_4.jpeg" alt="Trusted by Hundreds of Thousands of our customers" title="Trusted by Hundreds of Thousands of our customers">
                                <h3>No Processing Fees</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d__toggle_arrow">
                    <i class="toggle__arrow"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Company we deal with -->
    <div class="wrapper text-center border-bottom">
        <h2 style="font-family: 'Dancing Script', cursive;" class="pb-3"> Companies we deal with.</h2>
        <br>
        <br>
        <div class="my-slider">
            <div class="pl-3 pr-3"><img src="assets/photos/comp_1.jpeg" style="width:100%; height:100%; object-fit:contain;" alt=""></div>
            <div class="pl-3 pr-3"><img src="assets/photos/comp_2.jpeg" style="width:100%; height:100%; object-fit:contain;" alt=""></div>
            <div class="pl-3 pr-3"><img src="assets/photos/comp_3.jpeg" style="width:100%; height:100%; object-fit:contain;" alt=""></div>
            <div class="pl-3 pr-3"><img src="assets/photos/comp_4.jpeg" style="width:100%; height:100%; object-fit:contain;" alt=""></div>
            <div class="pl-3 pr-3"><img src="assets/photos/comp_5.jpeg" style="width:100%; height:100%; object-fit:contain;" alt=""></div>
        </div>
    </div>

    <!-- Products we deal in -->
    <div class="css-yrr9vb ek8iqxx16">
        <div class="css-19r0kgb ek8iqxx17">
            <h2 style="font-family: 'Dancing Script', cursive;" class="pb-4 mb-4 text-center" > Products we deal in.</h2>
            <div>
                <!-- FOR MEN -->
                <div class="css-e776di ek8iqxx19"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You..html" class="css-164qcw4 ek8iqxx20">For Women</a>
                    <div class="css-181w635 ek8iqxx21">
                        <div class="css-1x5i3i6 eqhtesr0">
                            <ul data-attr="policy_link" class="css-zg0gl8 eqhtesr1">
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Rings for Women</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Earrings for Women</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Bracelet for Women</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Bangles For Women</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Pendants For Women</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Necklaces For Women</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Chain For Women</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- For women -->
                <div class="css-e776di ek8iqxx19"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You..html" class="css-164qcw4 ek8iqxx20">For Men</a>
                    <div class="css-181w635 ek8iqxx21">
                        <div class="css-1x5i3i6 eqhtesr0">
                            <ul data-attr="policy_link" class="css-zg0gl8 eqhtesr1">
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Rings for Men</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Earrings for Men</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Bracelet for Men</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Chain Men</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Men's Kada</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Rings -->
                <div class="css-e776di ek8iqxx19"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You..html" class="css-164qcw4 ek8iqxx20">Rings</a>
                    <div class="css-181w635 ek8iqxx21">
                        <div class="css-1x5i3i6 eqhtesr0">
                            <ul data-attr="policy_link" class="css-zg0gl8 eqhtesr1">
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Diamond Rings </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Gold Rings </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Solitaire Rings </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Gemstone Rings </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Mens Rings </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Engagement Ring </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Couple Ring </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Wedding Ring </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Ruby Ring </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Emerald Ring </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Name Ring </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">antique Gold Rings</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Kundan Rings ,</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Cocktail Ring </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Love Ring </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Butterfly Ring </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Infinity Rings </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Pearl Rings </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Promise Rings </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">3 Gram Gold Rings </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">2 Gram Gold Rings </a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">1 Gram Gold Rings, fancy rings</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- NOSE PINS -->
                <div class="css-e776di ek8iqxx19"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You..html" class="css-164qcw4 ek8iqxx20">Nose Pins</a>
                    <div class="css-181w635 ek8iqxx21">
                        <div class="css-1x5i3i6 eqhtesr0">
                            <ul data-attr="policy_link" class="css-zg0gl8 eqhtesr1">
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Nose Rings</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Gold Nose Pins</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Diamond Nose Pins</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Nose Studs</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Pressing Nose Rings</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Stone & Fancy Nose Rings</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Bangles -->
                <div class="css-e776di ek8iqxx19"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-164qcw4 ek8iqxx20">Bangles</a>
                    <div class="css-181w635 ek8iqxx21">
                        <div class="css-1x5i3i6 eqhtesr0">
                            <ul data-attr="policy_link" class="css-zg0gl8 eqhtesr1">
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Gold Bangles</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Italian Rosse Gold Bangles</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Diamond Bangles</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Kids Bangles</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Daily Wear bangles</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Bridal Bangles</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Stone Bangles</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Baby Bangles</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Traditional Bangles</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Kundan Bangles</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Super Light Bangles</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Hollow Bangles</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Copper Bangles</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Bracelets -->
                <div class="css-e776di ek8iqxx19"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-164qcw4 ek8iqxx20">Bracelets</a>
                    <div class="css-181w635 ek8iqxx21">
                        <div class="css-1x5i3i6 eqhtesr0">
                            <ul data-attr="policy_link" class="css-zg0gl8 eqhtesr1">
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Kids Bracelets</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Gold Bracelets</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Diamond Bracelets</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Pearl Bracelets</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Evil Eye Bracelets</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Tennis Bracelets</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Chain Bracelets</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Name Bracelets</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Italian Bracelets</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Stone Bracelets</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Cuff Bracelets</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Mangalsutra Bracelets</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Nacklace -->
                <div class="css-e776di ek8iqxx19"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-164qcw4 ek8iqxx20">Necklace</a>
                    <div class="css-181w635 ek8iqxx21">
                        <div class="css-1x5i3i6 eqhtesr0">
                            <ul data-attr="policy_link" class="css-zg0gl8 eqhtesr1">
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Gold Necklace</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Diamond Necklace</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Gemstone Necklace</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Choker Necklace</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Moti Jadau Necklace</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Long Necklace</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Bridal Necklace</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Fancy Necklace</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Italian Necklace</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Necklace under 50000/-</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Name Necklace</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Pendants -->
                <div class="css-e776di ek8iqxx19"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-164qcw4 ek8iqxx20">Pendants</a>
                    <div class="css-181w635 ek8iqxx21">
                        <div class="css-1x5i3i6 eqhtesr0">
                            <ul data-attr="policy_link" class="css-zg0gl8 eqhtesr1">
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Gold Pendants</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Diamond Pendants</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Solitaire Pendants</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">God Pendants</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Initial` Pendants</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Om Pendants</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Evil Eye Pendants</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Fancy Pendants</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Heart Pendants</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Tradional Pendants</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Mangalsutra -->
                <div class="css-e776di ek8iqxx19"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-164qcw4 ek8iqxx20">Mangalsutra</a>
                    <div class="css-181w635 ek8iqxx21">
                        <div class="css-1x5i3i6 eqhtesr0">
                            <ul data-attr="policy_link" class="css-zg0gl8 eqhtesr1">
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Gold Mangalsutra</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Diamond Mangalsutra</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Modern Mangalsutra</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Fancy Mangalsutra</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Black Beads Mangalsutra</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Gold Mangalsutra Under 20000</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Traditional Mangalsutra</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Light Weight Mangalsutra</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Daily Use Mangalsutra</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Infinity Mangalsutra</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Earrings -->
                <div class="css-e776di ek8iqxx19"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-164qcw4 ek8iqxx20">Earrings</a>
                    <div class="css-181w635 ek8iqxx21">
                        <div class="css-1x5i3i6 eqhtesr0">
                            <ul data-attr="policy_link" class="css-zg0gl8 eqhtesr1">
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Gold Earrings</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Diamond Earrings</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Solitaire Earrings</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Kids Earrings</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Jhumka Earrings</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Hoop Earrings</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Stud Earrings</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Pearl Earrings</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Sui Dhaga Earrings</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Chandbali Earrings</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Earcuff Earrings</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Fancy Earrings</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Stone Earrings</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Daily Wear Earrings</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Round Earrings</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Jewellery -->
                <div class="css-e776di ek8iqxx19"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-164qcw4 ek8iqxx20">Jewellery</a>
                    <div class="css-181w635 ek8iqxx21">
                        <div class="css-1x5i3i6 eqhtesr0">
                            <ul data-attr="policy_link" class="css-zg0gl8 eqhtesr1">
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Gold</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Diamond</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Solitaire</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Gemstone</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">22kt jewellery</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Kundan</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Jadau Jewellery</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Charms</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Chains</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Silver Jewellery</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Rose Gold Jewellery</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">White Gold Jewellery</a></li>
                                <li class="css-1c1723y eqhtesr2"><a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="css-ou3ccf epg3bs00">Italian Jewellery</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</div>


<?php include 'footer.php' ?>

<script>
    $(document).ready(function() {
        $('.my-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            speed: 300,
            infinite: true,
            autoplaySpeed: 1500,
            autoplay: true,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    });
</script>

<script>
    let xPos = 0;

    gsap.timeline()
        .set('.ring', {
            rotationY: 180,
            cursor: 'grab'
        }) //set initial rotationY so the parallax jump happens off screen
        .set('.img', { // apply transform rotations to each image
            rotateY: (i) => i * -36,
            transformOrigin: '50% 50% 500px',
            z: -500,
            // backgroundImage: (i) => 'url(https://picsum.photos/id/' + (i + 32) + '/600/400/)',
            backgroundImage: (i) => 'url(<?= ASSETS_PHOTOS; ?>/client_img_' + (i + 32) + '.webp)',
            backgroundPosition: 'center',
            backgroundSize:'cover',
            backfaceVisibility: 'hidden'
        })
        .from('.img', {
            duration: 1.5,
            y: 200,
            opacity: 0,
            stagger: 0.1,
            ease: 'expo'
        })
        .add(() => {
            $('.img').on('mouseenter', (e) => {
                let current = e.currentTarget;
                gsap.to('.img', {
                    opacity: (i, t) => (t == current) ? 1 : 0.5,
                    ease: 'power3'
                })
            })
            $('.img').on('mouseleave', (e) => {
                gsap.to('.img', {
                    opacity: 1,
                    ease: 'power2.inOut'
                })
            })
        }, '-=0.5')

    $(window).on('mousedown touchstart', dragStart);
    $(window).on('mouseup touchend', dragEnd);


    function dragStart(e) {
        if (e.touches) e.clientX = e.touches[0].clientX;
        xPos = Math.round(e.clientX);
        gsap.set('.ring', {
            cursor: 'grabbing'
        })
        $(window).on('mousemove touchmove', drag);
    }


    function drag(e) {
        if (e.touches) e.clientX = e.touches[0].clientX;

        gsap.to('.ring', {
            rotationY: '-=' + ((Math.round(e.clientX) - xPos) % 360),
            onUpdate: () => {
                gsap.set('.img', {
                    backgroundPosition: 'center'
                })
            }
        });

        xPos = Math.round(e.clientX);
    }


    function dragEnd(e) {
        $(window).off('mousemove touchmove', drag);
        gsap.set('.ring', {
            cursor: 'grab'
        });
    }


    function getBgPos(i) { //returns the background-position string to create parallax movement in each image
        return (100 - gsap.utils.wrap(0, 360, gsap.getProperty('.ring', 'rotationY') - 180 - i * 36) / 360 * 500) + 'px 0px';
    }
</script>

<script>
    $(window).resize(function() {
        var height = $('header').height();
        $('.d__page_offset').css({
            'margin-top': height
        });
    }).trigger('resize');

    $(".d__toggle_arrow").click(function() {
        $(this).prev().slideToggle(250);
        $(this).toggleClass("active");
    });

    $(".d__why_shop_section .col-4").sort(function() {
        return Math.random() * 10 > 5 ? 1 : -1;
    }).each(function() {
        var $t = $(this);
        $t.appendTo($t.parent());
    });
</script>