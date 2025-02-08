<?php

namespace App\Filament\Resources\Gen1BattleGearReferenceCardResource\Pages;

use App\Filament\Resources\Gen1BattleGearReferenceCardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGen1BattleGearReferenceCard extends EditRecord
{
    protected static string $resource = Gen1BattleGearReferenceCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
