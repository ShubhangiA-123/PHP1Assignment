
@extends('layout')

@section('content')


<!DOCTYPE html>
<html>
<head>
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
    
    
        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }
    </style>
<title></title>
</head>

<body>
        {{-- for display blogs --}}
            @foreach ($show as $project)
    
            {{$project->id}}
            <a href="/{{$project->id}}/blogpage">{{ $project->title }}</a>
            <p>{{ $project->blog }}</p>
    
            @endforeach
      

    {{-- for pagination --}}
<div class="pagination-wrapper">
    <a>{{ $show }}</a>
</div>


</body>

</html>
@endsection