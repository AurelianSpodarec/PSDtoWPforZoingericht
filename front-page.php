<?php get_header(); ?>


<main class="container">
	
		<span class="slider-btn-prev">PREV</span>
		<span class="slider-btn-next">NEXT</span>
		
		<div class="controls">
		
		</div>
	<section class="slider ">
          <div class="slider--inner">
          <!-- <img src="http://via.placeholder.com/1750x450"> -->

               <ul class="slider-container">
               <li class="slider-item">
               <div class="slider-caption">

               <h2 class="slider-item__title">Mexican Grill</h2>

               <div>
               <ul class="slider-details">
                    <li class="slider-caption__info">
                    <i class="fa fa-cutlery"></i>
                    <a href="" rel="tag">For Family</a>  
                    </li>
                    <li class="slider-caption__info">
                    <i class="fa fa-clock-o"></i>
                    <a href="" rel="tag">30 min</a> 
                    </li>
                    <li class="slider-caption__info">
                    <i class="fa fa-user"></i> by Dorota
                    </li>
               </ul>
               </div>

               <a class="btn btn--carousel" href="single-recipte.html">View Recipt</a>
               </div>
               </li><!-- /item -->
               <li class="slider-item showing">
               <div class="slider-caption">

               <h2 class="slider-item__title">Olive Meals</h2>

               <div>
               <ul class="slider-details">
                    <li class="slider-caption__info">
                    <i class="fa fa-cutlery"></i>
                    <a href="" rel="tag">For Family</a>  
                    </li>
                    <li class="slider-caption__info">
                    <i class="fa fa-clock-o"></i>
                    <a href="" rel="tag">15 min</a> 
                    </li>
                    <li class="slider-caption__info">
                    <i class="fa fa-user"></i> by Dorota
                    </li>
               </ul>
               </div>

               <a class="btn btn--carousel" href="single-recipte.html">View Recipt</a>
               </div>
               </li>
               <li class="slider-item">
               <div class="slider-caption">

               <h2 class="slider-item__title">Rosted Chicken</h2>

               <div>
               <ul class="slider-details">
                    <li class="slider-caption__info">
                    <i class="fa fa-cutlery"></i>
                    <a href="" rel="tag">For Family</a>  
                    </li>
                    <li class="slider-caption__info">
                    <i class="fa fa-clock-o"></i>
                    <a href="" rel="tag">75 min</a> 
                    </li>
                    <li class="slider-caption__info">
                    <i class="fa fa-user"></i> by Dorota
                    </li>
               </ul>
               </div>

               <a class="btn btn--carousel" href="single-recipte.html">View Recipt</a>
               </div>
               </li>
               </ul>

          </div>
          </section>

	<section class="carousel">
	  <div class="carousel-inner">
	    <div class="item active" style="background-image: url(http://www.itsmikemcfly.com/test/wp-content/uploads/2018/05/home.png);">
	      <div class="container">
	      	<div class="carousel__item-inner">
	        <p>Hier kan eventueel een kader komen met een korte beschrijving van het project. Om interesse te wekken bij de klant. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante nisl, ornare et porta ac, scelerisque sit</p>
	        </div>
	      </div>
	    </div>
	    <div class="item">
	      <div class="container">
	      	<div class="carousel__item-inner">
	        <p>Do something every day that you don't want to do. This is the golden rule for acq of doing your dutyhis is the golden rule for acq of doing your duty  uiring the habit of doing your duty  of doing your duty without pain.</p>
	        </div>
	      </div>
	    </div>
	  </div>
	  
	 <div class="carousel__controls">
		  <div class="carousel__controls-arrow carousel-control left">
		    <div class="arrow left carousel__controls-arrow--left"></div>
		  </div>
		  <ol class="carousel__indicators carousel-indicators">
		    <li class="active"></li>
		    <li></li>
		  </ol>
		   <div class="carousel__controls-arrow carousel-control right">
		    <div class="arrow right carousel__controls-arrow--right"></div>
		  </div>
	  </div>
	</section>

	<div class="section--main">
	<section style="padding-bottom: 45px;">
		<h2 class="header header-triangle"><span>About Zo Ingericht</span></h2>
		<p style="margin-bottom: 0;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</section>


	<section style="padding-bottom: 30px;">
	<h2 class="header header-triangle"><span>UITGELICHTE PROJECTEN</span></h2>
	<?php get_template_part( 'template-parts/modules/module', 'project-card' ); ?>
	</section>

	<section style="padding-bottom: 20px;" id="contact">
		<h2 class="header header-triangle"><span>Neem Contact Op</span></h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<form>
		<ul class="contact-form">
		<li>
		<span><input type="text" name="your-name" value="" size="40" placeholder="Naam"></span>
		</li>
		<li>
		<span><input type="tel" name="your-tel" value="" size="40" placeholder="Telefoonnummer"></span>
		</li>
		<li>
		<span><input type="email" name="your-email" value="" placeholder="E-mail adres"></span>
		</li>
		<li>
		<span><input type="text" name="your-email" value="" size="40" aria-invalid="false" placeholder="Onderwerp"></span>
		</li>
		<li>
		<span><textarea name="your-message" cols="40" rows="10" placeholder="..."></textarea></span>
		</li>
		</ul>
		<div class="text-center">
   		<input type="submit" value="Verzend" class="btn btn--contact">
    	</div>
		</form>
	</section>

	
	 
	
 
	</div>



</main>

<?php get_footer(); ?>