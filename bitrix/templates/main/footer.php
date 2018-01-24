<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<footer class="footer">
		<div class="container">
			<div class="footer-row">
				<div class="footer-col">
					<div class="footer-info">
						<?
						$APPLICATION->IncludeFile(
							SITE_DIR."/include/addr.php",
							Array(),
							Array("MODE"=>"html")
						);
						?>
					</div>
				</div>
				<div class="footer-col">
				<?$APPLICATION->IncludeComponent("bitrix:menu", "footer-menu", Array(
	"ROOT_MENU_TYPE" => "footer",	// Тип меню для первого уровня
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "submenu",	// Тип меню для остальных уровней
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
					
				</div>
				<div class="footer-col">
					<div class="footer-developer clearfix">
						<div class="footer-developer-title">Создание сайта</div>
						<a href="http://studio-v.ru" target="_blank" class="footer-developer-link">
							<img src="/img/developer.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="scroll_top">
		<img src="/img/arrow-up.svg" alt="arrow-up.svg">
	</div>
	<div class="feedback">
		<div class="feedback-btn"><span>Обратная связь</span> <i class="icon-angle-down"></i></div>
		<form action="/ajax/contacts_feedback_form.php" method="POST" class="form feedback-form">
			 <?=bitrix_sessid_post()?>
			<div class="feedback-form-body form-body">
				<h3 class="section-title">Обратная связь</h3>
				<div class="feedback-form-input-wrapp clearfix">
					<div class="feedback-form-input-title">Ваше имя</div>
					<div class="form-block">
						<i class="alert">Введите Ваше имя</i>
						<input type="text"  name="user_name" class="input valid">
					</div>
				</div>
				<div class="feedback-form-input-wrapp clearfix">
					<div class="feedback-form-input-title">Эл. почта</div>
					<div class="form-block">
						<i class="alert">Введите Эл. почту</i>
						<input type="email" name="user_email" class="input valid valid-email">
					</div>
				</div>
				<div class="feedback-form-input-wrapp clearfix">
					<div class="feedback-form-input-title">Сообщение</div>
					<div class="form-block">
						<i class="alert">Введите сообщение</i>
						<textarea name="MESSAGE" class="textarea input valid"></textarea>
					</div>
				</div>
				<div class="feedback-form-input-wrapp clearfix">
					<div class="feedback-form-input-title">&nbsp;</div>
					<div class="form-block">
						<div class="file-wrapp">
							<input type="file" name="doc"  id="file1" class="file-input" multiple data-multiple="{count} Files">
							<label for="file1" class="file-input-label clearfix">
								<span class="file-btn">Прикрепить файл</span>
								<span class="file-title"></span>
							</label>
						</div>
					</div>
				</div>
				<div class="feedback-form-input-wrapp clearfix">
					<div class="feedback-form-input-title">&nbsp;</div>
					<div class="form-block">
						<button type="submit" class="btn submit" formnovalidate>Отправить сообщение</button>
					</div>
				</div>
			</div>
			<div class="feedback-form-done form-done">
				<div class="feedback-form-done-wrapp">
					<div class="feedback-form-done-cell">
						<div class="section-title">Ваша заявка принята</div>
						<div class="form-done-text">Менеджер свяжется с Вами в течение 12 часов</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="unser_info_popup_box">
		<div class="unser_info_popup">
			<div class="info_before">
				<div class="close_popup">x</div>
				<h3>Форма обратной связи</h3>
				<form action="." method="post" class="popup_user_form">
					<div class="form_input_wrap">
						<input type="text" name="popup_name" placeholder="ФИО" required>
						<p class="req">Введите корректное имя</p>
					</div>
					<input type="email" placeholder="Email" required>
					<input type="phone" placeholder="Телефон" required>
					<textarea name="user_pop_message" placeholder="Комментарий" required></textarea>
					<button class="btn">Отправить</button>
				</form>
			</div><!-- info_before -->
			<div class="info_after">
				<h3>Ваша заявка отправлена! Спасибо!</h3>
			</div>
		</div>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="/bitrix/templates/.default/js/plugins.js"></script>
	<script src="/bitrix/templates/.default/js/maskedInput.js"></script>
	<script src="/bitrix/templates/.default/js/jquery.fancybox.pack.js"></script>
	<script src="/bitrix/templates/.default/js/select2.min.js"></script>
	<script src="/bitrix/templates/.default/js/scripts.js"></script>
	<script src="/bitrix/templates/.default/js/jquery.animateNumber.js"></script>
	<script src="/bitrix/templates/.default/js/animation.js"></script>
</body>
</html>
