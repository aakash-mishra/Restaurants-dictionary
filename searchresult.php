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
			
			
			<?php	
			$search=$_GET['keyword'];
			echo "You searched for <b> $search </b> <hr size='1' > </ br > ";
			echo "Here are your results <br>";
			
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname="aakashdb";
			$conn = new mysqli($servername, $username, $password,$dbname);
			$radio=$_GET['search'];
			if($radio=="location")
			{
				$sql="select Name,Link,Image from restaurants where Keyword_location like '%$search%'";
				
			}
			else
				if($radio=="name")
				{
				$sql="select Name,Link,Image from restaurants where Keyword_name like '%$search%'";
				}
				
				
				$result = mysqli_query($conn,$sql);
				$foundnum = mysqli_num_rows($result); 
	if ($foundnum == 0)
		echo "Sorry, there are no matching result for <b> $search </b>. </br> </br> 1. Try more general words. for example: If you want to search 'how to create a website' then use general keyword like 'create' 'website' </br> 2. Try different words with similar meaning </br> 3. Please check your spelling"; 

	else
	{
			if(mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {	
				$link = $row['Link']; 
				$img= $row['Image'];
		echo "<b>Name:" .$row['Name'];
		echo "<br><a href =$link>Click here!</a>";
		echo " <br><img src=$img>";
		
												}	
											}			

	}
			
		
			
	
 
			?>
	
	
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>