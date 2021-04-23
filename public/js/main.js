$(".step").click( function() {
	$(this).addClass("active").prevAll().addClass("active");
	$(this).nextAll().removeClass("active");
});

$(".step01").click( function() {
	$(".discovery").addClass("active").siblings().removeClass("active");
});

$(".step02").click( function() {
	$(".strategy").addClass("active").siblings().removeClass("active");
});

$(".step03").click( function() {

	$(".creative").addClass("active").siblings().removeClass("active");
});