<?php
require_once __DIR__ . '/vendor/autoload.php';

use Controllers\Memory;

$memory = new Memory();
echo $memory->index();
?>