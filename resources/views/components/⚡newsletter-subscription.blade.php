<?php

use App\Models\NewsLetterSubscriber;
use Livewire\Component;
use Livewire\Attributes\Validate;

new class extends Component
{
    #[Validate('required|email|unique:news_letter_subscribers,email')]
    public $email = '';

    public function subscribe()
    {
        $this->validate();

        NewsLetterSubscriber::create([
            'email' => $this->email,
        ]);

        $this->reset('email');
        session()->flash('message', 'Merci pour votre inscription !');
    }
};
?>

<div class="mt-8">
    <p class="text-label-sm text-on-primary/40 uppercase tracking-widest mb-2">Newsletter</p>
    
    @if (session()->has('message'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" class="text-green-400 text-xs mb-2">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit="subscribe" class="flex border-b border-on-primary/30">
        <input
            wire:model="email"
            class="bg-transparent border-none focus:ring-0 text-[#ffffff] placeholder:text-on-primary/30 py-2 w-full text-sm"
            placeholder="Votre email"
            type="email"
        />
        <button
            type="submit"
            class="text-[#ffffff] hover:text-secondary-container transition-colors"
        >
            <span class="material-symbols-outlined">arrow_forward</span>
        </button>
    </form>
    @error('email') <span class="text-red-400 text-xs">{{ $message }}</span> @enderror
</div>
