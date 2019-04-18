<?php
// load cache
$GLOBALS['cache'] = @include('cache.php');

// save cache
function saveCache()
{
    // write cache file with loading code
    $cache = "<?php\nreturn unserialize('".serialize($GLOBALS['cache'])."');\n";
    file_put_contents('cache.php',$cache);
}

// auto save cache
register_shutdown_function('saveCache');
