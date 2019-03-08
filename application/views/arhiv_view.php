<div class="content">
	<div class="container">
		<h2 class="service">Архив</h2>
		<div class="row news">
			<?php 
			foreach ($arhiv as $ar):
				?>
				<div class="col-md-4">
					<?php
						echo '<a href="';
						if($ar['url']==false) {echo base_url('pages/page/').$ar['id'];}
						else {echo $ar['url'];} echo '">'?>
							<div class="news-block">
						<div class="news-img" style="">
							<img src="<?php echo base_url().$ar['foto']; ?>" alt="">
						</div>
						<div class="news-title"><?php echo $ar['tema_ru']; ?></div>
						<div class="news-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque laudantium aperiam veritatis distinctio odio, esse perspiciatis ducimus dicta tempora!
						</div>
					</div>
					</a>
				
				</div>
			<?php endforeach ?>
			</div>
		<div class="pagination_user">
			<ul>
				<?php
					echo $this->pagination->create_links();
				?>
			</ul>
		</div>
	</div>
</div>