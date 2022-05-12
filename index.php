<!DOCTYPE html>
<html>
  <head>
    <title>IMCalculator</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="bootstrap&dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="icon" href="favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>
      #IMC {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      #IMC td, #IMC th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      #IMC tr:nth-child(even) { 
        background-color: #f2f2f2;
      }

      #IMC tr:hover { 
        background-color: #ddd;
      }

      #IMC th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
      }

      .form-group {
        text-align: center;
      }

      .main-div {
        padding-right: 15px;
        padding-left: 15px;
        margin: 0 auto;
      }

      @media (min-width: 992px) {
        .main-div {
          padding: 0;
          width: 35.555555%;
        }
      }
    </style>
  </head>
  <body>
    <div style="text-align: center; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
      <h1>Calculadora IMC</h1>

      <div class="main-div">
        <form method="POST" action="#" style="padding-bottom: 15px;">
          <div class="form-group">
            <label for="doc">Altura (m)</label>
            <input type="number" name="altura" step="0.01" max="3" min="0.5" class="form-control" id="doc" required>
          </div>
        
          <div class="form-group">
            <label for="nombre">Masa (Kg)</label>
            <input type="number" name="masa" step="1" class="form-control" id="nombre" required>
          </div>

          <input type="submit" value="Calcular" class="btn btn-info" style="font-size: 1.3em;" name="btn_calcular">
        </form>

        <?php
          if(isset($_POST['btn_calcular']) && isset($_POST['altura']) && isset($_POST['masa']))
          {
            $alt = $_POST['altura'];
            $masa = $_POST['masa'];

            $imc = $masa / pow($alt, 2);

            echo <<<EOF
            <p style="font-size: 1.4em;">
              Altura (M): $alt
              <br>
              Masa (KG): $masa
            </p>
            <p style="font-size: 1.8em;">IMC: $imc</p>
EOF;

            if ($imc <= 18.5)
            {
              echo <<<EOF
              <p style="font-size: 2.5em; color: #FF0000;">Peso inferior al normal</p>
              <div>
                <p>Le recomendamos los siguientes videos para poder aumentar su IMC</p> 
                <iframe width="450" height="205" src="https://www.youtube.com/embed/C0dO40m_HQw" allow="autoplay; picture-in-picture" allowfullscreen />
              </div>
EOF;
            }
            else if ($imc > 18.5 && $imc <= 24.9)
            {
              echo <<<EOF
              <p style="font-size: 2.5em; color: #32FF00;">Normal</p>
              <div>
                <p>Le recomendamos los siguientes videos para poder mantener estable su IMC</p> 
                <iframe width="450" height="205" src="https://www.youtube.com/embed/x5BuK8JqODU" allow="autoplay; picture-in-picture" allowfullscreen />
              </div>
EOF;
            }
            else if ($imc > 24.9 && $imc <= 29.9)
            {
              echo <<<EOF
              <p style="font-size: 2.5em; color: #FF4D00;">Peso superior al normal</p>
              <div>
                <p>Le recomendamos los siguientes videos para poder disminuir su IMC</p> 
                <iframe width="450" height="205" src="https://www.youtube.com/embed/QQkpHI9qv0A" allow="autoplay; picture-in-picture" allowfullscreen />
              </div>
EOF;
            }
            else if ($imc > 29.9)
            {
              echo <<<EOF
              <p style="font-size: 2.5em; color: #FF0000">Obesidad</p>
              <div>
                <p>Le recomendamos los siguientes videos para poder disminuir su IMC</p> 
                <iframe width="450" height="205" src="https://www.youtube.com/embed/bVZsdMrOI30" allow="autoplay; picture-in-picture" allowfullscreen />
              </div>
EOF;
            }
          }  
        ?>
        
        <hr>

        <table id="IMC" style="text-align: left;">
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
      </div>
    </div>
  </body>
</html>
