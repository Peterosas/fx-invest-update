<?php

return [
    'name' => 'Vantage Hub Forex',
    'currency' => [
        'name' => 'Dollar',
        'symbol' => '$',
        'placement' => 'left'
    ],
    'roles' => [
        'admin' => [
            'role' => 'privilege.admin',
        ],
        'user' => [
            'role' => 'privilege.user',
        ]
    ],
    'wallet' => [
        'description' => 'Blockchain Wallet Address',
        'address'=>null,
        'xPub' => "null",
        'xPub2' => "null",
        'apikey' => '8b61b9c3-5e07-4a95-9ac1-bf7ca1fe2c81',
        'secret' => null,
        'username' => 'payonline@vantagehubfx.com',
        'username2' => 'payonline2@vantagehubfx.com',
        'password' => '!SLMAe6Z',
        'password2' => 'HJxzYk6i',
        'service_url' => 'http://127.0.0.1:3000',
        'guid' => '834b12f4-1edf-4f62-8acb-5288be859d26',
        'guid2' => '88d9e11c-7b5f-409d-9860-f3ff3bb75972',
    ],
    'referral_bonus' => 2,
    'users' => [
        'admin' => [
            'email' => 'admin@vantagehubfx.com',
            'username' => 'admin',
            'password' => 'admin',
            'default_sponsor' => 'adx123',
        ],
        'demo' => [
            'email' => 'demo@vantagehubfx.com',
            'username' => 'demo',
            'password' => 'demo'
        ],
    ],
    'prefix' => '',
    'welcome' => 'Welcome to Bimotrade\'s Investments',
    'addresses' => [
        'one' => '123 Disney Street Slim Av. Brooklyn Bridge, NY, New York',
    ],
    'phone' => ['us1'=>'+88 0123 4567 890', 'us2'=>'+88 0231 3421 453'],
    'support' => ['email'=>'support@vantagehubfx.com', 'password'=>'fPdKwv9L'],
    'info' => ['email'=>'info@vantagehubfx.com', 'password'=>'m^vPpT!g'],
    'payment' => ['email'=>'payonline@vantagehubfx.com', 'password'=>'BF6PiLDy'],
    'contact' => ['email'=>'contact@vantagehubfx.com', 'password'=>'Su7UHs-?'],
    'socials' => [
        'facebook' => ['url' => '#', 'icon'=>'<i class="fa fa-facebook"></i>', 'class' => 'facebook'],
        'twitter' => ['url' => '#', 'icon'=>'<i class="fa fa-twitter"></i>', 'class' => 'twitter'],
        'google_plus' => ['url' => '#', 'icon' => '<i class="fa fa-google-plus"></i>', 'class' => 'google-plus'],
    ],
    'statuses' => [
        'pending' => ['label' => 'label-pending', 'text'=>'pending', 'color'=>'pending'],
        'declined' => ['label' => 'label-danger', 'text'=>'declined', 'color'=>'danger'],
        'completed' => ['label' => 'label-success', 'text'=>'completed', 'color'=>'success'],
        'running' => [
            'label' => 'label-warning', 'text'=>'running', 'color'=>'warning'
        ],
    ],
    'minimum_balance' => 5,
    'minimum_invest' => 50,
    'balance_statuses' => [
        'low' => [
            'status' => 1,
            'text' => 'Withdrawal limit not exceeded. Please try increasing your withdrawal amount.',
            'type' => 'error'
        ],
        'insufficient' => [
            'status' => 2,
            'text' => 'Insufficient fund',
            'type' => 'error'
        ],
        'success' => [
            'status' => 3,
            'text' => 'Transaction successful',
            'type' => 'success'
        ],
        'min_invest' => [
            'status' => 4,
            'text' => 'Minimum investment fee is %s',
            'type' => 'error'
        ],
        'failed' => [
            'status' => 5,
            'text' => 'Verification failed! Invalid transaction or network problem',
            'type' => 'error'
        ]
    ]
];


?>