<?php
require __DIR__ . './Problem3.php';

use PHPUnit\Framework\TestCase;

class Problem3Test extends TestCase
{
    public Problem3 $problem3;

    protected function setUp(): void
    {
        $this->problem3 = new Problem3();
    }

    public function testFindCorrectInteger()
    {
        $correctInteger = $this->problem3->findCorrectInteger();

        $correctIntegerArray = str_split($correctInteger);
        sort($correctIntegerArray);
        foreach (range(2,6) as $multiplier) {
            $multipliedInteger = str_split($correctInteger * $multiplier);
            sort($multipliedInteger);
            self::assertSame($correctIntegerArray, $multipliedInteger);
        }
    }
}
