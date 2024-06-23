<?php
function generate_permutations($items, $perms = [], &$counter = 0) {
    if (empty($items)) {
        $counter++;
        return [join('', $perms)];
    } else {
        $result = [];
        for ($i = count($items) - 1; $i >= 0; --$i) {
            $newitems = $items;
            $newperms = $perms;
            list($foo) = array_splice($newitems, $i, 1);
            array_unshift($newperms, $foo);
            $result = array_merge($result, generate_permutations($newitems, $newperms, $counter));
        }
        return $result;
    }
}

$counter = 0;
$perms = generate_permutations(['1', '2', '3'], [], $counter);
print_r($perms);
echo "Total operateons: $counter";
