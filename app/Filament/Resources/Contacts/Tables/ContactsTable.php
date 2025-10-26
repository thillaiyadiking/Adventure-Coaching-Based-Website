<?php

namespace App\Filament\Resources\Contacts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('phone_numbers')
                    ->label('Phone Numbers')
                    ->getStateUsing(fn ($record) => $record->phone_numbers ? implode(', ', array_column($record->phone_numbers, 'phone')) : '')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email_addresses')
                    ->label('Email Addresses')
                    ->getStateUsing(fn ($record) => $record->email_addresses ? implode(', ', array_column($record->email_addresses, 'email')) : '')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('physical_addresses')
                    ->label('Physical Addresses')
                    ->getStateUsing(fn ($record) => $record->physical_addresses ? implode(', ', array_column($record->physical_addresses, 'address')) : '')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('websites')
                    ->label('Websites')
                    ->getStateUsing(fn ($record) => $record->websites ? implode(', ', array_column($record->websites, 'url')) : '')
                    ->searchable()
                    ->sortable(),

                ImageColumn::make('banner_image')
                    ->label('Banner Image')
                    ->circular(false),

                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
