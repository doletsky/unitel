<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Сервисный центр");
?><div class="page">
	<div class="page-content">
		<div class="container">
			<h1 class="page-title">Сервисный центр</h1>
			<?$APPLICATION->IncludeComponent("bitrix:menu", "submenu", Array(
					"COMPONENT_TEMPLATE" => ".default",
					"ROOT_MENU_TYPE" => "submenu",	// Тип меню для первого уровня
					"MENU_CACHE_TYPE" => "A",	// Тип кеширования
					"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
					"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
					"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
					"MAX_LEVEL" => "1",	// Уровень вложенности меню
					"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
					"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
					"DELAY" => "N",	// Откладывать выполнение шаблона меню
					"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
				),
				false
			);?>
			<div class="content-text">
				<div class="content-text-head">
					 ООО "МРЗ" на базе Сервисного Центра предоставляет услуги по Техническому Обслуживанию оборудования релейной защиты и автоматики собственного производства, а также осуществляет полное гарантийное и постгарантийное обслуживание поставляемого оборудования.
				</div>
				<div class="support-block clearfix">
					<div class="support-img">
 <img src="/img/support-img.jpg" alt="">
					</div>
					<div class="support-desc">
						<h3 class="section-title">Опытные сотрудники</h3>
						<div class="support-desc-text">
							<p>
								 Для выполнения работ по Техническому Обслуживанию оборудования РЗА привлекаются только специально обученные и сертифицированные сотрудники ООО "МРЗ", имеющие достаточный опыт работы с аппаратурой, чтобы обеспечить высокий уровень качества оказываемых услуг.
							</p>
							<p>
								 Все работы по Техническому Обслуживанию оборудования РЗА выполняются в строгом соответствии с требованиями технических регламентов, СНиП, ГОСТ Р, правил промышленной безопасности, свода правил по пожарной безопасности, действующих нормативных документов в отношении работ с повышенной опасностью и других нормативно-технических документов.
							</p>
						</div>
					</div>
				</div>
				<div class="support-service">
					<h3 class="section-title">Техническое обслуживание</h3>
					<div class="support-service-row row">
						<div class="support-service-col col-6">
							<div class="production-block-desc">
								<div class="production-block-desc-step">
									 1
								</div>
								<h3 class="production-block-desc-title">Регламентные работы</h3>
								<div class="production-block-desc-text">
									 Регламентные работы выполняются с выездом специалиста компании на объект установки оборудования согласно утвержденному плану-графику. Работы проводятся в соответствии с технологической картой на аппаратуру или оборудование и включают в себя перечень обязательных проверок, который согласовывается с Заказчиком для каждого типа оборудования отдельно.
								</div>
							</div>
						</div>
						<div class="support-service-col col-6">
							<div class="production-block-desc">
								<div class="production-block-desc-step">
									 2
								</div>
								<h3 class="production-block-desc-title">Аварийно-восстановительные</h3>
								<div class="production-block-desc-text">
									 Аварийно-восстановительные работы выполняются по заявкам. Для этого ООО "МРЗ" обеспечивает круглосуточную работу дежурного персонала для приема заявок при возникновении аварийной ситуации на обслуживаемом оборудовании и оперативную организацию выполнения работ по устранению неисправности (включая выходные и праздничные дни).&nbsp;
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>