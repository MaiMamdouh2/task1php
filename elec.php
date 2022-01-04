<?php




if ($_POST) {
    define('vat',0.2);
    $num=$_POST['number1'];


if ($num<50) {
 
 $unit= .5 ;
}
elseif ($num>=50 && $num <=150) {
    $unit= .75 ;
}
elseif ($num>=150 && $num <250) {
    $unit= 1.2 ;
}
else{
    $unit= 1.5;
}}
$price = $num * $unit;
$vat = $price * vat;
$priceAfterVat = $price + $vat;


?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
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
                  <h1 class="text-success text-center h1"> positive or negative</h1>
              </div>
              <div class="offset-4 co1-6 ">
                  <form action="" method="post"> 
                        <div class="form-group">
                          <label for="number"> number1</label>
                          <input type="number" name="number1" id="number" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        
                        
                        <div class="form-group">
                          <button class="btn btn-success">result</button>
                        </div>

                        
                  </form>
                   
                 
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
                    
                  <li>  <?php if(isset($priceAfterVat)){ echo $priceAfterVat;} ?></li>
                  <li>Price After Vat: <?= $priceAfterVat; ?> <b>EGP</b> </li>
                  

                      
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