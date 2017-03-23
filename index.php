<!doctype html>


  

    <head>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- frist mobile meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>project</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/hover.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" type="text/css" href="css/media.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Sans|Droid+Serif" >
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    </head>

    <body>

<nav class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hvr-pop" href="#"><img src="imgs/128x128.png"/></a>
        </div>
<?php
require 'process.php';
require 'function.php';
session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
     // username and password sent from form

     $myusermail = mysqli_real_escape_string($connection,validate_input($_POST['umail']));
     $mypassword = mysqli_real_escape_string($connection,validate_input($_POST['upass']));
     //$_SESSION['un']=$myusername;
     $sql = "SELECT user_id FROM `users` WHERE email = '$myusermail' and password = '$mypassword'";
     $result = mysqli_query($connection,$sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


     $count = mysqli_num_rows($result);
     echo "   ".$count;

     // If result matched $myuseremail and $mypassword, table row must be 1 row
try {

       if($count == 1) {

          header("location: home.html");
       }else {
        //  $error = "Your Login Name or Password is invalid";
            header("location: index.php");
       }
} catch (Exception $e) {
    
 echo "ERROR :".$e->getMessage();

  }
  
}
?>
        <form class="navbar-right hidden-xs" method="post">
            <input type="email"  name="umail" placeholder="Email" required>
            <input type="password" name="upass"  placeholder="Password" required>
            <button type="submit" class="bttn hvr-shutter-out-horizontal" value="Login">Login</button>
</form>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


    <ul class="nav navbar-nav navbar-right hidden-lg hidden-md hidden-sm">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b>Login  </b><span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
                <li>
                    <div class="row">
                        <div class="col-md-12">

                            <form class="form" role="form" method="post" >
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                    <input type="email" name="umail" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                    <input type="password" name="upass" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                    <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn  btn-block" style="background: #03A678;">Sign in</button>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> keep me logged-in
                                    </label>
                                </div>
                            </form>
                        </div>

                    </div>
                </li>
            </ul>
        </li>

                       
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>



        <!-- start Main section -->
<div class="row">
   
    <section class="Enterince text-center col-lg-3">
        
        <div class="words hidden-xs">
         
            <h3>التكافل الاجتماعي</h3>
             <p>
                إن خصال الخيْر وصنائع المعروف التي حثَّ الإسلام على فِعْلها مُتَعَدِّدة الطرُق، واسعة الأبواب، فالمجتمع الإسلامي تتهيَّأ فيه الفرَص لأعمال الخير والإحسان، وبذْل المعروف للإخوان.

                وما أعظمَ الأجرَ الذي ينالُه مَن يسعى في قضاء حاجة إخوانه، ويفرج كُرَب أقاربه وخِلاَّنه! إذ ينالُ ذلك الثواب في موقف هو أحوج فيه للحسنات، يوم يقف بين يدي رب الأرباب، يوم العرض والحساب، حيث يشمل كل عمل قام به نحو المحتاجين، ومَن ضاقتْ عليهم أحوالهم، سواء يسَّرَ عليه في قضاء دينه، أو سدده عنه، أو فَكَّ ضائقته، أو شفع له عند مَن يعينه، أو سهل له مهمته، قال: ((مَن كان في حاجة أخيه كان الله في حاجته، ومَنْ فَرَّج عن مسلم كربةً، فرَّج الله عنه بِها كربةً من كرَب يوم القيامة، ومَن ستر مسلمًا ستره الله يوم القيامة))؛ متفق عليه.
            </p>
            
        </div>
    </section>
    <?php
	require 'process.php';
	//require 'function.php';
	if ($_SERVER['REQUEST_METHOD']=="POST") {
	$ln=validate_input($_POST['lname']);
	$fn=validate_input($_POST['fname']);
	$em=validate_input($_POST['mail']);
	$ph=validate_input($_POST['phone_num']);
	$add=validate_input($_POST['addres']);
	$ps=validate_input($_POST['pass']);
     
        
	$gen=validate_input($_POST['option']);
	
        if(!empty($ln) &&!empty($fn) &&!empty($em) &&!empty($ph) &&!empty($add) &&!empty($ps) &&!empty($gen) ){
	$query="INSERT INTO users VALUES (NULL, '$fn', '$ln', '$em', '$ph', 'm', '$ps', '', '', NULL, NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '$add');";
	if (mysqli_query($connection,$query)) {
            json_encode("done");
		// header ('location: index.html');
                 echo "<script>window.alert('sucess register')</script>";
                 }else {  header ('location: index.php');  }
                 json_encode("error");
           } else { echo "<h1 style='color:red'>Please Check Your Data And Fill It</h1>"; }
        }

	 ?>
    <div class="register col-lg-4 col-xs-12">
        
        <form class="form " action="index.php" id="kh" role="form" method="post" >
            <div class="form-group">

                <input type="text" class="form-control" name="fname" placeholder="Frist Name" required>
            </div>
            <div class="form-group">

                <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
            </div>
            <div class="form-group">

                <input type="email" class="form-control" name="mail" placeholder="Email" required>
            </div>
            <div class="form-group">

                <input type="number" class="form-control" name="phone_num" placeholder="Phone" required>
            </div>
            <div class="form-group">

                <input type="text" class="form-control" name="addres" placeholder="Address" required>
            </div>
            <div class="form-group">

                <input type="password" class="form-control" name="pass" placeholder="Password" required>
            </div>

            <div class="form-group">
                <label> Birthday</label>


            </div>
            <div class="form-group">
                <select aria-label="Day" name="birthday_day" id="day" title="Day" class="_5dba" aria-controls="js_5l" aria-haspopup="true" role="null"><option value="0" selected="1">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
                <select aria-label="Month" name="birthday_month" id="month" title="Month" class="_5dba"><option value="0" selected="1">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sept</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>
                <select aria-label="Year" name="birthday_year" id="year" title="Year" class="_5dba"><option value="0" selected="1">Year</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select>
            </div>

            <div class="radio">
                <label>
                    <input type="radio" name="option" value="female" >
                    Female
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="option"  value="male">
                    Male
                </label>
            </div>
            <p style="color:black;">  By clicking Create Account, you agree to 
            our Terms and confirm that you have read
            our Data Policy.</p>
            <div class="form-group">
                <button type="submit" class="btn  btn-block hvr-shutter-out-horizontal">Create Account</button>
            </div>

        </form>
    </div>
</div>
        <!-- end Main section -->

        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>


    </body>

</html>
