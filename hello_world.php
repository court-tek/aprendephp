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
        <p>
            Adding two numbers ( 1 and 2)
        </p>
        <!-- understanding tage feature -->
        <?php print 1 + 2; ?>

        <!-- defining constants in php feature -->
        <?php 
            define("WELCOME_MSG", "Bad Bunny Monaco is playing");
            echo WELCOME_MSG;
        ?>

        <!--  -->
        <?php echo '<p>Hello World</p>'; ?>
    </body>
</html>