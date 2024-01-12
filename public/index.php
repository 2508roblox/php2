<?php
require_once __DIR__ . '/../vendor/autoload.php';
session_start();

use \App\Core\Core as Core;
use \App\Helpers\Format as Format;
use \App\Libs\Session as Session;
use \App\Libs\Database as Database;
use \App\Libs\Controller as Controller;
include_once __DIR__ . "/../app/Configs/config.php";
include "../app/Helpers/redirect.php";
include "../app/Helpers/url.php";
$core = new Core();