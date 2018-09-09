<?php
$start    = new DateTime('2010-12-02');
$start->modify('first day of this month');
$end      = new DateTime('2011-05-06');
$end->modify('first day of next month');
$interval = DateInterval::createFromDateString('1 month');
$period   = new DatePeriod($start, $interval, $end);

foreach ($period as $dt) {
echo $dt->format("Y-m") . "<br>\n";
}
?>