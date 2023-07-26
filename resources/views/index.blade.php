@extends('partials.app')
@section('content')
    {{-- Navbar Component Here --}}
    @include('components.navbar')
    {{-- Navbar Component Here --}}
    <div class="container mx-auto">
        {{-- Content Goes Here --}}
        {{-- Card Component example called here --}}
        @component('components.card', ['title' => 'Title 1', 'content' => 'Content1', 'link' => 'Link1'])
        @endcomponent
        @component('components.card', ['title' => 'Title 2', 'content' => 'Content2', 'link' => 'Link2'])
        @endcomponent
    </div>
@endsection
