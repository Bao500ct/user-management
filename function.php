<?php

//genera nomi casuali
function getRandName()
{
    $names = [
        'ROBERTO', 'GIULIA', 'MARCO', 'GIOVANNI'
    ];

    $lastname = [
        'ROSSI', 'RAMON', 'SMITH', 'PRIVITERA', 'GIRGENTI'
    ];

    $rand1 = mt_rand(0, count($names) - 1);
    $rand2 = mt_rand(0, count($lastname) - 1);
    return $names[$rand1] . ' ' . $lastname[$rand2];
}


//genera email casuali
function getRandEmail($name)
{

    $domains = ['google.com', 'yahoo.com', 'hotmail.it'];
    $rand = mt_rand(0, count($domains) - 1);

    return strtolower(str_replace(' ', '.', $name) . mt_rand(10, 99) . '@' . $domains[$rand]);
}


echo getRandEmail(getRandName());
