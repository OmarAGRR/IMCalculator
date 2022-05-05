<html>
    <head>
      <title>IMCalculator</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
     
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      
      <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
      <link rel="icon" href="favicon.ico">

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php
        header('Content-Type: text/html; charset=UTF-8');
      ?>

    
      <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
        </style>
    </head>
    <body>
  <div class="col-md-4"></div>
    
    <!-- INICIA LA COLUMNA -->

    
      <div class="col-md-4">
        <br>
  
        <center><h1>Calculadora IMC</h1></center>
        
        <form method="POST" action="index.php" >

        <div class="form-group">
          <label for="doc">Altura(M) </label>
          <input type="number" name="altura" step="any" class="form-control" id="doc">
        </div>
    
        <div class="form-group">
            <label for="nombre">Masa(KG) </label>
            <input type="text" name="masa" class="form-control" id="nombre" >
        </div>
    

        
        <center>
          <input type="submit" value="Calcular" class="btn btn-info" name="btn_calcular">
        </center>
    
      </form>
      <center>
        <h4>
      <?php
          
          $alt = "";
          $masa = "";
          $result = "";    
    
          if(isset($_POST['btn_calcular']))
          {
            $alt =  $_POST['altura'];
            $masa =  $_POST['masa'];
            $alt2 = $alt*$alt;
            $result = $masa/$alt2;
            echo "Altura (M): ", $alt;
            ?> <br> <?php
            echo "Masa (KG): ", $masa;
            ?> </h4> <h3> <?php
            echo "IMC: " , $result;
            if ($result <= 18.5){
              ?> <br> <h1 style="color:#FF0000"> <?php echo"Peso inferior al normal";?></h1><?php
            } elseif($result > 18.5 && $result <= 24.9){
              ?> <br> <h1 style="color:#32FF00"> <?php echo "Normal";?></h1><?php
            } elseif($result > 24.9 && $result <= 29.9){
              ?> <br> <h1 style="color:#FF4D00"> <?php echo "Peso superior al normal";?></h1><?php
            } elseif($result > 29.9){
              ?> <br> <h1 style="color:#FF0000"> <?php echo "Obesidad";?> </h1><?php
              ?> <p>Le recomendamos los siguientes videos para poder disminuir su IMC</p> 
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bVZsdMrOI30?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <?php
            }
            

          }
          
    
        
      ?>
      <center>
      <br>
      <br>
      <table id="customers">
        <tr>
          <th>Composición corporal</th>
          <th>Índice de masa corporal (IMC)</th>
        </tr>
        <tr>
          <td>Peso inferior al normal</td>
          <td>Menos de 18.5</td>
        </tr>
        <tr>
          <td>Normal</td>
          <td>18.5 – 24.9</td>
        </tr>
        <tr>
          <td>Peso superior al normal</td>
          <td>25.0 – 29.9</td>
        </tr>
        <tr>
          <td>Obesidad</td>
          <td>Más de 30.0</td>
        </tr>
      </table>
      <br>      
      </center>
      </div>
      
    
    <!-- TERMINA LA COLUMNA -->

  </div>
    
    
    
      
      
    </body>
    <script src="bootstrap&dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </html>
        
        