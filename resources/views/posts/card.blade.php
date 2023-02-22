<div class="card-body line-height">
    <div id="comment-post-{{ $post->id }}">
        @include('posts.comment_list')
    </div>
    <a class="light-color post-time no-text-decoration" href="/posts/{{ $post->id }}">{{ $post->created_at }}</a>
    <hr>
    <div class="row actions" id="comment-form-post-{{ $post->id }}">
        <form class="w-100" id="new_comment" action="/posts/{{ $post->id }}/comments" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
            {{csrf_field()}}
            <input value="{{ $post->id }}" type="hidden" name="post_id" />
            <input value="{{ Auth::id() }}" type="hidden" name="user_id" />
            <input class="form-control comment-input border-0" placeholder="コメント ..." autocomplete="off" type="text" name="comment" />
        </form>
    </div>
</div>