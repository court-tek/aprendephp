<?php
    // understanding Stings php 
    $title_strings_section = "Strings";
    $string_double_quotes = "This is a string in double quotes";
    $string_single_quotes = 'I\' have made a singly quoted string';
    $name = "Ebelin";
    $string1 = "Hello ";
    $string2 = "world";
    $oracion = "<p>" . strtoupper("Hey you owe me money {$name}") . "</p>";

    // understanding numbers in php 
    $title_numbers_section = "Numbers";

    // understanding conditionals in php
    $age = 17;
    

    // understanding arrays in php
    $title_arrays_section = "Arrays";
    $cars = array("mercedez", "bmw", "honda", "subaru", ["c63 amg", "m3", "nsx", "wrx sti"]);
    
    // understanding loops in php


    // Main title variable
    const MAIN_TITLE = "This is php"
?>
<html>
    <head>
        <title>PHP using web server</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="reset.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900;9..40,1000&family=DM+Serif+Display&display=swap" rel="stylesheet">
    </head>
    <body>  
        <h1><?php echo MAIN_TITLE; ?></h1>
        <h2><?php echo $title_strings_section; ?></h2>
        <p>
            <?php echo $string_double_quotes; ?>
        </p>
        <p><?php echo $oracion; ?></p>
        <p><?php echo $string_single_quotes; ?></p>
        <p><?php echo $string1.$string2; ?></p>
        <h2><?php echo $title_numbers_section; ?></h2>
        <h2><?php echo $title_arrays_section; ?></h2>
        <p><?php echo $cars; ?></p>
    </body>
</html>