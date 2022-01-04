<?php
if ($_POST) {
    define('numberOfSubjects',5);
    $Subject = 50;
    $maxGradeYear = $Subject * numberOfSubjects; // 250

$totalGradeStudent=$_POST["Physics"] + $_POST["Chemistry"] + $_POST["Biology"] + $_POST["Mathematics"] + $_POST["Computer"];
$percentage= ($totalGradeStudent /$maxGradeYear )*100  ;
if ($percentage>=90) {
    $massege="Grade A" ;
   
}
elseif($percentage>=80 &&$percentage<90) {
    $massege="Grade B" ;
   
}
elseif($percentage>=70 &&$percentage<80) {
    $massege="Grade C" ;
   
}
elseif($percentage>=60 &&$percentage<70) {
    $massege="Grade D" ;
   
}
elseif($percentage>=40 &&$percentage<60) {
    $massege="Grade E" ;
   
}
else {
    $massege="Grade F" ;
   
}


}




?>

<!doctype html>
<html lang="en">
  <head>
    <title>GRADE</title>
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
                  <h1 class="text-success text-center h1">GRADE</h1>
              </div>
              <div class="offset-4 co1-6 ">
                  <form action="" method="post"> 
                        <div class="form-group">
                          <label for="Physics"> Physics</label>
                          <input type="number" name="Physics" id="Physics" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="Chemistry"> Chemistry</label>
                          <input type="number" name="Chemistry" id="Chemistry" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="Biology"> Biology</label>
                          <input type="number" name="Biology" id="Biology" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="Mathematics "> Mathematics</label>
                          <input type="number" name="Mathematics" id="Mathematics " class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="Computer"> Computer</label>
                          <input type="number" name="Computer" id="Computer" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                       
                        
                        
                        <div class="form-group">
                          <button class="btn btn-success">result</button>
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
                  <ul class="alert alert-success">
                    
                  <li>Your Percentage is <?= $percentage?> % And Your Grade Is  <?php if(isset($massege)){ echo $massege;} ?></li>
                  

                      
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