<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Event Decoration Services</title>
</head>

<body>
    <header>
        <h1>Event Decoration Services</h1>
        <nav>
            <a href="/">Home</a>
            |
            <a href="/services">Services</a>
        </nav>
    </header>

    <hr>

    <main>
        @yield('content')
    </main>

    <hr>

    <footer>
        <p>&copy; 2026 Event Decoration Services</p>
    </footer>
</body>

</html>

<!--
    The extends directive tells a page which layout to use.
    The section/endsection directives define content for a particular section.
    The yield directive marks where that content should appear.
-->