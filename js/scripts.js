(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=1561052164142480&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

var tamWidth = $(window).width();
var tamHeight = $(window).height();

$(".overview").height(tamHeight);
$(".overview").width(tamWidth);

var abreLightBox = function(){
	$(".overview").fadeIn();
	$(".overContentLightBox").fadeIn();
}

var fechaLightBox = function(){
	$(".overview").fadeOut();
	$(".overContentLightBox").fadeOut();
}

var btnClose = function(){
	$(".btnCloseLightBox").on("click", function(){
		fechaLightBox();
	})
}

$(".myLightBox").on("click", function(e){
	e.preventDefault();
	e.stopPropagation();

	var $this = $(this);
	var img = $this.attr("href");
	var newImg = "<img src='"+img+"'>";
	var close = "<div class='btnCloseLightBox'></div>";

	$(".overContentLightBox").html(close+newImg);

	btnClose();

	abreLightBox();
});

$(".overview").on("click", function(){
	fechaLightBox();
});

//MENU FLUTUANTE
scrollMenu = function(scrollTop){
	if(scrollTop > 100){
		$(".header-hide").addClass("nav-fixed");
		$(".top-button").addClass("show");
	} else {
		$(".header-hide").removeClass("nav-fixed");
		$(".top-button").removeClass("show");
	}
}

//SCROLL
$(window).scroll(function(){
	var $this = $(this),
	scrollTop = $this.scrollTop();
	scrollMenu(scrollTop);
});

//SCROLL BUTTON
scrollButtom = function(){
	$(".bt-scroll").on("click", function(e){
		e.preventDefault();
		e.stopPropagation();
		var $this = $(this),
		thisTop = $this.attr("href");
		topPage = parseInt($(thisTop).offset().top);
		topPage = parseInt(topPage)-68;
		$("html, body").animate({
			scrollTop: topPage
		}, 1000);
	});
}

//CHECA PAGINA
checaHashPage = function(page){
	if(page.attr("id") != "home"){
		$(".bt-scroll").each(function(){
			var $this = $(this);
			var linkHash = $this.attr("href");
			if(linkHash != "#topo"){
				$(".bt-scroll").on("click", function(e){
					e.preventDefault();
					e.stopPropagation();
					var $this = $(this);
					var thisHash = $this.attr("href");
					var thisRel = $this.attr("rel");
					if(thisHash != "#topo"){
						window.location="index.php"+thisHash;
					}
				});
			} else {
				scrollButtom();
			}
		});
	} else {
		scrollButtom();
	}
}

checaHashPage($("body"));

initializeMaps();

var viewportwidth;
var viewportheight;

// the more standards compliant browsers (mozilla/netscape/opera/IE7) use window.innerWidth and window.innerHeight

if (typeof window.innerWidth != 'undefined'){
  viewportwidth = window.innerWidth,
  viewportheight = window.innerHeight
}

//console.log(viewportwidth+" x "+viewportheight);

var ua = navigator.userAgent;

//alert(ua);

//AJUSTA ALTURA DO DOM DE ACORDO COM O CONTEUDO PRA DEIXAR CORRETO O LOADING DE AJAX
var regulaAltura = function(){
	alturaBody = $("body").height();
	larguraBody = $("body").width();

	alturaHtml = $("html").height();
	larguraHtml = $("html").width();
}

//CHAMA LOADING NA TELA
chamaLoading = function(){
	$(".loading-overlay").css({
		"width" : larguraBody,
		"height" : alturaHtml
	});
	$(".loading-overlay").fadeIn();
	$(".loading").fadeIn();
}

//FECHA LOADING NA TELA
fechaLoading = function(){
	$(".loading-overlay").fadeOut();
	$(".loading").fadeOut();
}

$('.jcarousel')
    .jcarousel({
        // Core configuration goes here
    })
    .jcarouselAutoscroll({
        interval: 3000,
        target: '+=1',
        autostart: true
    })
;

$(".form-contato").on("submit", function(){

	alert("oi");
	
	regulaAltura();

	chamaLoading();

});

$("#accordion").accordion({
	heightStyle: "content"
});

initializeMaps();
$("[data-mask]").inputmask();