<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
    
        $first_sentence = "Hello PHP!"; 
        $second_sentence = "I'm ready for the challenges";
        


        echo "Panjang string: " . strlen($first_sentence) . ", "; 
        echo "Jumlah kata: " . str_word_count($first_sentence) . $boldText = "<strong>Hello PHP!</strong>"; "<br>"; echo "<br>";
        echo "Panjang string: " . strlen($second_sentence) . ", ";
        echo "Jumlah kata: " . str_word_count($second_sentence) . $boldText = "<strong>I'm ready for the challenges</strong>"; echo "<br>";

        echo "<h3> Soal No 2</h3>";

        $string2 = "I love PHP";

        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>";
        echo "Kata kedua: " . substr($string2, 2, 4) . "<br>";
        echo "Kata Ketiga: " . substr($string2, 7, 3) . "<br>";

        echo "<h3> Soal No 3 </h3>";

        $string3 = "PHP is old but Good!";
        echo "String: \"$string3\" ";
        echo "<br>"; 
        $new_string3 = str_replace("old", "awesome", $string3);
        echo " \"$new_string3\"";
    ?>
</body>
</html>
