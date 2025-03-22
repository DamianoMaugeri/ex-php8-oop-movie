<?php
$ironMan = new Movie('Iron Man', 159, 'En', true, [new Genre('Action', 16), new Genre('adventure' , 14) ]);
$tlotr = new Movie('Il signore degli anelli', 180, 'En', true, [new Genre('Fantasy', 14), new Genre('adventure' , 14) ]);
$matix = new Movie('Matrix', 167, 'En', false, [new Genre('Action', 16), new Genre('Sci-fi' , 14) ]);

$ironMan->addValutazione(8);
$ironMan->addValutazione(6);
$ironMan->addValutazione(7);
$tlotr->addValutazione(7);
$tlotr->addValutazione(9);
$tlotr->addValutazione(9);
$matix->addValutazione(8);
$matix->addValutazione(9);
$matix->addValutazione(6);

$movies=[$ironMan,$tlotr,$matix]
?>

