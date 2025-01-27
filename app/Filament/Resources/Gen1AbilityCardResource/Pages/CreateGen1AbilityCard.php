<?php

declare(strict_types=1);

namespace App\Filament\Resources\Gen1AbilityCardResource\Pages;

use App\Filament\Resources\Gen1AbilityCardResource;
use App\Filament\Resources\Concerns\Pages\WithAdminGroup;
use Filament\Resources\Pages\CreateRecord;

class CreateGen1AbilityCard extends CreateRecord
{
    use WithAdminGroup;

    protected static string $resource = Gen1AbilityCardResource::class;
}
