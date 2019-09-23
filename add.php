<?php
if ($argc !== 4) {
    echo "Usage: php add.php <quantity> <quotient> <times>.\n";
    exit(1);
}

$initialQuantity = $argv[1];
$quotient = $argv[2] / 100;
$times    = $argv[3] + 1;

$total = $initialQuantity;
for ( $i = 1; $i < $times; $i++ ) {
    $total += round( $total * $quotient  );
    echo "Iteration $i: $total\n";
}

$totalGrowth = $total - $initialQuantity;
$acc = intval($total * 100 / $initialQuantity);

echo "\n";
echo "Total Growth: $totalGrowth\n";
echo "Accumulated: $acc%";

