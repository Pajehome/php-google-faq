<?php
include 'data.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Google Faq</title>
</head>

<body>

    
       <div class="container-fluid">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header p-3 ">
            <a class="navbar-brand text-primary" href="#">Google</a>
          </div>
        </div>
      </nav>
    </div>




    <main>
        <div class="container">
            <ul>
                <?php 
        for( $i= 0; $i < count($faq); $i++){ ?>
                <li>
                    <?php echo "{$faq[$i]['domanda']} {$faq[$i]['risposta']} <br>"; ?>
                </li>
                <?php 
        }
        ?>
            </ul>

        </div>

    </main>
</body>

</html>