<?php

namespace MyApp;

require_once __DIR__ . "/Utilities.php";
require_once __DIR__ . "/StringHelper.php";

use Utilities\Logger;
use function Utilities\Functions\formatDate as fd;
use const Utilities\VAL;
use Utilities\{MathHelper, StringHelper};

new Logger();
echo fd() . "\n";
echo VAL . "\n";
new MathHelper();
new StringHelper();
