<x-mail::message>
# {{ $newsLetter->title }}

{!! $newsLetter->content !!}

Merci,<br>
{{ config('app.name') }}
</x-mail::message>
