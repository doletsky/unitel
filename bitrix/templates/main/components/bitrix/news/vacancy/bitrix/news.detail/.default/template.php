<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

?>
<div class="page">
		<div class="page-content">
			<div class="container">
				<div class="back-link-wrapp">
					<a href="<?=$arResult['LIST_PAGE_URL']?>" class="back-link"><i class="icon-angle-left"></i> Назад</a>
				</div>
				<h1 class="page-title">Вакансии</h1>
				<div class="vacancy-page">
					<div class="vacancy-page-head">
						<h3 class="section-title"><?=$arResult["NAME"]?></h3>
						<div class="vacancy-page-head-desc"><?echo $arResult["PREVIEW_TEXT"];?></div>
						<button data-href="#modal" class="vacancy-page-btn btn btn-white btn-modal">Откликнуться</button>
					</div>
					<div class="vacancy-page-row clearfix">
						<div class="vacancy-page-col vacancy-page-col-left">
							<div class="vacancy-page-block">
								<h3 class="vacancy-page-block-title">Должностные обязанности</h3>
								<div class="vacancy-page-block-text">
									<?echo $arResult["DETAIL_TEXT"];?>
								</div>
							</div>
						</div>
						<div class="vacancy-page-col vacancy-page-col-right">
							<div class="vacancy-page-block">
								<h3 class="vacancy-page-block-title">Требования</h3>
								<div class="vacancy-page-block-text">
								<?echo $arResult["DISPLAY_PROPERTIES"]['REQUIREMENTS']['~VALUE']['TEXT'];?>
								

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div id="modal" class="modal">
		<form action="/ajax/vacancy_form.php" method="POST" class="form feedback1-form" style="  height:400px;">
		 <?=bitrix_sessid_post()?>
			<div class="feedback-form-body form-body">
				<input type="hidden" name="vacancy" value="<?=$arResult["NAME"]?>">
				<h3 class="section-title">Откликнуться на вакансию</h3>
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
						<input type="email" name="user_email"  class="input valid valid-email">
					</div>
				</div>
				<div class="feedback-form-input-wrapp clearfix">
					<div class="feedback-form-input-title">Сообшение</div>
					<div class="form-block">
						<i class="alert">Введите сообшение</i>
						<textarea name="MESSAGE" class="textarea input valid"></textarea>
					</div>
				</div>
				<div class="feedback-form-input-wrapp clearfix">
					<div class="feedback-form-input-title">
						<p>Резюме
						<p class="feedback-form-input-title-desc">(doc, pdf, jpg)
					</div>
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
