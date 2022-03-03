<?php

final class Problem1
{
    /**
     * @param int[] $integerArray
     * @return int[][]
     */
    public function nondecreasing_subsequences(array $integerArray):Array
    {
        $subArray = [];
        $newArray = [];
        foreach ($integerArray as $key => $integer) {
            $previousKey = $key - 1;
            if ($previousKey === -1) {
                $previousKey = 0;
            }

            if ($integer < $integerArray[$previousKey]) {
                $newArray[] = $subArray;
                $subArray = [];
            }
            $subArray[] = $integer;
        }
        $newArray[] = $subArray;

        return $newArray;
    }
}