jQuery(document).ready(function($) {

  // LANG MENU 
  $('.general-button-donate.pay-donate-hide a').removeAttr('href');
  $('#menu-lang-menu').on('click', function() {
    $('.dropdown-lang .sub-menu').slideToggle();
  });

  $('#button-faq').click(function() {
    $('#faq').toggle("slide");
    $("#impact").hide();
  });

  $('.single-icon-top-bar.bip-top').click(function() {
    $(this).removeAttr("href");
    $("html, body").animate({ scrollTop: $('#footerBipIcon').offset().top }, 1000);
    $('#bip-cloud').stop().css('visibility', 'visible').animate({ "opacity": 1 });
    setTimeout(function() { $("#bip-cloud").stop().css('visibility', 'hidden').animate({ "opacity": 0 }).fadeOut(); }, 5000);
  });

  $('#button-impact').click(function() {
    $('#impact').toggle("slide");
    $("#faq").hide();
  });

  $('.more_info_przelewy').click(function() {
    $('.przelewy_more_hide_information').toggle("slide");
  });
  $('.more_info_paypal').click(function() {
    $('.paypal_more_hide_information').toggle("slide");
  });

  $('#id_one_time_giving').click(function() {
    $(".form_przelewy24").css("display", "block");
    $('.box-for-transfer').css('display', 'none');
    $(".paypal-information").css("display", "none");
    $("html, body").animate({ scrollTop: $('#formularz24-form').offset().top }, 1000);
  });

  $('#monthly_giving_custom').click(function() {
    $(".form_przelewy24").css("display", "none");
    $('.box-for-transfer').css('display', 'none');
    $(".paypal-information").css("display", "block");
    $("html, body").animate({ scrollTop: $('.paypal-information').offset().top }, 1000);
  });

  $('.pay-donate-hide a').click(function() {
    $('.img-pay-hide').css('display', 'block');
    $('#pay-donate-row-custom-grid').css('display', 'block');
    $("html, body").animate({ scrollTop: $('#donate_button_hook').offset().top }, 1000);
  });

  $('.payDonateGrid').click(function() {
    $(".tax-dedu-con").show();
    $("html, body").animate({ scrollTop: $('#tescik').offset().top }, 1000);
  });

  // $('.pay-img').before('<img id="top-pasek" src="http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/11/paski.png" />');
  // $('.pay-img').after('<img id="bottom-pasek" src="http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/11/paski_dol.png" />');

  // $('#tescik').before('<img id="left-pasek" src="http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/11/paski_l.png" />');
  // $('#tescik').after('<img id="right-pasek" src="http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/11/paski_p.png" />');


  $('#id_traditional_transfer').click(function() {
    $('.box-for-transfer').css('display', 'block');
    $(".form_przelewy24").css("display", "none");
    $(".paypal-information").css("display", "none");
    $("html, body").animate({ scrollTop: $('.box-for-transfer').offset(50).top }, 1000);
  });

  $(".dropdown").hover(
    function() { $(this).addClass('open') },
    function() { $(this).removeClass('open') }
  );

  // #######
  var years2017 = $('.yesr2017');
  var years2016 = $('.yesr2016');
  var years2015 = $('.yesr2015');
  var years2014 = $('.yesr2014');
  var years2013 = $('.yesr2013');
  var years2012 = $('.yesr2012');
  years2017.show();
  years2016.hide();
  years2015.hide();
  years2014.hide();
  years2013.hide();
  years2012.hide();

  $('#mySelect').on('change', function() {
    var value = $(this).val();
    if (value == '2017') {
      years2017.fadeIn().show();
      years2016.fadeOut().hide();
      years2015.fadeOut().hide();
      years2014.fadeOut().hide();
      years2013.fadeOut().hide();
      years2012.fadeOut().hide();
    } else if (value == '2016') {
      years2017.fadeOut().hide();
      years2016.fadeIn().show();
      years2015.fadeOut().hide();
      years2014.fadeOut().hide();
      years2013.fadeOut().hide();
      years2012.fadeOut().hide();
    } else if (value == '2015') {
      years2017.fadeOut().hide();
      years2016.fadeOut().hide();
      years2015.fadeIn().show();
      years2014.fadeOut().hide();
      years2013.fadeOut().hide();
      years2012.fadeOut().hide();
    } else if (value == '2014') {
      years2017.fadeOut().hide();
      years2016.fadeOut().hide();
      years2015.fadeOut().hide();
      years2014.fadeIn().show();
      years2013.fadeOut().hide();
      years2012.fadeOut().hide();
    } else if (value == '2013') {
      years2017.fadeOut().hide();
      years2016.fadeOut().hide();
      years2015.fadeOut().hide();
      years2014.fadeOut().hide();
      years2013.fadeIn().show();
      years2012.fadeOut().hide();
    } else if (value == '2012') {
      years2017.fadeOut().hide();
      years2016.fadeOut().hide();
      years2015.fadeOut().hide();
      years2014.fadeOut().hide();
      years2013.fadeOut().hide();
      years2012.fadeIn().show();
    }

  });
  // #######

  // $('#menu-page li').addClass('uderline-menu');
  // $('#menu-item-1202 a:eq(0)').attr('href', 'http://www.fundacjaprzyjaciol.org/en/').addClass('disabled');
  $('#menu-item-1202 a:eq(0)').attr('href', 'http://www.fundacjaprzyjaciol.org/en/who-we-are/').addClass('disabled');
  $('#menu-item-1003 a:eq(0)').attr('href', 'http://www.fundacjaprzyjaciol.org/en/how-we-help/').addClass('disabled');
  $('#menu-item-557 a:eq(0)').attr('href', 'http://www.fundacjaprzyjaciol.org/en/become-a-friend/').addClass('disabled');
  $('#menu-item-559 a:eq(0)').attr('href', 'http://www.fundacjaprzyjaciol.org/en/our-friends/').addClass('disabled');
  $('#menu-item-558 a:eq(0)').attr('href', 'http://www.fundacjaprzyjaciol.org/en/contact-us/').addClass('disabled');

  $('#menu-item-1898 a:eq(0)').attr('href', 'http://www.fundacjaprzyjaciol.org/pl/kim-jestesmy/').addClass('disabled');
  $('#menu-item-1899 a:eq(0)').attr('href', 'http://www.fundacjaprzyjaciol.org/pl/jak-pomagamy/').addClass('disabled');
  $('#menu-item-1900 a:eq(0)').attr('href', 'http://www.fundacjaprzyjaciol.org/pl/zostan-przyjacielem/').addClass('disabled');
  $('#menu-item-1901 a:eq(0)').attr('href', 'http://www.fundacjaprzyjaciol.org/pl/nasi-przyjaciele/').addClass('disabled');
  $('#menu-item-1902 a:eq(0)').attr('href', 'http://www.fundacjaprzyjaciol.org/pl/kontakt/').addClass('disabled');

  $('#menu-item-1202').addClass('uderline-menu shop-link');
  $('#menu-item-556').addClass('uderline-menu shop-link');
  $('#menu-item-667').addClass('uderline-menu shop-link');
  $('#menu-item-557').addClass('uderline-menu shop-link');
  $('#menu-item-559').addClass('uderline-menu shop-link');
  $('#menu-item-558').addClass('uderline-menu shop-link');

  $('#menu-item-1898').addClass('uderline-menu shop-link');
  $('#menu-item-1899').addClass('uderline-menu shop-link');
  $('#menu-item-1900').addClass('uderline-menu shop-link');
  $('#menu-item-1901').addClass('uderline-menu shop-link');
  $('#menu-item-1902').addClass('uderline-menu shop-link');
  // $('.shop-link a:eq(0)').attr('href', 'https://10.9.100.91.dyndns.koba.pl/camelote/francuski-styl/').addClass('disabled');

  // Skrypty na pierwszej stronie kolorowanie wyrazów.
  // $(".lvca-stats-title:contains('pediatric wards')").css('color','red');
  var search = 'pediatric wards';
  var search1 = 'years';
  var search2 = 'spent ';
  var search3 = 'oddziały pediatryczne ';
  var search4 = 'lata ';
  var search5 = 'przekazaliśmy ';
  $(".lvca-stats-title:contains('" + search + "')").each(function() {
    var regex = new RegExp(search, 'gi');
    $(this).html($(this).text().replace(regex, "<span class='font-red font-bold' style='font-size: 1.2em;'>" + search + "</span>"));
  });
  $(".lvca-stats-title:contains('" + search1 + "')").each(function() {
    var regex = new RegExp(search1, 'gi');
    $(this).html($(this).text().replace(regex, "<span class='font-blue font-bold' style='font-size: 1.2em;'>" + search1 + "</span>"));
  });
  $(".lvca-stats-title:contains('" + search2 + "')").each(function() {
    var regex = new RegExp(search2, 'gi');
    $(this).html($(this).text().replace(regex, "<span class='font-green font-bold' style='font-size: 1.2em;'>" + search2 + "</span>"));
  });
  $(".lvca-stats-title:contains('" + search3 + "')").each(function() {
    var regex = new RegExp(search3, 'gi');
    $(this).html($(this).text().replace(regex, "<span class='font-red font-bold' style='font-size: 1.2em;'>" + search3 + "</span>"));
  });
  $(".lvca-stats-title:contains('" + search4 + "')").each(function() {
    var regex = new RegExp(search4, 'gi');
    $(this).html($(this).text().replace(regex, "<span class='font-blue font-bold' style='font-size: 1.2em;'>" + search4 + "</span>"));
  });
  $(".lvca-stats-title:contains('" + search5 + "')").each(function() {
    var regex = new RegExp(search5, 'gi');
    $(this).html($(this).text().replace(regex, "<span class='font-green font-bold' style='font-size: 1.2em;'>" + search5 + "</span>"));
  });

  $('#footerBipIcon').hover(function() {
    $('#bip-cloud').stop().css('visibility', 'visible').animate({ "opacity": 1 });
  }, function() {
    $('#bip-cloud').stop().css('visibility', 'hidden').animate({ "opacity": 0 });
  });


  $('.button-download--img').hover(function() {
    $(this).find('img').attr('src', "http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/12/1proc-2.svg");
  }, function() {
    $(this).find('img').attr('src', "http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/12/1proc-1.svg");
  });
  // $(".container-search").css('display','none');
  // $(".container-search").hide();

  $("#lupka").click(function() {
    $(".container-search").fadeIn(200);
  });

  $(".close-search").click(function() {
    $(".container-search").fadeOut(200);
  });

  $("#opis_caldera").hide();
  $("#opis_caldera2").hide();

  $("#poka").click(function() {
    $(this).hide(1000);
    $("#opis_caldera").show(1000);
  });
  $("#poka2").click(function() {
    $(this).hide(1000);
    $("#opis_caldera2").show(1000);
  });

  $("#fld_3478316_2").click(function() {
    $('.wpb_text_column.wpb_content_element.vc_custom_1512118531972').hide();
  });

  $("#fld_3478316_2").click(function() {
    $('.wpb_text_column.wpb_content_element.vc_custom_1512475357766').hide();
  });

  $("#fld_3478316_1").click(function() {
    $('.news-custom').hide();
  });

  // #############################################
  // #############################################
  // ############################################# 
  // $('#menu-item-725 a').removeAttr('href');
  var url = window.location.href;
  if (url == 'http://www.fundacjaprzyjaciol.org/en/become-a-friend/#donate_button_hook') {
    $('.img-pay-hide').css('display', 'block');
    $('#pay-donate-row-custom-grid').css('display', 'block');
  }
  if (url == 'https://nas.gansa.pl/friends/pl/zostan-przyjacielem/#donate_button_hook') {
    $('.img-pay-hide').css('display', 'block');
    $('#pay-donate-row-custom-grid').css('display', 'block');
  }
  // #############################################
  // #############################################
  // #############################################

  // navbar is the header tag id name
  // var header = document.querySelector("header");
  // var headroom = new Headroom(header, {
  //     offset : 215,
  //     tolerance: {
  //       down : 5,
  //       up : 20
  //     },
  //     classes: {
  //       initial: "animated",
  //       pinned: "slideDown",
  //       unpinned: "slideUp"
  //     }
  // });
  // headroom.init();

  // Tax deduction
  $(".tax-dedu-con").hide()

  $(document).on('input', '#myRange', function() {
    $('#demo').attr('value', $(this).val());
    $('#testPrzel').attr('value', $(this).val() * 100);
    $("#field_a3").attr('value', $(this).val());
  });

  $("#demo").bind('keyup input', function() {
    $('#testPrzel').attr('value', $(this).val() * 100);
    $("#field_a3").attr('value', $(this).val());
  });

  $("#p24_email_custom").bind('keyup input', function() {
    $('#p24_email').attr('value', $(this).val());
  });

  $("#p24_client_custom").bind('keyup input', function() {
    $('#p24_client').attr('value', $(this).val());
  });

  $("#demo").bind('keyup input', function() {
    $('#myRange').attr('value', $(this).val());
  });
  //
  // ################################################
  // ################################################

  //   $(window).scroll(function() {    
  //    var scroll = $(window).scrollTop();
  //
  //    if (scroll > 100) {
  //        $('#top-bar').hide();
  //        $('#logo img').css('margin-top', '22px');
  //        $('#logo img').css('width', '90%');
  //        $('#cookie-notice').css('top','72px');
  //    } else {
  //        $('#top-bar').show();
  //        $('#logo img').css('margin-top', '5px');
  //        $('#logo img').css('width', '100%');
  //        $('#cookie-notice').css('top','100px');
  //    }
  //     
  //    });

  // ################################################
  // Style do karuzel



  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: ["<img class='owl-custom-nav' src='http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/11/back.png'/>",
      "<img class='owl-custom-nav' src='http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/11/next.png'/>"
    ],
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2,
        margin: 0
      },
      1100: {
        items: 3
      }
    }
  });

  if (window.location.href.indexOf("en") > -1) {
    $(".search-field").attr("placeholder", "Search...");
    $("#cn-notice-text").html('<span id="cn-notice-text">By continuing to browse our site you agree to our use of <strong><a href="http://www.fundacjaprzyjaciol.org/en/cookies-policy/">cookies </a></strong> and <strong><a href="http://www.fundacjaprzyjaciol.org/en/cookies-policy/">Privacy Policy</a></strong>.</span>');
    $("#logo img").attr("src", "http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/12/fp_logo_en.svg");
    $(".mob-menu-logo-holder a").attr("href", "http://www.fundacjaprzyjaciol.org/en/");
    $("#krs_location").attr("href", "http://www.fundacjaprzyjaciol.org/en/become-a-friend/#tax_one_percent");
    $("#id_one_time_giving").text("ONE TIME GIVING");
    $("#monthly_giving_custom").text("MONTHLY GIVING");
    $("#id_traditional_transfer").text("TRADITIONAL TRANSFER");
    $(".information-under p").html("<p style='font-size: 1em;'>Let's stay in touch! Keep up-to date with the latest news and campaigns of the <i>Friends of Children's Hospitals in Warsaw</i> straight to your inbox.</p>");
    if ($(window).width() < 1024) {
      $(".mob-standard-logo").attr("src", "http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/12/fp_logo_mobile_en.svg");
    }
    $(".more_info_przelewy span").text("[Show more...]");
    $(".more_info_paypal span").text("[Show more...]");
  }

  if (window.location.href.indexOf("/pl/") > -1) {
    $(".search-field").attr("placeholder", "Wyszukaj...");
    $("#cn-notice-text").html('<span id="cn-notice-text">Korzystając ze strony, wyrażasz zgodę na używanie <strong><a href="http://www.fundacjaprzyjaciol.org/pl/cookies-policy-pl/">cookies</a></strong> i akceptujesz <strong><a href="http://www.fundacjaprzyjaciol.org/pl/privacy-cookies-policy-pl/"> Politykę prywatności</a></strong>.</span>');
    $(".lvca-image-wrapper img").css("display", "none");
    $("#logo img").attr("src", "http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/12/fp_logo_pl.svg");
    $(".mobi-donate").attr("href", "http://www.fundacjaprzyjaciol.org/pl/zostan-przyjacielem/");
    $("a.baf-donate-button").css('{width: 398px; height: 112px; display: block; margin: 0 auto 30px auto; background: url(http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/12/duzy_button_becomaafriend-1.svg) no-repeat center center; background-repeat: no-repeat;}');
    $("a.baf-donate-button:hover").css('background-image', 'url(http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/12/duzy_button_becomaafriend_rollover_PL.svg)');
    $(".slider-button-donate").css('background-image', 'url("http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/12/FP_donate_header_LP_PL.svg")');
    $(".mob-menu-logo-holder a").attr("href", "http://www.fundacjaprzyjaciol.org/pl/");
    $("#krs_location").attr("href", "http://www.fundacjaprzyjaciol.org/pl/zostan-przyjacielem/#tax_one_percent");
    $("#id_one_time_giving").text("WSPARCIE JEDNORAZOWE");
    $("#monthly_giving_custom").text("WSPARCIE CO MIESIĄC");
    $("#id_traditional_transfer").text("PRZELEW TRADYCYJNY");
    $(".information-under p").text("Bądźmy w kontakcie! Chcielibyśmy dać Ci opowiedzieć Ci o naszych działaniach i pokazać, jak Przyjaciele zmieniają życie małych pacjentów.");
    if ($(window).width() < 1024) {
      $(".mob-standard-logo").attr("src", "http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/12/fp_logo_mobile_pl.svg");
    }
    $(".more_info_przelewy span").text("[pokaż więcej...]");
    $(".more_info_paypal span").text("[pokaż więcej...]");
    $("#become_a_friend_donate_button").css("background", "url(http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/12/duzy_button_becomaafriend_PL-1.svg)");
    $("#who_we_are_doate_button").css("background", "url(http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/12/duzy_button_becomaafriend_PL-1.svg)");
    $(".button-donate-post").css("background", 'url("http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/12/FP_donate_header_LP_PL.svg")');
    $("#who_we_are_doate_button").css("background-repeat", "no-repeat");
    $("#become_a_friend_donate_button").css("background-repeat", "no-repeat");
    $(".button-donate-post").css("background-repeat", "no-repeat");
    $('#become_a_friend_donate_button').hover(function() {
      $('#become_a_friend_donate_button').attr("style", "background-image:url(http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/12/duzy_button_becomaafriend_rollover_PL-1.svg)");
    }, function() {
      $('#become_a_friend_donate_button').attr("style", "background-image:url(http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/12/duzy_button_becomaafriend_PL-1.svg)");
    });
    $('#who_we_are_doate_button ').hover(function() {
      $('#who_we_are_doate_button ').attr("style", "background-image:url(http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/12/duzy_button_becomaafriend_rollover_PL-1.svg)");
    }, function() {
      $('#who_we_are_doate_button ').attr("style", "background-image:url(http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/12/duzy_button_becomaafriend_PL-1.svg)");
    });
    $("#mobmenuright .menu-item-1167 a").text("Strona główna");
    $("#mobmenuright .menu-item-1170 a").text("Kim jesteśmy");
    $("#mobmenuright .menu-item-1168 a").text("Jak pomagamy");
    $("#mobmenuright .menu-item-1164 a").text("Zostań przyjacielem");
    $("#mobmenuright .menu-item-1169 a").text("Nasi przyjaciele");
    $("#mobmenuright .menu-item-1166 a").text("Kontakt");
    $("#mobmenuright .menu-item-1167 a").attr("href", "http://www.fundacjaprzyjaciol.org/pl/");
    $("#mobmenuright .menu-item-1170 a").attr("href", "http://www.fundacjaprzyjaciol.org/pl/kim-jestesmy/");
    $("#mobmenuright .menu-item-1168 a").attr("href", "http://www.fundacjaprzyjaciol.org/pl/jak-pomagamy/");
    $("#mobmenuright .menu-item-1164 a").attr("href", "http://www.fundacjaprzyjaciol.org/pl/zostan-przyjacielem/");
    $("#mobmenuright .menu-item-1169 a").attr("href", "http://www.fundacjaprzyjaciol.org/pl/nasi-przyjaciele/");
    $("#mobmenuright .menu-item-1166 a").attr("href", "http://www.fundacjaprzyjaciol.org/pl/kontakt/");
    $("#labelCustomBecome").text("Wyrażam zgodę na przetwarzanie moich danych osobowych zawartych w niniejszej Deklaracji, w celach marketingowych, przez fundację „Przyjaciele Szpitali Dziecięcych w Warszawie” („Fundacja”)…");
    $("#labelCustomBecomePay").text("Wyrażam zgodę na przetwarzanie moich danych osobowych zawartych w niniejszej Deklaracji, w celach marketingowych, przez fundację „Przyjaciele Szpitali Dziecięcych w Warszawie” („Fundacja”)…");
    $(".przelewy_more_hide_information p").text("…zgodnie z ustawą z dnia 29 sierpnia 1997 r. o ochronie danych osobowych (tekst jednolity: Dz. U. 2002 r. Nr 101 poz. 926 z późn. zm.) oraz na otrzymywanie od Fundacji informacji marketingowych drogą elektroniczną zgodnie z ustawą z dnia 18.07.2002 r. (Dz.U. nr 144, poz.1204 z późn. zm.) o świadczeniu usług drogą elektroniczną. Zgodnie z art. 13 ust. 1 i ust. 2 ogólnego rozporządzenia o ochronie danych osobowych z dnia 27 kwietnia 2016 r., fundacja z siedziba w Warszawie ul. Grzybowska 5a, 00-132 Warszaw, jako Administrator danych osobowych, informują Pana/ Panią, iż:");
    $(".paypal_more_hide_information p").text("…zgodnie z ustawą z dnia 29 sierpnia 1997 r. o ochronie danych osobowych (tekst jednolity: Dz. U. 2002 r. Nr 101 poz. 926 z późn. zm.) oraz na otrzymywanie od Fundacji informacji marketingowych drogą elektroniczną zgodnie z ustawą z dnia 18.07.2002 r. (Dz.U. nr 144, poz.1204 z późn. zm.) o świadczeniu usług drogą elektroniczną. Zgodnie z art. 13 ust. 1 i ust. 2 ogólnego rozporządzenia o ochronie danych osobowych z dnia 27 kwietnia 2016 r., fundacja z siedziba w Warszawie ul. Grzybowska 5a, 00-132 Warszaw, jako Administrator danych osobowych, informują Pana/ Panią, iż:");
    $("ul li.list_custom_1").text("podanie danych jest dobrowolne;");
    $("ul li.list_custom_2").text("posiada Pani/Pan prawo dostępu do treści swoich danych i ich sprostowania, usunięcia, ograniczenia przetwarzania, prawo do przenoszenia danych, prawo do cofnięcia zgody w dowolnym momencie bez wpływu na zgodność z prawem przetwarzania;");
    $("ul li.list_custom_3").text("dane mogą być udostępniane przez  Fundację podmiotom upoważnionym  do uzyskania informacji na podstawie obowiązujących przepisów;");
    $("ul li.list_custom_4").text("podane dane będą przetwarzane na podstawie art. 6 ust. 1 pkt a i zgodnie z treścią ogólnego rozporządzenia o ochronie danych;");
    $(".list_custom_5").text("dane osobowe będą przechowywane przez okres niezbędny np. do  zrealizowania celów Fundacji;");
    $("ul li.list_custom_6").text("ma Pan/Pani prawo wniesienia skargi do GIODO gdy uzna Pani/Pan, iż przetwarzanie danych osobowych Pani/Pana dotyczących narusza przepisy ogólnego rozporządzenia o ochronie danych osobowych z dnia 27 kwietnia 2016 r.");
    $("#hash-it").val("Przekaż teraz");
    $("#paypal-button-submit").val("Przekaż teraz");
    $("#pp_client_custom").attr("placeholder", "Imię i Nazwisko");
    $("#p24_client_custom").attr("placeholder", "Imię i Nazwisko");
    $("a.mobi-donate").attr("href", "http://www.fundacjaprzyjaciol.org/pl/zostan-przyjacielem/#donate_button_hook");
    $(".mobi-donate img").attr("src", "http://www.fundacjaprzyjaciol.org/wp-content/uploads/2017/12/FP_donate_menu_PL.svg");
    $("#medicial-row-eq").attr("style", "height: 980px !important;");
  }

  // #############################################
  // #############################################
  // #############################################


  $('.payDonateGrid1').click(function() {
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $('.payDonateGrid1 .equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var textTest = $('.payDonateGrid1 .equ_medical_title h2').text();
    $("#p24_description").val("Wsparcie/ " + textTest);
    $("#item_name_custom").val("Wsparcie/ " + textTest);
    $("#tradition_transfer_title").text("Title: " + textTest);
    var test1 = $('.payDonateGrid1 .payGridImage').attr('test-background');
    $('.pay-img img').attr('src', test1);
    console.log(test1);
    $('#testowy-row h2').css('font-size', '22px');
    $('#testowy-row h2').addClass("amatic");
    $(".pay-img").attr("style", "background-image:url(" + test1 + ");");
  });

  $('.payDonateGrid2').click(function() {
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $('.payDonateGrid2 .equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var test2 = $('.payDonateGrid2 .payGridImage').attr('test-background');
    $('.pay-img img').attr('src', test2);
    $('#testowy-row h2').css('font-size', '22px');
    $('#testowy-row h2').addClass("amatic");
    var textTest2 = $('.payDonateGrid2 .equ_medical_title h2').text();
    $("#p24_description").val("Wsparcie/ " + textTest2);
    $("#item_name_custom").val("Wsparcie/ " + textTest2);
    $("#tradition_transfer_title").text("Title: " + textTest2);
    $(".pay-img").attr("style", "background-image:url(" + test2 + ");");
  });

  $('.payDonateGrid3').click(function() {
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $('.payDonateGrid3 .equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var test3 = $('.payDonateGrid3 .payGridImage').attr('test-background');
    $('.pay-img img').attr('src', test3);
    $('#testowy-row h2').css('font-size', '22px');
    $('#testowy-row h2').addClass("amatic");
    var textTest3 = $('.payDonateGrid3 .equ_medical_title h2').text();
    $("#p24_description").val("Wsparcie/ " + textTest3);
    $("#item_name_custom").val("Wsparcie/ " + textTest3);
    $("#tradition_transfer_title").text("Title: " + textTest3);
    $(".pay-img").attr("style", "background-image:url(" + test3 + ");");
  });

  $('.payDonateGrid4').click(function() {
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $('.payDonateGrid4 .equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var test4 = $('.payDonateGrid4 .payGridImage').attr('test-background');
    $('.pay-img img').attr('src', test4);
    $('#testowy-row h2').css('font-size', '22px');
    $('#testowy-row h2').addClass("amatic");
    var textTest4 = $('.payDonateGrid4 .equ_medical_title h2').text();
    $("#p24_description").val("Wsparcie/ " + textTest4);
    $("#item_name_custom").val("Wsparcie/ " + textTest4);
    $("#tradition_transfer_title").text("Title: " + textTest4);
    $(".pay-img").attr("style", "background-image:url(" + test4 + ");");
  });

  $('.payDonateGrid5').click(function() {
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $('.payDonateGrid5 .equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var test5 = $('.payDonateGrid5 .payGridImage').attr('test-background');
    $('.pay-img img').attr('src', test5);
    $('#testowy-row h2').css('font-size', '22px');
    $('#testowy-row h2').addClass("amatic");
    var textTest5 = $('.payDonateGrid5 .equ_medical_title h2').text();
    $("#p24_description").val("Wsparcie/ " + textTest5);
    $("#item_name_custom").val("Wsparcie/ " + textTest5);
    $("#tradition_transfer_title").text("Title: " + textTest5);
    $(".pay-img").attr("style", "background-image:url(" + test5 + ");");
  });

  $('.payDonateGrid6').click(function() {
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $('.payDonateGrid6 .equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var test6 = $('.payDonateGrid6 .payGridImage').attr('test-background');
    $('.pay-img img').attr('src', test6);
    $('#testowy-row h2').css('font-size', '22px');
    $('#testowy-row h2').addClass("amatic");
    var textTest6 = $('.payDonateGrid6 .equ_medical_title h2').text();
    $("#p24_description").val("Wsparcie/ " + textTest6);
    $("#item_name_custom").val("Wsparcie/ " + textTest6);
    $("#tradition_transfer_title").text("Title: " + textTest6);
    $(".pay-img").attr("style", "background-image:url(" + test6 + ");");
  });

  $('.payDonateGrid7').click(function() {
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $('.payDonateGrid7 .equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var test7 = $('.payDonateGrid7 .payGridImage').attr('test-background');
    $('.pay-img img').attr('src', test7);
    $('#testowy-row h2').css('font-size', '22px');
    $('#testowy-row h2').addClass("amatic");
    var textTest7 = $('.payDonateGrid7 .equ_medical_title h2').text();
    $("#p24_description").val("Wsparcie/ " + textTest7);
    $("#item_name_custom").val("Wsparcie/ " + textTest7);
    $("#tradition_transfer_title").text("Title: " + textTest7);
    $(".pay-img").attr("style", "background-image:url(" + test7 + ");");
  });

  $('.payDonateGrid8').click(function() {
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $('.payDonateGrid8 .equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var test8 = $('.payDonateGrid8 .payGridImage').attr('test-background');
    $('.pay-img img').attr('src', test8);
    $('#testowy-row h2').css('font-size', '22px');
    $('#testowy-row h2').addClass("amatic");
    var textTest8 = $('.payDonateGrid8 .equ_medical_title h2').text();
    $("#p24_description").val("Wsparcie/ " + textTest8);
    $("#item_name_custom").val("Wsparcie/ " + textTest8);
    $("#tradition_transfer_title").text("Title: " + textTest8);
    $(".pay-img").attr("style", "background-image:url(" + test8 + ");");
  });

  $('.payDonateGrid9').click(function() {
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $('.payDonateGrid9 .equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var test9 = $('.payDonateGrid9 .payGridImage').attr('test-background');
    $('.pay-img img').attr('src', test9);
    $('#testowy-row h2').css('font-size', '22px');
    $('#testowy-row h2').addClass("amatic");
    var textTest9 = $('.payDonateGrid9 .equ_medical_title h2').text();
    $("#p24_description").val("Wsparcie/ " + textTest9);
    $("#item_name_custom").val("Wsparcie/ " + textTest9);
    $("#tradition_transfer_title").text("Title: " + textTest9);
    $(".pay-img").attr("style", "background-image:url(" + test9 + ");");
  });

  $('.payDonateGrid10').click(function() {
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $('.payDonateGrid10 .equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var test10 = $('.payDonateGrid10 .payGridImage').attr('test-background');
    $('.pay-img img').attr('src', test10);
    $('#testowy-row h2').css('font-size', '22px');
    $('#testowy-row h2').addClass("amatic");
    var textTest10 = $('.payDonateGrid10 .equ_medical_title h2').text();
    $("#p24_description").val("Wsparcie/ " + textTest10);
    $("#item_name_custom").val("Wsparcie/ " + textTest10);
    $("#tradition_transfer_title").text("Title: " + textTest10);
    $(".pay-img").attr("style", "background-image:url(" + test10 + ");");
  });

  $('.payDonateGrid11').click(function() {
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $('.payDonateGrid11 .equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var test11 = $('.payDonateGrid11 .payGridImage').attr('test-background');
    $('.pay-img img').attr('src', test11);
    $('#testowy-row h2').css('font-size', '22px');
    $('#testowy-row h2').addClass("amatic");
    var textTest11 = $('.payDonateGrid11 .equ_medical_title h2').text();
    $("#p24_description").val("Wsparcie/ " + textTest11);
    $("#item_name_custom").val("Wsparcie/ " + textTest11);
    $(".pay-img").attr("style", "background-image:url(" + test11 + ");");
  });

  $('.payDonateGrid12').click(function() {
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $('.payDonateGrid12 .equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var test12 = $('.payDonateGrid12 .payGridImage').attr('test-background');
    $('.pay-img img').attr('src', test12);
    $('#testowy-row h2').css('font-size', '22px');
    $('#testowy-row h2').addClass("amatic");
    var textTest12 = $('.payDonateGrid12 .equ_medical_title h2').text();
    $("#p24_description").val("Wsparcie/ " + textTest12);
    $("#item_name_custom").val("Wsparcie/ " + textTest12);
    $(".pay-img").attr("style", "background-image:url(" + test12 + ");");
  });

  $('.payDonateGrid13').click(function() {
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $('.payDonateGrid13 .equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var test13 = $('.payDonateGrid13 .payGridImage').attr('test-background');
    $('.pay-img img').attr('src', test12);
    $('#testowy-row h2').css('font-size', '22px');
    $('#testowy-row h2').addClass("amatic");
    var textTest13 = $('.payDonateGrid13 .equ_medical_title h2').text();
    $("#p24_description").val("Wsparcie/ " + textTest13);
    $("#item_name_custom").val("Wsparcie/ " + textTest13);
    $(".pay-img").attr("style", "background-image:url(" + test13 + ");");
  });

  $('.payDonateGrid14').click(function() {
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $('.payDonateGrid14 .equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var test14 = $('.payDonateGrid14 .payGridImage').attr('test-background');
    $('.pay-img img').attr('src', test14);
    $('#testowy-row h2').css('font-size', '22px');
    $('#testowy-row h2').addClass("amatic");
    var textTest14 = $('.payDonateGrid14 .equ_medical_title h2').text();
    $("#p24_description").val("Wsparcie/ " + textTest14);
    $("#item_name_custom").val("Wsparcie/ " + textTest14);
    $(".pay-img").attr("style", "background-image:url(" + test14 + ");");
  });

  $('.payDonateGrid15').click(function() {
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $('.payDonateGrid15 .equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var test15 = $('.payDonateGrid15 .payGridImage').attr('test-background');
    $('.pay-img img').attr('src', test15);
    $('#testowy-row h2').css('font-size', '22px');
    $('#testowy-row h2').addClass("amatic");
    var textTest15 = $('.payDonateGrid15 .equ_medical_title h2').text();
    $("#p24_description").val("Wsparcie/ " + textTest15);
    $("#item_name_custom").val("Wsparcie/ " + textTest15);
    $(".pay-img").attr("style", "background-image:url(" + test15 + ");");
  });

  $('.payDonateGrid16').click(function() {
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $('.payDonateGrid16 .equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var test16 = $('.payDonateGrid16 .payGridImage').attr('test-background');
    $('.pay-img img').attr('src', test16);
    $('#testowy-row h2').css('font-size', '22px');
    $('#testowy-row h2').addClass("amatic");
    var textTest16 = $('.payDonateGrid16 .equ_medical_title h2').text();
    $("#p24_description").val("Wsparcie/ " + textTest16);
    $("#item_name_custom").val("Wsparcie/ " + textTest16);
    $(".pay-img").attr("style", "background-image:url(" + test16 + ");");
  });



});