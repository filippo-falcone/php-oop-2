<?php
$dog = new Category('Cane');
$cat = new Category('Gatto');
$kennel1 = new Kennel('Cuccia Quadrata', 100, $dog, 'Grande', 'Rossa');
$kennel1->material = 'Poliestere';
$kennel2 = new Kennel('Cuccia Rettangolare', 150, $cat, 'Piccola', 'Blu');
$kennel2->material = 'Seta';
$kennel3 = new Kennel('Cuccia Ovale', 200, $dog, 'Media', 'Verde');
$kennel3->material = 'Cotone';
$kennel4 = new Kennel('Cuccia Triangolare', 250, $cat, 'Media', 'Gialla');
$kennel4->material = 'Misto';
$game1 = new Game('Pallina', 5, $dog, 'Palle', 'Gomma', 'Rossa');
$game2 = new Game('Topolino', 10, $cat, 'Peluche', 'Tessuto', 'Nero');
$game3 = new Game('Fischietto', 15, $dog, 'Fischietti', 'Plastica', 'Blu');
$game4 = new Game('Osso', 20, $dog, 'Ossa', 'Plastica', 'Verde');
$game5 = new Game('Gomitolo', 25, $cat, 'Gomitoli', 'Lana', 'Giallo');
$game6 = new Game('Palla Ovale', 30, $dog, 'Palle', 'Gomma', 'Giallo');

$products = [$kennel1, $kennel2, $kennel3, $kennel4, $game1, $game2, $game3, $game4, $game5, $game6];
?>