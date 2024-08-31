<?php

namespace YukataRm\Randomizer\Proxy;

use YukataRm\StaticProxy\StaticProxy;

use YukataRm\Randomizer\Proxy\Manager;

/**
 * Randomizer Proxy
 * 
 * @package YukataRm\Randomizer\Proxy
 * 
 * @method static \YukataRm\Randomizer\Interface\RandomizerInterface make()
 * 
 * @method static string string(string $source, int $length = 16)
 * @method static string alphabet(int $length = 16)
 * @method static string alphabetLower(int $length = 16)
 * @method static string alphabetUpper(int $length = 16)
 * @method static string number(int $length = 16)
 * @method static string alphanumeric(int $length = 16)
 * @method static string alphanumericLower(int $length = 16)
 * @method static string alphanumericUpper(int $length = 16)
 * @method static string password(int $length = 16, string $symbols = "")
 * 
 * @method static int int(int $min = 0, int $max = PHP_INT_MAX): int
 * @method static float float(float $min = 0, float $max = 1, int $decimals = 2)
 * 
 * @method static bool bool(string|int|float $probability = 0.5, bool $isPercent = false)
 * 
 * @see \YukataRm\Randomizer\Proxy\Manager
 */
class Randomizer extends StaticProxy
{
    /** 
     * get class name calling dynamic method
     * 
     * @return string 
     */
    protected static function getCallableClassName(): string
    {
        return Manager::class;
    }
}
