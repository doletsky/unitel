<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>	<div class="page">
		<div class="contacts-head">
			<!-- <div class="container">
				<h1 class="page-title"><?$APPLICATION->ShowTitle(false)?></h1>
			</div> -->
			<div class="contacts-map" id="contacts-map"></div>
			<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
			<script>
				ymaps.ready(function () {
					var myMap = new ymaps.Map('contacts-map', {
						center: [55.744961, 37.713378],
						zoom: 16,
						controls: []
					}, {
						searchControlProvider: 'yandex#search'
					}),
					myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
						hintContent: 'г. Москва, 2-я Кабельная улица 2, стр. 3',
						balloonContent: 'г. Москва, 2-я Кабельная улица 2, стр. 3'
					});
					myMap.geoObjects.add(myPlacemark);
					myMap.behaviors.disable('scrollZoom');
				});
			</script>
		</div>
		<div class="page-content">
			<div class="container">
				<div class="contacts-row row">
					<div class="contacts-col col-6">
						<div class="contacts-blocks">
							<?
						$APPLICATION->IncludeFile(
							SITE_DIR."/include/contacts.php",
							Array(),
							Array("MODE"=>"html")
						);
						?>
						
						</div>
					</div>
					<div class="contacts-col col-6">
						<form action="/ajax/contacts_feedback_form.php" method="POST" class="form contacts-form">
							 <?=bitrix_sessid_post()?>
							<div class="contacts-form-body form-body">
								<h3 class="section-title">Обратная связь</h3>
								<div class="feedback-form-input-wrapp clearfix">
									<div class="feedback-form-input-title">Ваше имя</div>
									<div class="form-block">
										<i class="alert">Введите Ваше имя</i>
										<input type="text" name="user_name" class="input valid">
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
											<input type="file" name="doc" id="file" class="file-input" multiple data-multiple="{count} Files">
											<label for="file" class="file-input-label clearfix">
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
							<div class="contacts-form-done form-done">
								<div class="section-title">Ваша заявка принята</div>
								<div class="form-done-text">Менеджер свяжется с Вами в ближайшее время</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>