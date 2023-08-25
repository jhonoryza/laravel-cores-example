<?php

namespace App\Data;

class Car
{
    protected ?string $brand;

    public function __construct(public string $color)
    {
        //
        $this->brand = null;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function getBrand(): string
    {
        return $this->brand ?? 'unknown';
    }
}
