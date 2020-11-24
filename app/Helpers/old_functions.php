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
    $site_settings = loadSettings();
    return formatAmount(getMinWithdrawal());
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

function checkPayment($hash, $amount_usd) {
    $site_settings = loadSettings();
    $wallet = getCompanyWallet();
    $api_key = $wallet['apikey']?? null;
    $address = $wallet['address']?? null;
    
    $ok = false;
    
    $bc = new \Blockchain\Blockchain($api_key);

    
    try {
        
        $tx = $bc->Explorer->getTransaction($hash);
        $outputs = $tx->outputs;
        
        
        for($i = 0; $i < count($outputs) and !$ok; $i++) {
            
            $bo = $outputs[$i];
            $received_address = $bo->address;
            
            if (($received_address == $address) and !$bo->spent) {
                
                //Amount provided by user
                $amount_btc = $bc->Rates->toBTC($amount_usd, 'USD');
                
                $received_amount_btc = $bo->value;

                
                //Check for acceptable difference in rates
                if ($received_amount_btc >= $amount_btc) {
                    $ok = true;
                }
                
            }
        }
        
    }
    catch (Exception $e) {
    }
   
    return $ok;
}

function get_billers() {
    global $wo, $db;
    
    $billers = [
        "airtime" => [
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
            
        ],
        "cable_tv" => [
            
        ],
        "electricity" => [
            
        ],
    ];
    
    
    return $billers;
}

function getFriendlyName($name) {
    
    $name = preg_replace('/[\s_]+/', ' ', $name);
    
    $name = ucwords($name);
    
    return $name;
}