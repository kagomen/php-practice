<?php

namespace Utilities;

require_once __DIR__ . "/Utilities.php";
require_once __DIR__ . "/StringHelper.php";

$logger = new Logger();
echo VAL . "\n";

$date = Functions\formatDate();
echo $date . "\n";

$logger2 = new \Utilities\Logger();
echo \Utilities\VAL . "\n";

\globalFunction();
