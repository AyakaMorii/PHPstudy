<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>POST_SAMPLE</title>
  </head>

  <body>
    <form method="post" action="html.php">
      <div>
        <label for="name">名前</label>
        <input type="text" name="name">
      </div>

      <div>
        <label for="email">メールアドレス</label>
        <input type="mail" name="email">
      </div>

      <div>
        <label for="message">内容</label>
        <textarea type="text" name="message"></textarea>
      </div>

      <input type="submit" value="送信">
    </form>
  </body>
</html>
