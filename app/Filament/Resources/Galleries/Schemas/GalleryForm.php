<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('banner_image')
                    ->disk('public')
                    ->directory('galleries/banners')
                    ->visibility('public')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->imageEditorEmptyFillColor('#000000')
                    ->imageEditorMode(2)
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('16:9')
                    ->imageResizeTargetWidth('1920')
                    ->imageResizeTargetHeight('1080')
                    ->maxSize(2048)
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
                    ->helperText('Upload a banner image for the gallery page. Maximum file size: 2MB.')
                    ->columnSpanFull(),
                TextInput::make('title')
                    ->label('Title')
                    ->required(),
                TextInput::make('subtitle')
                    ->label('Subtitle'),
                FileUpload::make('images')
                    ->disk('public')
                    ->directory('galleries')
                    ->multiple()
                    ->reorderable()
                    ->visibility('public')
                    ->image()
                    ->required()
                    ->panelLayout('grid')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->imageEditorEmptyFillColor('#000000')
                    ->imageEditorMode(2)
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('16:9')
                    ->imageResizeTargetWidth('1920')
                    ->imageResizeTargetHeight('1080')
                    ->maxSize(2048)
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
                    ->helperText('Upload multiple high-quality images for your gallery. Maximum file size: 2MB each.')
                    ->columnSpanFull()
                    ->imagePreviewHeight('250'),
            ]);
    }
}
