@extends('layout')

@section('content')


<!DOCTYPE html>

<html>

<head>

    <title></title>
</head>

<body>
    <h1>create a new blog</h1>
    <form method="POST" action="/">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project title" required>
        </div>
        <br>

        <div>
            <textarea name="blog" placeholder="Project description" required></textarea>
        </div>
        <br>

        <div>
            <button type="submit">create project</button>
            <button type="cancel">cancel</button>
        </div>
        <br>
    </form>
</body>

</html>
@endsection