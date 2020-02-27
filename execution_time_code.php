<?php 
$end = microtime(TRUE);
$execution_time = $end - $start;
$execution_time_in_seconds = $execution_time / 1000000;
$execution_time_in_minutes = $execution_time_in_seconds / 60;

echo "The code took " . ( $execution_time_in_seconds ) . " seconds to complete.";
echo "<br>";
echo "The code took " . ( $execution_time_in_minutes ) . " minutes to complete.";
echo "<br>";
function convert($size)
{
    $unit = array('b', 'kb', 'mb', 'gb', 'tb', 'pb');
    return @round($size / pow(1024, ($i = floor(log($size, 1024)))), 2) . ' ' . $unit[$i];
}
echo convert(memory_get_usage(true));
echo "<br>";
echo convert(memory_get_peak_usage(true));
echo "<br>";
?>
