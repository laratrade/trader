<?php

namespace Laratrade\Trader\Tests\Unit;

use Laratrade\Trader\Trader;
use ReflectionClass;

class TraderTest extends TestCase
{
    /** @test */
    public function it_provides_correct_constant_values()
    {
        $constants = (new ReflectionClass(Trader::class))->getConstants();

        foreach ($constants as $constant => $value) {
            $this->assertEquals(
                constant(sprintf('TRADER_%s', $constant)),
                $value
            );
        }
    }
}
