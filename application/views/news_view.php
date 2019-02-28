<div class="content">
	<div class="container">
		<h2 class="service">Новости</h2>
		<div class="row news">
			<?php 
			foreach ($main_page_news as $news):
				?>
				<div class="col-md-4">
					<?php
						echo '<a href="';
						if($news['url']==false) {echo base_url('pages/page/').$news['id'];}
						else {echo $news['url'];} echo '">'?>
							<div class="news-block">
						<div class="news-img" style="">
							<img src="<?php echo base_url().$news['foto']; ?>" alt="">
						</div>
						<div class="news-title"><?php echo $news['tema_ru']; ?></div>
						<div class="news-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque laudantium aperiam veritatis distinctio odio, esse perspiciatis ducimus dicta tempora!
						</div>
					</div>
					</a>
				
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>