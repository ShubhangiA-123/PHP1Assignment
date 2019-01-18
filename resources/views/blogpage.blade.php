@extends('layout')

@section('content')


<!DOCTYPE html>
<html>

<head>

    <title></title>
    <style>
        .center {
text-align: center;
}
.pagination {
justify-content: center;        
}
.pagination a {
display: flex;
}


.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>

<body>
    <div class="container">
        <h1>Enter Your Comment</h1>
        {{-- Comment form --}}
        <form method="POST" action="#">
            {{ csrf_field() }}
            <div>
                <input name="blog_id" type="hidden" value="{{ Request::segment(1) }}">
            </div>
            <br>

            <div class="form-group">


                <input type="text" name="name" placeholder="name" required>
            </div>

            <br>

            <div class="form-group">


                <textarea name="comment" placeholder="Add Comment" required></textarea>
            </div>

            <br>

            <div class="form-group">


                <input type="email" name="email" placeholder="Enter your Email" required>
            </div>
            <br>
            <div>
                <button type="submit">submit</button>
                <button type="cancel">cancel</button>
            </div>
            <br>

        </form>
    </div>

      {{-- for display comment --}}
    <div class="container">
        <div class="jumbotron">
            @foreach($comment1 as $comment)


            <h4>{{ $comment->name}}</h4>
            <p>{{ $comment->comment}}</p>


            @endforeach
        </div>
    </div>
        {{-- for pagination --}}
    <div class="pagination-wrapper">
        <a>{{ $comment1 }}</a>
    </div>


</body>

</html>
@endsection