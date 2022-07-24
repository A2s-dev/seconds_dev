@extends('layouts.app')

@section('content')
    <div class="comment-wrap">
        {{-- Header --}}
        @component('components.header')
        @endcomponent

        <main class="comment-container">
            @foreach ($comments as $comment)
                <div class="comment-content">
                    <div class="c-content_info">
                        <div>
                            {{ $comment->users->name }}
                        </div>
                        <div>
                            {{ $comment->created_at->format('F jS, Y h:m A') }}
                        </div>
                    </div>

                    <article class="c-content_message">
                        {!! nl2br(e($comment->message)) !!}
                    </article>
                    @if (Auth::id() === $comment->users->id)
                        <form method="POST">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $comment->id }}" />
                            <button formaction="{{ route('comment.delete') }}" class="c-content_delete">
                                Delete
                            </button>
                        </form>
                    @endif
                </div>
            @endforeach
        </main>
        {{-- paginate --}}
        {{ $comments->links('components.paginate') }}

        <button class="comment-back centering" type="button" onClick="history.back()"><i
                class="fas fa-reply fa-2x"></i></button>

        {{-- footer --}}
        @include('components.footer')
    </div>
@endsection
