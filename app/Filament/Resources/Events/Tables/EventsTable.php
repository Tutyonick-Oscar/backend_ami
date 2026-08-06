<?php

namespace App\Filament\Resources\Events\Tables;

use Filament\Actions\BulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;

class EventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('category.name')
                    ->sortable(),
                ToggleColumn::make('is_active'),
                TextColumn::make('status')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    BulkAction::make('activate')
                        ->action(fn (Collection $records) => $records->each->update(['is_active' => true])),
                    BulkAction::make('deactivate')
                        ->action(fn (Collection $records) => $records->each->update(['is_active' => false])),
                    BulkAction::make('changeStatus')
                        ->action(function (Collection $records, array $data): void {
                            $records->each->update(['status' => $data['status']]);
                        })
                        ->form([
                            Select::make('status')
                                ->options([
                                    'upcoming' => 'Upcoming',
                                    'ongoing' => 'Ongoing',
                                    'completed' => 'Completed',
                                ])
                                ->required(),
                        ]),
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
