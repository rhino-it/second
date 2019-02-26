<div class="content">
	<div class="container">
		<div class="row service">
			<?php foreach ($inf as $inf): ?>
			<div class="box-img">
				<img src="<?php echo base_url().$inf['foto']?>" alt="">
			</div>
			<div class="title">
				<?php
					echo $inf['tema_ru'];
				 ?>
			</div>
			<div class="text">
				<?php echo $inf['page_text_ru']; ?>
			</div>
		<?php endforeach ?>
		</div>
	</div>
</div>