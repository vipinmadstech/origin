<?php

$interval_source = "01:01";
$time_now = strtotime( "now" ) / 60;
$interval = substr($interval_source,0,2) * 60 + substr($interval_source,3,2);
if( $time_now % $interval == 0){
echo "cron success";
}
?>