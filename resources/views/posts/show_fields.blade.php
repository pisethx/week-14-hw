<div class="form-group">
    {!! Form::label('id', 'ID') !!}
    <p>{{ $post->id }}</p>
</div>

<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    <p>{{ $post->title }}</p>
</div>

<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $post->content }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $post->created_at }}</p>
</div>

<div class="form-group">
    {!! Form::label('comments', 'Comments: ') !!}
    @foreach($post->comments as $comment)

    @if(Auth::check() && Auth::id() == 1 && !$comment->approved)
    <p style="color: grey;">
        <strong>{{ $comment->user->name ?? 'Anonymous' }}: </strong>
        <span>{{ $comment->content }}</span>
        <em>(This comment is not approved)</em>
        <a class='btn btn-success btn-xs'>Approve</a>

    </p>
    @endif

    @if($comment->approved)
    <p>
        <strong>{{ $comment->user->name ?? 'Anonymous' }}: </strong>
        <span>{{ $comment->content }}</span>
    </p>
    @endif
    @endforeach
</div>