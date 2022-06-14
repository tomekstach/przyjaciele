jQuery(document).ready(function($) {
  var mainURL = 'https://test.fundacjaprzyjaciol.org';
  var lang = window.location.href.indexOf('/en/') !== -1 ? 'en' : 'pl';
  $('.general-button-donate.pay-donate-hide a').removeAttr('href');
  $('#menu-lang-menu').on('click', function() {
    $('.dropdown-lang .sub-menu').slideToggle();
  });
  $('#button-faq, #text-faq').click(function() {
    $('#faq').toggle('slide');
    $('#impact').hide();
  });
  $('.single-icon-top-bar.bip-top').click(function() {
    $(this).removeAttr('href');
    if (jQuery.browser.mobile) {
      // console.log('mobile detected');
      $('html, body').animate({ scrollTop: $('#bip-cloud').offset().top - 150 }, 900);
    } else {
      // console.log('not mobile device detected');
      $('html, body').animate({ scrollTop: $('#bip-cloud').offset().top - 150 }, 900);
    }
    $('#bip-cloud').stop().css('visibility', 'visible').animate({ 'opacity': 1 });
    setTimeout(function() {
      $('#bip-cloud').stop().css('visibility', 'hidden').animate({ 'opacity': 0 });
    }, 5000);
  });
  $('#text-faq').click(function() {
    // console.log('click-faq');
    setTimeout(
      $('html, body').animate({ scrollTop: $('#faq').offset().top - 100 }, 'slow'), 3000);
  });
  $('#text-impact').click(function() {
    // console.log('click-impact');
    setTimeout(
      $('html, body').animate({ scrollTop: $('#impact').offset().top - 100 }, 'slow'), 3000);
  });
  $('#button-impact, #text-impact').click(function() {
    $('#impact').toggle('slide');
    $('#faq').hide();
  });
  $('.more_info_przelewy').click(function() {
    $('.przelewy_more_hide_information').toggle('slide');
  });
  $('.more_info_paypal').click(function() {
    $('.paypal_more_hide_information').toggle('slide');
  });
  $('#id_one_time_giving').click(function() {
    $('.form_przelewy24').css('display', 'block');
    $('.box-for-transfer').css('display', 'none');
    $('.paypal-information').css('display', 'none');
    $('html, body').animate({ scrollTop: $('#formularz24-form').offset().top }, 1000);
    $('.pay-button').removeClass('activeButton');
    $(this).addClass('activeButton');
  });
  $('#monthly_giving_custom').click(function() {
    $('.form_przelewy24').css('display', 'none');
    $('.box-for-transfer').css('display', 'none');
    $('.paypal-information').css('display', 'block');
    $('html, body').animate({ scrollTop: $('.paypal-information').offset().top }, 1000);
    $('.pay-button').removeClass('activeButton');
    $(this).addClass('activeButton');
  });
  $('.pay-donate-hide a').click(function() {
    $('.img-pay-hide').css('display', 'block');
    $('#pay-donate-row-custom-grid').css('display', 'block');
    $('html, body').animate({ scrollTop: $('#donate_button_hook').offset().top - 130 }, 1000);
  });
  $('#donate-row .payDonateGrid').click(function() {
    $('.tax-dedu-con').show();
    $('html, body').animate({ scrollTop: $('#tescik').offset().top }, 1000);
  });
  $('#medicial-row-eq .payDonateGrid').click(function() {
    window.localStorage.setItem('donateNumber', $(this).attr('id'));
    if (lang === 'en') {
      window.location.href = mainURL + '/en/become-a-friend/';
    } else {
      window.location.href = mainURL + '/pl/zostan-przyjacielem/';
    }
  });
  $('#id_traditional_transfer').click(function() {
    $('.pay-button').removeClass('activeButton');
    $(this).addClass('activeButton');
    $('.box-for-transfer').css('display', 'block');
    $('.form_przelewy24').css('display', 'none');
    $(".paypal-information").css("display", "none");
    $("html, body").animate({ scrollTop: $('.box-for-transfer').offset().top - 130 }, 1000);
  });
  $('#optionPrzelewy24').click(function() {
    $('#paymentAmount').css('display', 'block');
    $('.group-button').css('display', 'flex');
    $('html, body').animate({ scrollTop: $('#paymentAmount').offset().top - 130 }, 1000);
  });
  $('.donate-item').click(function() {
    $('.donate-item').removeClass('donate-item-active');
    $(this).addClass('donate-item-active');
  });
  $(".dropdown").hover(function() {
    $(this).addClass('open');
  }, function() {
    $(this).removeClass('open');
  });

  var years = ['2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021'];

  for (let index = 0; index + 1 < years.length; ++index) {
    $('.yesr' + years[index]).hide();
  }

  $('.yesr' + years[years.length - 1]).show();

  $('#mySelect').on('change', function() {
    var value = $(this).val();

    for (let index = 0; index < years.length; ++index) {
      if (value == years[index]) {
        $('.yesr' + years[index]).fadeIn().show();
      } else {
        $('.yesr' + years[index]).fadeOut().hide();
      }
    }
  });

  $('#menu-item-1202 a:eq(0)').attr('href', mainURL + '/en/who-we-are/').addClass('disabled');
  $('#menu-item-1003 a:eq(0)').attr('href', mainURL + '/en/how-we-help/').addClass('disabled');
  $('#menu-item-557 a:eq(0)').attr('href', mainURL + '/en/become-a-friend/').addClass('disabled');
  $('#menu-item-559 a:eq(0)').attr('href', mainURL + '/en/our-friends/').addClass('disabled');
  $('#menu-item-558 a:eq(0)').attr('href', mainURL + '/en/contact-us/').addClass('disabled');
  $('#menu-item-1898 a:eq(0)').attr('href', mainURL + '/pl/kim-jestesmy/').addClass('disabled');
  $('#menu-item-1899 a:eq(0)').attr('href', mainURL + '/pl/jak-pomagamy/').addClass('disabled');
  $('#menu-item-1900 a:eq(0)').attr('href', mainURL + '/pl/zostan-przyjacielem/').addClass('disabled');
  $('#menu-item-1901 a:eq(0)').attr('href', mainURL + '/pl/nasi-przyjaciele/').addClass('disabled');
  $('#menu-item-1902 a:eq(0)').attr('href', mainURL + '/pl/kontakt/').addClass('disabled');
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
  $('div.payDonateGrid a').removeAttr('href');
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
  $('.foot-bip').removeAttr("href");
  if (jQuery.browser.mobile) {
    $('#footerBipIcon').toggle(function() {
      // console.log('start mobile bip');
      $('#bip-cloud').stop().css('visibility', 'visible').animate({ "opacity": 1 });
      $('html, body').animate({ scrollTop: $('#bip-cloud').offset().top - 150 }, 900);
    }, function() {
      $('#bip-cloud').stop().css('visibility', 'hidden').animate({ "opacity": 0 });
      // console.log('end bip');
    });
    $(document).click(function() {
      $('#bip-cloud').stop().css('visibility', 'hidden').animate({ "opacity": 0 });
    });
  } else {
    $('#footerBipIcon').hover(function() {
      // console.log('start desktop bip');
      $('#bip-cloud').stop().css('visibility', 'visible').animate({ "opacity": 1 });
    }, function() {
      $('#bip-cloud').stop().css('visibility', 'hidden').animate({ "opacity": 0 });
      // console.log('end bip');
    });
  }
  $('.button-download--img').hover(function() {
    $(this).find('img').attr('src', mainURL + "/wp-content/uploads/2017/12/1proc-2.svg");
  }, function() {
    $(this).find('img').attr('src', mainURL + "/wp-content/uploads/2017/12/1proc-1.svg");
  });
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

  if (localStorage.getItem('donateNumber') !== null) {
    var donateNumber = localStorage.getItem('donateNumber');
    $('.img-pay-hide').css('display', 'block');
    $('#pay-donate-row-custom-grid').css('display', 'block');
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $('#' + donateNumber).find('.equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var test = $('#' + donateNumber).find('.payGridImage').attr('test-background');
    var accountNumber = $('#' + donateNumber).find('#account-number').html();
    // console.log(typeof(accountNumber));
    if (typeof(accountNumber) != 'undefined') {
      // console.log('donateAccountNumber append');
      $('#donateAccountNumber').html(accountNumber);
    } else {
      // console.log('donateAccountNumber remove');
      $('#donateAccountNumber').html('');
    }
    $('.pay-img img').attr('src', test);
    $('#testowy-row h2').css('font-size', '22px');
    // $('#testowy-row h2').addClass("amatic");
    var textTest = $('#' + donateNumber).find('.equ_medical_title h2').text().replace(/\r?\n|\r/g, '').trim().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
    // console.log(textTest);
    $("#p24_description").val("Wsparcie/ " + textTest);
    $(".pp_item_name_custom").val("Wsparcie/ " + textTest);
    $("#tradition_transfer_title").text("Title: " + textTest);
    if (window.location.href.indexOf("/pl/") > -1) {
      $("#tradition_transfer_title").text("Tytuł: " + textTest);
    }
    $(".pay-img").attr("style", "background-image:url(" + test + ");");
    $('html, body').animate({ scrollTop: $('#testowy-row').offset().top }, 1000);
    window.localStorage.removeItem('donateNumber');
    delete donateNumber;
  }

  var url = window.location.href;
  if (url.indexOf('/become-a-friend/#donate_button_hook') !== -1 || url.indexOf('/zostan-przyjacielem/#donate_button_hook') !== -1) {
    $('.img-pay-hide').css('display', 'block');
    $('#pay-donate-row-custom-grid').css('display', 'block');
  } else if ((url.indexOf('/become-a-friend/') !== -1 || url.indexOf('/zostan-przyjacielem/') !== -1) && url.indexOf('#') === -1) {
    $('.menu-donate').click(function() {
      window.location = url + '#donate_button_hook';
      $('.img-pay-hide').css('display', 'block');
      $('#pay-donate-row-custom-grid').css('display', 'block');
    });

    $('.mobi-donate').click(function() {
      window.location = url + '#donate_button_hook';
      $('.img-pay-hide').css('display', 'block');
      $('#pay-donate-row-custom-grid').css('display', 'block');
    });
  }

  if ($('.donate_ile_dzieci').is(':empty')) {
    $('.donate_dzieci,#how-will-it,#a-year,.kids-life').hide();
  }
  $(".tax-dedu-con").hide();
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

  $('.donate-item').click(function() {
    var thisItem = $(this);
    var priceVal = $(this).attr('value');
    // console.log(priceVal)

    $('#demo').attr('value', priceVal);
  });


  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: [
      "<img class='owl-custom-nav' src='" + mainURL + "/wp-content/uploads/2017/11/back.png'/>",
      "<img class='owl-custom-nav' src='" + mainURL + "/wp-content/uploads/2017/11/next.png'/>"
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
  if (window.location.href.indexOf("/en") > -1) {
    // console.log('EN !!!');
    $(".search-field").attr("placeholder", "Search...");
    $("#cn-notice-text").html('<span>By continuing to browse our site you agree to our use of <strong><a href="' + mainURL + '/en/cookies-policy/">cookies </a></strong> and <strong><a href="' + mainURL + '/en/privacy-cookies-policy/">Privacy Policy</a></strong>.</span><span class="close"></span>');
    $("#logo img").attr("src", mainURL + "/wp-content/uploads/2017/12/fp_logo_en.svg");
    $(".mob-menu-logo-holder a").attr("href", mainURL + '/en/');
    $("a#krs_foot_link").attr("href", mainURL + "/en/become-a-friend/#tax_one_percent");
    $("#krs_location").attr("href", mainURL + "/en/become-a-friend/#tax_one_percent");
    $("#id_one_time_giving").text("ONE TIME GIVING");
    $("#monthly_giving_custom").text("MONTHLY GIVING");
    $("#id_traditional_transfer").text("TRADITIONAL TRANSFER");
    // $(".information-under p").html("<p style='font-size: 1em;'>Let's stay in touch! Keep up-to date with the latest news and campaigns of the <i>Friends of Children's Hospitals in Warsaw</i> straight to your inbox.</p>");
    if ($(window).width() < 1024) {
      $(".mob-standard-logo").attr("src", mainURL + "/wp-content/uploads/2017/12/fp_logo_mobile_en.svg");
    }
    $("span.donate_text_dzieci").text("children");
    $(".more_info_przelewy span").text("[Show more...]");
    $(".more_info_paypal span").text("[Show more...]");
    $("#bip-cloud p").html('<p><a href="' + mainURL + '">fundacjaprzyjaciol.org</a> is also a site of Biuletyn Informacji Publicznej (Bulletin of Public Information), according to the obligation requested by Article 6, point 6 of the Polish Law on Access to Public Information from September 6, 2001. Information included in the financial reports and reports on our activities (folder: Who we are / Documents) meet the requirements of the Regulation of the Minister of Internal Affairs and Administration regarding the Public Information Bulletin BIP from January 18, 2007.</p>');
  }
  if (window.location.href.indexOf("/pl/") > -1) {
    // console.log('PL !!!');
    $('.single-donate-thansk-row a.button-donate-post').attr("href", mainURL + "/pl/zostan-przyjacielem/#donate_button_hook");
    $(".search-field").attr("placeholder", "Wyszukaj...");
    $("#cn-notice-text").html('<span>Korzystając ze strony, wyrażasz zgodę na używanie <strong><a href="' + mainURL + '/pl/cookies-policy-pl/">cookies</a></strong> i akceptujesz <strong><a href="' + mainURL + '/pl/polityka-prywatnosci/"> Politykę prywatności</a></strong>.</span><span class="close"></span>');
    $(".lvca-image-wrapper img").css("display", "none");
    $("#logo img").attr("src", mainURL + "/wp-content/uploads/2017/12/fp_logo_pl.svg");
    $(".mobi-donate").attr("href", mainURL + "/pl/zostan-przyjacielem/");
    $("a.baf-donate-button").css('{width: 398px; height: 112px; display: block; margin: 0 auto 30px auto; background: url(' + mainURL + '/wp-content/uploads/2017/12/duzy_button_becomaafriend-1.svg) no-repeat center center; background-repeat: no-repeat;}');
    $("a.baf-donate-button:hover").css('background-image', 'url(' + mainURL + '/wp-content/uploads/2017/12/duzy_button_becomaafriend_rollover_PL.svg)');
    $(".slider-button-donate").css('background-image', 'url("/wp-content/uploads/2018/09/duzy_button_becomaafriend_PL-2a.svg")');
    $(".mob-menu-logo-holder a").attr("href", mainURL + "/pl/");
    $("#krs_location").attr("href", mainURL + "/pl/zostan-przyjacielem/#tax_one_percent");
    $("#id_one_time_giving").text("WSPARCIE JEDNORAZOWE");
    $("#monthly_giving_custom").text("WSPARCIE CO MIESIĄC");
    $("#id_traditional_transfer").text("PRZELEW TRADYCYJNY");
    $(".information-under p").text("Każda wpłacona kwota to szansa na lepszą diagnostykę i skuteczne leczenie małych pacjentów. Aby dokonać płatności, prosimy o wypełnienie poniższych pól.");
    $("#remaining-to").text("Pozostało do zebrania:");
    $("#cost-text").text("koszt: ");
    $("#how-will-it").text("Jak wpłynie to na życie dzieci?");
    $("#a-year").text("każdego roku otrzyma potrzebną im pomoc");
    $("#thank-you-all").text("Dziękujemy za wsparcie!");
    $(".image-post-donate-kids").attr("src", mainURL + "/wp-content/uploads/2017/12/2017-12-14.jpg");
    $("#bip-cloud p").html('Fundacja „Przyjaciele Szpitali Dziecięcych w Warszawie” informuje, że strona fundacjaprzyjaciol.org pełni rolę strony Biuletynu Informacji Publicznej, zgodnie z obowiązkiem wynikającym z art.8 ust. 6 ustawy z dnia 6 września 2001 r. o dostępie do informacji publicznej. Informacje zawarte w sprawozdaniach merytorycznym i finansowym (zakładka: Kim jesteśmy / Dokumenty) spełniają wymogi określone w rozporządzeniu Ministra Spraw Wewnętrznych i Administracji z dnia 18 stycznia 2007 r. w sprawie Biuletynu Informacji Publicznej.');
    if ($(window).width() < 1024) {
      $(".mob-standard-logo").attr("src", mainURL + "/wp-content/uploads/2017/12/fp_logo_mobile_pl.svg");
    }
    $(".more_info_przelewy span").text("[pokaż więcej...]");
    $(".more_info_paypal span").text("[pokaż więcej...]");
    $("#become_a_friend_donate_button").css("background", "url(/wp-content/uploads/2018/06/2.svg)");
    $("#who_we_are_doate_button").css("background", "url(/wp-content/uploads/2018/06/2.svg)");
    $(".button-donate-post").css("background", 'url("' + mainURL + '/wp-content/uploads/2017/12/FP_donate_header_LP_PL.svg")');
    $("#who_we_are_doate_button").css("background-repeat", "no-repeat");
    $("#become_a_friend_donate_button").css("background-repeat", "no-repeat");
    $(".button-donate-post").css("background-repeat", "no-repeat");
    $('#become_a_friend_donate_button').hover(function() {
      $('#become_a_friend_donate_button').attr("style", "background-image:url(/wp-content/uploads/2018/06/duzy_button_becomaafriend_rollover_PL-1-1.svg)");
    }, function() {
      $('#become_a_friend_donate_button').attr("style", "background-image:url(/wp-content/uploads/2018/06/2.svg)");
    });
    $('#who_we_are_doate_button ').hover(function() {
      $('#who_we_are_doate_button ').attr("style", "background-image:url(/wp-content/uploads/2018/06/duzy_button_becomaafriend_rollover_PL-1-1.svg)");
    }, function() {
      $('#who_we_are_doate_button ').attr("style", "background-image:url(/wp-content/uploads/2018/06/2.svg)");
    });
    $("#mobmenuright .menu-item-1167 a").text("Strona główna");
    $("#mobmenuright .menu-item-1170 a").text("Kim jesteśmy");
    $("#mobmenuright .menu-item-1168 a").text("Jak pomagamy");
    $("#mobmenuright .menu-item-1164 a").text("Zostań przyjacielem");
    $("#mobmenuright .menu-item-1169 a").text("Nasi przyjaciele");
    $("#mobmenuright .menu-item-1166 a").text("Kontakt");
    $("#mobmenuright .menu-item-1167 a").attr("href", mainURL + "/pl/");
    $("#mobmenuright .menu-item-1170 a").attr("href", mainURL + "/pl/kim-jestesmy/");
    $("#mobmenuright .menu-item-1168 a").attr("href", mainURL + "/pl/jak-pomagamy/");
    $("#mobmenuright .menu-item-1164 a").attr("href", mainURL + "/pl/zostan-przyjacielem/");
    $("#mobmenuright .menu-item-1169 a").attr("href", mainURL + "/pl/nasi-przyjaciele/");
    $("#mobmenuright .menu-item-1166 a").attr("href", mainURL + "/pl/kontakt/");
    $("#labelCustomBecome1").text(" *Wyrażam zgodę na przekazywanie przez fundację „Przyjaciele Szpitali Dziecięcych w Warszawie” moich danych osobowych zawartych w formularzu płatności do PayPro SA/DialCom24 Sp. z o. o. z siedzibą w Poznaniu (60-327) przy ul. Kanclerskiej 15, w celu realizacji płatności mojej darowizny.");
    $("#labelCustomBecomePay1").text(" *Wyrażam zgodę na przekazywanie przez fundację „Przyjaciele Szpitali Dziecięcych w Warszawie” moich danych osobowych zawartych w formularzu płatności do PayPal (Europe) S.à r.l. et Cie, S.C.A. (R.C.S. Luxembourg B 118 349) w celu realizacji płatności mojej darowizny.");
    // $("#labelCustomBecome").text(" Chcę otrzymywać korespondencję od fundacji „Przyjaciele Szpitali Dziecięcych w Warszawie” drogą elektroniczną, aby wiedzieć, jak pomagamy razem małym pacjentom. W tym celu wyrażam zgodę na przetwarzanie moich danych osobowych zawartych w formularzu płatności przez fundację „Przyjaciele Szpitali Dziecięcych w Warszawie” („Fundacja”)…");
    // $("#labelCustomBecomePay").text(" Chcę otrzymywać korespondencję od fundacji „Przyjaciele Szpitali Dziecięcych w Warszawie” drogą elektroniczną, aby wiedzieć, jak pomagamy razem małym pacjentom. W tym celu wyrażam zgodę na przetwarzanie moich danych osobowych zawartych w formularzu płatności przez fundację „Przyjaciele Szpitali Dziecięcych w Warszawie” („Fundacja”)…");
    $("#agreeDetails").text(" Szczegółowe informacje odnośnie przetwarzania danych przez fundację „Przyjaciele Szpitali Dziecięcych można znaleźć tutaj: " + mainURL + "/pl/polityka-prywatnosci/");
    $(".przelewy_more_hide_information p").text("… zgodnie z art.6 ust.1 lit. a ogólnego rozporządzenia o ochronie danych osobowych z dnia 27 kwietnia 2016 r. (Dz. Urz. UE L 119 z 04.05.2016). Wiem, że fundacja z siedzibą w Warszawie (00-132) przy ul. Grzybowskiej 5a, będzie Administratorem danych osobowych oraz że:");
    $(".paypal_more_hide_information p").text("… zgodnie z art.6 ust.1 lit. a ogólnego rozporządzenia o ochronie danych osobowych z dnia 27 kwietnia 2016 r. (Dz. Urz. UE L 119 z 04.05.2016). Wiem, że fundacja z siedzibą w Warszawie (00-132) przy ul. Grzybowskiej 5a, będzie Administratorem danych osobowych oraz że:");
    $("ul li.list_custom_1").text("Podanie danych jest dobrowolne, jednak niezbędne w celu otrzymywania wiadomości od Fundacji;");
    $("ul li.list_custom_2").text("Posiadam prawo dostępu do treści swoich danych i ich sprostowania, usunięcia, ograniczenia przetwarzania, prawo do przenoszenia danych, prawo do cofnięcia zgody w dowolnym momencie bez wpływu na zgodność z prawem przetwarzania, którego dokonano na podstawie zgody przed jej cofnięciem, oraz do otrzymania kopii przetwarzanych danych osobowych;");
    $("ul li.list_custom_3").text("Do danych osobowych mogą mieć dostęp upoważnieni pracownicy i przedstawiciele Fundacji;");
    $("ul li.list_custom_4").text("Zgodnie z obowiązującym prawem dane mogą być przekazywane podmiotom przetwarzającym je na nasze zlecenie, np. podwykonawcom usług, oraz podmiotom uprawnionym do uzyskania danych na podstawie obowiązującego prawa np. sądy lub organy ścigania – oczywiście tylko gdy wystąpią z żądaniem w oparciu o stosowną podstawę prawną;");
    $(".list_custom_5").text("Dane osobowe będą przetwarzane do momentu odwołania zgody;");
    $("ul li.list_custom_6").text("Dane nie będą profilowane;");
    $("ul li.list_custom_7").text("Dane mogą być udostępniane podmiotom w państwach trzecich, ze względu na korzystanie z narzędzi Google (np. Gmail);");
    $("ul li.list_custom_8").text("Mam prawo wniesienia skargi do UODO, gdy uznam, iż przetwarzanie danych osobowych narusza obowiązujące przepisy;");
    $("ul li.list_custom_9").text("Wszelkie prawa przedstawione powyżej mogą być egzekwowane za pomocą wiadomości wysłanej Fundacji na adres: ul. Grzybowska 5a, 00-132 Warszawa, bądź e-maila na adres: kontakt@fundacjaprzyjaciol.org;");
    $("ul li.list_custom_10").text("W przypadku nieudzielenia zgody lub późniejszego przesłania wniosku o zmianę lub usunięcie moich danych albo wycofania zgody, stracę możliwość współpracy z Fundacją.");
    $("#hash-it").val("PRZEKAŻ TERAZ");
    $("#paypal-button-submit").val("PRZEKAŻ TERAZ");
    $("#pp_client_custom").attr("placeholder", "Imię i Nazwisko");
    $("#p24_client_custom").attr("placeholder", "Imię i Nazwisko");
    $("a.mobi-donate").attr("href", mainURL + "/pl/zostan-przyjacielem/#donate_button_hook");
    $(".mobi-donate img").attr("src", mainURL + "/wp-content/uploads/2017/12/FP_donate_menu_PL.svg");
  }

  $('#pay-donate-row-custom-grid').find('.payDonateItem').click(function(e) {
    $('#testowy-row').css('display', 'block');
    $('#testowy-row h2').text('');
    $(this).find('.equ_medical_title h2').clone().appendTo('#testowy-row h3');
    var test = $(this).find('.payGridImage').attr('test-background');
    var accountNumber = $(this).find('#account-number').html();
    // console.log(typeof(accountNumber));
    if (typeof(accountNumber) != 'undefined') {
      // console.log('donateAccountNumber append');
      $('#donateAccountNumber').html(accountNumber);
    } else {
      // console.log('donateAccountNumber remove');
      $('#donateAccountNumber').html('');
    }
    $('.pay-img img').attr('src', test);
    $('#testowy-row h2').css('font-size', '22px');
    // $('#testowy-row h2').addClass("amatic");
    var textTest = $(this).find('.equ_medical_title h2').text().replace(/\r?\n|\r/g, '').trim().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
    // console.log(textTest);
    $("#p24_description").val("Wsparcie/ " + textTest);
    $(".pp_item_name_custom").val("Wsparcie/ " + textTest);
    $("#tradition_transfer_title").text("Title: " + textTest);
    if (window.location.href.indexOf("/pl/") > -1) {
      $("#tradition_transfer_title").text("Tytuł: " + textTest);
    }
    $(".pay-img").attr("style", "background-image:url(" + test + ");");
  });

  var firstButtonEn = $('.home-red-text-bkg').find('.menu-donate-button-en');
  if (typeof(firstButtonEn) == 'object') {
    $('.home-red-text-bkg').click(function(e) {
      window.location.href = firstButtonEn.attr('href');
    });
    $('.slider-first-text-wrapper-bkg').click(function(e) {
      window.location.href = firstButtonEn.attr('href');
    });
  }
});