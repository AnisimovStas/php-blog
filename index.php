<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP blog</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/css/main.css">
</head>

<body>
  <header class="  lh-1 ">
    <div class=" row flex-nowrap bg-warning border-white justify-content-between align-items-center">

      <div class="  col-4 text-center">
        <img src="./img/favicon.ico" class=" w-25 h-25 " alt="logo">
        <a class="blog-header-logo h1 text-decoration-none text-dark" href="index.php">IT Blog</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
        </a> <a class="btn btn-lg  border-dark text-dark m-2 btn-outline-dark" href="#">Войти</a>
        <a class="btn  btn-lg m-2 border-dark text-dark btn-outline-dark" href="#"> Регистрация</a>
      </div>
    </div>
    <hr>
  </header>

  <div class="container m-auto row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Основной контент
      </h3>

      <article class="blog-post">
        <h2 class="blog-post-title mb-1">Статья №1 </h2>
        <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
        <hr>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <h2>Blockquotes</h2>
        <p>This is an example blockquote in action:</p>
        <blockquote class="blockquote">
          <p>Quoted text goes here.</p>
        </blockquote>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <article class="blog-post">
          <h2 class="blog-post-title mb-1">Another blog post</h2>
          <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>

          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <blockquote>
            <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
          </blockquote>
          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <h3>Example table</h3>
          <p>And don't forget about tables in these posts:</p>
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Upvotes</th>
                <th>Downvotes</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Alice</td>
                <td>10</td>
                <td>11</td>
              </tr>
              <tr>
                <td>Bob</td>
                <td>4</td>
                <td>3</td>
              </tr>
              <tr>
                <td>Charlie</td>
                <td>7</td>
                <td>9</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td>Totals</td>
                <td>21</td>
                <td>23</td>
              </tr>
            </tfoot>
          </table>

          <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
        </article>
      </article>


      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
        <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
      </nav>

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0"> Этот блог сделан с целью закрепления знаний по языку php.</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Обратная связь</h4>
          <ol class="list-unstyled">
            <li><a href="https://github.com/AnisimovStas">GitHub</a></li>
            <li><a href="https://telegram.me/otpbard">Telegram</a></li>
            <li><a href="http://xn--80a.xyz/">Portfolio Website</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>




  <footer class="footer d-flex justify-content-center text-center  bg-warning  mt-5 align-items-center py-3 border-top">

    <p class="h2"> © 2023 Feralbot, Inc</p>
  </footer>
</body>

</html>