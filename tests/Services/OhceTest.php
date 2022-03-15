<?php

declare(strict_types=1);

namespace UserLoginService\Tests\Services;

use PHPUnit\Framework\TestCase;
use UserLoginService\Application\Ohce;
use UserLoginService\Domain\User;

final class OhceTest extends TestCase
{
    /**
     * @test
     */
    function greet_in_the_morning_should_return_buenos_dias(){
        $ohce = new Ohce();
        $name = "Rubén";
        $morningHour = mktime(10, 10);
        $morningHour = date('H:i', $morningHour);
        self::assertEquals("Buenos días $name", $ohce->greet($name, $morningHour));
    }
    /**
     * @test
     */
    function greet_in_the_afternoon_should_return_buenas_tardes(){
        $ohce = new Ohce();
        $name = "Rubén";
        $afternoonHour = mktime(16, 10);
        $afternoonHour = date('H:i', $afternoonHour);
        self::assertEquals("Buenas tardes $name", $ohce->greet($name, $afternoonHour));
    }
    /**
     * @test
     */
    function greet_at_night_should_return_buenas_noches(){
        $ohce = new Ohce();
        $name = "Rubén";
        $nightHour = mktime(21, 10);
        $nightHour = date('H:i', $nightHour);
        self::assertEquals("Buenas noches $name", $ohce->greet($name, $nightHour));
    }
}
