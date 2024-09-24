<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lobortis a mauris non interdum. Cras a euismod tellus. Etiam metus lectus, accumsan malesuada justo quis, scelerisque condimentum purus. Phasellus elementum, enim non euismod iaculis, ante dui sodales nibh, nec scelerisque libero arcu accumsan urna. Donec aliquam cursus cursus. Donec metus augue, condimentum vel metus vel, suscipit congue lorem. In hac habitasse platea dictumst. Proin non elit dapibus, convallis odio quis, faucibus tellus. Donec leo tellus, egestas in semper eget, euismod eget libero. Nam leo arcu, suscipit et eros at, imperdiet pharetra lectus. Etiam malesuada, risus egestas vehicula iaculis, sem ante euismod magna, volutpat finibus sapien massa porta purus. Morbi convallis metus mi, eget fermentum nisi bibendum nec. Maecenas ornare eros ornare ligula cursus tempor. Morbi a scelerisque ligula. In nec lectus vel nisl dignissim facilisis.";


    echo "<p style = 'color : green;'>$str</p>";

    echo "<p style = 'color : blue;'> " . strtoupper($str) . " </p>";

    echo "<p>Il numero di caratteri sono <span style = 'color : red;'>" . strlen($str) . "</span></p>";

    echo "<p>Il numero di parole sono <span style = 'color : yellow;'>" . str_word_count($str) . "</span></p>";




    ?>
</body>
</html>