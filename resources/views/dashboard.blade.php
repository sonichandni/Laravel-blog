@extends('layouts.app')

@section('content')
    
        <div class="card-header"><h3>Your Posts</h3></div>
        <div class="card-body"> 
            <a href="/posts/create" class="btn btn-primary">Create Post</a>
            <hr>
            @if(count($posts) > 0)
                <table class="table">
                    <tr class="table-danger">
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>

                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit Post</a></td>
                            <td>
                                {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                    @endforeach
                    
                </table>
            @else
                <p>You have not created any posts yet...</p>
            @endif
        </div>
@endsection