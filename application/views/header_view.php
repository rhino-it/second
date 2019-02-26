<body>
<div class="header">
	<div class="top">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-xs-12 col-sm-6 ">
					<div class="leftline">
						<a href="" data-toggle="modal" data-target="#mapmodal"><i class="fa fa-map-marker" aria-hidden="true"></i> Мы на карте</a>
					</div>

				</div>
				<div class="col-xs-12 col-sm-6 ">
					<div class="rightline">
						<a href="<?php echo base_url().'Pages/recipes'; ?>">Сдать анализ</a>
						<a href="<?php echo base_url().'Pages/results'; ?>">Получить результат</a>
						<a href="" data-toggle="modal" data-target="#loginmodal" class="register">вход</a>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

	<div class="menu fixed-box">
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-div">
			<div class="container">						
				<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url().'assets/files/logo2.png'; ?>" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto menu_click">
						<?php 
						$i=false;
						foreach ($main_menu as $m_menu){
						 $under_menu = $this->Get_model->md_menu($m_menu['id']);
						 ?>

								<li <?php if  ($i==false) echo 'class="active"' ?> ><a href="<?php echo base_url(); ?>"><?php echo $m_menu['name_ru']; ?></a>
											<ul class="q1">
										<?php  foreach ($under_menu as $u_menu){ ?>
													<li><a href="<?php echo base_url().'pages/staff';?>"><?php echo $u_menu['name_ru'];  ?></a>
													</li>
												<?php } ?>
											</ul>
								</li>

						<?php
						$i=true;
							} ?>
					</ul>

				</div>
			</div>
		</nav>
	</div>