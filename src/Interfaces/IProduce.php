<?php

declare(strict_types=1);

namespace Farm\Interfaces;

use Farm\Classes\Abstracted\Animal;

interface IProduce
{
    function produceProducts(): int;
}