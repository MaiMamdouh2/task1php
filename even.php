<?php
if ($_POST) {


if (($_POST["number1"] %2)==0) {

    $num="num is even";
}else {
    $num ="num is odd";
}



}




?>

<!doctype html>
<html lang="en">
  <head>
    <title>EVEN-ODD</title>
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
                  <h1 class="text-success text-center h1">EVEN OR ODD</h1>
              </div>
              <div class="offset-4 co1-6 ">
                  <form action="" method="post"> 
                        <div class="form-group">
                          <label for="number"> number</label>
                          <input type="number" name="number1" id="number" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                       
                        
                        
                        <div class="form-group">
                          <button class="btn btn-success">find even-odd</button>
                        </div>

                        
                  </form>
                   
                 
              </div>
          </div>
          <?php
            if(!$_POST){
                
                echo " ";die;
                }?>
          <div class="row">
              <div class="col-12">
                  <h1 class="text-success text-center">RESULT</h1>
              </div>
              <div class="offset-4 col-4">
                  <ul>
                    
                  <li>  <?php if(isset($num)){ echo $num;} ?></li>
                  

                      
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