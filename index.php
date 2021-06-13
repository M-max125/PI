<?php
include_once 'config.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boom White PI</title>
    
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"  />
   <link rel="stylesheet" href="css/wrapp.css">
    <!-- <link rel="stylesheet" href="css/normalize.css"> -->
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/card.css"> 
    <link rel="stylesheet" href="css/pattern.css"> 
    <link rel="stylesheet" href="css/default.css">
 
   
 

    <script>
        if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
            var root = document.getElementsByTagName('html')[0];
            root.setAttribute('class', 'ff');
        };
        </script>
    
</head>
<body>
   <!--Nav-->
    <nav class="top-right open" id="nav-menu">
        <a href="#contact" class="disc l1 scroll">
          <div><?php echo $lang['contact'];?></div>
        </a>
        <a href="#price" class="disc l2 scroll">
          <div><?php echo $lang['prices'];?></div>
        </a>
        <a href="#services" class="disc l3 scroll">
          <div><?php echo $lang['services'];?></div>
        </a>
        <a href="#about" class="disc l4 scroll">
          <div><?php echo $lang['about'];?></div>
        </a>
        <a class="disc l5 toggle">
       Room
        </a>
      </nav>
<!--End Nav-->

<!--Brand-->
      <div class="container-brand">
        <div class="neon">Boom White</div>
        <div class="flux"><?php echo $lang['pi'];?></div>
        
      </div>
 <!--End BrandNav-->

 <!--Language-->
 <div class="lang">
   <a href="index.php?lang=en">
   <div style="width:20px;height:10px;display:inline-block;">
            <img src="images/flag-usa.jpeg" alt="">
          </div>
   </a>
   | 
   <a href="index.php?lang=ro">
          <div style="width:20px;height:10px;display:inline-block;">
            <img src="images/flag-ro.png" alt="">
          </div>
  </a>
    
 
 </div>
 <!--End Language-->

 <!--Audio bg-music div-->
<div class="bg-music">
   <audio id="musicTheme" src="audio/L.A. Noire Soundtrack - Menu Theme [HQ].mp3" loop=""></audio>
   
   <button class="btn-m">
    <i class="fas fa-play-circle play"></i>
    <i class="fas fa-pause-circle pause"></i>
   </button>
   <h1><?php echo $lang['sound'];?></h1>
</div>

<!--End Audio bg-music div-->    
<div class="filled"></div>
<div class="outline"></div>
    
<!--Home section-->
    <section class="home" id="home">
        
    </section>

<!--End Home section-->

<!--About section-->
<section class="about" id="about">
    
   <!--Intro-main main-->
    <main class="intro-main">
        
            <p class="about-intro-text anim" data-delay=".1s">
              
                <?php echo $lang['text_1'];?>
            
            </p>
      
       
        <div class="intro-fig">
            <figure class="fig-hover">
                <img src="images/fig4.jpeg" alt="private-detective" class="fig_img anim" data-delay="0s">
            </figure>
            <figure class="fig-hover">
                <img src="images/fig6.jpeg" alt="investigation" class="fig_img anim" data-delay=".5s">
            </figure>
            <figure class="fig-hover">
                <img src="images/qwe.jpeg" alt="ego glamour" class="fig_img anim" data-delay=".7s">
            </figure>
            <div class="line">
                <span style="width: 100%;"></span>
            </div>
            <div class="line">
                <span style="width: 100%;"></span>
            </div>
            <div class="line">
                <span style="width: 100%;"></span>
            </div>
            <div class="line">
                <span style="width: 100%;"></span>
            </div>
            <div class="line">
                <span style="width: 100%;"></span>
            </div>
        </div>
        
    </main>
    <!--End intro-main main-->
   
    <p class="about-intro-text anim" data-delay=".7s">
        
          <?php echo $lang['text_2'];?>
                
    </p>
    
    <div class="slogan-wrapp anim" data-delay=".5s"></div>


    

          <figure class="bw-fig">
            <figure class="fig-hover">
                <img src="images/2.jpeg" alt="services confidentiality" class="anim" data-delay=".1s">
            </figure>
            <figcaption class="anim" data-delay=".2s">
                <?php echo $lang['text_3'];?>
            </figcaption>
          </figure>

</section>



<!--End About section-->

<!--Services section-->
<section class="services" id="services">

    <p class="about-intro-text anim" data-delay="0s">
        <?php echo $lang['text_4'];?>
    </p>
        <div class="container" >
		
		<div class="content">
			<!-- trianglify pattern container -->
			<div class="pattern pattern--hidden"></div>
			<!-- cards -->
			<div class="wrapper">
				<div class="card">
					<div class="card__container card__container--closed">
						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
							<defs>
								<clipPath id="clipPath1">
									<polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
								</clipPath>
							</defs>
							<image clip-path="url(#clipPath1)" width="1920" height="500" xlink:href="images/surveillance.jpeg"></image>
						</svg>
						<div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title"><i class="fas fa-eye"></i> <?php echo $lang['card_title'][0];?></h2>
								
							</div>
							<div class="card__copy">
								
                                    <p><?php echo $lang['surveillance_p'][0];?></p>
                    <h3 class="card__subtitle"><?php echo $lang['card_subtitle'][0];?></h3>
                                    <p><?php echo $lang['surveillance_p'][1];?></p>
                                    <p><?php echo $lang['surveillance_p'][2];?></p>
                                    <p><?php echo $lang['surveillance_p'][3];?></p>
                    <h3 class="card__subtitle"><?php echo $lang['card_subtitle'][1];?></h3>
                                    <p>&minus; <?php echo $lang['surveillance_p'][4];?></p>
                                    <p>&minus; <?php echo $lang['surveillance_p'][5];?></p>
                                    <p>&minus; <?php echo $lang['surveillance_p'][6];?></p>
                                    <p>&minus; <?php echo $lang['surveillance_p'][7];?></p>
                                    <p>&minus; <?php echo $lang['surveillance_p'][8];?></p>
                    <h3 class="card__subtitle"><?php echo $lang['card_subtitle'][2];?></h3>
                                    <p>&minus; <?php echo $lang['surveillance_p'][9];?></p>
                                    <p>&minus; <?php echo $lang['surveillance_p'][10];?></p>
                                    
                    <h4 class="card__footer"><?php echo $lang['card_footer'][0];?></h4>
              </div>
						</div>
					</div>
				</div>
        <!--End card-->
				<div class="card">
					<div class="card__container card__container--closed">
						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
							<defs>
								<clipPath id="clipPath2">
									<polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
								</clipPath>
							</defs>
							<image clip-path="url(#clipPath2)" width="1920" height="500" xlink:href="images/investigate.jpeg"></image>
						</svg>
						<div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title"><i class="fas fa-search"></i> <?php echo $lang['card_title'][1];?> </h2>
								
							</div>
							<div class="card__copy">
								
                                    <p><?php echo $lang['investigation_p'][0];?></p>
                    <h3 class="card__subtitle"><?php echo $lang['card_subtitle'][3];?></h3>
                                    <p><?php echo $lang['investigation_p'][1];?></p>
                                    <p>&minus; <?php echo $lang['investigation_p'][2];?></p>
                                    <p>&minus; <?php echo $lang['investigation_p'][3];?></p>
                                    <p>&minus; <?php echo $lang['investigation_p'][4];?></p>
                                    <p>&minus; <?php echo $lang['investigation_p'][5];?></p>
                                    <p>&minus; <?php echo $lang['investigation_p'][6];?></p>
                                    <p><?php echo $lang['investigation_p'][7];?></p>
                    <h3 class="card__subtitle"><?php echo $lang['card_subtitle'][4];?></h3>
                                    <p>&minus; <?php echo $lang['investigation_p'][8];?></p>
                                    <p>&minus; <?php echo $lang['investigation_p'][9];?></p>
                                    <p>&minus; <?php echo $lang['investigation_p'][10];?></p>
                                    <p>&minus; <?php echo $lang['investigation_p'][11];?></p>
                    <h4 class="card__footer"><?php echo $lang['card_footer'][1];?></h4>
              </div>
						</div>
					</div>
				</div>
        <!--End card-->
				<div class="card">
					<div class="card__container card__container--closed">
						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
							<defs>
								<clipPath id="clipPath3">
									<polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
								</clipPath>
							</defs>
							<image clip-path="url(#clipPath3)" width="1920" height="500" xlink:href="images/security.jpeg"></image>
						</svg>
						<div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title"><i class="fas fa-user-shield"></i> <?php echo $lang['card_title'][2];?></h2>
								
							</div>
							<div class="card__copy">
                                <p><?php echo $lang['protection_p'][0];?></p>
                      <h3 class="card__subtitle"><?php echo $lang['card_subtitle'][5];?></h3>
                                <p><?php echo $lang['protection_p'][1];?></p>
								                <p><?php echo $lang['protection_p'][2];?></p>
							                  <p><?php echo $lang['protection_p'][3];?></p>
                                <p><?php echo $lang['protection_p'][4];?></p>
                                <p><?php echo $lang['protection_p'][5];?></p>
                                <p><?php echo $lang['protection_p'][6];?></p>
                                <p><?php echo $lang['protection_p'][7];?></p>
                      <h3 class="card__subtitle"><?php echo $lang['card_subtitle'][6];?></h3>
                                <p><?php echo $lang['protection_p'][8];?></p>
                                <p><?php echo $lang['protection_p'][9];?></p>
              </div>
						</div>
					</div>
				</div>
        <!--End card-->
				<div class="card">
					<div class="card__container card__container--closed">
						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
							<defs>
								<clipPath id="clipPath4">
									<polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
								</clipPath>
							</defs>
							<image clip-path="url(#clipPath4)" width="1920" height="500" xlink:href="images/partner.jpeg"></image>
						</svg>
						<div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title"><i class="fas fa-user-secret"></i> <?php echo $lang['card_title'][3];?> </h2>
								
							</div>
							<div class="card__copy">
                                <p><?php echo $lang['partner_p'][0];?></p>
                  <h3 class="card__subtitle"><?php echo $lang['card_subtitle'][7];?></h3>
								                <p><?php echo $lang['partner_p'][1];?></p>
                                <p><?php echo $lang['partner_p'][2];?></p>
                                <p><?php echo $lang['partner_p'][3];?></p>
                                <p><?php echo $lang['partner_p'][4];?></p>
							    <h3 class="card__subtitle"><?php echo $lang['card_subtitle'][8];?></h3>
                                <p>&minus; <?php echo $lang['partner_p'][5];?></p>
                                <p>&minus; <?php echo $lang['partner_p'][6];?></p>
                                <p>&minus; <?php echo $lang['partner_p'][7];?></p>
                                <p>&minus; <?php echo $lang['partner_p'][8];?></p>
                                <p>&minus; <?php echo $lang['partner_p'][9];?></p>
                                <p>&minus; <?php echo $lang['partner_p'][10];?></p>
              </div>
						</div>
					</div>
				</div>
        <!--End card-->
				<div class="card">
					<div class="card__container card__container--closed">
						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
							<defs>
								<clipPath id="clipPath5">
									<polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
								</clipPath>
							</defs>
							<image clip-path="url(#clipPath5)" width="1920" height="500" xlink:href="images/address.jpeg"></image>
						</svg>
						<div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title"><i class="fas fa-address-card"></i> <?php echo $lang['card_title'][4];?></h2>
								
							</div>
							<div class="card__copy">
                                <p><?php echo $lang['address_p'][0];?></p>
                                <p><?php echo $lang['address_p'][1];?></p>
								                <p><?php echo $lang['address_p'][2];?></p>
							    <h3 class="card__subtitle"><?php echo $lang['card_subtitle'][9];?></h3>
                                <p>&minus; <?php echo $lang['address_p'][3];?></p>
                                <p>&minus; <?php echo $lang['address_p'][4];?></p>
                                <p>&minus; <?php echo $lang['address_p'][5];?></p>
                  <h4 class="card__footer"><?php echo $lang['card_footer'][2];?></h4>
              </div>
						</div>
					</div>
				</div>
				
			</div>
			<!-- /cards -->
		</div><!-- /content -->
		
	</div>
	<!-- /container -->


    


    
  
</section>

<!--End Services section-->



<!--Prices section-->
<section class="price" id="price">
    <p class="about-intro-text anim" data-delay="0s">
        
    <?php echo $lang['text_5'];?>

    </p>
    <div class="consultancy anim" data-delay=".2s">
      <a href="#contact"><?php echo $lang['consultancy'];?></a>
      <i class="fas fa-comment"></i>
    </div>
<!--Flex-slider div-->
    <div class="flex-slider anim" data-delay=".7s">
        <div class="blog-slider">
            <div class="blog-slider__wrp swiper-wrapper">
              <div class="blog-slider__item swiper-slide">
                <div class="blog-slider__img">
                  
                  <img src="images/private-detective.jpeg" alt="surveillance">
                </div>
                <div class="blog-slider__content">
                  <span class="blog-slider__code"><?php echo $lang['code'][0];?></span>
                  <div class="blog-slider__title"><?php echo $lang['slider_title'][0];?></div>
                  <div class="blog-slider__text"><?php echo $lang['surveillance_text'][0];?></div>
                  <div class="blog-slider__text"><?php echo $lang['surveillance_text'][1];?></div>
                  <div class="blog-slider__text"><?php echo $lang['surveillance_text'][2];?></div>
                  <div class="blog-slider__text"><?php echo $lang['surveillance_text'][3];?></div>
                  <div class="blog-slider__text"><?php echo $lang['surveillance_text'][4];?></div>
                  
                </div>
              </div>
              <div class="blog-slider__item swiper-slide">
                <div class="blog-slider__img">
                  <img src="images/global.jpeg" alt="investigation">
                </div>
                <div class="blog-slider__content">
                  <span class="blog-slider__code"><?php echo $lang['code'][1];?></span>
                  <div class="blog-slider__title"><?php echo $lang['slider_title'][1];?></div>
                  <div class="blog-slider__text"><?php echo $lang['investigation_text'][0];?></div>
                  <div class="blog-slider__text"><?php echo $lang['investigation_text'][1];?></div>
                  <div class="blog-slider__text"><?php echo $lang['investigation_text'][2];?></div>
                  <div class="blog-slider__text"><?php echo $lang['investigation_text'][3];?></div>
                  <div class="blog-slider__text"><?php echo $lang['investigation_text'][4];?></div>
                <div class="blog-slider__text"><?php echo $lang['investigation_text'][5];?></div>
                  
                </div>
              </div>
              
              <div class="blog-slider__item swiper-slide">
                <div class="blog-slider__img">
                  <img src="images/bodyguard.jpeg" alt="protection">
                </div>
                <div class="blog-slider__content">
                  <span class="blog-slider__code"><?php echo $lang['code'][2];?></span>
                  <div class="blog-slider__title"><?php echo $lang['slider_title'][2];?></div>
                  <div class="blog-slider__text"><?php echo $lang['protection_text'][0];?></div>
                  <div class="blog-slider__text"><?php echo $lang['protection_text'][1];?></div>
                  <div class="blog-slider__text"><?php echo $lang['protection_text'][2];?></div>
                  <div class="blog-slider__text"><?php echo $lang['protection_text'][3];?></div>
                  <div class="blog-slider__text"><?php echo $lang['protection_text'][4];?></div>
                  
                </div>
              </div>
              
            </div>
            <div class="blog-slider__pagination"></div>
          </div>
          
    </div>
<!--End flex-slider div-->
<p class="about-intro-text anim" data-delay="0s">
  <?php echo $lang['text_6'];?>
</p>
<!--Page div-->
    <div class='page'>
        <div class='circle_content anim' data-delay="0s">
          <div class='circle'>
            <div class='circle_title'>
              <h2><?php echo $lang['night_s'];?></h2>
              <h3>&plus; 25&percnt;</h3>
            </div>
            <div class='circle_inner'>
              <div class='circle_inner__layer'>
                <img src='images/A-Brief-History-of-Detective-Fiction_NovelSuspects.png'>
              </div>
              
            </div>
            <div class='content_shadow'></div>
          </div>
        </div>
        <div class='circle_content anim' data-delay=".5s">
            <div class='circle'>
              <div class='circle_title'>
                <h2><?php echo $lang['travel'];?></h2>
                <h3>&plus; 25&percnt;</h3>
              </div>
              <div class='circle_inner'>
                <div class='circle_inner__layer'>
                  <img src='images/getty_187124870_2000171020009280139_117363.jpeg'>
                </div>
                
              </div>
              <div class='content_shadow'></div>
            </div>
          </div>
        <div class='circle_content anim' data-delay=".7s">
          <div class='circle'>
            <div class='circle_title'>
              <h2>Weekend</h2>
              <h3>&plus; 25&percnt;</h3>
            </div>
            <div class='circle_inner'>
              <div class='circle_inner__layer'>
                <img src='images/depositphotos_439730374-stock-photo-private-detective-camera-spying-window.jpeg'>
              </div>
              
            </div>
            <div class='content_shadow'></div>
          </div>
        </div>
        <div class='circle_content anim' data-delay=".9s">
          <div class='circle'>
            <div class='circle_title'>
              <h2><?php echo $lang['holiday'];?></h2>
              <h3>&plus; 50&percnt;</h3>
            </div>
            <div class='circle_inner'>
              <div class='circle_inner__layer'>
                <img src='images/360_F_402990510_KZVsrsJVYEcaGBG2lBa0xFnPC8EZaBnk.jpeg'>
              </div>
             
            </div>
            <div class='content_shadow'></div>
          </div>
        </div>
      </div>
    <!--End page div-->

    
    
</section>

<!--End Prices section-->


<!--Contact section-->
<section class="contact" id="contact">
    <div class="wrap">
        <div class="back">
          <div class="back__slide active">
            <div class="progress"></div>
          </div>
          <div class="back__slide">
            <div class="progress"></div>
            <div class="back-front-image"></div>
          </div>
        </div>
        <div class="prompter">
          <div class="card__slide active">
            <div class="image"></div><span class="number">01</span><span class="date"><?php echo $lang['date'][0];?> <span class="date__time"><?php echo $lang['date'][1];?></span></span>
          </div>
          <div class="card__slide">
            <div class="back-image"></div>
            <div class="image"></div><span class="number">02</span><span class="date"><?php echo $lang['date'][2];?> <span class="date__time"><?php echo $lang['date'][3];?></span></span>
          </div>
          <div class="content-wrapp">
            <div class="content__slide active">
             
              <p class="desc"><?php echo $lang['desc'][0];?> <br/> <?php echo $lang['desc'][1];?> <br> <span class="contact-det"><?php echo $lang['phone'];?> +40746757175</span> <br><span class="contact-det">Email: boomWhiteInc@info.com</span> </p>
              
              
              <div class="button-wrap"><a class="button"><?php echo $lang['more'];?><span class="button__hover"></span></a></div>
            </div>
            <div class="content__slide">
                <p class="desc"><?php echo $lang['desc'][2];?> <br><span class="percent"><?php echo $lang['desc'][3];?></span></p>
             <div class="contact__container bd-grid">
                <form action="" class="contact__form" id="message-form" method="POST">

                    <div class="contact__inputs">
                        <input type="text" placeholder="<?php echo $lang['name'];?>" class="contact__input" name="name" id="name" required>
                        <input type="email" placeholder="E-mail" class="contact__input" name="email" id="email" required>
                    </div>
                    <div id="nameErr"></div>
                    <div id="emailErr"></div>
                    <textarea name="message" id="message" cols="0" rows="7" class="contact__input" placeholder="<?php echo $lang['message'];?>" required></textarea>
                    <div id="error"></div>
                    <div class="button-wrap">
                        <input type="submit" class="contact__button" value="<?php echo $lang['send'];?>" name="submit" id="submit">
                        
                    </div>
                    
                    
                </form>
             </div>
             
               
              <div class="button-wrap"><a class="button"><?php echo $lang['back'];?><span class="button__hover"></span></a></div>
            </div>
            <div class="content__ping content__ping--noanimation"></div>
          </div>
        </div>
      </div>
    
  
</section>

<!--End Contact section-->


<!--Cursor-->
<div class="cursors">
    <div>
        <span></span>
    </div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div>


    
    
   
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js" scroll></script>
    <script src="js/trianglify.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/ScrollToPlugin.min.js"></script>
    <script src="js/cash.min.js"></script>
    <script src="js/Card-polygon.js"></script>
    <script src="js/demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  
    <script src="js/main.js"></script>
   
    
</body>
</html>