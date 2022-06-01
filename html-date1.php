<?php require_once('date1.php')?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css-date1.css">
    <title>日程の変更</title>
  </head>
  <body>
    <header>
      <div class="container1">
        <h3 class="header-left">π math-class π</h3>
        <ul class="header-right">
          <li>会社紹介</li>
	  <li>講義内容</li>
	  <li>お問い合わせ</li>
        </ul>	
      </div>
    </header>
    <div class="top-wrapper">
      <div class="container2">
        <h3>日程の変更について</h3>
        <p>当学習塾においては原則日程は固定でありますが、万が一予定を変更しなければならない事はあると思います。そんなときのために日程変更の方法を以下でご紹介いたします。</p>
　　　　<a class="btn about-date-change">日程変更についての注意</a>
        <select>
          <?php $dayNames=array("月曜日","火曜日","水曜日","木曜日","金曜日","土曜日"); ?>
          <?php foreach($dayNames as $dayName): ?>
            <option value={$dayName}>{$dayName}</option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
    <footer>
      <div class="container6">
        <div class="footer-center">
          <h3>π math-class π</h3>
        </div>
      </div>
    </footer>
  </body>