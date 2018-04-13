let page = 2;

// Lazy load on scroll.
$(window).scroll(function() {
  // On the bottom of the page.
  if($(window).scrollTop() + $(window).height() == $(document).height()) {
    const apiKeyNews = '415715b4065e44b9931f6ddcb679344d';

    $.get('https://newsapi.org/v2/everything?q=superheroes&page='+page+'&pageSize=10&from=2018-04-11&to=2018-04-11&sortBy=popularity&apiKey='+apiKeyNews, function (data) {
      const html = data.articles.map(article => {
       return `
        <div class="newsArticle">
          <div class="blockImage">
            <img class="imageArticle" src="${article.urlToImage}" alt="imagearticle" />
          </div>
          <p class="newTitle">${article.title}</p>
          <p class="newDescription">${article.description} ${article.description.length > 200 ? '[...]' : ''}</p>
          <hr>
        </div>
        `;
     });

     $('.news>div').append(html);

     page++;
   });
  }
});
