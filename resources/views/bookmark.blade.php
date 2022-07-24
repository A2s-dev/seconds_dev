@extends('layouts.app')

@section('content')
    @component('components.index')
        @slot('common_var', $bookmarks)
        @slot('common_route', 'review.index')
    @endcomponent
@endsection
