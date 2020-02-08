<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>9jabuka</title>

   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bukka9ja</title>
        <link rel="shortcut icon" type="image/x-icon" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">

        <link href="assets/css/owl.carousel.css" rel="stylesheet">
        <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">

        <link href="assets/css/magnific-popup.css" rel="stylesheet">

        <link href="assets/css/style.css" rel="stylesheet">


        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


</head>
<body>
<div class="main">
            <header class="bg-img header">
                <nav class="navbar navbar-default navbar-ubutia">
                    <div class="container">
                        <div class="navigation-bar">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="logo">
                                       <b><p>9ja<span>B</span>uka</p></b>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </nav>
                
            </header>










<?php	
$servername="localhost";
$username="root";
$password="";
$dbname="9jabukadb";
$conn = new mysqli($servername, $username, $password, $dbname );
if ($conn->connect_error)
{
die ("connection failed: ". $conn->connect_error);
	
}

if(isset($_GET['ser'])){
$search = $_GET['food'];
$qry = "select * from 9jabukatbl where keyword like '%$search%'";
$run = $conn->query($qry);
while($row = $run->fetch_assoc())
{
$buk= $row['restaurant'];
$mea= $row['meals'];
$add= $row['address'];
$web= $row['website'];

echo 

"<h3>Restaurant : $buk</h3><p><b>Meals</b> : $mea</p><p><b>Location</b> : $add</p><p><b> Website</b> : <a> $web</a></p>";


















}
}

?>






</div>



</body>
</html>