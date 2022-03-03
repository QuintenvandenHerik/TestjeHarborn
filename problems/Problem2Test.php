<?php
require __DIR__ . './Problem2.php';

use PHPUnit\Framework\TestCase;

class Problem2Test extends TestCase
{
    public Problem2 $problem2;

    protected function setUp(): void
    {
        $this->problem2 = new Problem2();
    }

    /**
     * @dataProvider wordProvider
     * @param string[] $stringArray
     * @param string[][] $expected
     */
    public function testAll_anagram_groups(array $stringArray, array $expected)
    {
        $newStringArray = $this->problem2->all_anagram_groups($stringArray);
        self::assertSame($expected, $newStringArray);
    }

    public function wordProvider():Array {
        return [
            'dataSet1' => [
                'input' => [ "pear","dirty room","amleth","reap","tinsel","tesla","hamlet","dormitory","listen","silent" ],
                'expected' => [
                    ["pear","reap"],
                    ["dirty room","dormitory"],
                    ["amleth","hamlet"],
                    ["tinsel","listen","silent"],
                    ["tesla"]
                ]
            ]
        ];
    }
}
