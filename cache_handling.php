<?php
// load cache
@include('cache.php');

// save cache
function saveCache()
{
    // write cache file with loading code
    $cache = "<?php\n$_GLOBALS['cache'] = unserialize('".serialize($_GLOBALS['cache'])."');\n";
    file_put_contents('cache.php',$cache);
}

// auto save cache
register_shutdown_function('saveCache');
