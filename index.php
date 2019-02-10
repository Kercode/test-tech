<?php

require('./src/Score.php');
require('./src/Season.php');

$data = file_get_contents('data.json');
$jsonData = json_decode($data);
$outputJson = [];
$i = 1;

foreach ($jsonData->scores as $score) {
  $seasonData = Season::getJSONSeason(
    $score->season_id,
    $jsonData->seasons
  );
  $season = new Season($score->matches);

  array_push(
    $outputJson,
    array(
      "id" => $i,
      "period" => $seasonData->period,
      "points" => $season->total()
    )
  );

  $i += 1;
}

  $output = fopen('output.json', 'w');
  fwrite($output, json_encode(array("seasons" => $outputJson), JSON_PRETTY_PRINT));
  fclose($output);
