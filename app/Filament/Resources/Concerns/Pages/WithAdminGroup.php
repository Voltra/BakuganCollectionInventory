<?php

declare(strict_types=1);

namespace App\Filament\Resources\Concerns\Pages;

use App\Enums\AdminGroup;
use Filament\Resources\Pages\Page;

/**
 * @extends Page
 *
 * @augments Page
 */
trait WithAdminGroup
{
    public function getBreadcrumbs(): array
    {
        $resource = static::getResource();
        $breadcrumbs = parent::getBreadcrumbs();

        /**
         * @var AdminGroup $adminGroup
         */
        $adminGroup = $resource::getAdminGroup();

        return [
            $adminGroup->getLabel(),
            ...$breadcrumbs,
        ];
    }
}
