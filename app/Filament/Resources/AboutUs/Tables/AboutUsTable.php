<?php

namespace App\Filament\Resources\AboutUs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AboutUsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('banner_image')
                    ->label('Banner Image')
                    ->circular(false),

                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description')
                    ->label('Description')
                    ->limit(50)
                    ->searchable(),

                TextColumn::make('years_of_experience')
                    ->label('Years of Experience')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('years_of_experience_text')
                    ->label('Years Text')
                    ->searchable(),

                TextColumn::make('text_in_image_tag')
                    ->label('Image Tag Text')
                    ->searchable(),

                TextColumn::make('more_about_button_text')
                    ->label('Button Text')
                    ->searchable(),

                TextColumn::make('name_of_founder')
                    ->label('Founder Name')
                    ->searchable(),

                TextColumn::make('role')
                    ->label('Role')
                    ->searchable(),

                ImageColumn::make('profile_image')
                    ->label('Profile Image')
                    ->circular(),

                ImageColumn::make('front_image')
                    ->label('Front Image')
                    ->circular(false),

                ImageColumn::make('back_image')
                    ->label('Back Image')
                    ->circular(false),

                TextColumn::make('video_url')
                    ->label('Video URL')
                    ->searchable(),

                ImageColumn::make('video_background_image')
                    ->label('Video Background Image')
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
                DeleteAction::make()

            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
