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
function validate()
{
	var first=document.getElementById('one').value;
	var second=document.getElementById('two').value;
	var third=document.getElementById('three').value;
if()
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
                                    <img class="slide-image" src="slide1.jpg" style="width:800px; height:300px;">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="pizzamenu.jpg" style="width:800px; height:300px;">
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

                
				
				
				<form method="post" action="validate.php">
				<table border="2"><tr>
				<th>Sr.no</th>
				<th>Item</th>
				<th>Price</th>
				<th>Cart</th>
				<th>Qty</th>
				</tr>
				
				<tr>
				<td>1</td>
				<td>Paneer Tikka Pizza</td>
				<td>Rs.250</td>
				<td><form><input type="radio" id="one" name="add1" value="cart1">Add to cart</td></form>
				<td><input type="number" id="q1" name="q1" value="qty1" required">
				</tr>
				
				<tr>
				<td>2</td>
				<td>Margherita Pizza</td>
				<td>Rs.150</td>
				<td><input type="radio" id="two" name="add2" value="cart2">Add to cart</td>
				<td><input type="number" id="q2" name="q2" value="qty2" required">
				</tr>
				
				<tr>
				<td>3</td>
				<td>Simply Cheese Pizza</td>
				<td>Rs.120</td>
				<td><input type="radio" id="three" name="add3" value="cart3">Add to cart</td>
				<td><input type="number" id="q3" name="q3" value="qty3" required">
				</tr>
				</table>
				<input type="submit" value="Proceed to payment">
				</form>
				
				
				
								

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