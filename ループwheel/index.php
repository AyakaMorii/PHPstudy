<?php

$fruits = ['apple', 'orange', 'melon', 'banana', 'pineapple'];

$count = 0;
while ($count <= count($fruits)):
  echo $fruits[$count];
  echo '<br>';
  $count++;
endwhile;

?>
