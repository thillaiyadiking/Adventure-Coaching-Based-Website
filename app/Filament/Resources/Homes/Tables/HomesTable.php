<?php

namespace App\Filament\Resources\Homes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HomesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable(),
                TextColumn::make('header_text')
                    ->label('Header Text'),
                TextColumn::make('header_notes')
                    ->label('Header Notes')
                    ->getStateUsing(fn ($record) => is_array($record->header_notes) ? implode(', ', array_column($record->header_notes, 'note')) : ''),
                TextColumn::make('brand_logos')
                    ->label('Brand Logos Count')
                    ->getStateUsing(fn($record) => is_array($record->brand_logos) ? count($record->brand_logos) : 0),
                TextColumn::make('banner_images')
                    ->label('Banner Images Count')
                    ->getStateUsing(fn($record) => is_array($record->banner_images) ? count($record->banner_images) : 0),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                DeleteAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
