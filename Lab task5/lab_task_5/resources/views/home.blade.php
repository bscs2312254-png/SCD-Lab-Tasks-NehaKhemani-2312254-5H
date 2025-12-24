@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="text-center mb-5">
        <h1 class="display-3 text-white fw-bold mb-3">Welcome to Gaming Hub</h1>
        <p class="lead text-white">Your Ultimate Gaming Destination</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center p-4">
                    <div class="display-1 mb-3">🎯</div>
                    <h3 class="card-title">Action Games</h3>
                    <p class="card-text">Experience intense action and thrilling gameplay with our collection of action-packed games.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center p-4">
                    <div class="display-1 mb-3">🏆</div>
                    <h3 class="card-title">Sports Games</h3>
                    <p class="card-text">Compete in various sports and become a champion in our exciting sports gaming collection.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center p-4">
                    <div class="display-1 mb-3">🧩</div>
                    <h3 class="card-title">Puzzle Games</h3>
                    <p class="card-text">Challenge your mind with brain-teasing puzzles and strategic gameplay.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-5 text-center">
                    <h2 class="mb-4">Featured Games This Week</h2>
                    <div class="row g-4">
                        <div class="col-md-3">
                            <div class="p-3">
                                <div class="display-4 mb-2">🎮</div>
                                <h5>Cyber Warriors</h5>
                                <p class="mb-0 text-muted">New Release</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="p-3">
                                <div class="display-4 mb-2">⚔️</div>
                                <h5>Fantasy Quest</h5>
                                <p class="mb-0 text-muted">Trending</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="p-3">
                                <div class="display-4 mb-2">🏎️</div>
                                <h5>Speed Racers</h5>
                                <p class="mb-0 text-muted">Popular</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="p-3">
                                <div class="display-4 mb-2">🌟</div>
                                <h5>Space Odyssey</h5>
                                <p class="mb-0 text-muted">Top Rated</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
