<!DOCTYPE html>
<html>
  <head>
    <title>HNG 4.0</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- My own stylesheet -->
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <header class="startup text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-12 my-auto">
            <h1 class="text-uppercase faded">
              <strong>HNG 4.0: BACK AND BETTER</strong 
            </h1>
              <br><br>
            <h3 class="timebox">
              <strong>
                <?php
                 date_default_timezone_set("Africa/Lagos"); 
                 echo "It's " . date("h:i:s A"); ?>
              </strong>
            </h3>
            <hr>
          </div>
          <div class="col-lg-12 my-auto">
            <button class="btn btn-primary btn-xl">Find Out More</button>
          </div>
        </div>
      </div>
    </header>

  </body>

</html>
