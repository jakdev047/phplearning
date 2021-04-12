<?php

// include('./vendor/autoload.php');
include('./Textile/Fabric/Department.php');
include('./Textile/Yearn/Department.php');

use Textile\Fabric\Department as FabricDepartment;
use Textile\Yearn\Department as YearnDepartment;

echo "Welcome Namespace!", "<br/>";

// fabric
$fabricObject = new FabricDepartment;
echo $fabricObject->getDepartment(), "<br/>";

// yearn
$yearnObject = new YearnDepartment;
echo $yearnObject->getDepartment(), "<br/>";