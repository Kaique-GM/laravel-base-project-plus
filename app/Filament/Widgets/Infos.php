<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class Infos extends Widget
{
    protected string $view = 'filament.widgets.infos';

    protected int|string|array $columnSpan = 'full';
}
