<!-- start banner Area -->
<section class="about-banner relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">             
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <?php
                	$length=count($data);
                	if($length>0){
                		echo "<h1 class='text-white'>".$data['main_content']."</h1>";
						echo "<p class='text-white link-nav'><a href='#'>".$data['head1']."</a>  <span class='lnr lnr-arrow-right'></span>  <a href='about.html'>".$data['head2']."</a></p>";	
                	}
				?>
            </div>  
        </div>
    </div>
</section>
<!-- End banner Area -->