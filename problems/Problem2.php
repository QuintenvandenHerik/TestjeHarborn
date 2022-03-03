<?php

final class Problem2
{
    /**
     * @param string[] $stringArray
     * @return array
     */
    public function all_anagram_groups(array $stringArray):Array {
        $subArray = [];
        $newArray = [];
        foreach($stringArray as $mainKey => $mainString) {
            foreach($stringArray as $subKey => $subString) {
                $split1 = str_split(preg_replace('/\s/', '', $mainString));
                sort($split1);
                $split2 = str_split(preg_replace('/\s/', '', $subString));
                sort($split2);

                if ($split1 === $split2) {
                    $subArray[] = $subString;
                }
            }
            $newArray[] = $subArray;
            $subArray = [];

        }

        return array_values(array_unique($newArray, SORT_REGULAR));
    }
}