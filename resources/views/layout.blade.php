<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','HOME')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        .is-complete{
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li> <a href="/contact">Contact</a> us!</li>
        <li> <a href="/about">About</a></li>

        <h2>PROJECT</h2>
        <li> <a href="/projects">Show Projects</a></li>
        <li> <a href="/projects/create">Create a new project</a></li>
    </ul>
    @yield('content')
</body>
</html>
