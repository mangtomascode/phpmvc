jQuery.fn.vdte = function(){
	return this.each(function(){
		//$(this).css('border','1px solid red');
			$(this).blur(function(){
					alert(1);
		});
	});
}