<?php

// Get data from Marvel API.
$url = 'https://gateway.marvel.com:443/v1/public/comics?orderBy=modified&ts='.$ts.'&apikey='.$marvelAPIKey.'&hash='.$hash;
$request = file_get_contents($url);
$latestComics = json_decode($request);

?>
<div class="row">
    <div class='latestComics'>
        <div class="col-md-6 offset-md-3">
          <ul>
            <?php foreach($latestComics->data->results as $comic): ?>
              <li>
                <div class="blockImage">
                  <img src="<?= $comic->thumbnail->path.'.'.$comic->thumbnail->extension ?>" />
                </div>
                <strong><?= $comic->title ?></strong>
              </li>
            <?php endforeach; ?>
          </ul>
      </div>
  </div>
</div>
