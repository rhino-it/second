	<div class="content">
		<div class="container">
			<h2 class="service">Услуги</h2>
			<div class="row padddingbottom">
				<?php 
					foreach ($uslugi as $us) {
				?>
							<div class="col-sm-6 col-md-4">
								<div class="radius">			
									<a href="<?php echo base_url('pages/uslugi_detail/'.$us['id']); ?>" class="obertka">
										<div class="framepicture">
											<div class="picture" style="background-image: url('<?php echo base_url().$us['foto']?>');"></div>
										</div>
										<h3><?php echo $us['tema_ru']; ?></h3>
									</a>
								</div>
							</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>