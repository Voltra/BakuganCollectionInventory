<?php

namespace App\Filament\Resources\Gen1BattleGearReferenceCardResource\Pages;

use App\Filament\Resources\Gen1BattleGearReferenceCardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGen1BattleGearReferenceCards extends ListRecords
{
    protected static string $resource = Gen1BattleGearReferenceCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
