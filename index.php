<?php

// Selfwork 4

// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere

// $users = [
//   ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
// ];

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
  ['name' => 'Marco', 'surname' => 'Rossi', 'gender' => 'N'],
  ['name' => 'Mario', 'surname' => 'Bianchi', 'gender' => 'M'],
  ['name' => 'Luca', 'surname' => 'Sacchi', 'gender' => 'N'],
  ['name' => 'Anna', 'surname' => 'Russo', 'gender' => 'F'],
  ['name' => 'Carla', 'surname' => 'Roma', 'gender' => '']
];

// for ($i = 0; $i < 6; $i++){
//     if($users[$i]['gender'] == 'M'){
//       print_r("Buongiorno Sig." . " " . $users[$i]['name'] . " " . $users[$i]['surname'] . "\n");
//     }elseif($users[$i]['gender'] == 'F'){
//       print_r("Buongiorno Sig.ra" . " " . $users[$i]['name'] . " " . $users[$i]['surname'] . "\n");
//     }elseif($users[$i]['gender'] == 'N'){
//       print_r("Buongiorno" . " " . $users[$i]['name'] . " " . $users[$i]['surname'] . "\n");
//     }else{
//       print_r("Registrare il/la cliente" . " " . $users[$i]['name'] . " " . $users[$i]['surname'] . " " . "associando il genere:\n-M per Maschile\n-F per Femminile\n-N per Non specificato");
//     }
// };

// Correzione

foreach ($users as $user){
  if ($user['gender'] == 'M'){
    print_r("Buongiorno Sig." . " " . $user['name'] . " " . $user['surname'] . "\n");
  } elseif ($user['gender'] == 'F'){
    print_r("Buongiorno Sig.ra" . " " . $user['name'] . " " . $user['surname'] . "\n");
  } elseif ($user['gender'] == 'N'){
    print_r("Buongiorno" . " " . $user['name'] . " " . $user['surname'] . "\n");
  } else {
    print_r("Registrare il/la cliente" . " " . $user['name'] . " " . $user['surname'] . " " . "associando il genere:\n-M per Maschile\n-F per Femminile\n-N per Non specificato" . "\n");
  }
};

// Selfwork 5

// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

$numbers = [1, 3, 6, 7, 15, 32, 40, 51];

$count = 0;
$sum = 0;


foreach ($numbers as $number){
  if ($number % 2 == 0){
    $sum += $number;
    $count++;
  };

};

if ($count > 0){
  $media = $sum / $count;
  echo "La media dei numeri pari è " . $media . "\n";
} else {
  echo "Non ci sono numeri pari nell'array." . "\n";
};


?>