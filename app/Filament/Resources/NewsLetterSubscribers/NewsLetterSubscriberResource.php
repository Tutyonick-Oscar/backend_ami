<?php

namespace App\Filament\Resources\NewsLetterSubscribers;

use App\Filament\Resources\NewsLetterSubscribers\Pages\CreateNewsLetterSubscriber;
use App\Filament\Resources\NewsLetterSubscribers\Pages\EditNewsLetterSubscriber;
use App\Filament\Resources\NewsLetterSubscribers\Pages\ListNewsLetterSubscribers;
use App\Filament\Resources\NewsLetterSubscribers\Pages\ViewNewsLetterSubscriber;
use App\Filament\Resources\NewsLetterSubscribers\Schemas\NewsLetterSubscriberForm;
use App\Filament\Resources\NewsLetterSubscribers\Schemas\NewsLetterSubscriberInfolist;
use App\Filament\Resources\NewsLetterSubscribers\Tables\NewsLetterSubscribersTable;
use App\Models\NewsLetterSubscriber;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NewsLetterSubscriberResource extends Resource
{
    protected static ?string $model = NewsLetterSubscriber::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'subscribers';

    public static function form(Schema $schema): Schema
    {
        return NewsLetterSubscriberForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return NewsLetterSubscriberInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NewsLetterSubscribersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListNewsLetterSubscribers::route('/'),
            'create' => CreateNewsLetterSubscriber::route('/create'),
            'view' => ViewNewsLetterSubscriber::route('/{record}'),
            'edit' => EditNewsLetterSubscriber::route('/{record}/edit'),
        ];
    }
}
