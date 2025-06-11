<?php

	get_header('home');

/* Template name: main */

?>

    <main>		
        <h1 style="font-size: 0;">Скидельский лесхоз – ваш надежный поставщик лесоматериалов и других продуктов</h1>
        <section class="intro">
            <div class="intro_svg"></div> 
			<i class="search-btn fa-solid fa-magnifying-glass"></i>
        </section>  
       
        
            <section class="produkt"> 
				<div class="wrapper">
                <div class="produkt_inner">			
                   <div class="produkt_inner_content">
                        <h3>выбирай</h3>
                        <h2>наша продукция</h2>                        
                        <p>У нас вы найдете высококачественные лесоматериалы, щепу, гранулы, мёд, новогодние деревья и многое другое.</p>
                        <a class="section-button" href="<?php echo home_url(); ?>/produkts/">
                            <button>Изучить цены на продукцию</button>
                        </a>                         
                   </div> 
                   <div class="produkt_inner_slider">
                        <div class="slider_btn"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/png/arow.png" alt="arrow" width="11"></div>
                        <div class="body-slider">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/jpg/product/1.jpg" alt="img-produkt">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/jpg/product/2.jpg" alt="img-produkt">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/jpg/product/3.jpg" alt="img-produkt">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/jpg/product/4.jpg" alt="img-produkt">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/jpg/product/5.jpg" alt="img-produkt">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/jpg/product/6.jpg" alt="img-produkt">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/jpg/product/7.jpg" alt="img-produkt">
                        </div>                      
                   </div>                   
                </div> </div>                 
            </section>
            <section class="quality "> 
				 <div class="wrapper">
                <div class="quality_inner">                    
                    <div class="quality_inner-img">                       
                        <a href="https://xn----7sbgfh2alwzdhpc0c.xn--90ais/organization/21012/org-page" target="_blank">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg//qr.svg"alt="kachestvo">
                        </a>
                    </div>
                    <div class="quality_inner-content">
                        <h2>качество наших услуг</h2>  
                        <p>Выскажите свое мнение о качестве нашего обслуживания, это поспособствует повышению качестваоказания услуг.</p>
                        <a class="section-button" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/doc/uslugi.pdf" target="_blank">
                            <button>изучить цены на услуги</button>
                        </a> 
                    </div>
                </div>
					  </div>
            </section>

            <section class="dalnee"> 
				<div class="wrapper">
                <div class="dalnee_inner">                
                    <div class="dalnee_inner-content">
                        <h2>База отдыха "Дальнее"</h2>  
                        <p style="text-align: left;">"Дальнее" приглашает отдохнуть на берегу оз. Веровское, в 4 км. от а/г Поречье. Для отдыха населения построены летние домики и беседки. Тел: <a href="tel:+375152473042">+375(29)8624188</a> <a href="https://maps.app.goo.gl/FGg92JrwMABLD59TA" target="_blank"><i class="fa-solid fa-map-location-dot" style="color: #c8ab77; font-size: 1rem;"></i></a>
    
                        </p>
                        <a class="section-button" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/doc/dalnee.pdf" target="_blank">
                        <button>Узнать больше о базе отдыха</button>
                        </a> 
                    </div>  
                    <div class="dalnee_inner-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/jpg/dalnee/3.jpg" alt="dalnee" >
                    </div>
                </div></div> 
            </section>
			<section class="social"> 
				<div class="wrapper">
			   <div class="social_inner">
				   
                    <a href="https://www.instagram.com/skidles_1/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg/instagram.svg" alt="icon" width="14px"></a>
                    <a href="https://t.me/skidles_by" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg/telegram.svg" alt="icon" width="14px"></a>
                    <a href="https://www.facebook.com/minleshoz" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg/facebook.svg" alt="icon" width="14px"></a>
                    <a href="https://twitter.com/minleshoz" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg/x_icon.svg" alt="icon" width="14px"></a>                
                    <a href="https://www.youtube.com/channel/UCEPbuES4gWuvW2dW8EIX7hQ/featured?view_as=subscriber" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg/youtube.svg" alt="icon" width="14px"></a>                
               </div> </div>
			</section>

       
       

  
        
    </main>




    <?php
        get_footer( );



    ?>