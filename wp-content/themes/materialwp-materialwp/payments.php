<?php

ob_start();

include_once('Przelewy24_API.php');
$oPrzelewy24_API = new Przelewy24_API();

if (isset($_POST['p24_merchant_id']) and isset($_POST['p24_sign'])) {
  if ($oPrzelewy24_API->Verify($_POST) === true) {
    // Tutaj dokonujemy aktywacji usługi, która jest opłacana
  }
} else {
  // Powrotny adres URL
  $p24_url_return = 'http://www.fundacjaprzyjaciol.org/payments.php';

  // Adres dla weryfikacji płatności
  $p24_url_status = 'http://www.fundacjaprzyjaciol.org/payments.php';

  // Kwota do zapłaty musi być pomnożona razy 100.
  // Czyli, jeżeli użytkownik ma zapłacić 499 złotych, to kwota do zapłaty
  // to 499 * 100 (wyrażona w groszach)
  $redirect = $oPrzelewy24_API->Pay('Tutaj wstaw kwotę do zapłaty', 'Tutaj wstaw tytuł płatności', 'Tutaj adres e-mail osoby płacącej', $p24_url_return, $p24_url_status);
  Header('Location: ' . $redirect);
  exit;
}
