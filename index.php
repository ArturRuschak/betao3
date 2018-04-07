<?php
$continents =[
    "africa" =>  ["Elephant","African Hare","Elephant Shrew"],
    "europe" => ["Wild","Karakurt Spider","Norwegian Lemmin"],
    "asia"=> ["Malayan Tapir","Indian","Slow Loris"],
    "australia" => ["Cane Toad","Black Swan","Taipan"],
    "antarctica" =>["Whale","Emperor penguins","Adelie penguin"]
];
foreach ($continents as $key => $value ) {
    echo "<h1>", $key, ':', "</h1>", "<br/>";
    foreach ($value as $item) {
        $count = $item;
        $animals = str_word_count($item);
        if ($animals == 2) {
            //echo $item, "<br/>";
            $array[] = $item;
            $all_animals = explode(' ', $item, 2);
            $first_animals[] = $all_animals[0];
            $second_animals[] = $all_animals[1];

            shuffle($first_animals);

            shuffle($second_animals);

            foreach ($first_animals as $an) {
                echo $an, ' ', "<br>";
        break;
            }
            foreach ($second_animals as $value) {

                echo $value , ' ', PHP_EOL;
            break;

            }

        }
    }
}
echo "<pre>";
var_dump($first_animals);
var_dump($second_animals);

//echo "<pre>";
//var_dump($array);
/*
for($i=0;$i<2;$i++) {
    echo $array[$i];
    break;
}*/