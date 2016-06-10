<ul class="posts">
    @foreach ($posts as $post)
        <li>
            @if($shared)
            <a href="{{ route('shared.posts.see', ['id' => $post->id]) }}">
                {{ date('d/m/Y', strtotime($post->date)) }} - {{ $post->questions['bible_readed'] }}
            </a>
            @else
            <a href="{{ route('posts.edit', ['id' => $post->id]) }}">
                {{ date('d/m/Y', strtotime($post->date)) }} - {{ $post->questions['bible_readed'] }}
            </a>
            @endif
        </li>
    @endforeach
</ul>
