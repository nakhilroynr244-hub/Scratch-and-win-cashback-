<?php
/*
* import checksum generation utility
* You can get this utility from https://paytmpayments.com/docs/checksum/
*/
require_once("PaytmChecksum.php");

$paytmParams = array();

$paytmParams["body"] = array(
    "requestType"   => "Payment",
    "mid"           => "YOUR_MID_HERE",
    "websiteName"   => "YOUR_WEBSITE_NAME",
    "orderId"       => "ORDERID_98765",
    "callbackUrl"   => "https://<callback URL to be used by merchant>",
    "txnAmount"     => array(
        "value"     => "1.00",
        "currency"  => "INR",
    ),
    "userInfo"      => array(