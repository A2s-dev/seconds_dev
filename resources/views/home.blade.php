@extends('layouts.app')

@section('content')
    <div id="particles-js"></div>
    <div class="home-wrap">
        <!-- Header -->
        <header class="home-header">
            <div class="home-logo">
                {{ config('app.name') }}
            </div>
            <a href="{{ route('logout') }}" class="home-logout">Logout</a>
            <div class="home-flash">
                @include('components.flash')
            </div>
            <button type="button" id="nav-btn" class="home-btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="home-menu" id="menu">
                <ul>
                    <li><a href="{{ route('review.index') }}">Browse</a></li>
                    <li><a href="{{ route('post.index') }}">Editer</a></li>
                    <li><a href="{{ route('myBook') }}">Bookmark</a></li>
                    <li><a href="{{ route('contact.index') }}">Contact</a></li>
                    <li><a href="{{ route('deactive') }}">Quit</a></li>
                </ul>
            </div>
        </header>

        <main class="home-content content">
            <div class="home-textRange">
                <p>Welcome<br>to<br>Seconds</p>
                <div class="home-name">{{ $auth->name }}</div>
                <aside class="home-intro">
                    <p>About</p>
                    <span>Thanks for visiting Seconds.
                        <br>Please select "Editer" if you are writing and "Browse" if you are viewing other work.
                        <br>Let's review each other and create a better second novel!
                    </span>
                    <div><a href="{{ route('terms') }}">Terms of Service</a></div>
                </aside>
            </div>
            <div class="home-news content">
                <h2>News</h2>
                <ul class="h-news_title">
                    @foreach ($news as $value)
                        <li>
                            <div>{{ $value->created_at->format('F jS, Y') }}</div>
                            <div>{{ $value->title }}</div>  
                        </li>
                    @endforeach
                </ul>
            </div>
        </main>
    </div>
@endsection
