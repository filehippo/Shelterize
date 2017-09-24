<html><head>
        <title>Sherlterize - I Want To Help</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--[if lte IE 8]>
            <script src="assets/js/ie/html5shiv.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="assets/css/main.css">
        <!--[if lte IE 9]>
            <link rel="stylesheet" href="assets/css/ie9.css" />
        <![endif]-->
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="assets/css/ie8.css" />
        <![endif]-->
    </head><body>
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- Header -->
            <header id="header">
                <div class="inner">
                    <!-- Logo -->
                    <a href="index.html" class="logo">

									<span class="symbol"><img src="images/fullhouse.svg" alt=""></span><span class="title">Shelterize</span>

								</a>
                    <!-- Nav -->
                    <nav>
                        <ul>
                            <li>
                                <a href="#menu">Menu</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
            <!-- Menu -->
            <nav id="menu">
                <h2>Menu</h2>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="helpme.php">Help Me</a>
                    </li>
                    <li>
                        <a href="offerhelp.php">I Want To Help</a>
                    </li>
                    <li>
                        <a href="safe.php">I Am Safe</a>
                    </li>
                    <li>
                        <a href="about.html">About Us</a>
                    </li>
                </ul>
            </nav>
            <!-- Main -->
            <div id="main">
                <div class="inner">
                    <h1>I Want to Help&nbsp;</h1>
                    <span class="image main"></span>
                    <form class="form-horizontal" role="form" method="POST" action="uploadofferhelp.php">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" name="namein" class="form-control form-control-lg" placeholder="input name" id="subject" required="" data-validation-required-message="Please enter a subject">
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <input type="text" name="addressin" class="form-control form-control-lg" placeholder="input Address" id="subject" required="" data-validation-required-message="Please enter a subject">
                        </div>
                        <div class="form-group">
                            <label>Phone #:</label>
                            <input type="text" name="phonein" class="form-control form-control-lg" placeholder="input phone#" id="subject" required="" data-validation-required-message="Please enter a subject">
                        </div>
                        <div class="form-group">
                            <label>Notes:</label>
                            <input type="text" name="notesin" class="form-control form-control-lg" placeholder="input notes" id="subject" required="" data-validation-required-message="Please enter a subject">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php



//SQL DataBase log in information from the Cpanel in Godaddy

$servername = "localhost";
$username ="ironmountain";
$password ="jumpship";
$dbName ="riceshelter";


//create connection

$conn = new mysqli($servername, $username, $password, $dbName);

//check connection

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}


$sql = "SELECT * FROM `volunteer` ";

//If there is a connection display the results 
//It displays in a table format on the buttom 
//The echo commands display to the website

$result = $conn ->query($sql);

if ($result-> num_rows >0){

 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';

echo "<thead><tr>

<th>name</th>
<th>address #</th>
<th>Phone #</th>
<th>notes</th>



</tr>";

echo"</thead>";

	while($row = $result -> fetch_assoc()){

echo"<tbody>

<tr>

<td>" . $row["vname"] . "</td>
<td>" . $row["vadd"] . "</td>
<td>" . $row["vphone"] . "</td>
<td>" . $row["vnotes"] ."</td>

</tr>";

echo"</tbody>";

		}

        echo'</table>';
        echo'</div>';
       

}else{
	echo"0 results";
}

$conn->close();


?>

                        
                        
                </div>
            </div>
            <!-- Footer -->
            <footer id="footer">
                <div class="inner">
                    <section>
                        <h1>Shelterize</h1>
                    </section>
                    <section>
                        <h2>Follow Us</h2>
                        <ul class="icons">
                            <li>
                                <a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a>
                            </li>
                            <li>
                                <a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a>
                            </li>
                            <li>
                                <a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a>
                            </li>
                            <li>
                                <a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a>
                            </li>
                        </ul>
                    </section>
                    <ul class="copyright">
                        <li>© Shelterize. All rights reserved</li>
                        <li>Alfred Albizures, Andrew Montano, Daniel Torres, Devesh Mohan, Jean Orozco</li>
                    </ul>
                </div>
            </footer>
        </div>
        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]>
            <script src="assets/js/ie/respond.min.js"></script>
        <![endif]-->
        <script src="assets/js/main.js"></script>
    

</body></html>