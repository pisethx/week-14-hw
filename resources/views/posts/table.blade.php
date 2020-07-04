<div class="table-responsive">
    <table class="table" id="posts-table">
        <thead>
            <tr>

                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>

                <td>
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                    <a href="{{ route('posts.show', [$post->id]) }}">
                        <h4>{{$post->title}}</h4>
                    </a>
                    <p>{{$post->content}}</p>
                    <div class='btn-group'>
                        <a href="{{ route('posts.show', [$post->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('posts.edit', [$post->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>