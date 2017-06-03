<?php

$store = new RetailStore();

$store->setAddress('AALLLA');
$store->setGeocoder('oooo');

$latitude = $store->getLatitude();
$longitude = $store->getLongitude();

echo $latitude, ':', $longitude;