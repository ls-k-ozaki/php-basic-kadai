<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無題ドキュメント</title>
</head>

<body>
  <?php
    $arrays = [
      '名前'=>'玉ねぎ',
      '値段'=>'200',
      '産地'=>'北海道'
    ];
    
    foreach($arrays as $key => $value){
      echo "{$key}:{$value}" ."<br>";
    };
  ?>
  
</body>
</html>