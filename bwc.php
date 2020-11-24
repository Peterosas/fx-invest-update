<?php 

/**

CronJob program execution path

/usr/local/php74/bin/php /home/dh_xipr34/vantagehubfx.com/bwc.php

*/

system("/home/dh_xipr34/.nvm/versions/node/v12.16.3/bin/blockchain-wallet-service start --port 3000", $output);

echo $output;