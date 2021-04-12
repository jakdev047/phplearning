<?php

include('vendor/autoload.php');

use TextileApp\Fabric\Department as FabricDepartment;
use TextileApp\Yearn\Department as YearnDepartment;

echo "Welcome Namespace!", "<br/>";

// fabric
$fabricObject = new FabricDepartment;
echo $fabricObject->getDepartment(), "<br/>";

// yearn
$yearnObject = new YearnDepartment;
echo $yearnObject->getDepartment(), "<br/>";