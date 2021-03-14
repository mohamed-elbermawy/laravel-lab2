@extends('layouts.app')


@section('content')
<div class="container">
    <div class="mt-5">
        <form method="post" action="{{route('posts.update' , ['post' => $post['id']])}}">
            @csrf
            {{ method_field('PUT') }}‏
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" value="{{$post['title']}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control">{{$post['description']}}</textarea>
            </div>

            <div class="mb-3">
                <label for="post-creator" class="form-label">Post Creator</label>
                <section class="form-control">
                    <option>
                            {{$post->user->name}}
                    </option>
                </section>
            </div>

            <button type="submit" class="btn btn-success">update</button>
        </form>
    </div>
</div>

@endsection