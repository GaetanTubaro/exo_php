<?php

$beanieWool = new Beanie;
$beanieBioWool = new Beanie;
$beanieCachemire = new Beanie;
$beanieRainbow = new Beanie;


$myProduct = [
        $beanieWool
                ->setName("Bonnet en laine")
                ->setPrice(10)
                ->setDesc("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam.")
                ->setSrc("https://maison-joseph.fr/7109-large_default/005a-bonnet-100-laine.jpg")
                ->setSize("M")
                ->setMaterial("Laine"),
        $beanieBioWool
                ->setName("Bonnet en laine bio")
                ->setPrice(14)
                ->setDesc("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam.")
                ->setSrc("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-8quaDxpLP9711vJqBSsMGuolm3YLWAw8og&usqp=CAU")
                ->setSize("S")
                ->setMaterial("Laine"),
        $beanieCachemire
                ->setName("Bonnet en cachemire")
                ->setPrice(20)
                ->setDesc("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam.")
                ->setSrc("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRj8LRL5i_IEPPm0gIBumtTUtWOdqIg55iKPQ&usqp=CAU")
                ->setSize("S")
                ->setMaterial("Cachemire"),
        $beanieRainbow
                ->setName("Bonnet arc-en-ciel")
                ->setPrice(12)
                ->setDesc("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam.")
                ->setSrc("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUabnE-ZuBvc6cHKZoHupHEuDU8zI4jeIgfw&usqp=CAU")
                ->setSize("L")
                ->setMaterial("Laine")
];
$log = "Gtubaro";
$pass = "bob";
