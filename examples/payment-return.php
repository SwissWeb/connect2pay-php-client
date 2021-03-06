<?php
require_once (dirname(__FILE__) . "/../src/Connect2PayClient.php");
require_once (dirname(__FILE__) . "/configuration.php");

use PayXpert\Connect2Pay\Connect2PayClient;

session_start();
// We restore from the session the token info
$merchantToken = $_SESSION['merchantToken'];

if ($merchantToken != null) {
  // Extract data received from the payment page
  $data = $_POST["data"];

  if ($data != null) {
    // Setup the client and decrypt the redirect Status
    $c2pClient = new Connect2PayClient($connect2pay, $originator, $password);
    if ($c2pClient->handleRedirectStatus($data, $merchantToken)) {
      // Get the PaymentStatus object
      $status = $c2pClient->getStatus();

      $errorCode = $status->getErrorCode();
      $merchantData = $status->getCtrlCustomData();
      $transactionId = null;
      if ($transaction !== null) {
        // The transaction ID generated for this payment
        $transactionId = $transaction->getTransactionID();
      }

      // errorCode = 000 => payment is successful
      if ($errorCode == '000') {
        // Display the payment confirmation page
      } else {
        // Display the payment error page
      }

      // Debug message
      $log = "Redirect received a new transaction status from " . $_SERVER["REMOTE_ADDR"] . ". Merchant token: " .
           $status->getMerchantToken() . ", Status: " . $status->getStatus() . ", Error code: " . $errorCode;
      if ($errorCode >= 0) {
        $log .= ", Error message: " . $status->getErrorMessage();
        $log .= ", Transaction ID: " . $transactionId;
      }
      syslog(LOG_INFO, $log);
    }
  }
}

// If here, display the error page
// ...