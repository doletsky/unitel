'use strict';

$(document).on('ready', function(){
var state = 'arch';
	if (window.Event)
	document.captureEvents(Event.MOUSEUP);
	 
	 $('#mail-input').hide();
	 
	$("#i-aggree input").click(function(){
		if( $(this).prop('checked') ){
			$(".contact_form button").prop("disabled",false);
		}
		else{
			$(".contact_form button").prop("disabled",true);	
		}
	});
	 
	function nocontextmenu() {
		event.cancelBubble = true, event.returnValue = false;
	 
		return false;
	}
	 
	function norightclick(e) {
		if (window.Event) {
			if (e.which == 2 || e.which == 3) return false;
		}else if (event.button == 2 || event.button == 3) {
			event.cancelBubble = true, event.returnValue = false;
			return false;
		}
	}
	 
	if (document.layers)
		document.captureEvents(Event.MOUSEDOWN);
	 
	document.oncontextmenu = nocontextmenu;
	document.onmousedown = norightclick;
	document.onmouseup = norightclick;
	document.onkeydown = function(e) {
		e = e || window.event;
		if((e.ctrlKey && e.keyCode == 85) | (e.ctrlKey && e.keyCode == 83) | (e.ctrlKey && e.keyCode == 123))  {
			return false;
		}
		return true;
	}

	function preventSelection(element){
  var preventSelection = false;

  function addHandler(element, event, handler){
    if (element.attachEvent) 
      element.attachEvent('on' + event, handler);
    else 
      if (element.addEventListener) 
        element.addEventListener(event, handler, false);
  }
  function removeSelection(){
    if (window.getSelection) { window.getSelection().removeAllRanges(); }
    else if (document.selection && document.selection.clear)
      document.selection.clear();
  }
  function killCtrlA(event){
    var event = event || window.event;
    var sender = event.target || event.srcElement;

    if (sender.tagName.match(/INPUT|TEXTAREA/i))
      return;

    var key = event.keyCode || event.which;
    if (event.ctrlKey && key == 'A'.charCodeAt(0))  // 'A'.charCodeAt(0) РјРѕР¶РЅРѕ Р·Р°РјРµРЅРёС‚СЊ РЅР° 65
    {
      removeSelection();

      if (event.preventDefault) 
        event.preventDefault();
      else
        event.returnValue = false;
    }
  }
}
	
});
/* cover img */

function coverImg(img, position, size){
	img = $(img);
	img.css('display','none');
	position = position || img.data('position') || 'center center';
	size = size || img.data('size') || 'cover';
	img.each(function(){
		var t = $(this),
			src = t.attr('src');
		t.parent().css({
			'background':'url('+ src +') ' + position,
			'background-size': size
		})
	})
}
coverImg('.main-slide-img, .casese-slide-img, .decision-link-img');
coverImg('.item-head-img img');
coverImg('.support-footer-img');


/* sliders */

$('.main-slider').slick({
	accessibility: false,
	adaptiveHeight: true,
	dots: true,
	arrows: false,
	useTransform: true,
	speed: 800
});

$('*').on( 'mousewheel DOMMouseScroll', '.select2-results>ul', function (e) {
    var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
    this.scrollTop += ( delta < 0 ? 1 : -1 ) * 30;
    e.preventDefault();
});

$('.open_user_popup').on('click', function(e){
	e.preventDefault();
    $('.info_before h3').text($(this).data('name'));
    $('#popup_title').val($(this).data('name'));
	$('.unser_info_popup_box').fadeIn(300);
});

$('a.proj_link').fancybox();

$('.form_new .your_contacts input').on('blur',function(){
	var val = $(this).val();
	if(val == ''){
		$(this).parent().find('p.req').show();
	}else{
		$(this).parent().find('p.req').hide();
	}
});

$('#price_request_form .btn.reset').on('click', function(){
	$('select option').prop('disabled', false);
	$('select').val(null).trigger("change");
	$('select').removeAttr('disabled');
	$('.config_item p.uniq').hide();
	$('.code_conf .conf_list .conf_item').text('');
	$('.number_conf .number_item').text('1');
	$('#number_select').val('1');
	$('select').select2();
});

$('.user_type_select_wrap select').on('select2:open', function(){
	var selected_option = $(this).val();
	if(selected_option == null){
		$(this).parent().find('p.req').show();
	}else{
		$(this).parent().find('p.req').hide();
		$('#input_for_user_type').val(selected_option);
	}
	console.log(selected_option);
});

$('.user_type_select_wrap select').on('select2:select', function(){
	var selected_option = $(this).val();
	if(selected_option == ''){
		$(this).parent().find('p.req').show();
	}else{
		$(this).parent().find('p.req').hide();
		$('#input_for_user_type').val(selected_option);
	}
});

$('#number_select').on('change', function(){
	var val = $(this).val();
	if(val > 50){
		$('#number_select').val(50);
		var val = $(this).val();
		$('.number_item').text(val);
		$('.number_select_li').text(val);
	} else{
		$('.number_item').text(val);
		$('.number_select_li').text(val);
	}
	
});

$('.config_select select').on('select2:select', function(){
	var val = $(this).val();
	var id = $(this).attr('id');
	$('#'+id+'_conf').text(val);
});


$('.close_tnx_container a').on('click', function(e){
	e.preventDefault();
	$('.form-done').hide();
});

$(window).on('scroll', function(){
	var st = $(this).scrollTop();
	if (st>=300) {
	    $('.scrolldown').fadeOut(300);
	  } else {
	    $('.scrolldown').fadeIn(300);
	  }
});

function scrollFade(){
	$('.scrolldown').fadeOut(300);
}

$('input[type="phone"]').mask("+7(999)999-99-99");

$('.form_new .your_contacts input[name="user_name"], .form_new .your_contacts input[name="user_dol"]').on('keyup', function(){
	this.value = this.value.replace(/^[a-zA-Z0-9]*$/i, "");
});

$('.popup_user_form input[name="popup_name"], .popup_user_form input[name="popup_dolz"]').on('keyup', function(){
	this.value = this.value.replace(/^[a-zA-Z0-9]*$/i, "");
});

$('.unser_info_popup .close_popup').on('click', function(){
	$('.unser_info_popup_box').fadeOut(300);
});


$('.unser_info_popup .popup_user_form .btn').on('click', function(){
    console.log('submit');
    if(validate($('.popup_user_form'))){
        $('.popup_user_form').ajaxSubmit({
            clearForm: true,
            success: success
        });
        $('.info_before').hide();
        $('.info_after').fadeIn(300);
    }
});

$('.form_new .your_contacts input[type="email"]').on('keyup', function(){
	var valid = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(this.value);
    if(valid == true){
    	$(this).parent().find('p.req').hide();
    } else{
    	$(this).parent().find('p.req').show();
    }
});



$('.scrolldown').on('click', function(){
	$("html, body").animate({ scrollTop: $('.slick-dots').offset().top }, 1000);
	setTimeout(scrollFade, 1000);
});

$('.cases-slider').slick({
	accessibility: false,
	dots: true,
	arrows: false,
	useTransform: true,
	speed: 800
})

$('.item-slider').slick({
	accessibility: false,
	dots: false,
	arrows: false,
	useTransform: true,
	speed: 0,
	swipeToSlide: false,
	swipe: false,
	draggable: false
})


$('.main_prod_slider').slick({
	arrows: false,
	dots: true,
	autoplay: true,
	autoplaySpeed: 4000,
});

if(window.location.href.indexOf("voltage_id=16") > -1) {
    $('#for_tech').show();
    $('.case_right_text').hide();
} else{
	$('#for_tech').hide();
}

if(window.location.href.indexOf("dealers") > -1) {
    $('h1.page_title').hide();
}
if(window.location.href.indexOf("rza-110-220kv-mrz-3") > -1){
	$('.form_new .your_contacts').hide();
	$('.your_config').hide();
	$('.code_conf h3').hide();
	$('.number_conf').hide();
	$('#price_request_form .btn').hide();
}
if(window.location.href.indexOf("back_url_admin") > -1){
	$('body').addClass('logged');
}

if(window.location.href.indexOf("rza-6-35-kv-mrz-3l3") > -1) {
	$('.config_item:last-child').css({'padding-top':'0'});
    $('#mrz_type_select option').attr('disabled', 'disabled');
    $('#mrz_type_select').attr('disabled', 'disabled');
    $('#mrz_block_select option').attr('disabled', 'disabled');
    $('#mrz_block_select').attr('disabled', 'disabled');
    $('#type_of_function_select_conf').text('МРЗ-3Л3');
    $('#nominal_tok_select_conf').text('Ior1');
    $('#diapazon_select_conf').text('PS3');
    $('#nominal_tok_select').val('Ior1').change();
    $('#nominal_tok_select').attr('disabled', 'disabled');
    $('#price_request_form .btn.reset').on('click', function(){

    	$('#mrz_block_select option').prop('disabled', false);
    	$('#mrz_block_select').val('PS3').change();

    	$('#mrz_type_select option').prop('disabled', false);
    	$('#mrz_type_select').val('МРЗ-3Л3').change();

    	$('#nominal_tok_select option').prop('disabled', false);
    	$('#nominal_tok_select').val('Ior1').change();

	    $('#nominal_tok_select').attr('disabled', 'disabled');
    	$('#mrz_type_select').attr('disabled', 'disabled');
    	$('#mrz_block_select').attr('disabled', 'disabled');
    	$('#type_of_function_select_conf').text('МРЗ-3Л3');
	    $('#diapazon_select_conf').text('PS3');
	    $('#nominal_tok_select_conf').text('Ior1');

    });
}

$('img.svg').each(function(){
    var $img = $(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('data-src');

    $.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = $(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

});
$('.item_front').addClass('animated');
$('.item-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
  var N = slick.slideCount;
  var back_slide = parseInt($('#back_slide_number').val());
  var halfN = Math.floor(N/2);
  console.log(typeof back_slide);
  console.log(currentSlide);

  if (nextSlide == 0 || nextSlide == 1 || nextSlide == 2 || nextSlide == 3 || nextSlide == N || nextSlide == N-1 || nextSlide == N-2 || nextSlide == N-3 || nextSlide == N-4) {
  	$('.item_front').fadeIn(200);
  	$('.item_front').addClass('animated');
  } else{
  	$('.item_front').fadeOut(200);
  	$('.item_front').removeClass('animated');
  }
  if (nextSlide == back_slide || nextSlide == back_slide - 1){
  	$('.item_back').fadeIn(200);
  } else{
  	$('.item_back').fadeOut(200);
  }
});

$('select').select2();
$('.user_type_select').select2({
	allowClear: true,
    placeholder:"Тип запроса"
});
$('.config_item select').on('select2:select', function(){
	var select_id = $(this).attr('id');
	var data = $(this).find('option:selected').val();
	console.log(data);
	console.log(select_id);
	if( select_id == 'type_of_function_select'){
		if(data == 'В' || data == 'СВ2' || data == 'Д1' || data == 'Л1'){
			$('#diapazon_select option').attr('disabled', 'disabled');
			$('#diapazon_select option[value="1"]').removeAttr('disabled');
			$('#diapazon_select option[value="2"]').removeAttr('disabled');
			$('#diapazon_select option[value="3"]').removeAttr('disabled');
			$('#klem_block_select option[value="2"]').attr('selected', 'selected');
			$('#klem_block_select').val('2').change();
			$('.conf_klem_block').text('2');
			$('#klem_block_select').attr('disabled', 'disabled');
			$('#klem_block_select').parent().find('p.uniq').fadeIn(100);
		} else{
			$('#klem_block_select').removeAttr('disabled');
			$('#klem_block_select').val('1').change();
			$('.conf_klem_block').text('1');
			$('#klem_block_select option[value="1"]').attr('selected', 'selected');
			$('#klem_block_select').parent().find('p.uniq').fadeOut(100);
			$('#diapazon_select option').removeAttr('disabled');
			$('#diapazon_select').select2("destroy").select2();
		}
		if(data == 'Л3' || data == 'СВ' || data=='Д2'){
			$('#diapazon_select option').attr('disabled', 'disabled');
			$('#diapazon_select option[value="1"]').removeAttr('disabled');
			$('#diapazon_select option[value="2"]').removeAttr('disabled');
			$('#diapazon_select option[value="3"]').removeAttr('disabled');
		}
		if(data == 'Л2'){
			$('#diapazon_select option').attr('disabled', 'disabled');
			$('#diapazon_select option[value="5"]').removeAttr('disabled');
			$('#diapazon_select option[value="6"]').removeAttr('disabled');
			$('#diapazon_select option[value="7"]').removeAttr('disabled');
		}
		if(data == 'ТН'){
			$('#diapazon_select option[value="9"]').attr('selected', 'selected');
			$('#diapazon_select').val('9').change();
			$('.conf_diapazon').text('9');
			$('#diapazon_select').attr('disabled', 'disabled');
		} else{
			$('#diapazon_select').removeAttr('disabled');
			$('#diapazon_select').select2("destroy").select2();
		}
		if(data == 'ДЗЛ' || data == 'ДЗТ' || data == 'ДЗД' || data == 'ПУ'){
			$('#diapazon_select option').attr('disabled', 'disabled');
			$('#diapazon_select option[value="1"]').removeAttr('disabled');
			$('#diapazon_select option[value="2"]').removeAttr('disabled');
			$('#diapazon_select option[value="3"]').removeAttr('disabled');
			$('#diapazon_select').select2("destroy").select2();
		}
	}
	if(select_id == 'klem_block_select'){
		if(data == '2'){
			$('#type_of_function_select').select2("destroy").select2();
			$('#type_of_function_select option').attr('disabled', 'disabled');
			/*$('#type_of_function_select option[value="В"]').attr('selected','selected');*/
			$('#type_of_function_select option[value="В"]').removeAttr('disabled');
			$('#type_of_function_select option[value="СВ"]').removeAttr('disabled');
			$('#type_of_function_select option[value="Д1"]').removeAttr('disabled');
			$('#type_of_function_select option[value="Л1"]').removeAttr('disabled');
			/*$('#type_of_function_select').val('В').change();*/
			/*$('.conf_type_of_function').text('В');*/
			$('#type_of_function_select').parent().find('p.uniq').fadeIn(100);
		} else{
			$('#type_of_function_select option').removeAttr('disabled');
			$('#type_of_function_select').select2("destroy").select2();
			$('#type_of_function_select').parent().find('p.uniq').fadeOut(100);
		}
		
	}
	if(select_id == 'diapazon_select'){
		if(data == '1' || data == '2' || data == '3'){
			$('#type_of_function_select option').attr('disabled', 'disabled');
			/*$('#type_of_function_select option[value="В"]').attr('selected','selected');*/
			$('#type_of_function_select option[value="В"]').removeAttr('disabled');
			$('#type_of_function_select option[value="СВ2"]').removeAttr('disabled');
			$('#type_of_function_select option[value="Д1"]').removeAttr('disabled');
			$('#type_of_function_select option[value="ДЗЛ"]').removeAttr('disabled');
			$('#type_of_function_select option[value="ДЗТ"]').removeAttr('disabled');
			$('#type_of_function_select option[value="ДЗД"]').removeAttr('disabled');
			$('#type_of_function_select option[value="ПУ"]').removeAttr('disabled');
			/*$('#type_of_function_select').val('В').change();
			$('.conf_type_of_function').text('В');*/
		}
		if(data == '9'){
			$('#type_of_function_select option[value="ТН"]').attr('selected', 'selected');
			$('#type_of_function_select').val('ТН').change();
			$('.conf_type_of_function').text('ТН');
			$('#type_of_function_select').attr('disabled','disabled');
		} else{
			$('#type_of_function_select').removeAttr('disabled');
			$('#type_of_function_select').select2("destroy").select2();
		}
	}
});

$('.item-slider-wrapp').on('mousedown', function(event) {
	var mousePosX = event.pageX,
		mouseInterval = 5;
	$(this).on('mousemove', function(event){
		event.preventDefault();
		if (event.pageX - mousePosX >= mouseInterval){
			$('.item-slider').slick('slickPrev');
			mousePosX = event.pageX;
		}else if(mousePosX - event.pageX >=mouseInterval){
			$('.item-slider').slick('slickNext');
			mousePosX = event.pageX;
		}
		showInfo();
	});
});

$('.scroll_top').on('click',function(){
	console.log('clicked_top');
	$("html, body").animate({ scrollTop: 0 }, 1000);
    return false;
});

$(window).scroll(function(){
  var vh = $(window).height();
  var st = $(this).scrollTop();
  if (st>=(vh/3)) {
    $('.scroll_top').fadeIn(300);
  } else {
    $('.scroll_top').fadeOut(300);
  }
});
$('.gm-style-iw').parent().addClass('map_descr');

$('.item-slider-wrapp').on('mouseup mouseleave', function() {
	$('.item-slider-wrapp').off('mousemove');
	showInfo(true);
});

$('.form_confirm_btns .no').on('click', function(){
	$('.form-done').removeClass('active');
	$('.form-done').fadeOut(300);
});



function showInfo(end){
	if(end){
		$('[class^=item-slider-info--]').removeClass('active');
		return;
	}
	// var slideNum = +$('.item-slide.slick-current').data('slick-index');
	// $('[class^=item-slider-info--]').removeClass('active');
	// if(slideNum >= 0 && slideNum < 15){
		// $('.item-slider-info--left-top').addClass('active');
	// }
	// if(slideNum >= 15 && slideNum < 30){
		// $('.item-slider-info--left-bottom').addClass('active');
	// }
	// if(slideNum >= 30 && slideNum < 45){
		// $('.item-slider-info--right-top').addClass('active');
	// }
	// if(slideNum >= 45 && slideNum < 61){
		// $('.item-slider-info--right-bottom').addClass('active');
	// }
	$('[class^=item-slider-info--]').addClass('active');
}

/* form */

function validateEmail(email) {
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}

function validate(form){
	var inputs = form.find('.valid'),
		test = [],
		email = form.find('.valid-email'),
		emailVal = email.val(),
		result = true;
	inputs.each(function(){
		if(!$(this).val()){
			$(this).closest('.form-block').addClass('form-block-alert');
			test.push(0);
		}
	})
	for(var i = 0; i < test.length; i++){
		if(test[i] === 0) result = false;
	}
	if(!validateEmail(emailVal) && email.length > 0){
		email.closest('.form-block').addClass('form-block-alert');
		result = false; 
	}
	return result;
}


function gatherInputsValues(values, elements)
{
    if(elements)
    {
        for(var i = 0; i < elements.length; i++)
        {
            var el = elements[i];
            if (/*el.disabled ||*/ !el.type)
                continue;

            switch(el.type.toLowerCase())
            {
                case 'text':
                case 'email':
                case 'number':
                case 'textarea':
                case 'password':
                case 'hidden':
                case 'select-one':
                    if(el.value.length)
                        values[values.length] = {name : el.name, value : el.value};
                    break;
                case 'radio':
                case 'checkbox':
                    if(el.checked)
                        values[values.length] = {name : el.name, value : el.value};
                    break;
                case 'select-multiple':
                    for (var j = 0; j < el.options.length; j++)
                    {
                        if (el.options[j].selected)
                            values[values.length] = {name : el.name, value : el.options[j].value};
                    }
                    break;
                default:
                    break;
            }
        }
    }
};


function values2postStr(values) {
    var post = [];
    var current = post;
    var i = 0;

    while(i < values.length)
    {
        var p = values[i].name.indexOf('[');
        if(p == -1)
        {
            current[values[i].name] = values[i].value;
            current = post;
            i++;
        }
        else
        {
            var name = values[i].name.substring(0, p);
            var rest = values[i].name.substring(p+1);
            if(!current[name])
                current[name] = [];

            var pp = rest.indexOf(']');
            if(pp == -1)
            {
                //Error - not balanced brackets
                current = post;
                i++;
            }
            else if(pp == 0)
            {
                //No index specified - so take the next integer
                current = current[name];
                values[i].name = '' + current.length;
            }
            else
            {
                //Now index name becomes and name and we go deeper into the array
                current = current[name];
                values[i].name = rest.substring(0, pp) + rest.substring(pp+1);
            }
        }
    }

    var str = '',
        first = true;
    for( var ind in post ){
        if( typeof post[ind] == 'object' ){
            var i = 0;
            for( var ind2 in post[ind] ){
                str += (first?'':'&')+ind+'['+(i++)+']'+'='+post[ind][ind2];
                first = false;
            }
        }else{
            str += (first?'':'&')+ind+'='+post[ind];
        }
        first = false;
    }

    return str;
}


$('.form:not(#price_request_form)').on('submit', function() {
    console.log('here');
    if(validate($(this))){
		$(this).ajaxSubmit({
			clearForm: true,
			success: success
		});
		$(this).addClass('active').find('[type="submit"]').attr('disabled',true).addClass('disabled');
	}
	return false;
});

$(".perechen").click(function(){
	$("#is-perechen").val("1");
	var $form = $(this).closest("form");


	if(validate($form)){

        var values = [];
        gatherInputsValues(values, $form.find('input, select, button, textarea'));
        $.ajax({
            url: $form.attr('action'),
            data: values,
            method: 'POST',
            success: successWord
        });

        /*$form.ajaxSubmit({
            success: successWord
        });*/
		$form.addClass('active').find('[type="submit"]').attr('disabled',true).addClass('disabled');
	}
	else{
		$('.form_new .your_contacts input').each(function(){
			var val = $(this).val();
			if(val == ''){
				$(this).parent().find('p.req').show();
				$(this).focus();
			} else{
				$(this).parent().find('p.req').hide();
			}
		});
	}
	return false;
});


$('#price_request_form').on('submit', function(e) {
	e.preventDefault();
	if(validate($(this))){
		$('.form-done').addClass('active');
        var $container1 = $('.form-done .list-item.left-list');
        var $container2 = $('.form-done .list-item.right-list');
        $container1.html('');
        $container2.html('');
        $container1.append('<ul></ul>');
        var i = 1;
        $('.config_item').each(function(){
            var id = $(this).find('select').attr('id');
            var text = $(this).find('.select2-selection__rendered').text();

            console.log($(this).find('select').closest('.config_item'));
            console.log($(this).find('select').closest('.config_item').find('>p'));
            console.log($(this).find('select').closest('.config_item').find('>p').text());

            var title = $(this).find('select').closest('.config_item').find('>p').text();

			if( !title.length )
				return;
            if( i < 8 ){
                $container1.find('ul').append('<li>'+title+': <span class="mrz_type_select_li">'+text+'</span></li>');
			}else {
            	if( i == 8 ){
                    $container2.append('<ul></ul>');
				}
				$container2.find('ul').append('<li>'+title+': <span class="mrz_type_select_li">'+text+'</span></li>');

			}
            //$container.append('<li>'+$(this).find('select').closest('.config_item').find('>p').text()+'<span class="mrz_type_select_li">'+text+'</span></li>');
            //$('.form-done ul li span.'+id+'_li').text(text);
			i++;
        });
        if( i >= 8 ){
        	if( i == 8 ){
            	$container2.append('<ul></ul>');
			}
            $container2.find('ul').append('<li>'+i+'. Количество устройств: <span class="mrz_type_select_li">'+$('#number_select').val()+'</span></li>');
		}else{
            $container1.find('ul').append('<li>'+i+'. Количество устройств: <span class="mrz_type_select_li">'+$('#number_select').val()+'</span></li>');
		}


		$('.confirm_conf').text('');
		$('.code_conf .conf_list .conf_item').each(function() {
			var this_val = $(this).text();
			$('.confirm_conf').append(this_val +' ');
		});
		$('.code_conf .conf_list .conf_item').each(function(){
			var val = $(this).text();
			if(val == ''){
				$('.your_config p.red').css({'visibility':'visible'});
				$('.form-done').hide();
				console.log(1);
				e.preventDefault();
			} else{
				$('.your_config p.red').css({'visibility':'hidden'});
				$('.form-done').show();
				console.log(2);
			}
			console.log(val);
		});
		var dop_message = $('.config_item:last-child textarea').val();
		console.log(dop_message);
		$('.is_message .message').text(dop_message);
		
	} else{
		$('.form_new .your_contacts input').each(function(){
			var val = $(this).val();
			if(val == ''){
				$(this).parent().find('p.req').show();
				$(this).focus();
			} else{
				$(this).parent().find('p.req').hide();
			}
		});
	}
});


$('.item-form-done .no').on('click', function(){
	$('.item-form-done').removeClass('active');
});

$('.item-form-done .yes').on('click', function(){
	$("#is-perechen").val("");

    console.log('here');
    $('#price_request_form').ajaxSubmit({
		clearForm: true,
		success: success
	});
	$('.is_right').hide();
	$('.send_confirmed').show();
	$('.config_select select').val('').change();
	setTimeout(function(){
		$('.item-form-done').removeClass('active');
		$('.is_right').show();
		$('.send_confirmed').hide();
		$("html, body").animate({ scrollTop: 0 }, 1000);
	}, 3000);
});

function success(data){
	console.log(data);
	if($('.form.active').hasClass('price_request_form')){
		$('.item-form-done').html(data);
	}
	
	/*$('[type="submit"].disabled').removeAttr('disabled',true).removeClass('disabled').remove();*/
	$('.form.active').find('.form-done, .form-body').addClass('active');
	$('.form.active').removeClass('active');
}
function successWord(data){
	$("#price_request_form").removeClass('active').find('[type="submit"]').removeAttr('disabled').removeClass('disabled');
	window.location.replace('/word/'+data);
}

$(document).on('click',function(){
	$('.form-block').removeClass('form-block-alert');
})

/* subscription form */

$('.main-widget-subscription-form').on('submit', function(){
	$('.form-body').fadeOut(300);
	$('.main-widget-subscription .main-widget-title').fadeOut(300);
	$('.main-widget-subscription-desc').fadeOut(300);
	$('.main-widget-subscription-icon').addClass('submited')
	$('.form-done-check').append('. На Вашу почту выслан e-mail с активацией подписки.');
});
$('.main-widget-subscription-form-input').on('keyup', function(){
	var value = $(this).val();
	$('.main-widget-subscription-form-input-done').text(value);
})

/* srars */

$('.star-block').each(function(){
	var star = $(this).find('span'),
		starNum = +star.data('star');
	switch(starNum){
		case 0 : star.width(0); break;
		case 1 : star.width('20%'); break;
		case 2 : star.width('40%'); break;
		case 3 : star.width('60%'); break;
		case 4 : star.width('80%'); break;
		case 5 : star.width('100%');
	}
})

/* sly */

;(function(){
	
	$('.decision-row').each(function(){
		var options = {
			horizontal: 1,
			itemNav: 'basic',
			smart: 1,
			activateMiddle: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 0,
			scrollBar: $(this).closest('.decision-content').find('.decision-scrollbar'),
			scrollBy: 0,
			speed: 300,
			elasticBounds: 1,
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,
		};
		$(this).sly(options);
	})
	

	$(window).on('resize',function(){
		$('.decision-row').each(function(){
			$(this).sly('reload');
		})
	})
})();

/* tabs */

$('.tabs-nav a').click(function(){
	var t = $(this),
		li = t.parent(),
		tab = t.attr('href'),
		tabs = t.closest('.tabs-nav').data('tabs');
	if(li.hasClass('active')) return false;
	t.closest('.tabs-nav').find('li').removeClass('active');
	$(tabs).find('.tab-block').removeClass('active');
	li.addClass('active');
	$(tab).addClass('active');
	$('.form-block').removeClass('form-block-alert');
	$.fancybox.update();
	return false;
})

/* file */

;(function(){
	var inputs = document.querySelectorAll( '.file-input' );
	Array.prototype.forEach.call( inputs, function( input ){
		var label = input.nextElementSibling.querySelector('.file-title'),
			labelVal = label.innerHTML;
		input.addEventListener( 'change', function( event ){
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = event.target.value.split( '\\' ).pop();
			if( fileName ){
				label.innerHTML = fileName + '<span class="file-del"></span>';
			}else{
				label.innerHTML = labelVal;
			}
				
		});
	});
	
})();

$(document).on('click', '.file-del', function(event){
	event.stopPropagation();
	event.preventDefault();
	$(this).closest('.file-wrapp').find('.file-input').val('');
	$(this).closest('.file-wrapp').find('.file-title').text('');
})

/* feedback form */

$(window).on('load', function(){
	if($('.main-page').length){
		$('.main-page .feedback').css('top', $('.main-widgets').offset().top)
	}
	if($('.feedback').length){
		$('.feedback').data('top', $('.feedback').offset().top)
	}
})

$(window).on('scroll', function(){
	var breakpoint = $('.feedback').data('top') - 60,
		scroll = $(this).scrollTop();
	if(scroll >= breakpoint){
		$('.feedback').addClass('fixed');
	}else{
		$('.feedback').removeClass('fixed');
	}
})

$(window).on('load resize', function(){
	$('.feedback-form').css('height', 'auto');
	$('.feedback-form').css('height', $('.feedback-form').innerHeight() + 'px');
})

$('.feedback-btn').on('click', function(){
	if($(this).hasClass('active')){
		$('.feedback').addClass('animated');
		$('.feedback').toggleClass('active');
        $('.form.feedback-form').attr('action','/ajax/contacts_feedback_form.php');
		setTimeout(function(){
			$('.feedback').removeClass('animated');
		},500)
	}else{
		$('.feedback').addClass('animated');
		$('.feedback').toggleClass('active');
		setTimeout(function(){
			$('.feedback').removeClass('animated');
		},500)
	}
	$(this).toggleClass('active');
	
})
$('#support_study').on('click', function(){
    $('.feedback-btn').click();
    $('.active .form.feedback-form').attr('action','/ajax/to_seminar_feedback_form.php');
    return false;
});

/* scroll to */

function scrollTo(to, speed, offset){
	if(!to) return;
	offset = offset || 0;
	speed = speed || 1000;
	$('html, body').stop().animate({
		scrollTop: $(to).offset().top - offset
	}, speed);
}

$('.btn-scroll').on('click', function(){
	var to = $(this).attr('href') || $(this).data('href');
	scrollTo(to, 2000);
	return false;
})

/* modal */

$('.fancybox-group, .fancybox').fancybox({
	openEffect: 'elastic',
	closeEffect: 'none',
	wrapCSS: 'fancybox-group-wrapp',
	prevEffect: 'none',
	nextEffect: 'none',
	margin: 60,
	padding: 0,
	tpl: {
		wrap     : '<div class="fancybox-wrap" tabIndex="-1">' +
			'<a class="fancybox-item fancybox-close" href="javascript:;"></a>' +
			'<div class="fancybox-skin">' +
				'<div class="fancybox-outer">' +
					'<div class="fancybox-inner"></div>' +
				'</div>' +
			'</div>' +
		'</div>',
		closeBtn : '',
		next     : '<a class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
		prev     : '<a class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
	}
});

$(document).on('click', '.fancybox-close', function(){
	$.fancybox.close(true);
})

/* height */

function setHeight(selector, row, breakpoint){
	breakpoint = breakpoint || 0;
	function setHeightBlocks(){
		var parent = $(selector).closest(row);
		parent.each(function(){
			var t = $(this),
				blocks = t.find(selector),
				height = 0;
			blocks.css('height','auto');
			blocks.each(function(){
				var t = $(this),
					heightBlock = t.innerHeight();
				if(heightBlock > height){
					height = heightBlock;
				}
			})
			blocks.css('height',height + 'px')
		})
	}
	if($(window).width() > breakpoint){
		setTimeout(setHeightBlocks,0);
	}else{
		$(selector).css('height','auto');
	}
}

$(window).on('load resize', function(){
	setHeight('.case-col-block-img', '.case-row');
	setHeight('.partner-logo', '.partners-row');
	setHeight('.series-col', '.series-row');
	setHeight('.item-spec-col .section-title', '.item-spec-row');
})

/* modal */

$('.btn-modal').on('click', function(){
	var t = $(this),
		href = t.data('href') || t.attr('href');
	$.fancybox(href,{
		padding: 0,
		wrapCSS: 'modal-wrapp',
		margin: 20,
		fitToView: false,
		openEffect : 'none',
		closeEffect : 'none',
		helpers: {
			overlay : {
				css: {
					background: 'transparent'
				}
			}
		},
		tpl:{
			closeBtn: ''
		}
	})
	return false;
})

/* footer */

function footer2bottom() {
	var footer = $('.footer');
	footer.css('margin-top', 'auto');
	if ($('body').innerHeight() < $(window).innerHeight()) {
		var fmargin = $(window).innerHeight() - footer.offset().top - footer.innerHeight();
		footer.css('margin-top', fmargin-1 + 'px');
	}
}

footer2bottom();
$(window).on('load resize', footer2bottom);

$(document).on('ready', function(){

	$('.article-gallery-fancy').fancybox();

	$('.article-gallery').slick({
		slidesToShow: 1,
	    slidesToScroll: 1,
		arrows: false,
		dots: false,
		asNavFor: '.article-gallery-nav'
	});

	$('.article-gallery-nav').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  asNavFor: '.article-gallery',
	  dots: false,
	  arrows: true,
	  centerMode: false,
	  focusOnSelect: true,
	  centerPadding: '60px',
	  infinite: true
	});

	$('.has_sub').on('mouseover', function(){
		$(this).find('.under_sub_menu').show();
	});
	$('.has_sub').on('mouseleave', function(){
		$(this).find('.under_sub_menu').hide();
	});
});