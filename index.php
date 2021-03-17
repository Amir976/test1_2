<?php 
   if(isset($_POST['envoyer'])){    
        $Testm1= $_POST ['Test1'];
        $Testm2= $_POST ['Test2'];

        if(empty ($_POST ['Test1']) OR empty ($_POST ['Test2'])) {

            echo "le champs doit être rempli";
        }

        else {
            $varsum = $Testm1 + $Testm2 ;
        ?>
            
            <input type="text" readonly="readonly" value= "<?php echo $varsum;?>"
    
            <?php 
            
          
           
           
       }
   }
  


?> 








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    
    <p><input type="text" name="Test1" ><p>
    <p><input type="text" name="Test2" ><p>

    <p><input type="submit" name="envoyer" value="SUM"><p>

    </form>
</body>
</html>


