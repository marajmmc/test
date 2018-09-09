<?php
require '../vendor/autoload.php';

$options = array(
    'cluster' => 'ap2',
    'encrypted' => true
);
$pusher = new Pusher(
    'd117830adcd0230c768e',
    '5df64a10c7b5a445f2c8',
    '563188',
    $options
);

$data['message'] = 'hello world';
$pusher->trigger('my-channel', 'my-event', $data);
?>