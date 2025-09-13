<?php
declare(strict_types=1);

namespace Conpassione\kuhprovincialdata\Domain\Model;

class CoffeeBeverage
{
    private string $title = '';
    private int $size = 0;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): void
    {
        if ($size < 0)
        {
            throw new \InvalidArgumentException('Size must be equal or greater than 0');
        }
        $this->size = $size;
    }
}
