<?php
  $array = ["りんご", "バナナ", "みかん", "イチゴ", "メロン"];
  foreach($array as $value) {
    print($value);
    print("<br/>");/*改行*/
    /*foreach (配列 as 要素) {処理;}*/
  }

  foreach($array as $value) {
    if ($value == "みかん") {/*値、みかんを選択*/
      break;/*先は実行（繰り返し処理）を終了*/
    }
    print($value);
    print("<br/>");/*改行*/
  }
?>
