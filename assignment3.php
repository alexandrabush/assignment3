<?php
include 'Player.php';
include 'ChildClass.php';
$expert = new Player("Neonn", 181259993, 2318, 2568, 9.5, 530432771);
//$noob = new Player("Xx-pkdURmom-xX", 13124556, 957, 107, 3, 4000451);
$noob = new ChildClass("Xx-pkdURmom-xX", 13124556, 957, 107, 3, 4000451, 0);
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assignment3.css">
        <title>
            How noob are you?
        </title>
    </head>
    <body id="info">
        <h1>
            Runescape Player Account Examples
        </h1>
        <section>
            <h4>
                This is an example of an expert account.
            </h4>
            <img src="images/boss.png">
            <p><? echo $expert ?></p>
            <h4>
                This is an example of a noob account.
            </h4>
            <img src="images/noob.jpg">
            <p><? echo $noob ?></p>
            <h4> However, after being pwn'd by Neonn, pkdURmom wanted to git gud. </h4> 
            <p> pkdURmom, having <? echo $noob->getWoodcuttingXP() ?> in the Woodcutting skill, decided to not stop chopping virtual wood until her account was awesome.</p>
            <p><?= $noob->addWoodcuttingXP(9280113);?></p>
            <img src="images/Woodcutting_Tree.gif">
            <p> After gaining a massive <? echo $noob->getWoodcuttingXP()?> experience points, pdkURmom had some new account stats to show off.</p>
            <h4>
               This is an example of a mid-level account.
            </h4> 
            <p><? echo $noob ?></p>

        </section>
    </body>
</html>
