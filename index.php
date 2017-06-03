<?php
include("Config.php");

$data = ["name" => "Jan", "lastname" => "Kowalski", "salary" => 2500, "abilities" => ["wulkanizacja"]];
$data2 = ["name" => "Mirosław", "lastname" => "Nowak", "salary" => 3100, "abilities" => ["blacharstwo"]];

$workerFactory = new WorkersCreator;
$pracownik1 = $workerFactory->create("Mechanic", $data);
$pracownik2 = $workerFactory->create("Mechanic", $data2);

echo $pracownik1->introduceSelf();
echo "<br/>";
echo $pracownik2->introduceSelf();
