<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tutorials</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<header>
    <nav>
    <a href="{{ route('tutors.index') }}">All tutors</a>
    <a href="{{ route('tutors.create') }}">Create tutor</a>
    {{-- <a href="/tutorials/{{$tutors[0]["id"]}}">Tutorial</a>
    <a href="/tutorials/{{$tutors[1]["id"]}}">Tutorial</a> --}}
    </nav>
</header>

<main>
    {{ $slot }}
</main>
</body>
</html>