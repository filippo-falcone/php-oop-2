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

$products = [$kennel1, $kennel2, $kennel3, $kennel4];
?>