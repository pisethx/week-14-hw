@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Post
    </h1>
</section>
<div class="content">
    <div class="box box-primary">
        <div class="box-body">
            <div class="row" style="padding-left: 20px">
                @include('posts.show_fields')
                <a href="{{ route('posts.index') }}" class="btn btn-default">Back</a>
            </div>
        </div>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <div class="row" style="padding-left: 20px">
                <div class="row">
                    {!! Form::open(['route' => 'comments.store']) !!}

                    <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}" />
                    @include('comments.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection