<?php
    // understanding Stings y variables php 
    $title_strings_section = "Strings";
    $string_double_quotes = "This is a string in double quotes";
    $string_single_quotes = 'I\' have made a singly quoted string';
    $name = "Ebelin";
    $string1 = "Hello ";
    $string2 = "world";
    $oracion = "<p>" . strtoupper("Hey you owe me money {$name}") . "</p>";
    $gran_turismo_garage = "Gran Turismo 5 garage";
    // understanding numbers in php 
    $title_numbers_section = "Numbers";
    
    // understanding conditionals in php
    $title_condtionals_section = "Conditionals";
    $age = 17;
    

    // understanding arrays in php
    $title_arrays_section = "Arrays";
    $cars = array("mercedez", "bmw", "honda", "subaru", ["c63 amg", "m3", "nsx", "wrx sti"]);
    $garage = array(
        [
            "make" => "subaru",
            "model" => "wrx sti",
            "price" => "36,000"
        ],
        [
            "make" => "mercedes",
            "model" => "amg c63",
            "price" => "80,000"
        ],
        [
            "make" => "honda",
            "model" => "nsx",
            "price" => "112,000"
        ],
        [
            "make" => "mitsubishi",
            "model" => "evolution x",
            "price" => "20,000"
        ],
    );
    // understanding loops in php
    $title_iterations_y_loops_section = "Iterations y loops";

    // Main title variable
    const MAIN_TITLE = "This is php";
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
        <!-- variables -->
        <section class="hero">
            <h1><?php echo MAIN_TITLE; ?></h1>
        </section>
        <!-- strings -->
        <section class="box">
            <h2><?php echo $title_strings_section; ?></h2>
            <p><?php echo $string_double_quotes; ?></p>
            <p><?php echo $oracion; ?></p>
            <p><?php echo $string_single_quotes; ?></p>
            <p><?php echo $string1.$string2; ?></p>
        </section>
        <!-- numbers -->
        <section class="box">
            <h2><?php echo $title_numbers_section; ?></h2>
        </section>
        <!-- conditinals -->
        <section class="box">
            <h2><?php echo $title_condtionals_section; ?></h2>
            <?php 
                if($age >= 21) {
                    echo "<p>". "Welcome to the bar motherfucker, drink up!" ."</p>";
                } else {
                    echo "<p>". "Sorry I have to draw this black X on your hand" ."</p>";
                }
            ?>
        </section>
        <section class="box">
            <h2><?php echo $title_arrays_section; ?></h2>
            <p><?php echo $cars[0]; ?></p>
        </section>
        <section class="box">
            <h2><?php echo $title_iterations_y_loops_section; ?></h2>
            <?php 
                for ($i=0; $i < 11; $i++) { 
                    # code...
                    echo "<p>" . $title_iterations_y_loops_section . "</p>"; 
                }
            ?>
            <h2><?php $gran_turismo_garage; ?></h2>
            <?php 
                for ($i=0; $i < count($garage); $i++) { 
                    # code...
                    echo "<p class='item'>" . "{$garage[$i]["model"]}". "</p>"; 
                }
            ?>
        </section>
    </body>
</html>