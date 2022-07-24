@extends('layouts.app')

@section('content')
    <div class="novel-wrap">
        {{-- Header --}}
        @component('components.header')
        @endcomponent
        <main class="novel-container">
            <article class="novel-title">
                <b>{{ $novels->title }}</b>
            </article>
            <article class="novel-author">
                <span>Author: {{ $novels->users->name }}</span>
            </article>
            <article class="novel-content">
                {!! nl2br(e($novels->content)) !!}
            </article>
            <aside class="novel-info">
                <div>
                    Released: {{ $novels->released_at->format('F jS, Y g:i a') }}
                </div>
                <div>
                    Characters:
                    {{ mb_strlen($novels->content) }}
                </div>
            </aside>
        </main>

        <div class="novel-menu">
            <button type="button" class="novel-direction centering">
                <i class="fas fa-sync-alt fa-2x"></i>
            </button>

            <a data-remodal-target="modal_02" href="#" class="export centering"><i
                    class="fas fa-file-download fa-2x"></i></a>

            @if (!empty($bookmark))
                <a href="{{ route('unBookmark', $novels) }}" class="novel-bm centering">
                    <i class="fas fa-star"></i>
                </a>
            @else
                <a href="{{ route('bookmark', $novels) }}" class="novel-bm centering">
                    <i class="far fa-star"></i>
                </a>
            @endif

            {{-- modal open --}}
            <a data-remodal-target="modal_01" href="#" class="openModal centering"><i
                    class="fas fa-comment-dots fa-2x"></i></a>
        </div>
        @include('components.select_modal')
        {{-- comment modal --}}
        @include('components.comment_modal')
        {{-- footer --}}
        @include('components.footer')
    </div>
@endsection
