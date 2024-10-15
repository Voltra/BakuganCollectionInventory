<?php

namespace App\Filament\Resources\Gen1AbilityCardResource\Pages;

use App\Filament\Resources\Gen1AbilityCardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGen1AbilityCard extends EditRecord
{
    protected static string $resource = Gen1AbilityCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
