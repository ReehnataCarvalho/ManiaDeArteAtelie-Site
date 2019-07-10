// JavaScript Document

// Animação Banner
$('.banner').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: true,
	dots: true,
	autoplaySpeed: 5000,
});

// Animação WOW
new WOW().init();

// Menu Fixo 
window.onscroll = function(){ // window é a janela e dentro da janela eu estou dizendo que quero trabalhar com a rolagem da tela -- onscroll -- 
	var top = window.pageYOffset || document.documentElement.scrollTop;  
	
	if(top > 400){
		console.log(top); //se ele for maior que 400 mostrar algo
		document.getElementById("Menu").classList.add("menuFixo");
		
	}else{
		console.log("Menor que 400"); // se nao , se for menor faça algo
		document.getElementById("Menu").classList.remove("menuFixo");
	}
};
// Depoimento dos Clientes
$('.depoimentoDosClientes').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: true,
	dots: true,
	autoplaySpeed: 5000,
});
 