<?php
$couchbase[DEV] = [
    'host'           => '192.168.71.237,192.168.71.236',
    'bucket'         => 'finance_order'

];

$couchbase[TEST] = [

];

$couchbase[PRO] = [
    'host'           => '114.55.1.252,118.178.242.212',
    'bucket'         => 'finance_order'
];

return $couchbase[ENVIRONMENT];