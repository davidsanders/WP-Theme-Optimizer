<?php
function wpto_remove_cssjs_ver_filter($src ){
if( strpos( $src, '?ver=' ) ) $src = remove_query_arg( 'ver', $src );
return $src;
}
add_filter( 'style_loader_src', 'wpto_remove_cssjs_ver_filter', 10, 2 );
add_filter( 'script_loader_src', 'wpto_remove_cssjs_ver_filter', 10, 2 );
?>