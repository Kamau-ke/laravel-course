<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tutorials</title>
</head>
<body>
    <h1>Tutorials</h1>
    <p>Laravel full course by {{$name}}</p>
    <p>React full course for beginers by {{$tutors[0]["name"]}}</p>
    <p>Node intermidiate course by {{$tutors[1]["name"]}}</p>
    <p>Express full course by {{$tutors[1]["name"]}}</p>
    <p>Tailwind for non-haters by {{$tutors[0]["name"]}}</p>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/tutorials/{{$tutors[0]["id"]}}">Tutorial</a>
    <a href="/tutorials/{{$tutors[1]["id"]}}">Tutorial</a>
</body>
</html>