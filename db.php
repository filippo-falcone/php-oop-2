<?php
$dog = new Category('Cane');
$cat = new Category('Gatto');
$kennel1 = new Kennel('Cuccia Quadrata', 'https:', 100, $dog, 'Grande', 'Rossa');
$kennel1->material = 'Poliestere';
$kennel2 = new Kennel('Cuccia Rettangolare', 'https:', 150, $cat, 'Piccola', 'Blu');
$kennel2->material = 'Seta';
$kennel3 = new Kennel('Cuccia Ovale', 'https:', 200, $dog, 'Media', 'Verde');
$kennel3->material = 'Cotone';
$kennel4 = new Kennel('Cuccia Triangolare', 'https:', 250, $cat, 'Media', 'Gialla');
$kennel4->material = 'Misto';
$game1 = new Game('Pallina', 'https:', 5, $dog, 'Palle', 'Gomma', 'Rossa');
$game2 = new Game('Topolino', 'https:', 10, $cat, 'Peluche', 'Tessuto', 'Nero');
$game3 = new Game('Fischietto', 'https:', 15, $dog, 'Fischietti', 'Plastica', 'Blu');
$game4 = new Game('Osso', 'https:', 20, $dog, 'Ossa', 'Plastica', 'Verde');
$game5 = new Game('Gomitolo', 'https:', 25, $cat, 'Gomitoli', 'Lana', 'Giallo');
$game6 = new Game('Palla Ovale', 'https:', 30, $dog, 'Palle', 'Gomma', 'Giallo');
$food1 = new Food('Croccantini', 'https:', 15.99, $dog, 10, 'Carne', 'Rosso');
$food2 = new Food('Croccantini', 'https:', 20.99, $cat, 5, 'Pesce', 'Blu');
$food3 = new Food('Scatolette', 'https:', 25.99, $dog, 1, 'Carne', 'Oro');
$food4 = new Food('Scatolette', 'https:', 30.99, $cat, 0.5, 'Pesce', 'Argento');

$products = [$kennel1, $kennel2, $kennel3, $kennel4, $game1, $game2, $game3, $game4, $game5, $game6, $food1, $food2, $food3, $food4];
?>