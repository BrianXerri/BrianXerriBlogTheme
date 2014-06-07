	<section class="section-main-footer">
		
		<div class="container">
			
			<div class="row">
				
				<div class="col-sm-4">

						<?php if(!dynamic_sidebar('footer-1')): ?>

							<h2><?php bloginfo('name'); ?></h2>
							<p><?php bloginfo('description'); ?></p>

						<?php endif; ?>																
					
				</div> <!-- end col-sm-4 -->


				<div class="col-sm-4">

					<?php if(dynamic_sidebar('footer-2')); ?>					
					
				</div> <!-- end col-sm-4 -->


				<div class="col-sm-4">

					<?php if(dynamic_sidebar('footer-3')); ?>					
					
				</div> <!-- end col-sm-4 -->

			</div> <!-- end row -->

		</div> <!-- end container -->

	</section> <!-- end section-main-footer -->