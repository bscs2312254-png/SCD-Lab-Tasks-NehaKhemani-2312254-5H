@extends('layouts.app')

@section('content')
<h2 class="mb-3">Upcoming Events</h2>

@empty($events)
    <p>No events available.</p>
@else
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Event Name</th>
                <th>Date</th>
                <th>Location</th>
                <th>Status</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event['name'] }}</td>
                    <td>{{ $event['date'] }}</td>
                    <td>{{ $event['location'] }}</td>
                    <td>
                        @if($event['status'] == 'upcoming')
                            <span class="text-primary">Upcoming</span>
                        @elseif($event['status'] == 'ongoing')
                            <span class="text-success">Ongoing</span>
                        @else
                            <span class="text-danger">Completed</span>
                        @endif
                    </td>
                    <td><a href="{{ route('events.details', $event['id']) }}" class="btn btn-sm btn-secondary">View</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endempty
@endsection
