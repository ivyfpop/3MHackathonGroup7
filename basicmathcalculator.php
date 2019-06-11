<!DOCTYPE html>
<html>
<body>

<!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="assets/css/animate-custom.css" rel="stylesheet">


    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

<div class="col-lg-offset-4 col-lg-4">
  <h3 class="centered">Basic math calculator</h3>
</div>

<div class="row">
      <div class="col-lg-offset-4 col-lg-4">
         <form class="form-horizontal" role="form" method="post">

            <div class="form-group">
                <label class="col-lg-4 control-label">1st Number: </label>
                <div class="col-lg-7">
                  <input type="number" class="form-control" placeholder="Enter First Number" name="num1" required="">
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-4 control-label"></label>
                 <div class="col-lg-3">
                      <select name="operation" class="form-control">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                      </select>
                 </div>
            </div>

            <div class="form-group">
                <label class="col-lg-4 control-label">2nd Number: </label>
                <div class="col-lg-7">
                  <input type="number" class="form-control" placeholder="Enter Second Number" name="num2" required="">
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-1 control-label"></label>
               	<div class="col-lg-3">
                  	<button type="submit" class="btn btn-success" name="send">Submit</button>
               	</div>
            </div>

        <?php
        	if(isset($_POST['send']))
        	{
        		$num1 = $_POST['num1'];
            $op = $_POST['operation'];
            $num2 = $_POST['num2'];

            if($op == "+")
            {
              $result = $num1+$num2;
            }
            elseif($op == "-")
            {
              $result = $num1-$num2;
            }
            elseif($op == "*")
            {
              $result = $num1*$num2;
            }
            elseif($op == "/")
            {
              $result = $num1/$num2;
            }

        		echo "The answer is ".$result;
        	}
        ?>

         </form>
      </div>
</div>

</body>
</html>