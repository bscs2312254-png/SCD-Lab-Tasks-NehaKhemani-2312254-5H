@extends('layouts.app')

@section('title', 'Create New Event')

@section('content')
<div class="max-w-3xl mx-auto">
    <a href="{{ route('events.index') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 mb-6 transition group">
        <i class="fas fa-arrow-left mr-2 group-hover:-translate-x-1 transition-transform"></i> Back to Events
    </a>

    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-blue-600 to-teal-600 p-8 text-white">
            <h1 class="text-4xl font-bold mb-2">Create New Event</h1>
            <p class="text-blue-100">Plan your next amazing event with us</p>
        </div>

        <form action="{{ route('events.store') }}" method="POST" class="p-8">
            @csrf

            @if($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-triangle text-red-500 mr-3"></i>
                        <p class="text-red-700 font-semibold">{{ $errors->first() }}</p>
                    </div>
                </div>
            @endif

            <div class="space-y-6">
                <div class="bg-blue-50 p-4 rounded-lg border border-blue-100">
                    <label for="name" class="block text-sm font-semibold text-blue-800 mb-2">
                        <i class="fas fa-tag text-blue-600 mr-2"></i>Event Title
                    </label>
                    <input type="text" 
                           id="name" 
                           name="name" 
                           value="{{ old('name') }}"
                           class="w-full px-4 py-3 border border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition bg-white"
                           placeholder="What's your event called?">
                </div>

                <div class="bg-teal-50 p-4 rounded-lg border border-teal-100">
                    <label for="date" class="block text-sm font-semibold text-teal-800 mb-2">
                        <i class="fas fa-calendar text-teal-600 mr-2"></i>Event Date
                    </label>
                    <input type="date" 
                           id="date" 
                           name="date" 
                           value="{{ old('date') }}"
                           class="w-full px-4 py-3 border border-teal-200 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition bg-white">
                </div>

                <div class="bg-cyan-50 p-4 rounded-lg border border-cyan-100">
                    <label for="location" class="block text-sm font-semibold text-cyan-800 mb-2">
                        <i class="fas fa-map-marker-alt text-cyan-600 mr-2"></i>Location
                    </label>
                    <input type="text" 
                           id="location" 
                           name="location" 
                           value="{{ old('location') }}"
                           class="w-full px-4 py-3 border border-cyan-200 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition bg-white"
                           placeholder="Event venue or address">
                </div>

                <div class="bg-indigo-50 p-4 rounded-lg border border-indigo-100">
                    <label for="description" class="block text-sm font-semibold text-indigo-800 mb-2">
                        <i class="fas fa-align-left text-indigo-600 mr-2"></i>Description
                    </label>
                    <textarea id="description" 
                              name="description" 
                              rows="5"
                              class="w-full px-4 py-3 border border-indigo-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition bg-white"
                              placeholder="Tell people about your event...">{{ old('description') }}</textarea>
                </div>
            </div>

            <div class="mt-8 flex gap-4">
                <a href="{{ route('events.index') }}" 
                   class="flex-1 bg-gray-500 text-white py-3 px-6 rounded-lg hover:bg-gray-600 transition text-center font-semibold shadow">
                    <i class="fas fa-arrow-left mr-2"></i> Back to List
                </a>
                <button type="submit" 
                        class="flex-1 bg-gradient-to-r from-blue-500 to-teal-500 text-white py-3 px-6 rounded-lg hover:from-blue-600 hover:to-teal-600 transition font-semibold shadow">
                    <i class="fas fa-calendar-plus mr-2"></i> Create Event
                </button>
            </div>
        </form>
    </div>
</div>
@endsection