$(document).ready( function()
{
	$("#contenu").fadeIn(400);


	new AnimOnScroll( document.getElementById( 'grid' ), {
		minDuration : 0.4,
		maxDuration : 0.7,
		viewportFactor : 0.2
	} );

	$(".recette_image").click(function(){
		$("#light").css({ display: "block" });
		$("#fadeblack").css({ display: "block" });
	});

	$(".white_content").click(function(){
		$("#light").css({ display: "none" });
		$("#fadeblack").css({ display: "none" });
	});
});