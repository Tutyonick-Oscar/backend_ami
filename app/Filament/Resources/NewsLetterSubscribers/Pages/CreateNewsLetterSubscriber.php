<?php

namespace App\Filament\Resources\NewsLetterSubscribers\Pages;

use App\Filament\Resources\NewsLetterSubscribers\NewsLetterSubscriberResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsLetterSubscriber extends CreateRecord
{
    protected static string $resource = NewsLetterSubscriberResource::class;
}
