<?php
session_start();
if(isset($_SESSION['hash'])){
  $hash = md5($_SESSION['aadh'].$_SESSION['zip'].$_SESSION['rand']);
  if($hash != $_SESSION['hash']){
    session_destroy();
    header("Location:index.php");
    exit();
  }
}else{
  header("Location:index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Blockchain Based Elections</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/web3.min.js"></script>
    <script src="js/truffle-contract.js"></script>
    <script src="js/app.js"></script>
    <?php echo "<script type='text/javascript'>var list = true;</script>;" ?>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-push-2">
          <h1 class="text-center">Blockchain Based Elections</h1>
          <hr/>
          <br/>
        </div>
      </div>
      <div id="loader" class="row">
        <p class="text-center">
          Loading..
        </p>
      </div>
    <div id="candList">
      <table class="table">
        <thead>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">AAdhar No.</th>
          <th scope="col">Zip Code</th>
          <th scope="col">Vote Count</th>
          <th scope="col">Vote</th>
        </thead>
        <tbody id="candidateList">
        </tbody>
      </table>
      <input type="text" style="display:none;" value="<?php echo $_SESSION['zip']?>" id="zipCode" />
      </form>
    </div>
  </body>

</html>