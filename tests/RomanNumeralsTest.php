<?php


use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    /**
     * @test
     * @dataProvider checks
     */
    public function it_generates_the_roman_numeral_for_1($number, $numeral)
    {
        $this->assertEquals($numeral, RomanNumerals::generate($number));
    }

    /** @test */
    public function it_returns_false_if_0_is_given()
    {
        $this->assertFalse(RomanNumerals::generate(0));
    }

    /** @test */
    public function it_cannot_generate_roman_number_for_4000()
    {
        $this->assertFalse(RomanNumerals::generate(4000));
    }

    public function checks()
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [9, 'IX'],
            [10, 'X'],
            [50, 'L'],
            [40, 'XL'],
            [90, 'XC'],
            [100, 'C'],
            [400, 'CD'],
            [500, 'D'],
            [900, 'CM'],
            [1000, 'M'],
            [1994, 'MCMXCIV'],
            [3999, 'MMMCMXCIX'],
        ];

    }
}
