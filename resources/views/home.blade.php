<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    
    <h1>Home</h1>


    {{-- <a href="{{route("testpage")}}">Go to test page</a> --}}

    <form action="{{ route('formsubmitted')}}" method="POST">
        @csrf
        <input type="text" name="fullname" placeholder="Enter your full name" id="fullname" required><br><br>

        <input type="text" name="email" placeholder="Enter your email" id="email" required><br><br>

        <button type="submit">Submit</button>
    
    </form>
</body>
</html>