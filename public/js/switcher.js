$(document).ready(function(){
    "use strict"

	$(function () {
		"use strict";
		$('.styleswitch').on('click',function()
		{
			switchStylestyle(this.getAttribute("rel"));
			return false;
		});
		var c = readCookie('style');
		if (c) switchStylestyle(c);
	});

	function switchStylestyle(styleName)
	{
		$('link[rel*=style][title]').each(function(i)
		{
			this.disabled = true;
			if (this.getAttribute('title') == styleName) this.disabled = false;
		});
		$('.logochange').attr('src','images/'+styleName+'.png');
        $('.bannerchange').attr('src','images/banner/'+styleName+'.jpg');
		createCookie('style', styleName, 365);
		$('.sliderchange').attr('src','images/slider/'+styleName+'.jpg');
		createCookie('style', styleName, 365);
	}

	$(function () {
		"use strict";
		$('.default-switch').on('click',function()
		{
			mainswitcherstyle(this.getAttribute("rel"));
			return false;
		});
		var c = readCookie('style');
		if (c) mainswitcherstyle(c);
	});

	function mainswitcherstyle(styleName)
	{
		$('link[rel*=style][title]').each(function(i)
		{
			this.disabled = true;
			if (this.getAttribute('title') == styleName) this.disabled = false;
		});
		$('.logochange').attr('src','images/'+styleName+'.png');
	}

});
// cookie functions http://www.quirksmode.org/js/cookies.html
function createCookie(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else expires = "";
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
function eraseCookie(name)
{
	createCookie(name,"",-1);
}

$('#default-switch').on('click',function(){
	$(this).toggleClass('active');
	$('body').toggleClass('bg');
});

// /cookie functions
