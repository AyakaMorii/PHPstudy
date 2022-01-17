<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta chaerset="UTF-8">
    <title>サイトタイトル</title>
    <meta name="description" content="これはサイトタイトルです。">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <link rel="stylesheet" href="scss/style.css">
    <link rel="stylesheet" type="text/css" href="sass/sanitize.css">
    <link rel="stylesheet" href="scss/jquery.bxslider.css">
  </head>

  <body>
  <?php include($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>

    <section id="toppicture">
      <div class="slide">
        <p><img src="images/company3.jpeg"></p>
        <p><img src="images/company3.jpeg"></p>
      </div>
    </section>

    <section id="index">
      <h2>INDEX</h2>

      <ul>
        <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
        <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
        <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
        <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
      </ul>
    </section>

    <section id="detail">
      <h2>DETAIL</h2>

      <article class="contentdetail">

        <p class="img"><img src="images/company6.jpeg"></p>

        <aside class="mozi">
          <h3>タイトルタイトルタイトル</h3>
          <table>
            <tr>
              <td>著者</td>
              <td>タイトルタイトルタイトル</td>
            </tr>

            <tr>
              <td>出版社</td>
              <td>タイトルタイトルタイトル</td>
            </tr>

              <tr>
              <td>発行年</td>
              <td>タイトルタイトルタイトル</td>
            </tr>
          </table>

          <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>

          <p><a href="#">オンラインストアで見る</a></p>
        </aside>
      </article>
    </section>

    <?php include($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
  </body>
</html>