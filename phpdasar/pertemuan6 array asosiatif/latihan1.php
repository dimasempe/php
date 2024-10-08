<?php
// $hari = array("Senin", "Selasa", " Rabu");
// $bulan = ["January", "February", "Maret"];
// $arr = [100,"Teks", true];

// var_dump($hari);
// echo "</br>";
// print_r($bulan);
// echo $arr[1];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak{
            width:30px;
            height:30px;
            background-color: #BADA55;
            text-align: center;
            line-height:30px;
            margin: 3px;
            float:left;
            transition:1s;
        }

        .kotak:hover{
            transform: rotate(360deg);
            border-radius:50%
        }

        .kotak2{
            width:30px;
            height:30px;
            background-color: salmon;
            text-align: center;
            line-height:30px;
            margin: 3px;
            float:left;
            transition:1s;
        }

        .kotak2:hover{
            transform: rotate(360deg);
            border-radius:50%
        }

        .clear{clear:both;}
    </style>
</head>
<body>

<?php 
$angka = [1,2,3,4,5,6,7,8,9];
$number = [
    [1,2,3],
    [3,4,5],
    [6,7,8]
    ]
?>
    <?php foreach($angka as $a): ?>
        <div class="kotak"><?= $a ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
    
    <?php foreach($number as $ang): ?>
        <?php foreach ($ang as $a): ?>
            <div class="kotak2"><?= $a ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>


    
</body>
</html>