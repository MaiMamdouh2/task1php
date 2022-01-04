<?php
if ($_POST) {

    switch ($_POST['operator']) {
        case 'add':
            $result= $_POST['number1']+ $_POST['number2'];
            break;
            case 'subtract':
                $result= $_POST['number1'] - $_POST['number2'];
                break;
                case 'add':
                    $result= $_POST['number1'] * $_POST['number2'];
                    break;
        default:
        $result= $_POST['number1'] / $_POST['number2'];
            break;
    }}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>CALCULATOR</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
          <div class="row">
              <div class="col-12 mt-5">
                  <h1 class="text-dark text-center h1">SIMPLE CALCULATOR</h1>
              </div>
              <div class="offset-4 col-4">
                    <form method="post">
                    <div class="form-group">
                          <label for="number"> number1</label>
                          <input type="number" name="number1" id="number" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="operator">operator</label>
                          <select name="operator" class="form-control" id="operator">
                                <option value="add">add</option>
                                <option value="subtract">subctract</option>
                                <option value="multipy">multipy</option>
                                <option value="devide">devide</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="number"> number2</label>
                          <input type="number" name="number2" id="number" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <button name="sale"  class="btn btn-dark rounded">calc!</button>   
                        </div>
                    </form>
                    <div class="row">
              <div class="col-12">
                  <h1 class="text-dark text-center">RESULT</h1>
              </div>
              <div class="offset-4 col-4">
                  <ul class="alert alert-dark">
                    
                  <li><?php if(isset($result)){ echo $result;} ?></li>
                    
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