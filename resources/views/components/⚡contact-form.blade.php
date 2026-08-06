<?php

use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\Attributes\Validate;

new class extends Component
{
    #[Validate('required|min:3')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required')]
    public $subject = 'Devenir Partenaire';

    #[Validate('required|min:10')]
    public $message = '';

    public function submit()
    {
        $this->validate();

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        Mail::raw("New contact request from: {$this->name} ({$this->email})\n\nSubject: {$this->subject}\n\nMessage:\n{$this->message}", function ($mail) {
            $mail->to(config('mail.from.address', 'tuliamtendji@gmail.com'))
                 ->subject('New Contact Request: ' . $this->subject);
        });

        $this->reset();
        session()->flash('message', 'Votre message a été envoyé avec succès.');
    }
};
?>

<div>
    @if (session()->has('message'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit="submit" class="space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
                <label class="text-sm font-headline-md text-on-surface-variant uppercase">Nom Complet</label>
                <input wire:model="name" class="w-full bg-surface border-0 border-b border-outline/30 focus:ring-0 focus:border-secondary transition-all px-4 py-3" placeholder="Jane Doe" type="text" />
                @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="space-y-2">
                <label class="text-sm font-headline-md text-on-surface-variant uppercase">Adresse Email</label>
                <input wire:model="email" class="w-full bg-surface border-0 border-b border-outline/30 focus:ring-0 focus:border-secondary transition-all px-4 py-3" placeholder="jane@example.com" type="email" />
                @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="space-y-2">
            <label class="text-sm font-headline-md text-on-surface-variant uppercase">Objet de la demande</label>
            <select wire:model="subject" class="w-full bg-surface border-0 border-b border-outline/30 focus:ring-0 focus:border-secondary transition-all px-4 py-3 appearance-none">
                <option>Devenir Partenaire</option>
                <option>Demande d'Assistance Légale</option>
                <option>Presse &amp; Media</option>
                <option>Bénévolat</option>
                <option>Autre</option>
            </select>
        </div>
        <div class="space-y-2">
            <label class="text-sm font-headline-md text-on-surface-variant uppercase">Votre Message</label>
            <textarea wire:model="message" class="w-full bg-surface border-0 border-b border-outline/30 focus:ring-0 focus:border-secondary transition-all px-4 py-3 resize-none" placeholder="Comment pouvons-nous collaborer ?" rows="5"></textarea>
            @error('message') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <div class="pt-4">
            <button class="w-full md:w-auto bg-[#012d1d] text-[#ffffff] px-10 py-4 font-label-md uppercase tracking-widest hover:bg-primary-container transition-all flex items-center justify-center gap-3" type="submit">
                Envoyer
                <span class="material-symbols-outlined text-[18px]">send</span>
            </button>
        </div>
    </form>
</div>