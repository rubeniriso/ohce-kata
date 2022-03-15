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
        self::assertEquals("Buenos días $name", $ohce->greet($name));
    }
}
