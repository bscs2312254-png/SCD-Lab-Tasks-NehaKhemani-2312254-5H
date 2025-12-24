@extends('layouts.app')

@push('styles')
<style>
    .form-container {
        max-width: 600px;
        margin: auto;
    }
</style>
@endpush

@section('content')
<div class="form-container">
    <h2>Add New Event</h2>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('events.store') }}">
        @csrf
        <div class="mb-3">
            <label>Event Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Event Date</label>
            <input type="date" name="date" class="form-control">
        </div>

        <div class="mb-3">
            <label>Location</label>
            <input type="text" name="location" class="form-control">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
</div>
@endsection
