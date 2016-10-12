<?php
$title = '私の嫌いな食べ物はどれ？';

$question = array();
$question = array('納豆','トマト','ナス','かぼちゃ');

$answer = $question[0];

shuffle ($question);
?>  
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>簡易クイズプログラム</title>
</head>
<body>

<h1><?php echo $title ?></h1>
<form method="post" action="four_q_ans.php">
  <?php foreach($question as $value){ ?>
  <input type="radio" name="question" value="<?php echo $value; ?>"> 
  <?php echo $value; ?><br>
  <?php } ?>
  <input type="hidden" name="answer" value="<?php echo $answer; ?>">
  <input type="submit" value="回答する">

</form>
</body>
</html>

