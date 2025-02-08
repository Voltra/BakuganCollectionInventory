<?php

declare(strict_types=1);

namespace App\Filament\Resources\Gen1AbilityCardResource\Pages;

use App\Filament\Resources\Concerns\Pages\WithAdminGroup;
use App\Filament\Resources\Gen1AbilityCardResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateGen1AbilityCard extends CreateRecord
{
    use WithAdminGroup;

    protected static string $resource = Gen1AbilityCardResource::class;

    #[Override]
    protected function getCreateAnotherFormAction(): Action
    {
        return parent::getCreateAnotherFormAction()
            ->label(__('gen1/abilityCards.actions.create_another'));
    }
}
