<?php

namespace App\Filament\Resources\Gen1AbilityCardResource\Pages;

use App\Filament\Resources\Gen1AbilityCardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGen1AbilityCards extends ListRecords
{
    protected static string $resource = Gen1AbilityCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
