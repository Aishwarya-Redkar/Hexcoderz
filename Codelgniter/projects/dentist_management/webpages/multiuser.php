<?php
// process the script only if the form has been submitted
if (array_key_exists('login', $_POST)) {
// start the session
session_start();
require_once('includes/dbConnect.inc.php'); //connect to the database
include 'includes/title.inc.php'; //display title
include ('includes/corefuncs.inc.php');
// clean the $_POST array and assign to shorter variables
nukeMagicQuotes();
$username = trim($_POST['username']);
$password = trim($_POST['password']);
//$userrole = $_POST['userrole'];
$userrole = $_POST['userrole'];

// connect to the database as a restricted user
$conn = dbConnect('query');
// get the username's details from the database
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);

if (md5($password)== $row['password']) {
$_SESSION['authenticated'] = 'Nkacharani';
}
// if no match, destroy the session and prepare error message
else {
$_SESSION = array();
session_destroy();
$error = 'Invalid username or password';
}
// if the session variable has been set, redirect
if (isset($_SESSION['authenticated'])) {
// get the time the session started
$_SESSION['start'] = time();
switch($userrole){
case 'admin':
header('Location: front_page.php');
break;
case 'clerk':
header('Location: clerk.php');
break;
case 'user':
header('Location: user_list.php');
}
}
?>

<?php
if (isset($error)) {
echo "<p>$error</p>";
}
elseif (isset($_GET['expired'])) {
?>
<p>Your session has expired. Please log in again.</p>
<?php } ?>
<h2 align="center">Enter your username and password</h2>

	&lt;form id="log"  name="login" method="post" class="details" action=""&gt;

 	&lt;div &gt;
<label class="fixedwidth">Username:</label>
<input name="username" id="username" type="text" class="fixedwidth" />
</div>

<div >
<label class="fixedwidth">Password:</label>
<input name="password" id="password" type="password" class="fixedwidth" />
</div>
<div>
<input type="hidden" name="userrole" value="<?php echo $userrole; ?>" />
</div>
<div class="buttonarea">
<input name="login" id="login" type="submit" value="User Login" />
</div>
</form>
