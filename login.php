<?
$title = 'Public Service Internship Club Login';
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
var x=document.forms["rform"]["mobile"].value;
if (x==null || x=="")
  {
  alert("Mobile number must be filled out");
  return false;
  } 


var xc=document.forms["rform"]["password"].value;
if (xc==null || xc=="")
  {
  alert("please select password");
  return false;
  } 



}
</script>
 
<div class='col-12'>
      <form name='rform' onsubmit='return validateForm();' action='inlog.php' method='post' class="form-signin">
        <h2 class="form-signin-heading">Login</h2>
        <label for="input" class="sr-only">Mobile Number</label>
        <input type="input" name='mobile' id="inputE" class="form-control" placeholder="Mobile number" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name='password' class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-md btn-dark btn-block" type="submit">Sign in</button>
      </form>
</div>

</div>



<?
include "../confad.php";
require "footer.php";
?>


</div><!container>

<?
require "bootstrapbottom.php";
?>