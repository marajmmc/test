<?php
$endOfCycle='';
for($i=0; $i<4; $i++)
{
    echo $endOfCycle = date("m", strtotime(date('2016-10-01'). "+".$i." month"));
    echo "<br />";
}
?>