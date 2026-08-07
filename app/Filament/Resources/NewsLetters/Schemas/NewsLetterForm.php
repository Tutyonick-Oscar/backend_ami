<?php

namespace App\Filament\Resources\NewsLetters\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class NewsLetterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('subject')
                    ->required(),
                TextInput::make('title'),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
