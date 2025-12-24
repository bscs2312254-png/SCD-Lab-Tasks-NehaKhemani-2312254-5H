@extends('layout')

@section('title', 'About Us')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body p-5">
                    <h1 class="text-center mb-4">About Gaming Hub</h1>
                    
                    <div class="row align-items-center mb-5">
                        <div class="col-md-6">
                            <h3 class="mb-3">Our Story</h3>
                            <p>Gaming Hub was founded in 2020 with a simple mission: to bring gamers together and provide the best gaming experience possible. We started as a small team of passionate gamers who wanted to create a platform where everyone could find their favorite games.</p>
                            <p>Today, we've grown into a thriving community with thousands of games and millions of players worldwide.</p>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="display-1">🎮</div>
                        </div>
                    </div>

                    <hr class="my-5">

                    <h3 class="text-center mb-4">Why Choose Us?</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-md-4 text-center">
                            <div class="display-4 mb-3">🌟</div>
                            <h5>Quality Games</h5>
                            <p>We handpick every game to ensure the best quality and entertainment value for our users.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="display-4 mb-3">👥</div>
                            <h5>Active Community</h5>
                            <p>Join millions of gamers worldwide and connect with fellow gaming enthusiasts.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="display-4 mb-3">🔒</div>
                            <h5>Safe & Secure</h5>
                            <p>Your safety is our priority. We ensure a secure gaming environment for everyone.</p>
                        </div>
                    </div>

                    <div class="bg-light p-4 rounded">
                        <h4 class="mb-3">Our Mission</h4>
                        <p class="mb-0">To create the ultimate gaming platform that brings joy, excitement, and entertainment to gamers of all ages and skill levels around the world. We believe gaming is more than just a hobby; it's a way to connect, compete, and create unforgettable memories.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
