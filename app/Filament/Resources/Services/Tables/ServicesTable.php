<?php

namespace App\Filament\Resources\Services\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('banner_image')
                    ->label('Banner')
                    ->formatStateUsing(function ($state) {
                        return $state ? 'Uploaded' : 'No Banner';
                    }),
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Description')
                    ->wrap()
                    ->searchable(),
                TextColumn::make('service_attachment')
                    ->label('Attachment')
                    ->formatStateUsing(function ($state) {
                        return $state ? 'Uploaded' : 'No Attachment';
                    }),
                TextColumn::make('offers')
                    ->label('Offers')
                    ->formatStateUsing(function ($state) {
                        if (is_array($state)) {
                            return collect($state)->map(function ($offer) {
                                return ($offer);
                            })->implode('=> ');
                        }
                        return '';
                    })
                    ->wrap()
                    ->searchable()
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
