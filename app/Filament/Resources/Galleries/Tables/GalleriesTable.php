<?php

namespace App\Filament\Resources\Galleries\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class GalleriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('banner_image')
                    ->label('Banner')
                    ->disk('public')
                    ->circular(false)
                    ->size(60),
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable(),
                TextColumn::make('subtitle')
                    ->label('Subtitle')
                    ->searchable(),
                ImageColumn::make('images')
                    ->label('Images')
                    ->disk('public')
                    ->circular(false)
                    ->stacked()
                    ->limit(3)
                    ->limitedRemainingText(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make()
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
