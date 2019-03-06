<div class="center-recipes">Регистрация пациента</div>	
<div class="container">
	<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Данные пациента</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Выбрать анализы</a>
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

				<a class="btn btn-primary"  onclick="getElementById('profile-tab').click();" >Далее &rarr; </a>
			</form>

			  </div> 
			  
		</div>

<script type="text/javascript">
	 
	function show2() {
		alert('asdasd66');
	}

</script>

		<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<div class="center-recipes">Узнайте стоимость анализов</div>	
<div class="container">
		<div class="recipes">
			<div class="sec1 col-md-6">
				<select name="" id="">
							<option value="" selected>Выберите категорию анализа</option>
							<option value="">item1</option>
							<option value="">item2</option>
							<option value="">item3</option>
							<option value="">item4</option>
						</select>
						<p>Все анализы (<span>647</span>)</p>		
						<div class="scroll">
							<h1>Диагностика анемий</h1>
								<table>
									<tr class="bb">
											<td><span class="pd">1)</span></td>
											<td><span>Наименование</span></td>
											<td><span>Цена</span></td>
											<td><span class="pd"><input type="checkbox"></span></td>
									</tr>
								</table>
						</div>
						<div class="button">
							<a href="<?php echo base_url().'pages/total'; ?>">Готово</a>
						</div>
			</div>
		<div class="sec2 col-md-8">
			<div class="result-recipe">
				<h1>Выбрано исследований (1)</h1>
				<div class="result-content">
					<table>
						<tr class="bb">
							<td><span>1)</span></td>
							<td><span>Наименование</span></td>
							<td><span>Цена</span></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="total">
					<table>
						<tr>
							<th class="tab">Итог</th>
							<th>0 сом</th>
						</tr>
						<tr>
							<!-- <th colspan="2"><button>Готово</button></th> -->
						</tr>
					</table>
				</div>
		</div>
		</div>
</div>
		</div>


		<!-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">3</div> -->


	</div>

</div>

