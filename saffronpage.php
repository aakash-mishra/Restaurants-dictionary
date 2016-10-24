<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body onLoad="document.refresh()";>


<!DOCTYPE html>
<html lang="en">

<head>

/*<script type="text/javascript">
function reloadonce()
{
location.reload();
return true;
}
</script>*/

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Restaurants' dictionary</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="mumbaipage.html">Restaurant's dictionary</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Change Location</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Top Restaurants</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Top Chinese Restaurants</a>
                    <a href="#" class="list-group-item">Top Indian Restaurants</a>
                    <a href="#" class="list-group-item">Top Multi-cuisine Restaurants</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="saffron.jpg" style="width:800px; height:300px;">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="saffron2.jpg" style="width:800px; height:300px;">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="slide3.jpg" style="width:800px; height:300px;">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-8 col-lg-8 col-md-8">
                        <div class="thumbnail">
                            <a href="saffronpage.php"><img src="saffron2.jpg" style="width:640px; height:300px;"></a>
                            <div class="caption">
                            
                                <b><p>Mahakali, Andheri  ·  Casual Dining<br>
								Phone Number: 022123456<br>
								PURE VEG RESTAURANT.<br>
								Opening hours:11am to 11pm.   Home Delivery available.<br></b>
								<form class="form-group" onClick="orderfoodpage.php">
								<button>Click here to Order food</button>
								</form>
								
                            </div>
                            
                        </div>
                    </div> 

                </div>
				
					<form class="form-group" action="feedback_database.php" method="post">
				<input type="hidden" name="id" value="1">
				<div class="container">
<h2>Write A feedback</h2>
      
        <form method="post" onclick="return validate()" action="feedback_database.php">
		<div class="form-group">
		<input type="hidden" name="id" value="2">
          <p>
            <input type="text" name="name" id="name" value="" size="22"  required</>
            <label for="name"><small>Name (required)</small></label>
          </p>
          <p>
            <input type="email" name="email" id="email" value="" size="22" required</>
            <label for="email"><small>Mail (required)</small></label>
          </p>
          <p>
            <textarea name="review" id="review" cols="100%" rows="10" required></textarea>
            <label for="review" style="display:none;"><small>Review</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Submit" />
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset" />
          </p>
		  </div>
        </form>
      
    </div>
				</form>
      
    
								
								
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="aakashdb";

//$name=$_POST["name"];
//$mail=$_POST["email"];
//$review=$_POST["review"];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
$sql="select * from reviews";
$result = $conn->query($sql);
echo "<table border=\"2\" ><tr><b>
		<th>Name</th>
		<th>Email</th>
		<th>Review</th>
	</tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		if($row['R_id']==2)
        echo "<tr><td>{$row['Name']}</td>
         <td>{$row['Email']} </td>
         <td>{$row['Review']} </td></tr> ";
            }
}

?>
								

            </div>

        </div>

    </div>
    <!-- /.container -->

   
	
	
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>