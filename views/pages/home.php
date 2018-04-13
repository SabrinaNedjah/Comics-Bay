    <?php

    // Get data from Google News API.
    $url = 'https://newsapi.org/v2/everything?q=superheroes&pageSize=10&from=2018-04-11&to=2018-04-11&sortBy=popularity&apiKey='.$googleNewsAPIKey;
    $request = file_get_contents($url);
    $news = json_decode($request);

    ?>
    <div class="row">
        <div class='news'>
            <div class="col-md-6 offset-md-3">
                <?php foreach($news->articles as $_article): ?>
                    <div class="newsArticle">
                        <div class="blockImage">
                            <a href="<?= $_article->url ?>"><img class="imageArticle" src="<?= $_article->urlToImage ?>" alt="imagearticle" /></a>
                        </div>
                        <a href="<?= $_article->url ?>"><p class="newTitle"><?= $_article->title ?></p></a>
                        <p class="newDescription"><?= substr($_article->description, 0, 200) ?><?= strlen($_article->description) > 200 ? ' [...]' : '' ?></p>
                        <hr>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
