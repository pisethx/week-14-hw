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
                @if(Auth::check() && Auth::id() == 1 && !$post->approved)
                <td style="background-color: lightgrey;">
                    <!-- {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!} -->

                    <a href="{{ route('posts.show', [$post->id]) }}">
                        <h4>{{$post->title}} (This post is not approved)</h4>
                    </a>
                    <p>{{$post->content}}</p>
                    {!! Form::open(['route' => ['posts.update', $post->id], 'method' => 'patch']) !!}

                    <input type="hidden" name="approved" id="approved" value="1" />

                    {!! Form::button('Approve', ['type' => 'submit', 'class' => 'btn btn-success btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}

                    {!! Form::close() !!}

                    <!-- {!! Form::close() !!} -->
                </td>
                @endif

                @if($post->approved)
                <td>
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}

                    <a href="{{ route('posts.show', [$post->id]) }}">
                        <h4>{{$post->title}}</h4>
                    </a>
                    <p>{{$post->content}}</p>

                    @if(Auth::check())
                    <div class='btn-group'>
                        <a href="{{ route('posts.show', [$post->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('posts.edit', [$post->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    @endif
                    {!! Form::close() !!}
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>