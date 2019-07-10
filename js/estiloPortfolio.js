 /*Perguntas Frequentes 
$(function () {
	$('.box').hover(
		function () {
			var overlay = $(this).find('.box-overlay');
			overlay.removeClass(overlay.data('return')).addClass(overlay.data('hover'));
		},
		function () {
			var overlay = $(this).find('.box-overlay');		
			overlay.removeClass(overlay.data('hover')).addClass(overlay.data('return'));

		}
	);
});*/

/* Portfólio */

// animações personalizadas para usar 
// nas transições
var animations		= ['right','left','top','bottom','rightFade','leftFade','topFade','bottomFade'];
var total_anim		= animations.length;
// apenas altere este para um de sua escolha
var easeType		= 'swing';
// a velocidade de cada transição 
var animSpeed		= 450;
// caching 
var $hs_container	= $('#hs_container');
var $hs_areas		= $hs_container.find('.hs_area');

// primeiro pré-carregue todas as imagens
$hs_images          = $hs_container.find('img');
var total_images    = $hs_images.length;
var cnt             = 0;
$hs_images.each(function(){
	var $this = $(this);
	$('').load(function(){
		++cnt;
		if(cnt == total_images){
			$hs_areas.each(function(){
				var $area 		= $(this);
				 // quando o mouse entra na área, animamos a corrente

				// imagem (animação aleatória de animações de matriz), 
				// para que a próxima fique visível. 
				// "over" é um sinalizador indicando se podemos animar 
				// uma área ou não (não queremos 2 animações 
				// ao mesmo tempo para cada área) 
				$area.data('over',true).bind('mouseenter',function(){
					if($area.data('over')){
						$area.data('over',false);
						// quantas imagens nesta área? 
						var total		= $area.children().length;
						// imagem visível 
						var $current 	= $area.find('img:visible');
						// índice da imagem visível
						var idx_current = $current.index();
						// a próxima imagem que será exibida. 
						// ou o próximo, ou o primeiro se a corrente é o último 
						var $next		= (idx_current == total-1) ? $area.children(':first') : $current.next();
						// mostra o próximo (ainda não visível) 
						$next.show();
						// obter uma animação aleatória			
						var anim		= animations[Math.floor(Math.random()*total_anim)];
						switch(anim){
							 // lâminas atuais fora da direita 
							case 'right':
								$current.animate({
									'left':$current.width()+'px'
								},
								animSpeed,
								easeType,
								function(){
									$current.hide().css({
										'z-index'	: '1',
										'left'		: '0px'
									});
									$next.css('z-index','9999');
									$area.data('over',true);
								});
								break;
							// atuais desliza para fora a partir da esquerda
							case 'left':
								$current.animate({
									'left':-$current.width()+'px'
								},
								animSpeed,
								easeType,
								function(){
									$current.hide().css({
										'z-index'	: '1',
										'left'		: '0px'
									});
									$next.css('z-index','9999');
									$area.data('over',true);
								});
								break;
							// slides atuais do primeiro		
							case 'top':
								$current.animate({
									'top':-$current.height()+'px'
								},
								animSpeed,
								easeType,
								function(){
									$current.hide().css({
										'z-index'	: '1',
										'top'		: '0px'
									});
									$next.css('z-index','9999');
									$area.data('over',true);
								});
								break;
							// atuais desliza para fora da parte inferior	
							case 'bottom':
								$current.animate({
									'top':$current.height()+'px'
								},
								animSpeed,
								easeType,
								function(){
									$current.hide().css({
										'z-index'	: '1',
										'top'		: '0px'
									});
									$next.css('z-index','9999');
									$area.data('over',true);
								});
								break;
							// atual desliza para fora da direita e desaparece
							case 'rightFade':
								$current.animate({
									'left':$current.width()+'px',
									'opacity':'0'
								},
								animSpeed,
								easeType,
								function(){
									$current.hide().css({
										'z-index'	: '1',
										'left'		: '0px',
										'opacity'	: '1'
									});
									$next.css('z-index','9999');
									$area.data('over',true);
								});
								break;
							// atual desliza para fora da esquerda e desaparece
								case 'leftFade':
								$current.animate({
									'left':-$current.width()+'px','opacity':'0'
								},
								animSpeed,
								easeType,
								function(){
									$current.hide().css({
										'z-index'	: '1',
										'left'		: '0px',
										'opacity'	: '1'
									});
									$next.css('z-index','9999');
									$area.data('over',true);
								});
								break;
							// atual desliza para fora da esquerda e desaparece	
							case 'topFade':
								$current.animate({
									'top':-$current.height()+'px',
									'opacity':'0'
								},
								animSpeed,
								easeType,
								function(){
									$current.hide().css({
										'z-index'	: '1',
										'top'		: '0px',
										'opacity'	: '1'
									});
									$next.css('z-index','9999');
									$area.data('over',true);
								});
								break;
							// desliza para fora da parte inferior e desaparece
							case 'bottomFade':
								$current.animate({
									'top':$current.height()+'px',
									'opacity':'0'
								},
								animSpeed,
								easeType,
								function(){
									$current.hide().css({
										'z-index'	: '1',
										'top'		: '0px',
										'opacity'	: '1'
									});
									$next.css('z-index','9999');
									$area.data('over',true);
								});
								break;		
							default:
								$current.animate({
									'left':-$current.width()+'px'
								},
								animSpeed,
								easeType,
								function(){
									$current.hide().css({
										'z-index'	: '1',
										'left'		: '0px'
									});
									$next.css('z-index','9999');
									$area.data('over',true);
								});
								break;
						}	
					}
				});
			});
			
			// ao clicar no hs_container todas as áreas se deslizam 
			// (apenas por diversão ... você provavelmente desejará entrar no site
			// ou algo similar) 
			$ hs_container.bind ( 'click' , function () { 
			$hs_container.bind('click',function(){
				$hs_areas.trigger('mouseenter');
			});
		}
	}).attr('src',$this.attr('src'));
});		