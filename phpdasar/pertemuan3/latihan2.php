<?php
//  Pengkondisian atau Percabangan
// if
$x = 20;
if ($x < 20) {
    echo 'Benar';
} elseif ($x == 20) {
    echo 'Yuhuu';
} else {
    echo 'salah';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris1 {
            background-color: silver;
        }

        .warna_baris {
            background-color: blue;
        }
        .warna_baris2 {
            background-color: green;
        }
        .warna_baris3 {
            background-color: red;
        }
    </style>

</head>

<body>

    <!-- Cara 1 -->
    <table border="1" cellpading="10" cellspacing="0">
        <tr class="warna_baris2">
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
                        <?= "cara 2<br>" ?>
    <!-- Cara 2 -->
    <table border="1" cellpading="10" cellspacing="0">
        <?php
        for ($i = 1; $i <= 3; $i++) {
            # code...
            echo "<tr>";
            for ($j = 1; $j < 6; $j++) {
                # code...
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
                    <?= "cara 3<br>" ?>
    <!-- Cara 3 -->
    <table border="1" cellpading="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) { ?>
            <?php if($i % 2 ==1) : ?>
                <tr class ="warna_baris2">
            <?php else: ?>
                <tr class ="warna_baris3">
            <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) { ?>

                    <td><?php echo "$i,$j" ?></td>
                <?php } ?>
                </tr>
        <?php } ?>
    </table>
                        <?= "cara 4<br>" ?>
    <!-- Cara 4 -->
    <table border="1" cellpading="10" cellspacing="0">
        <?php for ($i = 1; $i <= 3; $i++) : ?>
            <?php if($i % 2 ==1) : ?>
                <tr class "warna-baris">
            <?php else: ?>
                <tr class "warna-baris2">
            <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>

                    <td><?php echo "$i,$j" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
                        <?= "cara 5<br>" ?>
    <!-- Cara 5 -->
    <table border="1" cellpading="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class="warna_baris">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>

                    <td><?= "$i,$j" ?></td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>



</body>

</html>


