<?php get_header(); ?>

<div class="slider">
	<div class="social">
		<div class="fa fa-facebook-square"></div>
		<div class="fa fa-youtube"></div>
		<div class="fa fa-twitter"></div>
		<div class="fa fa-instagram"></div>
	</div>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	  	<?php
			$args = array('post_type'=>'slider', 'showposts'=>-1);
			$my_slider = get_posts( $args );
			$count = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
		 ?>
	    	<li data-target="#carousel-example-generic" data-slide-to="<?php echo $count; ?>" <?php if($count == 0): ?> class="active"<?php endif; ?>></li>
		<?php
			$count ++ ;
	    	endforeach;
	    	endif;
	     ?>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		<?php
			$cont = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
		 ?>
		    <div class="item <?php if($cont == 0) echo "active"; ?>">
		      <?php the_post_thumbnail('full'); ?>
		      <div class="carousel-caption">
				<h1><?php the_title(); ?></h1>

		      </div>
		    </div>
	    <?php
	    	$cont ++ ;
	    	endforeach;
	    	endif;
	     ?>

	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>

<div class="destaques">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-lg-4">
				<i class="glyphicon glyphicon-globe"></i>
				<h2>Escola Bilíngue</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum rerum, esse soluta repellat quas tempore eius quod rem illo cumque animi ut repellendus doloremque inventore autem minus dolores, voluptate obcaecati!</p>
			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>
