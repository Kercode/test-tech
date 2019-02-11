<?php

require('./src/Score.php');
require('./src/Season.php');

$data = file_get_contents('data.json');
$jsonData = json_decode($data);
$outputJson = [];

foreach ($jsonData->seasons as $season) {
  $season = new Season(
    $season->id,
    $season->period,
    $season->scores
  );

  array_push(
    $outputJson,
    array(
      "id" => $season->id,
      "period" => $season->period,
      "points" => $season->total()
    )
  );
}

$output = fopen('output.json', 'w');
fwrite($output, json_encode(array("seasons" => $outputJson), JSON_PRETTY_PRINT));
fclose($output);
