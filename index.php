<?php

require_once("php/Classes/autoload.php");
require_once("php/vendor/autoload.php");

use Ramsey\Uuid\Uuid;


$uuid1 = Uuid::uuid1();

use Gkephart\AutoloadNamespaces\{captain, FirstOfficer};
$jeanLuc = new Captain("hazel", 40);
