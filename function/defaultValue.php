<?php

ini_set("display_erros", 1);
error_reporting(E_ALL);

function defaultValue($string = null){
  echo $string . 'です';
}

//引数なし
defaultValue();
echo '<br>';

// 引数あり
defaultValue('テスト'); 

?>