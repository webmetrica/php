<?php include "inc/data.php"; ?>

<?php
$title = 'сайт';
$header = "$welcome, Гость";
$id = strtolower(trim(strip_tags($_GET['id'])));

switch($id){
case 'about' :
  $title = 'О нас';
  $header = 'О нашем сайте'; break;
case 'contact' :
  $title = 'Контакты';
  $header = 'Обратная связь'; break;
case 'table' :
  $title = 'Таблица умножения';
  $header = 'Таблица умножения'; break;
case 'calc' :
  $title = 'Калькулятор';
  $header = 'Калькулятор'; break;
}
?>

<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<style>
p, a {font-family:arial;font-size:13px;}
a {color:#34495E;}

.all {width:1200px;margin:0 auto;margin-top:30px;}
.header {width:1140px;float:left;background:#f4f4f4;padding:30px;}
.container {width:1200px;float:left;}
.left {width:300px;float:left;background:#E4F1FE;}
.content {width:840px;float:left;background:#f4f4f4;padding:0px 30px 30px;}
.footer {width:1140px;float:left;background:#E4F1FE;padding:30px;}
</style>

</head>











<div class="all">

<div class="header">

<em><?=$welcome?>, Гость</em>
<p><?php echo 'Сегодня ', $day, ' число, ', $mon, ' месяц, ', $year, ' год.'; ?></p>
<p>&copy; Webmetrica 2012 - <?php echo $year ?></p>
</div> 


<div class="container">

<div class="left">
<?php include "inc/drawMenu.php"; ?>
<?php drawMenu($left_menu); ?>
</div>

<div class="content">
<h1><?=$header?></h1>

<?php
switch($id){
case 'about':
  include 'about.php'; break;
case 'contact' :
  include 'contact.php'; break;
case 'table' :
  include 'table.php'; break; 
case 'calc' :
  include 'calc.php';  break;
default: include 'index.inc.php'; 
// Если никуда не попали идем сюда
}
?>

</div>

</div> <!-- end container -->

<div class="footer">
<?php drawMenu($left_menu, false); ?>
<p>Powered by <?=$SERVER['SERVER_SOFTWARE']?> PHP 
<?=PHP_VERSION?> on <?=PHP_OS?></p>
</div>

</div> <!-- end all -->










</body>
</html>