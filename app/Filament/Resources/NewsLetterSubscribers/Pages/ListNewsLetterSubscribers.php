<?php

namespace App\Filament\Resources\NewsLetterSubscribers\Pages;

use App\Filament\Resources\NewsLetterSubscribers\NewsLetterSubscriberResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNewsLetterSubscribers extends ListRecords
{
    protected static string $resource = NewsLetterSubscriberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //CreateAction::make(),
        ];
    }
}
