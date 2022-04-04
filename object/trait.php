<?php

trait ProductTrait{

  public function getProduct(){
    echo 'プロダクト';
  }
}

trait NewsTrait{

  public function getNews(){
    echo 'ニュース';
  }
}


class Product{

  use ProductTrait;
  use NewsTrait;

  public function getInformation(){
    echo 'クラスです';
  }
}

$product = new Product();

$product->getInformation();
$product->getNews();
$product->getProduct();


?>