<?php

namespace App\Filament\Resources\NewsLetterSubscribers\Pages;

use App\Filament\Resources\NewsLetterSubscribers\NewsLetterSubscriberResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditNewsLetterSubscriber extends EditRecord
{
    protected static string $resource = NewsLetterSubscriberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
