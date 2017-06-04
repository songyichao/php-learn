<?php
//DateTime
$timezone = date_default_timezone_get();
echo $timezone;
echo '<br>';
date_default_timezone_set('America/New_York');
$timezone = date_default_timezone_get();
echo $timezone;
echo '<br>';

$datetime = new DateTime('2014-04-27 5:03 AM');
echo $datetime->getTimestamp();
echo '<br>';
//DateInterval
$datetime = new DateTime('2017-06-04 23:06:00');
$interval = new DateInterval('P2W'); //2 week
$datetime->add($interval);
echo $datetime->format('Y-m-d H:i:s');

echo '<br>';

//反向
$date_start = new DateTime();
$date_interval = DateInterval::createFromDateString('-1 day');
$date_period = new DatePeriod($date_start, $date_interval, 3);

foreach ($date_period as $item) {
    echo $item->format('Y-m-d'), PHP_EOL;
}
echo '<br>';

//DateTimeZone
$timezone = new DateTimeZone('America/New_York');
$datetime = new DateTime('2014-08-20', $timezone);
$datetime->setTimezone(new DateTimeZone('Asia/Hong_Kong'));
echo $datetime->getTimestamp();