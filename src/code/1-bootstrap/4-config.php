<?php


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-11-05 jj5 - trace load if enabled...
//

if ( defined( 'APP_TRACE_LOAD' ) && APP_TRACE_LOAD ) {

  error_log( "loading: " . __FILE__ );

}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-11-05 jj5 - load dependencies...
//

require_once __DIR__ . '/3-flags.php';


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-11-05 jj5 - include config file...
//

global $config;

if ( file_exists( DBMAN_CONFIG_PATH ) ) {

  require_once DBMAN_CONFIG_PATH;

}

mud_define_version( 'DBMAN' );

