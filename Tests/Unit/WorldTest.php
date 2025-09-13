<?php
declare(strict_types=1);

namespace Conpassione\Kuhprovincialdata\Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class WorldTest extends TestCase
{
    #[Test] public function testWorld(): void
    {
        self::assertSame(4, 2 + 2);
    }
}
