<?php 
// Pengulangan
// for
for($i=0; $i<5; $i++){
    echo "Hai dimas</br>";
}
//while
$i = 0;
while($i<5){
    echo "Hello World</br>"; 
    $i++;
}
// do while
$i = 0;

do{
echo 'do while</br>';
$i++;
}while($i<5);






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>

</head>
<body>
    
<!-- Cara 1 -->
<table border="1" cellpading="10" cellspacing="0">
    <tr>
        <td>1,1</td>
        <td>1,2</td>
        <td>1,3</td>
        <td>1,4</td>
        <td>1,5</td>
    </tr>
    <tr>
        <td>2,1</td>
        <td>2,2</td>
        <td>2,3</td>
        <td>2,4</td>
        <td>2,5</td>
    </tr>
</table>

<!-- Cara 2 -->
<table border="1" cellpading="10" cellspacing="0">
    <?php 
        for ($i=1; $i <= 3 ; $i++) { 
            # code...
            echo "<tr>";
            for ($j=1; $j < 6 ; $j++) { 
                # code...
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
    ?>
</table>

<!-- Cara 3 -->
<table border="1" cellpading="10" cellspacing="0">
    <?php for ($i=1; $i <= 3 ; $i++) { ?>
            
            <tr>
                <?php for ($j=1; $j <= 5 ; $j++) { ?>
                    
                    <td><?php echo "$i,$j"?></td>
                <?php } ?>
            </tr>
            <?php } ?>
</table>
    
<!-- Cara 4 -->
<table border="1" cellpading="10" cellspacing="0">
    <?php for ($i=1; $i <= 3 ; $i++) : ?>
            
            <tr>
                <?php for ($j=1; $j <= 5 ; $j++) : ?>
                    
                    <td><?php echo "$i,$j"?></td>
                <?php endfor; ?>
            </tr>
            <?php endfor; ?>
</table>

<!-- Cara 5 -->
<table border="1" cellpading="10" cellspacing="0">
    <?php for ($i=1; $i <= 3 ; $i++) : ?>
            
            <tr>
                <?php for ($j=1; $j <= 5 ; $j++) : ?>
                    
                    <td><?= "$i,$j"?></td>
                <?php endfor; ?>
            </tr>
            <?php endfor; ?>
</table>
</body>
</html>
