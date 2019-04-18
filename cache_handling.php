<?php
$GLOBALS['cache'] = @include('cache.php');

function saveCache()
{
    $cache = "<?php\nreturn unserialize('".serialize($GLOBALS['cache'])."');";
    file_put_contents('cache.php',$cache);
}
register_shutdown_function('saveCache');
