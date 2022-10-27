<?php
require dirname(__DIR__) . '/vendor/autoload.php';

use function Jon\Temp\double;
?>

<p>double(4) (imported): <b><?= double(4); ?></b></p>

<p>triple(4) (not imported) <b><?= triple(4); ?></b></p>
