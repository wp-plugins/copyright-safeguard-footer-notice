<?php
    /*
    Plugin Name: Copyright Safeguard Footer Notice
    Plugin URI: http://www.copyrightsafeguard.com/plugins/CopyrightSafeguard-fn.html
    Description: Embed a Copyright Safeguard link in the site footer.  Config in Settings.
    Author: Robert Nicholson
    Version: 2.0
    Author URI: http://www.linkedin.com/in/bobnicholson/
    License: GPL2
    */
    /*  
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-13fn  USA
    */
	
	function copyrightsafeguardfn_admin() {
    	include('CopyrightSafeguard-fn-admin.php');
	}
	
	add_action('admin_menu', 'copyrightsafeguardfn_adminactions');
	
	function copyrightsafeguardfn_adminactions() {
    	add_options_page('Copyright Safeguard Configuration', 'Copyright Safeguard','manage_options', 'CopyrightSafeguard-fn-admin.php', 'copyrightsafeguardfn_admin');
	}

	function copyrightsafeguardfn() {
		$copyrightsafeguardauth = get_option( 'copyrightsafeguardauth', '' );
		$csfnbuttontype = get_option( 'csfnbuttontype', 'button' );
		$csfnleftoffset = get_option( 'csfnleftoffset', '0' );
		$csfnleftoffsetunits = get_option( 'csfnleftoffsetunits', 'px' );
		$csfntopoffset = get_option( 'csfntopoffset', '0' );
		$csfntopoffsetunits = get_option( 'csfntopoffsetunits', 'px' );
		$csfnstyle = 'display:block; margin-left:' . $csfnleftoffset . $csfnleftoffsetunits . '; margin-top: ' . $csfntopoffset . $csfntopoffsetunits . ';';
		echo '<div style="' . $csfnstyle . '">';
		if ($csfnbuttontype == 'button')
			{
			echo "<a onclick=\"window.open('http://www.copyrightsafeguard.com/safeguard/" . $copyrightsafeguardauth . "', 'Copyright', 'width=380,height=560,menubar=no,location=no,directories=no,scrollbars=no, left='+(window.screenX+200)+',top='+(window.screenY+100)); return false;\" href=\"http://www.copyrightsafeguard.com/safeguard/" . $copyrightsafeguardauth . "\" target=\"_blank\"><img src=\"http://www.copyrightsafeguard.com/images/copyright-safeguard.png\" width=\"100\" height=\"42\"></a>";
			}
		if ($csfnbuttontype == 'widebutton')
			{
			echo "<a onclick=\"window.open('http://www.copyrightsafeguard.com/safeguard/" . $copyrightsafeguardauth . "', 'Copyright', 'width=380,height=560,menubar=no,location=no,directories=no,scrollbars=no, left='+(window.screenX+200)+',top='+(window.screenY+100)); return false;\" href=\"http://www.copyrightsafeguard.com/safeguard/" . $copyrightsafeguardauth . "\" target=\"_blank\"><img src=\"http://www.copyrightsafeguard.com/images/copyright-safeguard-wide.png\" width=\"180\" height=\"23\"></a>";
			}
		if ($csfnbuttontype == 'textlink')
			{
			echo "<a onclick=\"window.open('http://www.copyrightsafeguard.com/safeguard/" . $copyrightsafeguardauth . "', 'Copyright', 'width=380,height=560,menubar=no,location=no,directories=no,scrollbars=no, left='+(window.screenX+200)+',top='+(window.screenY+100)); return false;\" href=\"http://www.copyrightsafeguard.com/safeguard/" . $copyrightsafeguardauth . "\" target=\"_blank\">Registered with Copyright Safeguard</a>";
			}
		echo '</div>';
	}

	add_action('wp_footer', 'copyrightsafeguardfn');

?>