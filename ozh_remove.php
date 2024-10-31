<?php
/**
 * Plugin Name: Remove Ozh unobstrusive credits in footer
 * Description: In case you wish to free space in the admin footer while using ozh admin drop down menu.
 * Version: 1.1 
 * Author: Polemos
 * License: GPL2
 */
/*  Copyright 2014 Polemos

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


remove_action('in_admin_footer', 'wp_ozh_adminmenu_footer'); 

?>