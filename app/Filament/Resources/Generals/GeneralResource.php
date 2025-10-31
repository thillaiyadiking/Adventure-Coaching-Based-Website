<?php

namespace App\Filament\Resources\Generals;

use App\Filament\Resources\Generals\Pages\CreateGeneral;
use App\Filament\Resources\Generals\Pages\EditGeneral;
use App\Filament\Resources\Generals\Pages\ListGenerals;
use App\Filament\Resources\Generals\Schemas\GeneralForm;
use App\Filament\Resources\Generals\Tables\GeneralsTable;
use App\Models\General;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GeneralResource extends Resource
{
    protected static ?string $model = General::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return GeneralForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GeneralsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListGenerals::route('/')
        ];
    }
}
