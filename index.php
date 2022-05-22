<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      
    <!-- <form action="site.php" method="POST">
        <input type="test" name="student">
        <input type="submit">
    </form> -->
        <?php 
            function cube($num){
                return pow($num, 3);
            }

            $cubeResult = cube(4);
            echo $cubeResult;

            $isMale = true;
            if ($isMale){
                echo " You are male";
            } else {
                echo " You are not male";
            }
         ?>

         <br>
         
         <!-- Code to add class with php -->
            <p class="<?php echo "hi"; ?>">HelloWorld!</p> 

            <!-- <form action="site.php" method="get">
                <input type="text" name="modalDisplay">
                <input type="submit" value="submit">
            </form> -->
            
             
                <?php
                    $name = $_GET["modalDisplay"];
                    
                    // if ($name == "signin"){

                        

                    // }else if($name == "register"){

                        

                    // } else {

                        

                    // }; 
                    switch ($name) {
                        case 'signin':
                            echo '<p>Signin</p>';
                            break;
                        case 'register':
                            echo '<p>Register</p>';
                            break;
                        default:
                            echo '';
                            break;
                    }
                ?>
    
</body>
</html>
