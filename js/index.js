var input, search, pr, result, result_arr, locale_HTML, result_store;

function func() {
	locale_HTML = document.body.innerHTML;
}
setTimeout(func, 1000);

function FindOnPage(name, status) {

	input = document.getElementById(name).value;

	if (input.length < 3 && status == true) {
		alert('Для поиска вы должны ввести три или более символов');
		function FindOnPageBack() {
			document.body.innerHTML = locale_HTML;
		}
	}

	if (input.length >= 3) {
		function FindOnPageGo() {

			search = '/' + input + '/g';
			pr = document.body.innerHTML;
			result = pr.match(/>(.*?)</g);
			result_arr = [];

			var warning = true;
			for (var i = 0; i < result.length; i++) {
				if (result[i].match(eval(search)) != null) {
					warning = false;
				}
			}
			if (warning == true) {
				alert('Не найдено ни одного совпадения');
			}

			for (var i = 0; i < result.length; i++) {
				result_arr[i] = result[i].replace(eval(search), '<span style="background-color:yellow;">' + input + '</span>'); //находим нужные элементы, задаем стиль и сохраняем в новый массив
			}
			for (var i = 0; i < result.length; i++) {
				pr = pr.replace(result[i], result_arr[i])
			}
			document.body.innerHTML = pr;
		}
	}
	function FindOnPageBack() {
		document.body.innerHTML = locale_HTML;
	}
	if (status) {
		FindOnPageBack();
		FindOnPageGo();
	}
	if (!status) {
		FindOnPageBack();
	}
}

$(document).ready(function () {
	var touch = $('#touch-menu');
	var menu = $('.menu');

	$(touch).on('click', function (e) {
		e.preventDefault();
		menu.slideToggle();
	});

	$(window).resize(function () {
		var w = $(window).width();
		if (w > 767 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});
});







$(function () {

	// Select
	$('.slct').click(function () {
		/* Заносим выпадающий список в переменную */
		var dropBlock = $(this).parent().find('.ul_drop');

		/* Делаем проверку: Если выпадающий блок скрыт то делаем его видимым*/
		if (dropBlock.is(':hidden')) {
			dropBlock.slideDown();

			/* Выделяем ссылку открывающую select */
			$(this).addClass('active');

			/* Работаем с событием клика по элементам выпадающего списка */
			$('.ul_drop').find('li').click(function () {

				/* Заносим в переменную HTML код элемента
				списка по которому кликнули */
				var selectResult = $(this).html();

				/* Находим наш скрытый инпут и передаем в него
				значение из переменной selectResult */
				$(this).parent().parent().find('input').val(selectResult);

				/* Передаем значение переменной selectResult в ссылку которая
				открывает наш выпадающий список и удаляем активность */
				$(this).parent().parent().find('.slct').removeClass('active').html(selectResult);

				/* Скрываем выпадающий блок */
				dropBlock.slideUp();
			});

			/* Продолжаем проверку: Если выпадающий блок не скрыт то скрываем его */
		} else {
			$(this).removeClass('active');
			dropBlock.slideUp();
		}

		/* Предотвращаем обычное поведение ссылки при клике */
		return false;
	});

	$('.reset-form').click(function () {

		$('.customForm').find('.select_transport').html('Способ передвижения:');
		$('.customForm').find('.select_startpoint').html('Откуда:');
		$('.customForm').find('.select_length').html('Продолжительность:');
		return false
	});


});


















//----------------------------------------- ТОП-10 ДОСТОПРИМЕЧАТЕЛЬНОСТЕЙ -------------------------

var map;

function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: {
			lat: 53.797635,
			lng: 27.908864
		},
		zoom: 6
	});

	var marker_SofiyskiySobor = new google.maps.Marker({
		position: {
			lat: 55.48607,
			lng: 28.75857
		},
		map: map,
		title: "Софийский собор",
		icon: 'images/mark/mark.png',
		animation: google.maps.Animation.DROP
	});
	var marker_BraslavskieOzera = new google.maps.Marker({
		position: {
			lat: 55.63647,
			lng: 27.05332
		},
		map: map,
		title: "Браславские озера",
		icon: 'images/mark/mark.png',
		animation: google.maps.Animation.DROP
	});
	var marker_DomShagala = new google.maps.Marker({
		position: {
			lat: 55.20044,
			lng: 30.1906
		},
		map: map,
		title: "Дом-музей Марка Шагала",
		icon: 'images/mark/mark.png',
		animation: google.maps.Animation.DROP
	});
	var marker_Hatyn = new google.maps.Marker({
		position: {
			lat: 54.33462,
			lng: 27.94371
		},
		map: map,
		title: "Мемориальный комплекс Хатынь",
		icon: 'images/mark/mark.png',
		animation: google.maps.Animation.DROP
	});
	var marker_Avgustovskii_kanal = new google.maps.Marker({
		position: {
			lat: 53.6805,
			lng: 23.83533
		},
		map: map,
		title: "Августовский канал",
		icon: 'images/mark/mark.png',
		animation: google.maps.Animation.DROP
	});

	var marker_MirskiyZamok = new google.maps.Marker({
		position: {
			lat: 53.45115,
			lng: 26.47291
		},
		map: map,
		title: "Мирский замок",
		icon: 'images/mark/mark.png',
		animation: google.maps.Animation.DROP
	});

	var marker_Nesvizh = new google.maps.Marker({
		position: {
			lat: 53.22275,
			lng: 26.69172
		},
		map: map,
		title: "Несвижский замок",
		icon: 'images/mark/mark.png',
		animation: google.maps.Animation.DROP
	});

	var marker_BelovezhskayaPushcha = new google.maps.Marker({
		position: {
			lat: 52.57191,
			lng: 23.80248
		},
		map: map,
		title: "Беловежская пуща",
		icon: 'images/mark/mark.png',
		animation: google.maps.Animation.DROP
	});

	var marker_BrestskayaKrepost = new google.maps.Marker({
		position: {
			lat: 52.0832,
			lng: 23.65893
		},
		map: map,
		title: "Брестская крепость",
		icon: 'images/mark/mark.png',
		animation: google.maps.Animation.DROP
	});

	var marker_DomRumyancevych = new google.maps.Marker({
		position: {
			lat: 52.42222,
			lng: 31.01638
		},
		map: map,
		title: "Дворец Румянцевых-Паскевичей",
		icon: 'images/mark/mark.png',
		animation: google.maps.Animation.DROP
	});

	var content_SofiyskiySobor = '<a href="#"><div class="content">' +
		'<div><h3>Софийский собор</h3>' +
		'</div>' +
		'<div><img src="images/Софийский собор.jpg"></div>' +
		'</div></a>';

	var content_BraslavskieOzera = '<a href="#"><div class="content">' +
		'<div><h3>Браславские озера Национальный Парк</h3>' +
		'</div>' +
		'<div><img src="images/nature1.jpg"></div>' +
		'</div></a>';

	var content_DomShagala = '<a href="#"><div class="content">' +
		'<div><h3>Дом-музей Марка Шагала</h3>' +
		'</div>' +
		'<div><img src="images/DomShagala.jpg"></div>' +
		'</div></a>';

	var content_Hatyn = '<a href="#"><div class="content">' +
		'<div><h3>Мемориальный комплекс Хатынь</h3>' +
		'</div>' +
		'<div><img src="images/Memorial Khatyn.jpg"></div>' +
		'</div></a>';

	var content_Avgustovskii_kanal = '<a href="#"><div class="content">' +
		'<div><h3>Августовский канал</h3>' +
		'</div>' +
		'<div><img src="images/Avgustovskii_kanal.jpg"></div>' +
		'</div></a>';

	var content_MirskiyZamok = '<a href="#"><div class="content">' +
		'<div><h3>Мирский замок</h3>' +
		'</div>' +
		'<div><img src="images/belarus_611.jpg"></div>' +
		'</div></a>';

	var content_Nesvizh = '<a href="#"><div class="content">' +
		'<div><h3>Несвиж Дворцово-замковый комплекс</h3>' +
		'</div>' +
		'<div><img src="images/nesvizh.jpg"></div>' +
		'</div></a>';

	var content_BelovezhskayaPushcha = '<a href="#"><div class="content">' +
		'<div><h3>Беловежская пуща</h3>' +
		'</div>' +
		'<div><img src="images/belovezhskaya_pushha.jpg"></div>' +
		'</div></a>';

	var content_BrestskayaKrepost = '<a href="#"><div class="content">' +
		'<div><h3>Брестская крепость</h3>' +
		'</div>' +
		'<div><img src="images/Brestskaja_krepost.jpg"></div>' +
		'</div></a>';

	var content_DomRumyancevych = '<a href="#"><div class="content">' +
		'<div><h3>Дворец Румянцевых-Паскевичей</h3>' +
		'</div>' +
		'<div><img src="images/Gomel-Palace.jpg"></div>' +
		'</div></a>';

	var infowindow_SofiyskiySobor = new google.maps.InfoWindow({
		content: content_SofiyskiySobor
	});

	google.maps.event.addListener(marker_SofiyskiySobor, 'click', function () {
		infowindow_SofiyskiySobor.open(map, marker_SofiyskiySobor);
	});

	var infowindow_BraslavskieOzera = new google.maps.InfoWindow({
		content: content_BraslavskieOzera
	});

	google.maps.event.addListener(marker_BraslavskieOzera, 'click', function () {
		infowindow_BraslavskieOzera.open(map, marker_BraslavskieOzera);
	});

	var infowindow_DomShagala = new google.maps.InfoWindow({
		content: content_DomShagala
	});

	google.maps.event.addListener(marker_DomShagala, 'click', function () {
		infowindow_DomShagala.open(map, marker_DomShagala);
	});

	var infowindow_Hatyn = new google.maps.InfoWindow({
		content: content_Hatyn
	});

	google.maps.event.addListener(marker_Hatyn, 'click', function () {
		infowindow_Hatyn.open(map, marker_Hatyn);
	});

	var infowindow_Avgustovskii_kanal = new google.maps.InfoWindow({
		content: content_Avgustovskii_kanal
	});

	google.maps.event.addListener(marker_Avgustovskii_kanal, 'click', function () {
		infowindow_Avgustovskii_kanal.open(map, marker_Avgustovskii_kanal);
	});

	var infowindow_MirskiyZamok = new google.maps.InfoWindow({
		content: content_MirskiyZamok
	});

	google.maps.event.addListener(marker_MirskiyZamok, 'click', function () {
		infowindow_MirskiyZamok.open(map, marker_MirskiyZamok);
	});

	var infowindow_Nesvizh = new google.maps.InfoWindow({
		content: content_Nesvizh
	});

	google.maps.event.addListener(marker_Nesvizh, 'click', function () {
		infowindow_Nesvizh.open(map, marker_Nesvizh);
	});

	var infowindow_BelovezhskayaPushcha = new google.maps.InfoWindow({
		content: content_BelovezhskayaPushcha
	});

	google.maps.event.addListener(marker_BelovezhskayaPushcha, 'click', function () {
		infowindow_BelovezhskayaPushcha.open(map, marker_BelovezhskayaPushcha);
	});

	var infowindow_BrestskayaKrepost = new google.maps.InfoWindow({
		content: content_BrestskayaKrepost
	});

	google.maps.event.addListener(marker_BrestskayaKrepost, 'click', function () {
		infowindow_BrestskayaKrepost.open(map, marker_BrestskayaKrepost);
	});

	var infowindow_DomRumyancevych = new google.maps.InfoWindow({
		content: content_DomRumyancevych
	});

	google.maps.event.addListener(marker_DomRumyancevych, 'click', function () {
		infowindow_DomRumyancevych.open(map, marker_DomRumyancevych);
	});

}

/*----------------------------- карта Минска ---------------------------*/
/*
var city_map_Minsk;
function initMapMinsk() {
city_map_Minsk = new google.maps.Map(document.getElementById('city_map_Minsk'), {
center : {
	lat : 53.597635,
	lng : 28.088864
},
zoom : 5
});

var marker_Minsk = new google.maps.Marker({
position : {
	lat : 53.90453,
	lng : 27.56152
},
map : city_map_Minsk,
icon : 'images/mark/mark.png',
animation : google.maps.Animation.DROP
});

	
var content_Minsk = "53.90453,27.56152";

var infowindow_Minsk = new google.maps.InfoWindow({
content: content_Minsk
});

google.maps.event.addListener(marker_Minsk, 'click', function() {
infowindow_Minsk.open(city_map_Minsk, marker_Minsk);
});		
	
}		
*/
/*----------------------------- карта маршрута ---------------------------*/

/*	
var rout_map;
	function initMapRout() {
	rout_map = new google.maps.Map(document.getElementById('rout_map'), {
		center : {
			lat : 54.549141, 
			lng : 28.884396
		},
		zoom : 6
	});
	
var routPlanCoordinates = [
	{lat: 53.90453, lng: 27.56152},
	{lat: 54.334794, lng: 27.943703},
	{lat: 55.515821, lng: 28.795858},
	{lat: 55.200651, lng: 30.201738},
	{lat: 54.521036, lng: 30.407033},
	{lat: 54.595700, lng: 30.060850},
	{lat: 53.90453, lng: 27.56152}
 ];
	
var marker_rout_map_1_1 = new google.maps.Marker({
	position : {
		lat : 54.334794, 
		lng : 27.943703
		},
		map : rout_map,
		icon : 'images/mark/mark_1.png',
		animation : google.maps.Animation.DROP
	
	});	
	
var marker_rout_map_1_2 = new google.maps.Marker({
	position : {
		lat : 55.515821, 
		lng : 28.795858
		},
		map : rout_map,
		icon : 'images/mark/mark_2.png',
		animation : google.maps.Animation.DROP
	
	});	
	
var marker_rout_map_1_3 = new google.maps.Marker({
	position : {
		lat : 55.200651, 
		lng : 30.201738
		},
		map : rout_map,
		icon : 'images/mark/mark_3.png',
		animation : google.maps.Animation.DROP
	
	});	
	
var marker_rout_map_1_4 = new google.maps.Marker({
	position : {
		lat : 54.521036, 
		lng : 30.407033
		},
		map : rout_map,
		icon : 'images/mark/mark_4.png',
		animation : google.maps.Animation.DROP
	
	});	
	
var marker_rout_map_1_4 = new google.maps.Marker({
	position : {
		lat : 54.595700, 
		lng : 30.060850
		},
		map : rout_map,
		icon : 'images/mark/mark_5.png',
		animation : google.maps.Animation.DROP
	
	});		
	
var flightPath = new google.maps.Polyline({
path: routPlanCoordinates,
geodesic: true,
strokeColor: '#464646',
strokeOpacity: 1.0,
strokeWeight: 4
});

flightPath.setMap(rout_map);	
		
	
}	
	
	
	*/



//------------------------------- Слайдер ----------------------------

var slideIndex = 1;
//var showSlides(slideIndex);

function plusSlides(n) {
	showSlides(slideIndex += n);
}

function currentSlide(n) {
	showSlides(slideIndex = n);
}

function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");

	if (n > slides.length) {
		slideIndex = 1;
	}
	if (n < 1) {
		slideIndex = slides.length;
	}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace("active", "");
	}
	slides[slideIndex - 1].style.display = "block";
	dots[slideIndex - 1].className += " active";

};


// -------------------------------- открытие / закрытие слайдера

$(function () {

	var Sl = document.querySelectorAll('.city_gallery_img')[0];
	Sl.addEventListener("click", NoHidden, false);

	function NoHidden(e) {

		var cityGallery = e.target;
		if (e.target !== e.currentTarget) {

			TweenLite.to(cityGallery, 0, {
				css: {},
				onComplete: NoHid(),
				ease: Elastic.easeInOut

			});
		}

	}

	var closeSl = document.querySelectorAll('.close')[0];
	var closeSliderParent = document.querySelectorAll('.slidershow-container')[0];
	closeSl.addEventListener("click", Hidden, false);
	closeSliderParent.addEventListener("click", Hidden, false);

	function Hidden(e) {

		var closeSlider = e.target;
		// = e.target.parentNode;
		if (e.target == e.currentTarget) {


			TweenLite.to(closeSlider, 0, {
				css: {},
				onComplete: Hid(),
				ease: Elastic.easeInOut

			});

		}
	}

});


function NoHid() {

	var Slsh = document.querySelectorAll('.slidershow-container')[0];
	Slsh.classList.remove('hidden');

};

function Hid() {

	var Slsh = document.querySelectorAll('.slidershow-container')[0];
	Slsh.classList.add('hidden');

};

