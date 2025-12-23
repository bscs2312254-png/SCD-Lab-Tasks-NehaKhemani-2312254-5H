@extends('layouts.app')

@section('title', 'Upcoming Events')

@section('content')
<div class="mb-8">
    <h1 class="text-4xl font-bold text-blue-800 mb-2">Upcoming Events</h1>
    <p class="text-blue-600">Manage and view all your events in one place</p>
</div>

@if(count($events) > 0)
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach($events as $event)
            <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group border-l-4 border-blue-500">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-600 transition">
                            {{ $event['name'] }}
                        </h3>
                        @if($event['status'] === 'Upcoming')
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">
                                <i class="fas fa-clock mr-1"></i> {{ $event['status'] }}
                            </span>
                        @elseif($event['status'] === 'Ongoing')
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">
                                <i class="fas fa-play-circle mr-1"></i> {{ $event['status'] }}
                            </span>
                        @else
                            <span class="bg-gray-100 text-gray-800 text-xs font-semibold px-3 py-1 rounded-full">
                                <i class="fas fa-check-circle mr-1"></i> {{ $event['status'] }}
                            </span>
                        @endif
                    </div>
                    
                    <div class="space-y-3 mb-4">
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-calendar text-blue-500 w-5"></i>
                            <span class="ml-2">{{ date('M d, Y', strtotime($event['date'])) }}</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-map-marker-alt text-blue-500 w-5"></i>
                            <span class="ml-2">{{ $event['location'] }}</span>
                        </div>
                    </div>
                    
                    <a href="{{ route('events.details', $event['id']) }}" 
                       class="block w-full text-center bg-gradient-to-r from-blue-500 to-teal-500 text-white py-3 rounded-lg hover:from-blue-600 hover:to-teal-600 transition transform hover:-translate-y-1 shadow-lg font-semibold">
                        View Details <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@else
    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl shadow-lg p-12 text-center border border-blue-100">
        <i class="fas fa-calendar-times text-blue-300 text-6xl mb-4"></i>
        <h3 class="text-2xl font-bold text-blue-800 mb-2">No Events Found</h3>
        <p class="text-blue-600 mb-6">Get started by creating your first event!</p>
        <a href="{{ route('events.create') }}" 
           class="inline-flex items-center bg-gradient-to-r from-blue-500 to-teal-500 text-white py-3 px-6 rounded-lg hover:from-blue-600 hover:to-teal-600 transition transform hover:-translate-y-1 shadow-lg font-semibold">
            <i class="fas fa-plus-circle mr-2"></i> Create Your First Event
        </a>
    </div>
@endif

<!-- Quick Stats Section (Optional) -->
@if(count($events) > 0)
<div class="mt-12 bg-gradient-to-r from-blue-50 to-teal-50 rounded-2xl p-6 border border-blue-200">
    <h3 class="text-xl font-bold text-blue-800 mb-4 flex items-center">
        <i class="fas fa-chart-bar text-blue-600 mr-2"></i>
        Event Overview
    </h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white p-4 rounded-lg text-center border border-blue-100">
            <div class="text-2xl font-bold text-blue-600">{{ count($events) }}</div>
            <div class="text-sm text-gray-600">Total Events</div>
        </div>
        <div class="bg-white p-4 rounded-lg text-center border border-teal-100">
            <div class="text-2xl font-bold text-teal-600">
                {{ collect($events)->where('status', 'Upcoming')->count() }}
            </div>
            <div class="text-sm text-gray-600">Upcoming</div>
        </div>
        <div class="bg-white p-4 rounded-lg text-center border border-cyan-100">
            <div class="text-2xl font-bold text-cyan-600">
                {{ collect($events)->where('status', 'Ongoing')->count() }}
            </div>
            <div class="text-sm text-gray-600">Ongoing</div>
        </div>
    </div>
</div>
@endif
@endsection