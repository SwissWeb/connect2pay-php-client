<?php
use PayXpert\Connect2Pay\Connect2PayClient;

# Requirements: php5-curl

# Configuration
$connect2pay = "https://connect2.payxpert.com/";
//$connect2pay = "https://connect2-demo.payxpert.com/";
//$connect2pay = "https://connect2.baian.com/";
//$connect2pay = "https://connect2-stg.baian.com/";
$connect2pay = "http://localhost:43901/";
//$connect2pay = "https://188.165.157.66/";
//$connect2pay = "https://secure.safenpay.com/";
$originator = "nainnain";
$password = "nainnainrules";
//$originator = "guilde";
//$password = "guilderules";
//$originator = "dianarosa";
//$password = "dianarosa";
//$originator="100002";
//$password="vN1.+-2*";
$originator="102019";
$password="525c563011420f4d7a230ea1fc2fbe024031febb34da9f1508d564c5c72e0284";
//$password='5^W4)4S)229d4L05';

//$operation = Connect2PayClient::_OPERATION_TYPE_AUTHORIZE;
$operation = Connect2PayClient::_OPERATION_TYPE_SALE;

//$originator="102024";
//$password='X]4,KxjY';

//$originator="103582";
//$password='2G&8M45UfTHUItr&';
// PaySafe
//$originator="102032";
//$password="8k2eA{21";
// LemonWay
//$originator="102033";
//$password="3^3[s7oL";
// Sermepa
//$originator="102034";
//$password='X5bY228"';

// Privileged password
//$password="GWiU3xPoTJfR68En";
//$password="3hE=r.o4Ft56";
//$originator="102585";
//$password="8zMVvkFrLG3kuwR6";
//$originator="102021";
//$password="Azerty1234!!";

// Prod test accounts
//$originator="103025";
//$password="lFS7ZuFMb3";
//$originator="100001";
//$password="K!7?b0U(7iw1Md-2";

//$originator="104266";
//$password = 'KKbP49d74z:MgZ?C';

# Staging merchants
//$originator = "test-merchant-staging";
//$password = "E9hHpz4xJn3U2b9b";
//$originator = "test-merchant-prod";
//$password = "2MC4VxHcMTtGCoM4";
//$originator = "ewallet-pxp";
//$password = "MDwPVmo8s6DFAymy";
//$originator = "datalia-stg";
//$password = "YxwEa4hAfi6fH8Dy";
//$originator = "fullsize-stg";
//$password = "UaVNrAn3ZHiem9Tk";
//$originator = "jaysxlist.com";
//$password = "mievU6KiwjfYN2jF";
//$originator = "102977";
//$password = "56lIbZZUft";
//$originator = "1ticketlive";
//$password = "1ticketlive";
//$originator = "safenpay";
//$password = "safenpay";
//$originator = "103053";
//$password = "nNeDdqAT1X";
//$originator = "102020";
//$password = "123456789";

# Dianarosa
//$originator = "dianarosa";
//$password = "Dz6K9uFwyut8PFRX";
//$password = "dianarosa";

//$operation = Connect2PayClient::_OPERATION_TYPE_SALE;

//$redirectURL = "http://www.payxpert.com/";
$redirectURL = "http://127.0.0.1:8080/dev/zencart/zen-cart-v1.5.1/index.php?main_page=checkout_process&referer=payxpert";
//$callbackURL = "https://10.10.10.105/callback/callback.php";
//$callbackURL = "https://sec-dev/Interface/c2pay-callback.php?plugins=payxpert&payxpert_step=CALLBACK&order_id=10&identifyCode=";
$callbackURL = "https://myreseau.org/pxp-callback.php";
//$callbackURL = "https://www.hostgarou.com/me/modules/gateways/callback/payzone.php";
//$callbackURL = "https://clients.santrex.net/";
//$callbackURL = "http://dev.payxpert.com/transaction/callback";
//$callbackURL = "http://callback.lan/dev/zencart/zen-cart-v1.5.1/index.php?main_page=checkout_process&referer=payxpert";

//$secure3d = "true";

// Shopper notifications
$shopperEmailAddress = "jsh@payxpert.com";

// Payment types and Provider
//$paymentType = Connect2PayClient::_PAYMENT_TYPE_BANKTRANSFER;
//$provider = Connect2PayClient::_PAYMENT_PROVIDER_PRZELEWY24;

// Proxy configuration
//$proxy_host = "127.0.0.1";
//$proxy_port = 8888;
//$proxy_username = "Foo"
//$proxy_password = "Bar"

//$defaultCurrency = "PLN";

// Subscription with predefined offer - Set $defaultAmount to the offer amount
//$subscriptionOfferId = 36;
$defaultAmount = 500;

//$subscriptionOfferId = 35;
//$defaultAmount = 195;

//$subscription = array("subscriptionType" => "normal", "rebillAmount" => 4200, "rebillPeriod" => "P1M", "trialPeriod" => "PT30M", "rebillMaxIteration" => 2);
//$subscription = array("subscriptionType" => "normal", "rebillAmount" => 4200, "rebillPeriod" => "P1M", "rebillMaxIteration" => 1);
$subscription = array("subscriptionType" => "infinite", "rebillAmount" => 4200, "rebillPeriod" => "P1M", "trialPeriod" => "P1M");
//$subscription = array("subscriptionType" => "lifetime", "rebillAmount" => 4200);
//$subscription = array("subscriptionType" => "onetime", "rebillPeriod" => "P1M", "rebillAmount" => 4200);

// Cart products
//$addCartProducts = true;

// Choose theme
//$themeID = 279;

#$timeOut = "PT1H";

// Merchant notification
#$merchantNotification = true;
#$merchantNotificationTo = "jsh@payxpert.com";
#$merchantNotificationLang = Connect2PayClient::_LANG_FR;
?>
