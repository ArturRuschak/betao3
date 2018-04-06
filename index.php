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
            echo $item, "<br/>";
            $array[] = $item;
        }
    }
}
echo "<pre>";
var_dump($array);





/*
if($continents) {




}

else {

}







/*
PHP_EOL;
echo "<pre>";
var_dump($continents);
echo "</pre>";
foreach ($continents as $key => $value) {

        echo $key , "<br/>", PHP_EOL ;
        foreach($value as $item){

            echo $item , "<br/>";


        }

    }
echo '////////////////////////////////////////////////////////////////';

echo "<br/>";
*/




/*
echo "<pre>";
var_dump($doublewords);
echo "</pre>";

echo $doublewords[rand(1,2)];*/



?>