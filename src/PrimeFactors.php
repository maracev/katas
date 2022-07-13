<?php
namespace App;

class PrimeFactors
{
    public function generate($number)
    {
        $factors = [];

        /**
            2
         2     0

            50
         2      25
            5       5
         */

        for ($divisor = 2; $number > 1; $divisor++) {
            for (; $number % $divisor === 0; $number /= $divisor) {
                $factors[] = $divisor;
            }
        }

        return $factors;
    }
}
