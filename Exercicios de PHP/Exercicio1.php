<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio01.php</title>
</head>
<body>
    <form action="" method="POST">
    <label for="numero_par"> Verificar se o numero é par:</label>
    <input type= "number" id= "numero_par" name = "numero_par" required>
    <button type="submit" name= "Verificar_par"> Verificar </button>
    </form>

    <?php
    if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_par'])){
        $numero = $_POST['numero_par'];
        $ehPar = true;
    
         If ($numero % 2  == 0;){
                    $ehPar = true;
                 
                }
            }
        }
        echo "O número $numero é ". ($ehPar ? 'par':'não é par');
    };

   };


    }  
 ?>
</body>
</html>