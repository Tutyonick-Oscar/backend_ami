<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 0 auto; border: 1px solid #ddd; }
        .header { background-color: #012d1d; color: #ffffff; padding: 20px; text-align: center; }
        .header img { max-width: 150px; margin-bottom: 10px; }
        .content { padding: 20px; }
        .footer { background-color: #012d1d; color: #ffffff; padding: 20px; text-align: center; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
            @if($newsLetter->title)
                <h1>{{ $newsLetter->title }}</h1>
            @endif
        </div>
        <div class="content">
            {!! str($newsLetter->content)->markdown()->sanitizeHtml() !!}
        </div>
        <div class="footer">
            <p>&copy; {{ now()->year }} Action Miséricorde. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>
