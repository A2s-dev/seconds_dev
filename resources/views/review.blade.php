@extends('layouts.app')

@section('content')
    @component('components.index')
        @slot('common_var', $reviews)
        @slot('common_route', 'review.show')
    @endcomponent
@endsection
