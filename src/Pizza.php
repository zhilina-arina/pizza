<?php

namespace Arina\Pizza;

abstract class Pizza
{
    public string $name;
    public string $sauce;
    public array $toppings;

    public function prepare(): void
    {
        echo "Началась готовка пиццы";
        echo "Добавлен соус";
        echo "Добавлены топики" . implode($this->toppings);
    }

    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали";
    }
}