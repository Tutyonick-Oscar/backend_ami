<?php

namespace App\Filament\Resources\NewsLetterSubscribers\Pages;

use App\Filament\Resources\NewsLetterSubscribers\NewsLetterSubscriberResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewNewsLetterSubscriber extends ViewRecord
{
    protected static string $resource = NewsLetterSubscriberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
