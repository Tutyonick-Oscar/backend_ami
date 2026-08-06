<?php

namespace App\Filament\Resources\Contacts\Infolists;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class ContactInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('name'),
                TextEntry::make('email'),
                TextEntry::make('subject'),
                TextEntry::make('message'),
            ]);
    }
}
