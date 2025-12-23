<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    private function getEvents()
    {
        return [
            [
                'id' => 1,
                'name' => 'Tech Conference 2025',
                'date' => '2025-11-15',
                'location' => 'Karachi, PK',
                'status' => 'Upcoming',
                'description' => 'Annual technology conference featuring latest innovations'
            ],
            [
                'id' => 2,
                'name' => 'Product Launch',
                'date' => '2025-10-28',
                'location' => 'Islamabad, PK',
                'status' => 'Ongoing',
                'description' => 'Launch event for our new product line'
            ],
            [
                'id' => 3,
                'name' => 'Team Building Retreat',
                'date' => '2025-09-20',
                'location' => 'Lahore, PK',
                'status' => 'Completed',
                'description' => 'Annual team building and strategy retreat'
            ]
        ];
    }

    public function index()
    {
        $events = $this->getEvents();
        return view('events', compact('events'));
    }

    public function details($id)
    {
        $events = $this->getEvents();
        $event = collect($events)->firstWhere('id', $id);

        if (!$event) {
            abort(404);
        }

        return view('details', compact('event'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'description' => 'required|string'
        ], [
            'name.required' => 'Please fill all fields',
            'date.required' => 'Please fill all fields',
            'location.required' => 'Please fill all fields',
            'description.required' => 'Please fill all fields'
        ]);

        $eventData = $request->only(['name', 'date', 'location', 'description']);
        $eventData['status'] = 'Upcoming';

        return view('response', compact('eventData'));
    }
}
