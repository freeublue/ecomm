<?
$title = 'Public Service Internship Club Register';
require "bootstraptop.php";
require "functions/bootlib.php";
$size = 'xl';
$bootcolor = 'light';
$bootcolor2 = 'light';
$navname = 'Public Service Internship Club';
$pagelinkarray = array("contact.php" => "Contact", "about.php" => "About", "login.php" => "Login", "register.php" => "Register", "pricing.php" => "Pricing");
$ar = array('Start A Group >>', 'startgroup.php');
navbar ($size, $bootcolor, $bootcolor2, $navname, $pagelinkarray, $ar);
?>

<div class='container-fluid'>


<div class='row'>
<script>
function validateForm()
{
var x=document.forms["rform2"]["us"].value;
if (x==null || x=="")
  {
  alert("Mobile number must be filled out");
  return false;
  } 


var xc=document.forms["rform2"]["ps"].value;
if (xc==null || xc=="")
  {
  alert("please select password");
  return false;
  } 
  
var xcb=document.forms["rform2"]["psr"].value;
if (xcb==null || xcb=="")
  {
  alert("please select password again");
  return false;
  } 
if(xc != xcb) { 
alert("passwords do not match, try again"); } 


}
</script>
 

<div class='col-12'>

<form class="form-signin" action='reg.php' method='post' onsubmit='return validateForm();' name='rform2' id='form3'><h2 class="form-signin-heading">Enter your mobile number, valid email and select a password.</h2><p>Password can be letters and numbers only, no spaces in username or password. password must be 6 or more characters</p>
       <label for="input" class="sr-only">Mobile Number</label>
        <input type="input" name='us' id="us" class="form-control" placeholder="Mobile number" required autofocus>
        <label for="email" class="sr-only">Email</label>
        <input type="email" name='em' id="em" class="form-control" placeholder="Email" autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="ps" name='ps' class="form-control" placeholder="Password" required>
         <label for="inputPassword" class="sr-only">Repeat Password</label>
        <input type="password" id="psr" name='psr' class="form-control" placeholder=" Repeat Password" required>
       
        <button class="btn btn-md btn-dark btn-block" type="submit">Sign in</button>
      </form>
<p>By registering you agree to the terms and conditions as set out<a style='color:red;' href='terms.php'>Here</a></p></div>
</div>




<?
require "footer.php";
?>


</div><!container>

<?
require "bootstrapbottom.php";
?>