<?php
// スーパーグローバル変数９種類
// 連想配列になっている your_nameがkey 入力値がvalue

if(!empty($_POST)){
  echo '<pre>';
  var_dump($_POST);
  echo '</pre>';
}

// 入力、確認、完了　input.php confirm.php thanks.php 

$pageFlag = 0;

if(!empty($_POST['btn-confirm'])){
  $pageFlag =1;
}
if(!empty($_POST['btn-submit'])){
  $pageFlag =2;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>



<?php if($pageFlag === 1) :?>
  <form method="POST" action="input.php">
    氏名
    <?php echo $_POST['your_name']?>
    <br>
    メールアドレス
    <?php echo $_POST['email']?>
    <br>
    <input type="submit" name = "btn-submit" value="送信します">
    <input type="hidden" name="your_name" value="<?php echo _POST['your_name']?>">
    <input type="hidden" name="email" value="<?php echo _POST['email']?>">
  </form>
<?php endif; ?>

<?php if($pageFlag === 2) :?>
送信が完了しました
<?php endif; ?>

<?php if($pageFlag === 0) :?> 
  <form method="POST" action="input.php">
    氏名
    <input type ="text" name="your_name">
    <br>
    メールアドレス
    <input type ="email" name="email">
    <br>
    <input type="submit" name = "btn-confirm" value="確認する">
  </form>
  <?php endif; ?>

</body>
</html>