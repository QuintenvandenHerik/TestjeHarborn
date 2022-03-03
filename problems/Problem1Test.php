<?php
require __DIR__ . './Problem1.php';

use PHPUnit\Framework\TestCase;

class Problem1Test extends TestCase
{
    public Problem1 $problem1;

    protected function setUp(): void
    {
        $this->problem1 = new Problem1();
    }

    /**
     * @dataProvider numberProvider
     * @param int[] $integerArray
     */
    public function testNondecreasing_subsequences(array $integerArray) {
        $newIntegerArray = $this->problem1->nondecreasing_subsequences($integerArray);

        foreach ($newIntegerArray as $key => $integerArray) {
            $previousKey = $key - 1;
            if ($previousKey >= 0) {
                self::assertTrue(end($newIntegerArray[$previousKey]) > $integerArray[0]);
            }

            foreach ($integerArray as $subKey => $integer) {
                $previousSubKey = $subKey - 1;
                if ($previousSubKey === -1) {
                    $previousSubKey = 0;
                }
                self::assertGreaterThanOrEqual($integerArray[$previousSubKey], $integer);
            }
        }
    }

    public function numberProvider():Array {
        return [
            'dataSet1' => [[3,6,61,6,7,9,1,7,7,2,7,7,2,388,3,72,7]]
        ];
    }
}
