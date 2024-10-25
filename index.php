<?php

// esercizio1
// $altezza = 1.90;
// $temperatura = 30;
// $name = "rocco";
// $online = true;

// costanti
// const ALTEZZA = 1.90;
// const TEMPERATURA = 30;
// const NAME = "rocco";
// const ONLINE = true;


// var_dump(ONLINE);


// ESERCIZIO2


// $text1 = "Marco";
// $text2 = "hai";
// $text3 = "sete";
// $text4 = "?";
// $text5 = "Perchè";
// $text6 = $text2;
// $text7 = "bevuto";
// $text8 = "tutto";


// echo("$text1 $text2 $text3 $text4 $text5 $text6 $text7 $text8");


// esercizio3


// $words1 = [
//     'vostro', 67, 'essere', 'colle', 'mi', 'sempre', [
//         'oscura', 'era', 89, ['mezzo', 'E'],
//         'ritrovai', 'per'
//     ],
//     'diritta'
// ];
// $words2 = [
//     'elemento1' => 25.89,
//     'elemento2' => 'possa',
//     'elemento3' => [
//         'Virgilio',
//         'Favore',
//         'favore',
//         ['Fortuna']
//     ],
//     'fine'=>'!'
// ];


// $results = $words1[6][3][1] . " " .$words2["elemento2"] ." "."la" ." ". $words2["elemento3"][3][0] ." ". $words1[2] ." " .$words1[5] . " " . "a" . " " .$words1[0] . " " .$words2["elemento3"][2];


// echo($results);


// esercizio4


// $users = [
//     ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
//     ['name' => 'Rocco', 'surname' => 'Silvestro', 'gender' => 'm']
//     ]
//   ;

//   foreach ($users as $user){
//      echo "Buongiorno Sig.ra". $user['name'] . $user['surname'] . "\n";
//   }
  


// esercizio5


// function calcolaMediaNumeriPari($array) {
//     $somma = 0;
//     $conteggio = 0;

//     for ($i = 0; $i < count($array); $i++) {
//         if ($array[$i] % 2 == 0) { 
//             $somma += $array[$i];
//             $conteggio++;
//         }
//     }

//     if ($conteggio > 0) {
//         return $somma / $conteggio;
//     } else {
//         return 0; 
//     }
// }


// $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// $media = calcolaMediaNumeriPari($array);
// echo "La media dei numeri pari è: " . $media;


// esercizo6

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY\n";
    } elseif ($i % 3 == 0) {
        echo "PHP\n"; 
    } elseif ($i % 5 == 0) {
        echo "JAVASCRIPT\n";
    } else {
        echo $i . "\n";
    }
}