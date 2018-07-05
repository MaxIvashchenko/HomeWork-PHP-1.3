
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

foreach($continents as $continent => $animal_types){
     foreach($animal_types as $type){
         $animals= [];
         $animal = explode(' ', $type);
         $animals[]=$animal;
     
        foreach($animals as $k){
            if(count($k) === 2){
              $separate = implode(",", $k);
              $str = str_replace(',', ' ', $separate);
              $collocation[]=$str;
             }
        }
    }
}
 
echo '<h1>Животные с двумя словами</h1>';
echo '<pre>';
print_r($collocation);
echo '</pre>';

// Пункт три

foreach($collocation as $name){
    $part = explode(' ', $name);
    $firstWord[] = $word[0];
    $secondWord[] = $word[1];
}

echo '<pre>';
var_dump($firstWord);
var_dump($secondWord);
echo '</pre>';

$firstWordRand = [];
 
while (count($firstWordRand) < count($collocation)){
   $proverka = $first[rand(0, count($collocation)-1)];
    if (!in_array($proverka, $firstWordRand)) {
        array_push($firstWordRand, $proverka);
    }
}
$secondWordRand = [];
 
while (count($secondWordRand) < count($collocation)){
    $proverka = $second[rand(0, count($collocation)-1)];
    if (!in_array($proverka, $secondWordRand)) {
        array_push($secondWordRand, $proverka);
    }
}

 
$result = [];
 
for($i = 0; $i < count($collocation); $i++){
    $result[]= $firstWordRand[$i] . ' ' . $secondWordRand[$i];  
}
 
var_dump($result);