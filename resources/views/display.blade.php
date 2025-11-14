<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="{{ asset('storage/' . $pathname) }}" alt="Profile Picture" />
    <img src="/storage/{{ $pathname }}" alt="Profile Picture" />
    <img src="{{ url('storage/B8Qv2cRhgUt7xwPbB8oimV0pn67y798H4F2WmDVJ.png') }}" alt="Profile Picture" />
</body>
</html>