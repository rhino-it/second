<div class="content">
	<div class="container">
		<div class="row uzi">
			<div class="title">
				Ультразвуковая диагностика
			</div>
			<div class="col-md-12">
				<div class="row">
					<?php 
						foreach ($uslugi_detail as $us_det) {
					?>
					<div class="main_img" style="background-image: url('<?php echo base_url().$us_det['foto']; ?>');"></div>
					<div class="main_text">
						<?php echo $us_det['page_text_ru']; ?>
					</div>
					<?php
						}
					?>
					.
				</div>
			</div>
		</div>
	</div>
</div>