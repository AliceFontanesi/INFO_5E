<?php
require 'vendor/autoload.php'; 
use Symfony\Component\Yaml\Yaml;

//file yaml input
$inputYamlFile = 'input.yaml';
//carico contenuto file
$yamlContent = file_get_contents($inputYamlFile);
//conversione in array
$arrayData = Yaml::parse($yamlContent);
//conversione in json
$jsonData = json_encode($arrayData, JSON_PRETTY_PRINT);
$outputJsonFile = 'output.json';
//file json
file_put_contents($outputJsonFile, $jsonData);
echo "Conversione da YAML a JSON completata\n";
