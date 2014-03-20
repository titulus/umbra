$(document).ready(function(){
	function changePage(){
		$('.active').fadeOut('fast',function(){
			console.log('active faded');
			$(this).removeClass('active');
			var hash = (window.location.hash)?window.location.hash:'#start';
			console.log(hash);
			$(hash).fadeIn('fast').addClass('active');
		})
	}

	var alreadydone=false;
	window.onpopstate = function(){
		changePage();
		alreadydone=true;
	}
		setTimeout(function() {
			if (!alreadydone) window.onpopstate();        
	    }, 1);
});