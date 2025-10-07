<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        
        return $schema
            ->columns(3)
            ->schema([
                Section::make('Basic Info')
                    ->description('Main content details.')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('url')
                            ->url()
                            ->required(),
                        MarkdownEditor::make('description')
                            ->required()
                            ->columnSpanFull()
                            ->fileAttachmentsAcceptedFileTypes(['image/png', 'image/jpeg'])
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsDirectory('portfolio-attachments'),
                    ])->columnSpan(2),

                Section::make('Media & Tags')
                    ->description('Related assets and keywords.')
                    ->schema([
                        FileUpload::make('image')
                            ->required()
                            ->maxSize(1500000)
                            ->disk('public')
                            ->visibility('public')
                            ->directory('portfolio/images')
                            ->acceptedFileTypes(['image/*'])
                            ->rules(['mimes:png,jpeg,jpg']),
                        TagsInput::make('tags')
                            ->required()
                            ->columnSpanFull(),
                    ]),
            ]);

    }
}
