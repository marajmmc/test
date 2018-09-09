<?php
$array=array();
$array[140] = Array
        (
            'id' => 140,
            'budget_monthly_id' => 5,
            'variety_id' => 86,
            'pack_size_id' => 2,
            'pack_size' => 10,
            'quantity_budget_total' => 50,
            'amount_price_net' => 292,
            'quantity_budget_target_total' => 50,
            'revision_count_target' => 0,
            'status' => 'Active'
        );
$array[142] = Array
        (
            'id' => 142,
            'budget_monthly_id' => 5,
            'variety_id' => 2,
            'pack_size_id' => 2,
            'pack_size' => 10,
            'quantity_budget_total' => 0,
            'amount_price_net' => 30,
            'quantity_budget_target_total' => 0,
            'revision_count_target' => 0,
            'status' => 'Active'
        );
$array[143] = Array
        (
            'id' => 143,
            'budget_monthly_id' => 5,
            'variety_id' => 7,
            'pack_size_id' => 2,
            'pack_size' => 10,
            'quantity_budget_total' => 0,
            'amount_price_net' => 440,
            'quantity_budget_target_total' => 40,
            'revision_count_target' => 0,
            'status' => 'Active'
        );
unset($array[142]);
echo "<pre>";
print_r($array);
echo "</pre>";


?>