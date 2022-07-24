@extends('layouts.app')

@section('content')
    <div class="edit-wrap">
        <nav class="edit-sidebar" id="menu">

            <div class="e-side_title centering">
                <a href="{{ route('home') }}">{{ config('app.name') }}</a>
            </div>

            <div class="e-side_search centering">
                <form action="{{ route('post.search') }}">
                    <input type="search" name="key" placeholder="Enter a title...">
                </form>
            </div>

            <div class="e-side_list">
                @if ($posts->count() === 0)
                    <div class="e-side_empty">
                        Could'nt find the note...
                    </div>
                @endif
                @foreach ($posts as $post)
                    <div class="e-side_items">
                        <a href=" {{ route('post.select', ['id' => $post->id]) }}"
                            class="@if ($selected) {{ $selected->id == $post->id ? 'selected' : '' }} @endif ">
                            @empty($post->title)
                                Untitled
                            @else
                                {{ $post->title }}
                            @endempty
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="e-side_btn">
                <a href="{{ route('post.add') }}">+New Page</a>
            </div>
        </nav>

        <div class="e-side_trigger" id="nav-btn">
            <i class="fas fa-bars fa-2x"></i>
        </div>

        <main class="edit-main">
            @if ($selected)
                <form method="post">
                    @csrf
                    <div class="e-main_upper">
                        @include('components.flash')

                        <div class="edit-count"><span id="js_count">0</span> Characters</div>
                        <div class="edit-btn">
                            <input id="tg" class="dropInput" type="checkbox">
                            <label for="tg" class="dropLabel">Actions</label>

                            <ul class="e-btn_list animation">
                                <li><a href="#" id="js_locked" class="e-btn_inner"><i class="fas fa-lock"></i>Lock</a>
                                </li>
                                <li><button type="submit" formaction="{{ route('post.delete') }}"
                                        class="e-btn_inner">Delete</button></li>
                                <li><button type="submit" formaction="{{ route('post.update') }}"
                                        class="e-btn_inner">Update</button></li>
                                @switch($selected)
                                    @case($selected->title && $selected->content)
                                        <li><button type="submit" formaction="{{ route('post.release') }}"
                                                class="e-btn_inner">Release</button></li>
                                    @break

                                    @case($selected->status === 1)
                                        <li><button type="submit" formaction="{{ route('post.release') }}"
                                                class="e-btn_inner">Release</button></li>
                                    @break

                                    @default
                                        <li><button type="submit" class="e-btn_inner" disabled>Release</button></li>
                                @endswitch
                            </ul>
                        </div>
                    </div>
                    <input type="hidden" name="edit_id" value="{{ $selected->id }}" />
                    <div class="e-main_section">
                        <input type="text" class="edit-title" name="edit_title" placeholder="Untitled"
                            value="{{ $selected->title }}" maxlength="30" />
                        <textarea class="edit-content" name="edit_content" placeholder="press any key to continue..." minlength="500">{{ $selected->content }}</textarea>
                    </div>
                </form>
            @else
                <div class="edit-alert">
                    <div class="alert-txt">
                        Create a new page or Select an existing one.
                    </div>
                </div>
            @endif
        </main>
    </div>
@endsection
