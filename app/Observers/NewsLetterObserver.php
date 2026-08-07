<?php

namespace App\Observers;

use App\Models\NewsLetter;
use App\Models\NewsLetterSubscriber;

class NewsLetterObserver
{
    /**
     * Handle the NewsLetter "created" event.
     */
    public function created(NewsLetter $newsLetter): void
    {
        $subscribers = NewsLetterSubscriber::all();

        foreach ($subscribers as $subscriber) {
            \Illuminate\Support\Facades\Mail::to($subscriber->email)->send(new \App\Mail\NewsLetterMail($newsLetter));
        }
    }

    /**
     * Handle the NewsLetter "updated" event.
     */
    public function updated(NewsLetter $newsLetter): void
    {
        //
    }

    /**
     * Handle the NewsLetter "deleted" event.
     */
    public function deleted(NewsLetter $newsLetter): void
    {
        //
    }

    /**
     * Handle the NewsLetter "restored" event.
     */
    public function restored(NewsLetter $newsLetter): void
    {
        //
    }

    /**
     * Handle the NewsLetter "force deleted" event.
     */
    public function forceDeleted(NewsLetter $newsLetter): void
    {
        //
    }
}
