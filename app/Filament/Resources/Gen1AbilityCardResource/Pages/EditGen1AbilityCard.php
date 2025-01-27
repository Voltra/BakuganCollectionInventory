<?php

declare(strict_types=1);

namespace App\Filament\Resources\Gen1AbilityCardResource\Pages;

use App\Filament\Resources\Gen1AbilityCardResource;
use App\Filament\Resources\Concerns\Pages\WithAdminGroup;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGen1AbilityCard extends EditRecord
{
    use WithAdminGroup;

    protected static string $resource = Gen1AbilityCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
