<?php

declare(strict_types=1);

namespace GoetasWebservices\XML\XSDReader\Schema\Element;

use GoetasWebservices\XML\XSDReader\Schema\Item;

class AbstractElementSingle extends Item implements ElementSingle
{
    /**
     * @var int
     */
    protected $min = 1;

    /**
     * @var int
     */
    protected $max = 1;

    /**
     * @var bool
     */
    protected $qualified = false;

    /**
     * @var bool
     */
    protected $nil = false;

    /**
     * @var null|mixed
     */
    protected $default = null;

    public function isQualified(): bool
    {
        return $this->qualified;
    }

    public function setQualified(bool $qualified): void
    {
        $this->qualified = $qualified;
    }

    public function isNil(): bool
    {
        return $this->nil;
    }

    public function setNil(bool $nil): void
    {
        $this->nil = $nil;
    }

    public function getMin(): int
    {
        return $this->min;
    }

    public function setMin(int $min): void
    {
        $this->min = $min;
    }

    public function getMax(): int
    {
        return $this->max;
    }

    public function setMax(int $max): void
    {
        $this->max = $max;
    }

    public function getDefault()
    {
        return $this->default;
    }

    public function setDefault($default): void
    {
        $this->default = $default;
    }
}
