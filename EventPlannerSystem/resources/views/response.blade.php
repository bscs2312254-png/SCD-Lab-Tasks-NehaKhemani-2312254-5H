@extends('layouts.app')

@section('title', 'Event Created Successfully')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden border border-gray-100">
        <!-- Header Section -->
        <div class="bg-gradient-to-r from-blue-600 to-teal-600 p-8 text-white text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-white opacity-10"></div>
            <div class="relative">
                <div class="mb-4">
                    <i class="fas fa-check-circle text-8xl opacity-90 text-blue-200"></i>
                </div>
                <h1 class="text-4xl font-bold mb-2">Event Created Successfully!</h1>
                <p class="text-blue-100 text-lg">Your event has been added to the system and is ready to share</p>
            </div>
        </div>

        <div class="p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <div class="bg-gradient-to-r from-blue-500 to-teal-500 text-white p-2 rounded-lg mr-3">
                    <i class="fas fa-info-circle"></i>
                </div>
                Event Details
            </h2>

            <div class="space-y-4 bg-blue-50 p-6 rounded-xl border border-blue-100">
                <div class="flex items-start">
                    <div class="bg-gradient-to-br from-blue-500 to-cyan-500 p-3 rounded-lg mr-4 text-white shadow-lg">
                        <i class="fas fa-tag"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-blue-600 uppercase tracking-wide">Event Title</p>
                        <p class="text-lg font-bold text-gray-800 mt-1">{{ $eventData['name'] }}</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="bg-gradient-to-br from-teal-500 to-emerald-500 p-3 rounded-lg mr-4 text-white shadow-lg">
                        <i class="fas fa-calendar"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-teal-600 uppercase tracking-wide">Date</p>
                        <p class="text-lg font-bold text-gray-800 mt-1">{{ date('F d, Y', strtotime($eventData['date'])) }}</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="bg-gradient-to-br from-cyan-500 to-blue-500 p-3 rounded-lg mr-4 text-white shadow-lg">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-cyan-600 uppercase tracking-wide">Location</p>
                        <p class="text-lg font-bold text-gray-800 mt-1">{{ $eventData['location'] }}</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="bg-gradient-to-br from-emerald-500 to-green-500 p-3 rounded-lg mr-4 text-white shadow-lg">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-emerald-600 uppercase tracking-wide">Status</p>
                        <p class="text-lg font-bold text-gray-800 mt-1">{{ $eventData['status'] }}</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="bg-gradient-to-br from-indigo-500 to-purple-500 p-3 rounded-lg mr-4 text-white shadow-lg">
                        <i class="fas fa-align-left"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-indigo-600 uppercase tracking-wide">Description</p>
                        <p class="text-gray-700 mt-1 leading-relaxed">{{ $eventData['description'] }}</p>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="mt-6 bg-gradient-to-br from-teal-50 to-blue-50 p-6 rounded-xl border border-teal-100">
                <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-rocket text-teal-600 mr-2"></i>
                    Next Steps
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="text-center p-4 bg-white rounded-lg border border-blue-100 hover:border-blue-300 transition">
                        <i class="fas fa-share-alt text-blue-500 text-xl mb-2"></i>
                        <p class="text-sm font-semibold text-gray-700">Share Event</p>
                        <p class="text-xs text-gray-500 mt-1">Invite attendees</p>
                    </div>
                    <div class="text-center p-4 bg-white rounded-lg border border-teal-100 hover:border-teal-300 transition">
                        <i class="fas fa-edit text-teal-500 text-xl mb-2"></i>
                        <p class="text-sm font-semibold text-gray-700">Edit Details</p>
                        <p class="text-xs text-gray-500 mt-1">Make changes</p>
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
                    <i class="fas fa-plus-circle mr-2"></i> Create Another Event
                </a>
            </div>
        </div>
    </div>
</div>
@endsection