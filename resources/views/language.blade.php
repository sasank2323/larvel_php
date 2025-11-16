<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <diV style="display:flex; gap:10px; margin-bottom:20px; align-items:center;">
        <a href="/about/en">English</a> |
        <a href="/about/hindi">Hindi</a>
    </div>
    <h1>{{ __('welcome.welcome') }}</h1>
    <p>{{ __('welcome.about') }}</p>
    <p>{{ __('welcome.contact') }}</p>
    <p>{{__('welcome.make', ['name' => 'Laravel'])}}</p>
</body>
</html>