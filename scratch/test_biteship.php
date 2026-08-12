<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$biteship = app(App\Services\BiteshipService::class);
$rates = $biteship->getRates(
    'IDNP1IDNC110IDND261IDZ80111', 
    'IDNP1IDNC110IDND261IDZ80111', 
    [['name'=>'Test','value'=>100000,'weight'=>500,'quantity'=>1]], 
    'jne,sicepat,jnt,anteraja'
);
echo json_encode($rates);
