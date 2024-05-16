<?php
$dog = new Category('Cane');
$cat = new Category('Gatto');
$kennel1 = new Kennel('Cuccia Quadrata', 100, $dog, 'Grande', 'Rosso', 'https://m.media-amazon.com/images/I/81yTQdorbiL.jpg');
$kennel1->material = 'Poliestere';
$kennel2 = new Kennel('Cuccia Rettangolare', 150, $cat, 'Piccola', 'Blu', 'https://arcaplanet.vtexassets.com/arquivos/ids/293643/Cuccia-Rettangolare-Gatto-Pied-de-Poule-10170043.jpg?v=638406490072330000');
$kennel2->material = 'Seta';
$kennel3 = new Kennel('Cuccia Ovale', 200, $dog, 'Media', 'Verde', 'https://m.media-amazon.com/images/I/61pILx4zIpS._AC_UF894,1000_QL80_.jpg');
$kennel3->material = 'Cotone';
$kennel4 = new Kennel('Cuccia Triangolare', 250, $cat, 'Media', 'Grigia', 'https://m.media-amazon.com/images/I/71PJlinqDML.jpg');
$kennel4->material = 'Misto';
$game1 = new Game('Pallina', 5, $dog, 'Palle', 'Gomma', 'Rosso', 'https://arcaplanet.vtexassets.com/arquivos/ids/229318/trixie-cane-palla-in-gomma-naturale-con-squittio.jpg?v=637454816312200000');
$game2 = new Game('Topolino', 10, $cat, 'Peluche', 'Tessuto', 'Grigio', 'https://static.zoomalia.com/prod_img/61394/xl_906c8fbbc86abe8bd6a5eb6a3b4d04113011559121089.jpg');
$game3 = new Game('Fischietto', 15, $dog, 'Fischietti', 'Plastica', 'Blu', 'https://m.media-amazon.com/images/I/41eyqAppBeL._AC_.jpg');
$game4 = new Game('Osso', 20, $dog, 'Ossa', 'Plastica', 'Verde', 'https://arcaplanet.vtexassets.com/arquivos/ids/273500/yes-gioco-per-cane-osso-termpoplastico-con-corda.jpg?v=637939026512300000');
$game5 = new Game('Gomitolo', 25, $cat, 'Gomitoli', 'Lana', 'Giallo');
$game6 = new Game('Palla Ovale', 30, $dog, 'Palle', 'Gomma', 'Arancione', 'https://m.media-amazon.com/images/I/61E8m1trR0L._AC_UF894,1000_QL80_.jpg');
$food1 = new Food('Croccantini', 15.99, $dog, 10, 'Carne', 'Media');
$food2 = new Food('Croccantini', 20.99, $cat, 5, 'Pesce', 'Piccola');
$food3 = new Food('Scatolette', 25.99, $dog, 3, 'Carne', 'Piccola');
$food4 = new Food('Scatolette', 30.99, $cat, 0.5, 'Pesce', 'Piccola');

$categories = [$dog, $cat];
$products = [$kennel1, $kennel2, $kennel3, $kennel4, $game1, $game2, $game3, $game4, $game5, $game6, $food1, $food2, $food3, $food4];
?>