<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $businessName }} - Event Decoration Services</title>
</head>

<body>
    <h1>Welcome to {{ $businessName }}!</h1>

    <p>
        We help make your special occasions memorablethrough creative and beautiful event decorations.
    </p>

    <h2>Our Services</h2>

    <ul>
        @foreach ($services as $service)
        <li>{{ $service }}</li>
        @endforeach
    </ul>
</body>

</html>