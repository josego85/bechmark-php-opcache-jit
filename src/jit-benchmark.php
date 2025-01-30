<?php
function fibonacci($n)
{
    if ($n < 2) {
        return $n;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

function benchmark($func, $iterations = 10)
{
    $start = microtime(true);
    $result = $func($iterations);
    $end = microtime(true);
    echo "Result: $result\n";
    echo "Time: " . number_format($end - $start, 4) . " seconds\n";
}

$test_number = 41;
echo "Execute Fibonacci($test_number)...\n";
benchmark(fn($x) => fibonacci($x), $test_number);
