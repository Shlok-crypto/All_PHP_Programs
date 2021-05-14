

<?php

$num=3;

//shlok tomar

function add()
{
  global $num;
  echo $num++."<br>";
}


function counter()
{
  static $count = 1;
  echo "static variable $count";
  $count++;
}

add();
echo "global variable $num"."<br>";
counter();