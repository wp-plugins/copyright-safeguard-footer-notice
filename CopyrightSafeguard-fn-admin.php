<?php

$message = '';
$copyrightsafeguardauth = get_option( 'copyrightsafeguardauth', '' );
$csfnbuttontype = get_option( 'csfnbuttontype', 'button' );
$csfnleftoffset = get_option( 'csfnleftoffset', '0' );
$csfnleftoffsetunits = get_option( 'csfnleftoffsetunits', 'px' );
$csfntopoffset = get_option( 'csfntopoffset', '0' );
$csfntopoffsetunits = get_option( 'csfntopoffsetunits', 'px' );
if($_POST['csfn_submit'] == 'Y') {
	update_option( 'copyrightsafeguardauth', $_POST['copyrightsafeguardauth'] );
	update_option( 'csfnbuttontype', $_POST['csfnbuttontype'] );
	update_option( 'csfnleftoffset', $_POST['csfnleftoffset'] );
	update_option( 'csfnleftoffsetunits', $_POST['csfnleftoffsetunits'] );
	update_option( 'csfntopoffset', $_POST['csfntopoffset'] );
	update_option( 'csfntopoffsetunits', $_POST['csfntopoffsetunits'] );
    $copyrightsafeguardauth = $_POST['copyrightsafeguardauth'];
    $csfnbuttontype = $_POST['csfnbuttontype'];
    $csfnleftoffset = $_POST['csfnleftoffset'];
    $csfnleftoffsetunits = $_POST['csfnleftoffsetunits'];
    $csfntopoffset = $_POST['csfntopoffset'];
    $csfntopoffsetunits = $_POST['csfntopoffsetunits'];
	$message = '<p>Settings Saved</p>';
}
?>
<div class="wrap">
<h2>Copyright Safeguard Configuration - Version 3.0</h2>
<form name="csfn_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
<input type="hidden" name="csfn_submit" value="Y">
<h3>Instructions:</h3>
<ol>
  <li>  Go to <a href="http://www.copyrightsafeguard.com/">CopyrightSafeguard.com</a> and register for a free account. </li>
  <li>Add this website to your account.</li>
  <li>Go to the &quot;Get Code&quot; page and find your Copyright Safeguard Authorization Code.</li>
  <li>Enter the code below.</li>
  <li>Select a button or link type, and offset.</li>
  <li>Click &quot;Save&quot;</li>
</ol>
<p>&nbsp;</p>
<hr />
<p>
  <h3>Copyright Safeguard Authorization Code:</h3>
  <input type="text" name="copyrightsafeguardauth" id="copyrightsafeguardauth" size="8" maxlength="6" value="<?php echo $copyrightsafeguardauth; ?>">
<p>&nbsp;</p>
<hr />
<h3>Shortcode:</h3>
<p>[copyrightsafeguard type="button"] &nbsp;&nbsp;&nbsp;<img src="http://www.copyrightsafeguard.com/images/copyright-safeguard.png" width="100" height="42"></p>
<p>[copyrightsafeguard type="widebutton"] &nbsp;&nbsp;&nbsp;<img src="http://www.copyrightsafeguard.com/images/copyright-safeguard-wide.png" width="180" height="23"></p>
<p>[copyrightsafeguard type="textlink"] &nbsp;&nbsp;&nbsp;Registered with Copyright Safeguard</p>
<p>&nbsp;</p>
<hr />
<h3>Badge or link type to insert in page FOOTER:</h3>
<p>
  <label>
    <input name="csfnbuttontype" type="radio" id="button" value="none" <?php if ($csfnbuttontype == 'none') { echo 'checked="checked"'; } ?>>
    None</label>
  <br />
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
<p>&nbsp;</p>
<hr />
<h3>Position of badge or link in footer:</h3>
<p>Left margin: 
  <input type="text" name="csfnleftoffset" id="csfnleftoffset" size="6" maxlength="4" value="<?php echo $csfnleftoffset; ?>">
  <select name="csfnleftoffsetunits" id="csfnleftoffsetunits">
  <option <?php if ($csfnleftoffsetunits == 'px') { echo 'selected '; } ?> value="px">px</option>
  <option <?php if ($csfnleftoffsetunits == 'em') { echo 'selected '; } ?> value="em">em</option>
  <option <?php if ($csfnleftoffsetunits == 'rem') { echo 'selected '; } ?> value="rem">rem</option>
  </select>
</p>
<p>Top margin: 
  <input type="text" name="csfntopoffset" id="csfntopoffset" size="6" maxlength="4" value="<?php echo $csfntopoffset; ?>">
  <select name="csfntopoffsetunits" id="csfntopoffsetunits">
  <option <?php if ($csfntopoffsetunits == 'px') { echo 'selected '; } ?> value="px">px</option>
  <option <?php if ($csfntopoffsetunits == 'em') { echo 'selected '; } ?> value="em">em</option>
  <option <?php if ($csfntopoffsetunits == 'rem') { echo 'selected '; } ?> value="rem">rem</option>
  </select>
</p>
<p>&nbsp;</p>
<?php echo $message; ?>
<p class="submit">
<input type="submit" name="Submit" value="Save" />
</p>
</form>
</div>