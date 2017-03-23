$(document).ready(function(){
	$("#botona").click(function(){
		$("#years").toggle(1000)
	});
	$("#s2016").click(function(){
		$("#2016").toggle(1000)
	});
	$("#s2015").click(function(){
		$("#2015").toggle(1000)
	});
	$("#s2014").click(function(){
		$("#2014").toggle(1000)
	});
	$("#s2013").click(function(){
		$("#2013").toggle(1000)
	});
	$("#s2012").click(function(){
		$("#2012").toggle(1000)
	});
	$("#s2011").click(function(){
		$("#2011").toggle(1000)
	});
	$("#s2010").click(function(){
		$("#2010").toggle(1000)
	});
	$("#s2009").click(function(){
		$("#2009").toggle(1000)
	});
	$("#s2008").click(function(){
		$("#2008").toggle(1000)
	});
	$("#s2007").click(function(){
		$("#2007").toggle(1000)
	});
	$("#s2006").click(function(){
		$("#2006").toggle(1000)
	});
	$(".maps").mouseenter(function(){
		$(".maps iframe").css("pointer-events","none")
	});
	$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') ) {
        $(this).collapse('hide');
    	}
	});
	$('#Carouselexp').carousel({
  		interval: 4000
		});

	$('.carousel .item').each(function(){
  			var next = $(this).next();
  		if (!next.length) {
    		next = $(this).siblings(':first');
  		}
  		next.children(':first-child').clone().appendTo($(this));
  		for (var i=0;i<2;i++) {
    		next=next.next();
    		if (!next.length) {
      			next = $(this).siblings(':first');
    		}
    	next.children(':first-child').clone().appendTo($(this));
		}
	});
});
