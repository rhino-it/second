  
<div class="wrapper">
	<div class="row">
		<div class="col-lg-12">

			<section class="panel panel-success">
				<header class="panel-heading">
					Добавить запись
				</header>
				<form  enctype="multipart/form-data" action="<?php echo base_url('adminex/plagin/add_to_base') ?>" class="form-horizontal" method="POST">
					<div class="panel-body">
						<div class="form">

							<div class="form-group">
								<div class="col-md-1">
									<label for="exampleInputEmail1"><b>Год :</b></label>
								</div>
								<div class="col-md-4">
										<div class="form-group">
							<input type="text" name="year" class="form-control" id="userIdType"  list = "id_year" value=""> 
										<datalist id="id_year">
	  <?php 
		foreach ($pl_year as $year){
		?>
										<option><?php echo $year['year']; ?></option>
		<?php } ?>
										</datalist>
					
									</div>
								</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-1">
									<label for="exampleInputEmail1"><b>Выпуск :</b></label>
								</div>
								<!-- <div class="col-md-4">
									<select name="exf_type_page" class="form-control m-bot15">                 
										<option value="">1</option>
									</select>										
								</div> -->
								<div class="col-md-4">
										<div class="form-group">
										<input type="text" name="edition" class="form-control" id="userIdType"  list = "id_edition" value=""> 
										<datalist id="id_edition">
										  <?php 
											foreach ($pl_edition as $edition)
										  {
										  ?>
										<option><?php echo $edition['edition']; ?></option>
							<?php } ?>			
										</datalist>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-1">
									<label for="exampleInputEmail1"><b>Наука :</b></label>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input type="text" class="form-control" id="userIdType" name="science" list = "id_science" value=""> 
										<datalist id="id_science">
											 <?php 
											foreach ($pl_science as $science)
										  {
										  ?>
											<option><?php echo $science['science']; ?></option>
											<?php } ?>
										</datalist>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-1">
									<label for="exampleInputEmail1"><b>Автор :</b></label>
								</div>
								<div class="col-md-4">
										<div class="form-group"> 
										<input type="text" class="form-control" id="userIdType"  name="author" list = "id_author" value=""> 
										<datalist id="id_author">
												 <?php 
											foreach ($pl_author as $author)
										  {
										  ?>
											<option><?php echo $author['author']; ?></option>
										<?php } ?>
										</datalist>
									</div>
								</div>
							</div>

							<!-- Navigation starts-->
							<section class="panel">
								<header class="panel-heading custom-tab dark-tab">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#ru" data-toggle="tab">Русский</a>
										</li>
										<li class="">
											<a href="#kg" data-toggle="tab">Кыргызча</a>
										</li>
										<li class="">
											<a href="#en" data-toggle="tab">English</a>
										</li>

									</ul>
								</header>
								<div class="panel-body">
									<div class="tab-content">
										<div class="tab-pane active" id="ru">
											<div class="form-group">
												<div class="col-sm-12">
													<label for="exampleInputEmail1"><b>Тема</b></label>
													<input name="tema_ru" class="form-control" id="focusedInput" type="text" placeholder="Заголовок" value="">

												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-12">
													<label for="exampleInputEmail1"><b>Аннотация</b></label>
													<textarea class="form-control" name="text_ru" rows="6"></textarea>
												</div>
											</div>

										</div>
										<div class="tab-pane" id="kg">
											<div class="form-group">
												<div class="col-sm-12">
													<label for="exampleInputEmail1"><b>Темасы</b></label>
													<input name="tema_kg" class="form-control" id="focusedInput" type="text" placeholder="Башкы" value="">

												</div>
											</div>

											<div class="form-group">
												<div class="col-sm-12">
													<label for="exampleInputEmail1"><b>Аннотациясы</b></label>
													<textarea class="form-control" name="text_kg" rows="6"></textarea>
												</div>
											</div>

										</div>
										<div class="tab-pane" id="en">
											<div class="form-group">
												<div class="col-sm-12">
													<label for="exampleInputEmail1"><b>Theme</b></label>
													<input name="tema_en" class="form-control" id="focusedInput" type="text" placeholder="Headline" value="">

												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-12">
													<label for="exampleInputEmail1"><b>Annotation</b></label>
													<textarea class="form-control" name="text_en" rows="6"></textarea>
												</div>
											</div>

											
										</div>

									</div>
								</div>
								<div class="container">
									<div class="form-group">
										<div class="col-sm-12">
											<!-- <label for="exampleFormControlFile1">Example file input</label> -->
											<input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
										</div>
									</div>
								</div>
								
							</section>

							<!-- Navigation ends -->

			<div class="panel-footer">
				<button class="btn btn-success" name="submit_add_to_base" type="submit"><i class="fa fa-save"></i> Сохранить</button>
			</div>
		</form>
	</section>

</div>
</div>
</div>




<!-- modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel1">Библиотека файлов</h4>
			</div>
			<div class="modal-body">
				<div class="modal-body" id="folder">
					<section class="panel">
						<header class="panel-heading custom-tab dark-tab">
							<ul class="nav nav-tabs">
								<li class="active">
									<a data-toggle="tab" href="#media">
										<i class="fa fa-picture-o"></i> Медиа Файлы
									</a>
								</li>
								<li>
									<a data-toggle="tab" href="#document">
										<i class="fa fa-file-o"></i> Докумкнты
									</a>
								</li>

							</ul>
						</header>
						<div class="panel-body">
							<div class="tab-content">                            
								<div id="media" class="tab-pane active">      </div>


								<div id="document" class="tab-pane">      </div>
							</div>
						</div>
					</section>

				</div>
			</div>

		</div>
	</div>    
</div>
