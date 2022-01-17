<!DOCTYPE html>
<html lang='ja'>
  <head>
    <meta charset="utf-8">
    <title>Caluculator</title>
  </head>
  <body>
    <h1>電卓(簡易版)</h1>
    <form class="formula" action="html.php" method="post">
      数字1:<input type="string" name="number1"><br>
      記号:<select name="symbol">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">×</option>
        <option value="/">÷</option>
      </select><br>
      数字2:<input type="string" name="number2" value=""><br>
      <input type="submit">
    </form>
    <h2>答え:<?php echo $_GET['answer']?></h2>
    <h2><?php echo $_GET['message']?></h2>
    <a href="/"><input type="submit" value="リセット" ></a>
  </body>
</html>