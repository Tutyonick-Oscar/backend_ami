<?php

namespace App\Filament\Resources\NewsLetterSubscribers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class NewsLetterSubscribersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
            
            TextColumn::make('email')
                ->label('Email')
                ->searchable()
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                //EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
