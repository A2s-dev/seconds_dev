@extends('layouts.app')

@section('content')
    @component('components.index')
        @slot('common_header')
            <form action="{{ route('post.search') }}" method="get" class="header-search">
                <input type="search" name="key" class="header-search-inner" placeholder="Enter a title...">
            </form>
        @endslot
        @slot('common_var', $searches)
        @slot('common_route', 'post.index')
    @endcomponent
@endsection
