<?php

ini_set("display_erros", 1);
error_reporting(E_ALL);

echo 'タイプヒンティングテスト' . '<br>';

/**
 * @params $string
 */
function noTypeHinting($string){
  var_dump($string);
}

noTypeHinting(['テスト']); //引数string予定に配列 -> エラーではない
echo '<br>';

function typeTest(string $string){
  var_dump($string);
}

// typeTest(['配列文字']);
?>