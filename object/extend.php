<?php

// 親クラス
class BaseProduct{
  public function echoPruduct(){
    echo '親クラスです';
  }

  public function getProduct(){
    echo '親の関数です';
  }
}

//子クラス
class Product extends BaseProduct{
  // アクセス修飾子 private(外からアクセスできない), protected(自分、継承先) public(公開)

  //変数
  private $product = [];

  // 関数

  function __construct($product)
  {
    $this ->product = $product;
  }

  // public function getProduct(){
  //   echo $this->product;
  // }

  public function addProduct($item){
    $this->product .=$item;
  }

  public static function getStaticProduct($str){
    echo $str;
  }
}

$instance = new Product('テスト');

$instance->echoPruduct();

var_dump($instance);

$instance->getProduct();
echo '<br>';

$instance->addProduct('追加分');

$instance->getProduct();

Product::getStaticProduct('静的');
echo '<br>';

?>