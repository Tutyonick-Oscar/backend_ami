<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Select::make('event_category_id')
                    ->relationship('category', 'name'),
                TextInput::make('location')
                    ->maxLength(255),
                DatePicker::make('event_date'),
                Toggle::make('is_active'),
                RichEditor::make('description')
                    ->columnSpanFull(),
            ]);
    }
}
