<?php

trait Model
{
    static function getInstace(): static
    {
        return new self();
    }
}