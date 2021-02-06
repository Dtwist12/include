<Doctype html>
<html>
    <head>
       <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        
    </head>
    <body>
        <?php include 'navbar.php' ?>
        <h1><?= "Hello World" ?></h1>
     
        <h3><?php
        $name = "Dasani";
        echo "my name is $name how are you? ";
        ?>
        </h3>
        <h5> top 3 things i like about coding</h5>
        <p>
        <?php
        $coding1 = "The final product of my work";
        $coding2 = "Makes me feel smarter and I am actually doing something";
        $coding3 ="coding really gets my brain going and keeps me on my toes";
        echo " 1. $coding1 
        2. $coding2 
        3. $coding3";
        ?>
        </p>
    </body>
    </html>