$('.sidebar i.fa.fa-bars').click(function() {
	$('nav').toggleClass('mobile-menu-visible');
});

var userFeed = new Instafeed({
	get : 'user',
	userId : 33551734,
	accessToken : '33551734.467ede5.0ac0e631675b41eabb8fdca110a6d4af',
	limit : 3,
	resolution : 'standard_resolution',
	template : '<a href="{{link}}" target="_blank"><div class="insta-wrapper"><img src="{{image}}"><p><span>{{caption}}</span>{{location}}</p></div></a>'
});
userFeed.run();

function navHeight() {

	var heights = window.innerHeight;
	var outerHeights = $(".sidebar .sub-container-sidebar").outerHeight(true) + $("footer .sub-container-sidebar").outerHeight(true);
	$('nav.nav ul').css('height', (heights - outerHeights) + "px");

};

navHeight();

$(window).resize(function() {
	navHeight();
});

// spotify

function get_spotify() {
	$.ajax({
		type : 'POST',
		url : 'spotify.php',
		data : {
			request : 'true'
		},
		success : function(reply) {
			$('.now-playing').html("<p>" + reply + "</p>");
		}
	});

};
get_spotify();


var element = document.querySelector( '.profile-pic');
GifLinks( element, { preload: true } );

function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name,"",-1);
}

 (function() {
 	var InfoCookieCont = jQuery('#info_cookie');
    var InfoCookieDiv = jQuery(".ok-cookie");
    InfoCookieDiv.click(function() {
     createCookie('infoCookie','true',365)
     InfoCookieCont.removeClass("cookie-visible").addClass("cookie-hidden");
    });

    var InfoCookie = readCookie("infoCookie");
    if (!InfoCookie) {
     InfoCookieCont.removeClass("cookie-hidden").addClass("cookie-visible");
    }
   })();