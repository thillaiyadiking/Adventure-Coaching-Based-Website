<?php

namespace App\Filament\Resources\Generals\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;

class GeneralsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('social_media_links')
                    ->label('Social Media Links')
                    ->formatStateUsing(function ($state) {
                        if (is_array($state)) {
                            return collect($state)->map(function ($item) {
                                if (is_array($item)) {
                                    return "{$item['platform']}: {$item['url']}" . (isset($item['icon']) ? " ({$item['icon']})" : '');
                                } elseif (is_string($item)) {
                                    return $item;
                                }
                                return '';
                            })->join(', ');
                        }
                        return $state;
                    }),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
