<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tutorials</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @if (session('success'))
    <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
        {{session('success')}}
    </div>
        
    @endif
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