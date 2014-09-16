<?php

$message = '';
$copyrightsafeguardauth = get_option( 'copyrightsafeguardauth', '' );
$csfnbuttontype = get_option( 'csfnbuttontype', 'button' );
if($_POST['csfn_submit'] == 'Y') {
	update_option( 'copyrightsafeguardauth', $_POST['copyrightsafeguardauth'] );
	update_option( 'csfnbuttontype', $_POST['csfnbuttontype'] );
    $copyrightsafeguardauth = $_POST['copyrightsafeguardauth'];
    $csfnbuttontype = $_POST['csfnbuttontype'];
	$message = '<p>Settings Saved</p>';
}
?>
<div class="wrap">
<h2>Copyright Safeguard Configuration</h2>
<form name="csfn_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
<input type="hidden" name="csfn_submit" value="Y">
<h3>Instructions:</h3>
<ol>
  <li>  Go to <a href="http://www.copyrightsafeguard.com/">CopyrightSafeguard.com</a> and register for a free account. </li>
  <li>Add this website to your account.</li>
  <li>Go to the &quot;Get Code&quot; page and find your Copyright Safeguard Authorization Code.</li>
  <li>Enter the code below.</li>
  <li>Select a button or link type.</li>
  <li>Click &quot;Save&quot;</li>
</ol>
<hr />
<label for="textfield">Copyright Safeguard Authorization Code:</label>
  <input type="text" name="copyrightsafeguardauth" id="copyrightsafeguardauth" value="<?php echo $copyrightsafeguardauth; ?>">
<br /><br />
Button or link type to insert in page footer:
<p>
  <label>
    <input name="csfnbuttontype" type="radio" id="button" value="button" <?php if ($csfnbuttontype == 'button') { echo 'checked="checked"'; } ?>>
    Button:&nbsp;&nbsp;&nbsp;<img src="http://www.copyrightsafeguard.com/images/copyright-safeguard.png" width="100" height="42"></label>
  <br />
  <label>
    <input type="radio" name="csfnbuttontype" value="widebutton" id="widebutton" <?php if ($csfnbuttontype == 'widebutton') { echo 'checked="checked"'; } ?>>
    Wide Button:&nbsp;&nbsp;&nbsp;<img src="http://www.copyrightsafeguard.com/images/copyright-safeguard-wide.png" width="180" height="23"></label>
  <br />
  <label>
    <input type="radio" name="csfnbuttontype" value="textlink" id="textlink" <?php if ($csfnbuttontype == 'textlink') { echo 'checked="checked"'; } ?>>
    Text Link:  Registered with Copyright Safeguard</label>
  <br />
</p>
<?php echo $message; ?>
<p class="submit">
<input type="submit" name="Submit" value="Save" />
</p>
</form>
</div>