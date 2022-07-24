@extends('layouts.app')

@section('content')
    <div class="index-wrap">
        {{-- Header --}}
        @component('components.header')
            @isset($common_header)
                {{ $common_header }}
                @endif
            @endcomponent

            {{ $common_var->links('components.paginate') }}

            @if (empty($common_var))
                <div class="index-empty centering">No postings yet.</div>
            @else
                <section class="index-container">
                    @foreach ($common_var as $var)
                        <form method="get" class="index-base">
                            <a href="{{ route($common_route, ['id' => $var->id]) }}">
                                <article class="index-head">
                                    <div>
                                        @if ($var->title)
                                            <b>{{ Str::limit($var->title, 50, '...') }}</b>
                                        @else
                                            <b>{{ Str::limit($var->post->title, 50, '...') }}</b>
                                        @endif
                                    </div>
                                </article>

                                <article class="index-author">
                                    Author:
                                    @if ($var->users)
                                        {{ Str::limit($var->users->name, 30, '...') }}
                                    @else
                                        {{ Str::limit($var->user->name, 30, '...') }}
                                    @endif
                                </article>

                                <article class="index-content">
                                    @if ($var->content)
                                        {{ Str::limit($var->content, 550, '...') }}
                                    @else
                                        {{ Str::limit($var->post->content, 550, '...') }}
                                    @endif
                                </article>

                                <article class="index-detail">
                                    <div>
                                        Released:
                                        @if ($var->released_at)
                                            {{ $var->released_at->format('F jS, Y g:i a') }}
                                        @elseif (empty($var->post->released_at))
                                            {{ 'No Data' }}
                                        @else
                                            {{ $var->post->released_at->format('F jS, Y g:i a') }}
                                        @endif
                                    </div>
                                    <div>
                                        Characters:
                                        @if ($var->content)
                                            {{ mb_strlen($var->content) }}
                                        @else
                                            {{ mb_strlen($var->post->content) }}
                                        @endif
                                    </div>
                                    @if ($var->bookmarks)
                                        <span class="i-detail_bookmarks"><i class="fas fa-star"
                                                style="color:rgb(239, 243, 1);"></i> {{ $var->bookmarks->count() }}</span>
                                    @else
                                        <span class="i-detail_bookmarks"><i class="fas fa-star"
                                                style="color:rgb(239, 243, 1);"></i> {{ $var->count() }}</span>
                                    @endif
                                </article>
                            </a>
                        </form>
                    @endforeach
                </section>
            @endif
            {{-- paginate --}}
            {{ $common_var->links('components.paginate') }}
            {{-- footer --}}
            @include('components.footer')
        </div>
    @endsection
