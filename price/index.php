<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Опросный лист");
?>

	<div class="page">
		<div class="page-content">
			<div class="container">
				<h1 class="page-title"><?$APPLICATION->ShowTitle(false);?></h1>
				<div class="content-text">
					<div class="price-head-text">Опросный лист — это документ, в котором собраны подробные сведения о задаче клиента. На основе этого описания наши специалисты составляют технико-коммерческое предложение и проектируют измерительную систему. </div>
					<div class="price-row row">
						<div class="price-col col-6">
							<div class="price-download">
								<a href="#" class="price-download-link">
									<span class="price-download-link-name">Опросный лист</span>
									<span class="price-download-link-type">.DOC</span>
								</a>
								<div class="price-download-size">62 кб</div>
							</div>
							<div class="price-download-desc">Заполненный опросный лист можно отправить по электронной почте <a href="mailto:orders@mzrza.ru">orders@mzrza.ru</a> или через форму</div>
						</div>
						<div class="price-col col-6">
							<form action="/ajax/price_form.php" method="POST"  class="form contacts-form">
								<?=bitrix_sessid_post()?>
								<div class="contacts-form-body form-body">
									<h3 class="section-title">Отправить опросный лист</h3>
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
										<div class="feedback-form-input-title">Опросный лист</div>
										<div class="form-block">
											<i class="alert alert-left">Прикрепите опросный лист</i>
											<div class="file-wrapp">
												<input type="file" id="file" name="doc" class="file-input valid" multiple data-multiple="{count} Files">
												<label for="file" class="file-input-label clearfix">
													<span class="file-btn">Выбрать файл</span>
													<span class="file-title"></span>
												</label>
											</div>
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