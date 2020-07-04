<!-- Submit Field -->
<div class="form-group col-sm-12">
    <label for="content">Comment ({{ Auth::user()->name ?? 'Anonymous' }}) </label>
    <textarea class="form-control" name="content" id="content"></textarea>
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('posts.index') }}" class="btn btn-default">Cancel</a>
</div>