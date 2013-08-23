$(document).on("ready",inicial)
function inicial () {
	$("#bot1").on("click", bot1);
	$("#bot2").on("click", bot2);
	$("#x").on("click", x);
}
var escon=
	{
		opacity:0,
		display:"none",
		overflow:"hidden",
	};
var ver=
	{
		opacity:1,
		display:"inline-block",
	};
	var stylo=
	{
		color: "gray",
		textShadow: "0px 2px 3px #555",
	};
function bot1()
{
	
	
	$("#alumno").css(escon);

	$("#registro").css(ver);
	$("#califica").css(ver);
document.getElementById('hov').innerHTML = 'Registrar Alumno';
$("#hov,span").css(stylo);
}
function bot2()
{
	
	
	$("#registro,#califica").css(escon);
	$("#alumno").css(ver);
document.getElementById('hov').innerHTML = 'Todos los alumnos';
$("#hov,span").css(stylo);
}
function x()
{
	$("#mat").css(escon);
}
