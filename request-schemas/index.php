<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Запрос схем");
?>

	<div class="page">
		<div class="page-content">
			<div class="container">
				<h1 class="page-title"><?$APPLICATION->ShowTitle(false);?></h1>
				<div class="content-text">
					<div class="price-row row">
						<div class="price-col col-6">
							
							<div class="price-download-desc">Для получения подробной информации оформите запрос в свободной форме и направьте его нам по электронной почте на адрес: <a href="mailto:info@mzrza.ru">info@mzrza.ru</a> или через форму</div>
						</div>
						<div class="price-col col-6">
							<form action="/ajax/schemes_form.php" method="POST"  class="form contacts-form">
								<?=bitrix_sessid_post()?>
								<div class="contacts-form-body form-body">
									
									<div class="feedback-form-input-wrapp clearfix">
										<div class="feedback-form-input-title">Ваше имя</div>
										<div class="form-block">
											<i class="alert">Введите Ваше имя</i>
											<input type="text" name="user_name"  class="input valid">
										</div>
									</div>
									<div class="feedback-form-input-wrapp clearfix">
										<div class="feedback-form-input-title">Телефон</div>
										<div class="form-block">
											<i class="alert">Введите телефон</i>
											<input type="tel" name="MESSAGE" class="input valid">
										</div>
									</div>
									<div class="feedback-form-input-wrapp clearfix">
										<div class="feedback-form-input-title">Эл. почта</div>
										<div class="form-block">
											<i class="alert">Введите Эл. почту</i>
											<input type="email"  name="user_email" class="input valid valid-email">
										</div>
									</div>
									
									<div class="feedback-form-input-wrapp clearfix">
										<div class="feedback-form-input-title">&nbsp;</div>
										<div class="form-block">
											<button type="submit" class="btn submit" formnovalidate>Отправить</button>
										</div>
									</div>
								</div>
								<div class="contacts-form-done form-done">
									<div class="section-title">Ваша заявка принята</div>
									<div class="form-done-text">Менеджер свяжется с Вами в течение 12 часов</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>