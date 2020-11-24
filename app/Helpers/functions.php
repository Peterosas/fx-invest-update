<?php

use App\SiteSettings;


function loadSettings() {
    $settings = SiteSettings::first();
    
    return $settings?? (new SiteSettings());
}

function formatAmount($amount) {
    $site_settings = loadSettings();
    
    $placement = getCurrencyPlacement();
        
    if ($placement == "left") {
            return getCurrency() . number_format($amount, 2);
    }
        
    return  number_format($amount, 2) . ' ' . getCurrency();
}

function getCurrency() {
    $site_settings = loadSettings();
    return ($site_settings->currency_symbol??config('company.currency.symbol'));
}

function getCurrencyPlacement() {
    $site_settings = loadSettings();
    return ($site_settings->currency_placement?? config('company.currency.placement'));
}

function getMinBalance() {
    return getMinWithdrawal();
}

function getMinWithdrawal() {
    $site_settings = loadSettings();
    $min_balance = $site_settings->min_balance?? config('company.minimum_balance');
    
    return $min_balance;
}

function getMinimumInvestment() {
    $site_settings = loadSettings();
    return $site_settings->min_invest?? config('company.minimum_invest');
}

function getRole($user_type) {
    $site_settings = loadSettings();
    if ($user_type == "admin")
        return $site_settings->admin_role?? config('company.roles.admin.role');
    
    return $site_settings->user_role?? config('company.roles.user.role');
}

function getCompanyWalletAddress() {
    $site_settings = loadSettings();
    $wallet = getCompanyWallet();
    $address = $wallet['address']?? '';
    return $site_settings->wallet_address?? $address;
}

function getCompanyWallet() {
    $site_settings = loadSettings();
    return config('company.wallet');
}

function getStatuses() {
    $site_settings = loadSettings();
    return ($site_settings->statuses?? config('company.statuses'));
}

function getStatus($status) {
    $site_settings = loadSettings();
    $statuses = getStatuses();
    return $statuses[$status]??[];
}

function getStatusText($status) {
    $site_settings = loadSettings();
    $status = getStatus($status);
    
    return $status["text"]?? '';
}

function getStatusLoader($status) {
    $status = getStatus($status);
    
    return $status["loader"]?? '';
}

function getStatusLabel($status) {
    $status = getStatus($status);
    
    return $status["label"]?? '';
}


function getBalanceStatus($status) {
    
    $statuses = config('company.balance_statuses');
    
    if (is_numeric($status)) return $statuses;
    
    return $statuses[$status]??[];
}

function getBalanceStatusText($status) {
    
    if (is_numeric($status)) {
        $statuses = getBalanceStatus($status);
        foreach($statuses as $s => $value) {
            if ($value["status"] == $status) {
                return $value["text"]?? '';
            }
        }
    }
    else {
        $status = getBalanceStatus($status);
    }
    
    
    
    return $status["text"]?? '';
}

function getBalanceStatusCode($status) {
    $status = getBalanceStatus($status);
    
    return $status["status"]?? '';
}

function getBalanceStatusType($status) {
     if (is_numeric($status)) {
        $statuses = getBalanceStatus($status);
        foreach($statuses as $s => $value) {
            if ($value["status"] == $status) {
                return $value["type"]?? '';
            }
        }
    }
    else {
        $status = getBalanceStatus($status);
    }
    
    
    
    return $status["type"]?? '';
}

function computeBonus($amount) {
    $site_settings = loadSettings();
    $bonus = getReferralBonus();
    
    return ($amount * $bonus/100);
}

function getReferralBonus() {
    $site_settings = loadSettings();
    
    return $site_settings->referral_bonus?? config('company.referral_bonus');
}


function get_billers() {    
    $billers = [
        "airtime" => [
            "name" => "Airtime",
            "page" => "billers/airtime",
            "active_class" => "active",
            "submenu" => [
                "mtn" => [
                   "name" => "MTN",
                   "description" => "",
                   "thumbnail" => "img/biller-icons/small/mtn.png",
                ],
                "glo" => [
                   "name" => "GLO",
                   "description" => "",
                   "thumbnail" => "img/biller-icons/small/glo.png",
                ],
                "9mobile" => [
                   "name" => "9Mobile",
                   "description" => "",
                   "thumbnail" => "img/biller-icons/small/9mobile.png",
                ],
                "airtel" => [
                   "name" => "Airtel",
                   "description" => "",
                   "thumbnail" => "img/biller-icons/small/airtel.png",
                ]   
            ]
            
        ],
        "data" => [
            "name" => "Data",
            "page" => "billers/data",
             "submenu" => [
                "mtn" => [
                   "name" => "MTN",
                   "description" => "",
                   "thumbnail" => "img/biller-icons/small/mtn.png",
                ],
                "glo" => [
                   "name" => "GLO",
                   "description" => "",
                   "thumbnail" => "img/biller-icons/small/glo.png",
                ],
                "9mobile" => [
                   "name" => "9Mobile",
                   "description" => "",
                   "thumbnail" => "img/biller-icons/small/9mobile.png",
                ],
                "airtel" => [
                   "name" => "Airtel",
                   "description" => "",
                   "thumbnail" => "img/biller-icons/small/airtel.png",
                ],
                "smile" => [
                   "name" => "Smile",
                   "description" => "",
                   "thumbnail" => "img/biller-icons/small/smile.png",
                ],
                "spectranet" => [
                   "name" => "Spectranet",
                   "description" => "",
                   "thumbnail" => "img/biller-icons/small/20180504_spectranet_internet.png",
                ]     
            ]
            
        ],
        "cable_tv" => [
            "name" => "CableTV",
            "page" => "billers/cabletv",
            "submenu" => [
                "gotv" => [
                   "name" => "GOTV",
                   "description" => "",
                   "thumbnail" => "img/biller-icons/small/gotv.png",
                ],
                "dstv" => [
                   "name" => "DSTV",
                   "description" => "",
                   "thumbnail" => "img/biller-icons/small/dstv.png",
                ],
                "startimes" => [
                   "name" => "Startimes",
                   "description" => "",
                   "thumbnail" => "img/biller-icons/small/startimes.png",
                ],
                 
            ]
        ],
        "jamb_pin" => [
            "name" => "JAMB PIN",
            "page" => "billers/jamb",
        ],
        "electricity" => [
            "name" => "Electricity",
            "page" => "billers/electricity",
            "submenu" => [
                "phed" => [
                   "name" => "PHED",
                   "description" => "",
                   "thumbnail" => "img/biller-icons/large/phedc.jpg",
                ],
                
                "aedc" => [
                   "name" => "AEDC",
                   "description" => "",
                   "thumbnail" => "img/biller-icons/large/AEDC.jpg",
                ],
            ]
        ],
    ];
    
    
    return $billers;
}

function getFriendlyName($name) {
    
    $name = preg_replace('/[\s_]+/', ' ', $name);
    
    $name = ucwords($name);
    
    return $name;
}

function generateUniqueWalletAddress($id = "") {
    
    //$id = '' meaning deposit wallet
    //$id = 2 meaning withdrawal wallet

    $bc = getBlockchain($id);
    $wallet_address = $bc->Wallet->getNewAddress();
     
    if ($wallet_address)
            return $wallet_address->address;
    
    return null;
}


function getPayment($address, $id = '', $amount = 0) {

    $bc = getBlockchain($id);

    if ($id == 2)
        return withdrawalPayment($bc, $address, $amount);
    
    return depositPayment($bc, $address);
}

function withdrawalPayment(\Blockchain\Blockchain $bc, $address, $amount) {

    try {
        
        $btc = $bc->Rates->toBTC($amount, 'USD');
        
        if ($bc->Wallet->getBalance() > $btc) {
            $bc->Wallet->send($address, $btc);
            return true; //Credit clients
        }
        else {
            return false; //insufficient fund in company's wallet
        }
    }
    catch (Exception $e) {
        dd($e);
    }
   
    return false;
}

function depositPayment(\Blockchain\Blockchain $bc, $address) {
    
    //$address = "1KTF87Y9SN8JcmgrJ4HLVebP5774DHBqag";

    
    $data = [];

    try {
        $unspent = $bc->Explorer->getUnspentOutputs([$address]);
        
        if (count($unspent) > 0) {
            
            $btc = $unspent[0]->value;
            
            $usd = fromBTC($bc, $btc); //default currency: USD
            
            $data["amount"] = $usd;
            $data["to_address"] = $address;
            $data["from_address"] = null;
            $data["confirmations"] = $unspent[0]->confirmations;
            
            return $data;
        }
    }
    catch (Exception $e) {
        
    }
   
    
    return $data;
}

function fromBTC(\Blockchain\Blockchain $bc, $amount, $symbol = "USD") {
    
    $sell = 0;
    
    $rates = $bc->Rates->get();
    
    $converted = (isset($rates[$symbol]))? $rates[$symbol]:null;

    
    if ($converted) {
        $sell = $converted->sell * $amount;
    }
    
    return number_format($sell, 2);
}

function getBlockchain($id = '') {
    //$id = '' meaning deposit wallet
    //$id = 2 meaning withdrawal wallet
    
    $site_settings = loadSettings();
    $wallet = getCompanyWallet();
    $api_key = $wallet['apikey'];
    $username = $wallet['username' . $id];
    $password = $wallet['password' . $id];
    $guid = $wallet['guid' . $id];
    $url = $wallet['service_url'];
    
    $bc = new \Blockchain\Blockchain($api_key);
    $bc->setServiceUrl($url);
    
    try {
        $bc->Wallet->credentials($guid, $password);
    
        return $bc;
    }
    catch (Exception $e) {
    }
    
    return null;
}

