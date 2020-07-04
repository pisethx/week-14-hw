<!-- Submit Field -->
<div class="form-group col-sm-12">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ $post->title ?? '' }}">
    <label for="content">Content</label>
    <textarea class="form-control" name="content" id="content">{{ $post->content ?? ''}}</textarea>
    {!! Form::submit('Save', ['class'=> 'btn btn-primary']) !!}
    <a href="{{ route('posts.index') }}" class="btn btn-default">Cancel</a>
</div>