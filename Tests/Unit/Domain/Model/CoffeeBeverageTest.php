<?php
declare(strict_types=1);

namespace Conpassione\kuhprovincialdata\Tests\Unit\Domain\Model;

use Conpassione\kuhprovincialdata\Domain\Model\CoffeeBeverage;
//use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

class CoffeeBeverageTest extends UnitTestCase
{
    /**
     * @var CoffeeBeverage|null
     */
    protected ?CoffeeBeverage $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = new CoffeeBeverage();
    }

    #[Test] public function canBeInstantiated(): void
    {
        $this->assertInstanceOf(CoffeeBeverage::class, $this->subject);
    }

    #[Test] public function titleByDefaultIsEmpty(): void
    {
        self::assertSame('', $this->subject->getTitle());
    }

    #[Test] public function setTitleSetsTitle(): void
    {
        $title = 'None';
        $this->subject->setTitle($title);
        self::assertSame($title, $this->subject->getTitle());
    }

    #[Test] public function setSizeWithNegativeValueThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->subject->setSize(-1);
    }

    #[Test] public function setSizeWithZeroIsOk(): void
    {
        $this->subject->setSize(0);
        self::assertSame(0, $this->subject->getSize());
    }
}
