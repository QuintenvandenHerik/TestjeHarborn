<?php

final class Problem3
{
    /**
     * @return int
     */
    public function findCorrectInteger():int
    {
        $i = 0;
        $search = true;
        while($search === true) {
            $i++;
            $search = false;
            $currentInteger = str_split($i);
            sort($currentInteger);
            foreach (range(2,6) as $multiplier) {
                $multipliedInteger = str_split($i * $multiplier);
                sort($multipliedInteger);
                if ($currentInteger !== $multipliedInteger) {
                    $search = true;
                }
            }
        }

        return $i;
    }
}