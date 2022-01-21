<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('age', [$this, 'age']),
        ];
    }

    public function age($now, $date): int
    {
        $diff = date_diff($now, $date);
        return $diff->y;
    }
}