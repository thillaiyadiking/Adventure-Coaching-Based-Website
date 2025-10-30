<?php

namespace App\Filament\Resources\Homes\Pages;

use App\Filament\Resources\Homes\HomeResource;
use App\Models\Home;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomes extends ListRecords
{
    protected static string $resource = HomeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->visible(fn() => Home::count() === 0)
        ];
    }
}
