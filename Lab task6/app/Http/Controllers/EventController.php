<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = [
            ['id' => 1, 'name' => 'Tech Conference 2025', 'date' => '2025-11-10', 'location' => 'Karachi Expo Center', 'status' => 'upcoming'],
            ['id' => 2, 'name' => 'Music Gala', 'date' => '2025-09-12', 'location' => 'Beach View Club', 'status' => 'completed'],
            ['id' => 3, 'name' => 'Startup Meetup', 'date' => '2025-10-28', 'location' => 'SZABIST Auditorium', 'status' => 'ongoing'],
        ];

        return view('events', compact('events'));
    }

    public function details($id)
    {
        $events = [
            1 => ['name' => 'Tech Conference 2025', 'date' => '2025-11-10', 'location' => 'Karachi Expo Center', 'description' => 'Annual conference on technology innovations.'],
            2 => ['name' => 'Music Gala', 'date' => '2025-09-12', 'location' => 'Beach View Club', 'description' => 'An evening full of live performances.'],
            3 => ['name' => 'Startup Meetup', 'date' => '2025-10-28', 'location' => 'SZABIST Auditorium', 'description' => 'Meet entrepreneurs and investors.'],
        ];

        $event = $events[$id] ?? null;

        return view('details', compact('event'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $date = $request->input('date');
        $location = $request->input('location');
        $description = $request->input('description');

        if (empty($title) || empty($date) || empty($location) || empty($description)) {
            return back()->with('error', 'Please fill all fields');
        }

        $submittedData = compact('title', 'date', 'location', 'description');
        return view('response', compact('submittedData'));
    }
}
