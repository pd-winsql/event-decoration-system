@extends('layouts.app')

@section('title', 'Home')

@section('content')

<h2>Welcome to {{ $businessName }}!</h2>

<p>
    We help make your special occasions memorable through creative and beautiful event decorations.
</p>

<h3>Our Services</h3>

<ul>
    @foreach ($services as $service)
    <li>{{ $service }}</li>
    @endforeach
</ul>

<a href="/services">View Our Services</a>

@endsection

<!--
    ('layouts.app') = dot(.) represents a folder separator
    The title section sets the layout title to Home.
    Think of the yield directive as an empty space in the layout and the section directive as the content that fills that space.
-->