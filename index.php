<?php 
  const API_URL = "https://whenisthenextmcufilm.com/api";
  $curlHandler = curl_init(API_URL);
  curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($curlHandler);
  $data = json_decode($result, true);
  curl_close($curlHandler);
  echo "<pre>";
  var_dump($data);
  echo "</pre>";
?>

<head>
  <meta charset="UTF-8"/>
  <title>Estreno Marvel</title>
  <meta name="description" content="Próxima película Marvel">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
  <h2>La próxima película de marvel</h2>
  <section>
    <img src="<?= $data['poster_url']; ?>" alt="<?= $data['title']?>" width="300px">
  </section>
  <hgroup>
    <h3><?= $data['title']?> se estrena en: <?= $data['days_until']?> días</h3>
    <p>Fecha estreno: <?= $data['release_date']?></p>
    <p>La siguiente es: <?= $data['following_production']['title']?></p>
  </hgroup>
</main>