
<html lang="ru">
<meta charset="UTF-8">
  
<?php

$continents = [
    "Africa" => ["Hexaprotodon Falconer", "Syncerus caffer", "Ceratotherium Gray", "Lion"],
    "South America" => ["Cryptonanus ignitus", "Microsciurus flaviventer", "Mazama", "Nasua Storr"],
    "Ausrtalia" => ["Kangaroo", "Numbat", "Phascolarctos cinereus", "Platypus"],
];

echo '<h1>Название зверей</h1>';
echo '<pre>';
print_r($continents);
echo '</pre>';

// Пункт два
$firstWord = [];
$secondWord = [];
$collocation = [];


foreach($continents as $continent => $animal_types){
     foreach($animal_types as $type){
        $count = substr_count($type, ' ');
        if($count === 1){
            $collocation[$continent][] = $type;
            $word = explode (' ', $type);
            $firstWord[] = $word[0];
            $secondWord[] = $word[1];
        }
    }
}

 echo '<h1>Животные с двумя словами</h1>';
echo '<pre>';
print_r($collocation);
echo '</pre>';

// Пункт три

shuffle($secondWord);
echo '<h1>Выдуманные животные</h1>';
foreach ($secondWord as $second) {
    $first = array_shift($firstWord);
    echo $weard_animal_name[] = $first . ' ' . $second . '<br>';
}