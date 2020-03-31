<?php
/**
 * Plugin Name: SecuPress COOKIEHASH
 * Description: Change the default COOKIEHASH constant value to prevent easy guessing.
 * Version: 1.0
 * License: GPLv2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright 2012-2016 SecuPress
 */

define( 'COOKIEHASH', md5( __FILE__ . '&@r@3MEIfg9vcj@Nb)cQMB3RvBpv3CW$y2!IF*^4ZqDozyPc9VltfCbe)Q73%kgz' ) );
