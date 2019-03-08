<div class="center-recipes">Регистрация пациента</div>	
<div class="container">
	<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Данные пациента</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Выбрать и узнать стоимость анализов</a>
		</li>
		<!-- <li class="nav-item">
			<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Итого</a>
		</li> -->
	</ul>




	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			<div class="fio">
				<form>
					<div class="form-group" name="fio">
						<label for="name">ФИО:</label>
						<input type="text" onchange="show2()" class="form-control" list="name" aria-describedby="emailHelp" placeholder="Азаматович">
						<datalist id="name" >

							<?php for ($i=1; $i <10; $i++) { 
								?>
								<option value="Алмазов Алтынбек Азаматович">
								<?php } ?>
							</datalist>
							<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
						</div>
						<div class="form-group" name="birthday">
							<label for="birthday">Дата рождения:</label>
							<input type="date" class="form-control" id="birthday">
						</div>
						<div class="form-group" name="address">
							<label for="address">Домашний адрес:</label>
							<input type="text" class="form-control" id="address">
						</div>

						<div class="form-group" name="phone.number">
							<label for="phone.number">Номер телефона:</label>
							<input type="tel" class="form-control" id="phone.number">
						</div>

						<a class="btn btn-primary"  onclick="getElementById('profile-tab').click();" style="color: #fff;">Далее &rarr; </a>
					</form>

				</div> 

			</div>

			<script type="text/javascript">

				function show2() {
					alert('confirmed');
				}

			</script>

			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<div class="padding">
					<form>
						<div class="row">
						<div class="form-group col-md-6">
							<label for="exampleFormControlSelect1">Выберите категорию анализа</label>
							<select class="form-control" id="exampleFormControlSelect1">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
							</select>
						</div>
						 <div class="w-100"></div>
						<div class="form-group col-md-6">
							<label for="exampleFormControlSelect2">Выберите вид анализа</label>
							<select size="6"  multiple class="form-control" id="exampleFormControlSelect2">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<label for="exampleFormControlSelect2">Выбранный вид анализа</label>
							<select size="6" multiple class="form-control" id="exampleFormControlSelect2">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
							</select>
						</div>
						</div>
				
					<div class="row justify-content-end">
						
					    <div class="form-group col-md-6">
					      <input type="text" hidden="" name="cena" value="250">Итого  250сом
					    </div>
					
					</div>
					<div class="row justify-content-end">
					<a class="btn btn-primary" style="color: #fff;" >Зарегистрировать</a>
				   </div>
					</form>
					</div>
			</div>

	

		</div>

	</div>

