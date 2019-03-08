<div class="content">
		<div class="container">
			<div class="row">
				<div class="results">
					<h3>Получить результаты исследования</h3>
						<span class="results_inf">
						<p>Введите семизначное КОДОВОЕ СЛОВО, указанное в Вашем Бланке заказа.</p>
						<p>Кодовое слово может состоять только из одних цифр или цифр и букв латинского алфавита. (Кодовое слово введите без учета написания прописных и заглавных букв). Например, 1597346 или GR759YR.</p>
					<table>
					<tr>
						<td class="r_first">
							<span>Кодовое слово</span></td>
							<td><span class="inp"><input id="code" type="text" placeholder="Введите кодовое слово"></span></td>
						
					</tr>
					<tr>
						<td class="r_first">Получить результаты на почту</td>
						<td class="r_second"><span class="check_box"><input type = 'checkbox' id = 'cb1' onchange = 'showOrHide("cb1", "cat1");'/></span></td>
					</tr>
					<tr>
						<td class="r_first"></td>
						<td class="r_second"><div id = 'cat1' style = 'display: none;'><input type="text" placeholder="Ваша почта" id="email"></div></td>
					</tr>
					<tr>
						<td class="r_first"><span class="capt"><img src="<?php echo base_url().'assets/images/загружено.gif'; ?>" alt=""></span></td>
						<td class="r_second"><input type="text" placeholder="Введите код указанный на картинке" id="code_inp"></td>
						<td><input type="submit"></td>
					</tr>
					</table>
					</span>
				</div>
			</div>
		</div>
	</div>