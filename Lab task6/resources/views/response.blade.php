@extends('layouts.app')

@section('content')
<h2>Event Submitted Successfully 🎉</h2>

<ul class="list-group">
    <li class="list-group-item"><strong>Title:</strong> {{ $submittedData['title'] }}</li>
    <li class="list-group-item"><strong>Date:</strong> {{ $submittedData['date'] }}</li>
    <li class="list-group-item"><strong>Location:</strong> {{ $submittedData['location'] }}</li>
    <li class="list-group-item"><strong>Description:</strong> {{ $submittedData['description'] }}</li>
</ul>
@endsection
