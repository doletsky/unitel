$(document).ready(function(){
	var h = $(window).height(),
			h1 = screen.height-500,
			isNumber = false;

	
	$(window).scroll(function(){
		//console.log( parseInt($(this).scrollTop()+h1) +' ! '+$(".item-spec .item-spec-block-cell").offset().top);
		if( $(".item-spec .item-spec-block-cell").offset() && ($(window).scrollTop()+h1) >= $(".item-spec .item-spec-block-cell").offset().top && !isNumber) {
			$(".item-spec .item-spec-block-cell span").each(function(){
				var $number = parseInt($(this).text());
				$(this).animateNumber({
					number: $number
				},500);
				isNumber = true;
			});
		}


		$(".bounce-in-left,.bounce-in-right").each(function(){
			var $this=$(this);
			if ( ($(window).scrollTop()+h1) >= $this.offset().top) {
				if($this.hasClass("bounce-in-left")){
					$this.addClass("animated fadeInUp bounceInUp");
				}
				if($this.hasClass("bounce-in-right")){
					$this.addClass("animated fadeInUp bounceInUp");
				}
			}
		}); 
		
		
		if ( $(window).scrollTop() == 0 ) {
			$(".bounce-in-left,.bounce-in-right").each(function(){
				var $this=$(this);
				if($this.hasClass('animated')){
					$this.removeClass('animated bounceInLeft bounceInRight bounceInUp fadeInUp fadeInUpBig');
				}
			});
		}


	});



});