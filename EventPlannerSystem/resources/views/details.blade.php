@extends('layouts.app')

@section('title', $event['name'])

@section('content')
<div class="max-w-4xl mx-auto">
    <a href="{{ route('events.index') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 mb-6 transition group">
        <i class="fas fa-arrow-left mr-2 group-hover:-translate-x-1 transition-transform"></i> Back to Events
    </a>

    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden border border-gray-100">
        <!-- Header Section -->
        <div class="bg-gradient-to-r from-blue-600 to-teal-600 p-8 text-white relative overflow-hidden">
            <div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="relative">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h1 class="text-4xl font-bold mb-2">{{ $event['name'] }}</h1>
                        <p class="text-blue-100 text-lg">Event Details & Information</p>
                    </div>
                    @if($event['status'] === 'Upcoming')
                        <span class="bg-white text-blue-600 text-sm font-semibold px-4 py-2 rounded-full shadow-lg">
                            <i class="fas fa-clock mr-1"></i> {{ $event['status'] }}
                        </span>
                    @elseif($event['status'] === 'Ongoing')
                        <span class="bg-white text-green-600 text-sm font-semibold px-4 py-2 rounded-full shadow-lg">
                            <i class="fas fa-play-circle mr-1"></i> {{ $event['status'] }}
                        </span>
                    @else
                        <span class="bg-white text-gray-600 text-sm font-semibold px-4 py-2 rounded-full shadow-lg">
                            <i class="fas fa-check-circle mr-1"></i> {{ $event['status'] }}
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="p-8">
            <!-- Info Cards Grid -->
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 p-6 rounded-xl border border-blue-200 hover:shadow-lg transition-shadow">
                    <div class="flex items-center">
                        <div class="bg-gradient-to-br from-blue-500 to-cyan-500 text-white p-4 rounded-xl mr-4 shadow-lg">
                            <i class="fas fa-calendar-alt text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm text-blue-600 font-semibold uppercase tracking-wide">Event Date</p>
                            <p class="text-xl font-bold text-gray-800 mt-1">{{ date('F d, Y', strtotime($event['date'])) }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-teal-50 to-emerald-50 p-6 rounded-xl border border-teal-200 hover:shadow-lg transition-shadow">
                    <div class="flex items-center">
                        <div class="bg-gradient-to-br from-teal-500 to-emerald-500 text-white p-4 rounded-xl mr-4 shadow-lg">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm text-teal-600 font-semibold uppercase tracking-wide">Location</p>
                            <p class="text-xl font-bold text-gray-800 mt-1">{{ $event['location'] }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description Section -->
            <div class="bg-gradient-to-br from-slate-50 to-white p-6 rounded-xl border border-slate-200 shadow-sm">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <div class="bg-gradient-to-r from-blue-500 to-teal-500 text-white p-2 rounded-lg mr-3">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    Event Description
                </h3>
                @isset($event['description'])
                    <p class="text-gray-700 leading-relaxed text-lg">{{ $event['description'] }}</p>
                @else
                    <p class="text-gray-500 italic text-lg">No description available for this event.</p>
                @endisset
            </div>

            <!-- Additional Details Section (Optional) -->
            <div class="mt-6 bg-gradient-to-br from-indigo-50 to-blue-50 p-6 rounded-xl border border-indigo-100">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <div class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white p-2 rounded-lg mr-3">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    Quick Actions
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="text-center p-4 bg-white rounded-lg border border-blue-100 hover:border-blue-300 transition">
                        <i class="fas fa-share-alt text-blue-500 text-2xl mb-2"></i>
                        <p class="text-sm font-semibold text-gray-700">Share Event</p>
                    </div>
                    <div class="text-center p-4 bg-white rounded-lg border border-teal-100 hover:border-teal-300 transition">
                        <i class="fas fa-edit text-teal-500 text-2xl mb-2"></i>
                        <p class="text-sm font-semibold text-gray-700">Edit Details</p>
                    </div>
                    <div class="text-center p-4 bg-white rounded-lg border border-cyan-100 hover:border-cyan-300 transition">
                        <i class="fas fa-users text-cyan-500 text-2xl mb-2"></i>
                        <p class="text-sm font-semibold text-gray-700">Manage Guests</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-8 flex gap-4">
                <a href="{{ route('events.index') }}" 
                   class="flex-1 bg-gradient-to-r from-slate-500 to-slate-600 text-white py-4 px-6 rounded-xl hover:from-slate-600 hover:to-slate-700 transition transform hover:-translate-y-1 shadow-lg text-center font-semibold text-lg">
                    <i class="fas fa-calendar-week mr-2"></i> View All Events
                </a>
                <a href="{{ route('events.create') }}" 
                   class="flex-1 bg-gradient-to-r from-blue-500 to-teal-500 text-white py-4 px-6 rounded-xl hover:from-blue-600 hover:to-teal-600 transition transform hover:-translate-y-1 shadow-lg text-center font-semibold text-lg">
                    <i class="fas fa-plus-circle mr-2"></i> Create New Event
                </a>
            </div>
        </div>
    </div>
</div>
@endsection