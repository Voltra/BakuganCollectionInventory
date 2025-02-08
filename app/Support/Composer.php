<?php

declare(strict_types=1);

namespace App\Support;

use Illuminate\Support\Arr;
use Symfony\Component\Process\Process;

class Composer extends \Illuminate\Support\Composer
{
    public function command(string|array $args, array $env = []): Process
    {
        $args = array_merge($this->findComposer(), Arr::wrap($args));

        return $this->getProcess($args, $env);
    }
}
