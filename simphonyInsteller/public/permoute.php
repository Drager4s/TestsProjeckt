<?php
function generate_permutations($items, $perms = []) {
    if (empty($items)) {
        echo join('', $perms) . "\n";
    }  else {
        for ($i = count($items) - 1; $i >= 0; --$i) {
            $newitems = $items;
            $newperms = $perms;
            list($foo) = array_splice($newitems, $i, 1);
            array_unshift($newperms, $foo);
            generate_permutations($newitems, $newperms);
        }
    }
}

$string = "abcd";
$items = str_split($string);
generate_permutations($items);
