// Write your javascript
jQuery(document).ready(function($) {
  if (window.location.pathname == 'http://www.fundacjaprzyjaciol.org/pl/' || 'http://www.fundacjaprzyjaciol.org/en/') {
    //Podstawienie linku z przycisku do tła na stronie głównej
    //  $("#slider-page").click(function() {
    //    window.location = $('#background-link').find("a").attr("href"); 
    //    return false; 
    // });
    //Zapis tła mobile i desktop
    var desktop_bg = $('#slider-page').css('background-image').replace(/"/g, "") + ' !important';
    // console.log('Desktop bg: ' + desktop_bg);
    var mobile_bg = $('#background-link > div').css('background-image').replace(/"/g, "") + ' !important';
    if (mobile_bg == 'none !important') {
      mobile_bg = desktop_bg;
      // console.log('Mobile bg = Desktop bg: ' + mobile_bg);
    } else {
      // console.log('Mobile bg: ' + mobile_bg);
    }


    //funkcje zmiany tła
    var desktop_check = function() {
      $("#slider-page").css('cssText', 'background-image:' + desktop_bg + '; background-size: cover !important');
      // console.log('Aktualne tło: desktop');
    };
    /*var mobile_check = function() {
      $("#slider-page").css('cssText', 'background-image:' + mobile_bg + '; background-size: contain !important');
      console.log('Aktualne tło: mobile');
    };*/
    var check = function() {
      /*if ($(window).width() < 768) { 
      mobile_check();
		}
    else {*/
      desktop_check();
      /* }*/
    };
    check();
    $(window).on("ready resize", check);
  }
});