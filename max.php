<?php
if ($_POST) {


if ($_POST['number1']>$_POST['number2']&&$_POST['number1']>$_POST['number3']) {
 
 $maximum =    $_POST['number1'];
}
elseif ($_POST['number2']>$_POST['number1']&&$_POST['number2']>$_POST['number3']) {
    $maximum =    $_POST['number2'];
}
elseif ($_POST['number3']>$_POST['number1']&&$_POST['number3']>$_POST['number2']) {
    $maximum =    $_POST['number3'];
}
if ($_POST['number1']<$_POST['number2']&&$_POST['number1']<$_POST['number3']) {
 
  $minimum =    $_POST['number1'];
 }
 elseif ($_POST['number2']<$_POST['number1']&&$_POST['number2']<$_POST['number3']) {
     $minimum =    $_POST['number2'];
 }
 elseif ($_POST['number3']<$_POST['number1']&&$_POST['number3']<$_POST['number2']) {
     $minimum =    $_POST['number3'];
 }}

// $maximum = "the max number is " . $maximum ;

// $minimum = "the minimum number is " . $minimum ;



?>

<!doctype html>
<html lang="en">
  <head>
    <title>MAXandMIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container ">
          <div class="row ">
          <div class="col-12 mt-5">
                  <h1 class="text-success text-center h1"> FIND THE MAX AND THE MIN </h1>
              </div>
              <div class="offset-4 co1-6 ">
                  <form action="" method="post"> 
                        <div class="form-group">
                          <label for="number"> number1</label>
                          <input type="number" name="number1" id="number" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="number"> number2</label>
                          <input type="number" name="number2" id="number" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="number"> number3</label>
                          <input type="number" name="number3" id="number" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <button class="btn btn-success">result</button>
                        </div>

                        
                  </form>
                   <!-- <?php if(isset($maximum)){ echo $maximum;} ?>
                   <?php if(isset($minimum)){ echo $minimum;} ?> -->
                 
              </div>
          </div>
          <?php
            if(!$_POST){
                
                echo "";die;
                }?>
          <div class="row">
              <div class="col-12">
                  <h1 class="text-success text-center">RESULT</h1>
              </div>
              <div class="offset-4 col-4">
                  <ul>
                    
                  <li>the max number is  <?php if(isset($maximum)){ echo $maximum;} ?></li>
                  <li>the minimum number is  <?php if(isset($minimum)){ echo $minimum;} ?></li>

                      
                  </ul>
              </div>
          </div>
      </div>
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>