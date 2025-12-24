@extends('layout')

@section('title', 'Contact Us')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body p-5">
                    <h1 class="text-center mb-4">Get In Touch</h1>
                    <p class="text-center text-muted mb-5">Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>

                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Subject</label>
                                    <input type="text" class="form-control" placeholder="What's this about?">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" rows="5" placeholder="Your message here..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg w-100">Send Message</button>
                            </form>
                        </div>

                        <div class="col-md-6">
                            <div class="ps-md-4">
                                <h4 class="mb-4">Contact Information</h4>
                                
                                <div class="d-flex mb-4">
                                    <div class="me-3">
                                        <div class="display-6">📍</div>
                                    </div>
                                    <div>
                                        <h6>Address</h6>
                                        <p class="text-muted">123 Gaming Street<br>Tech City, TC 12345</p>
                                    </div>
                                </div>

                                <div class="d-flex mb-4">
                                    <div class="me-3">
                                        <div class="display-6">📧</div>
                                    </div>
                                    <div>
                                        <h6>Email</h6>
                                        <p class="text-muted">support@gaminghub.com<br>info@gaminghub.com</p>
                                    </div>
                                </div>

                                <div class="d-flex mb-4">
                                    <div class="me-3">
                                        <div class="display-6">📞</div>
                                    </div>
                                    <div>
                                        <h6>Phone</h6>
                                        <p class="text-muted">+1 (555) 123-4567<br>+1 (555) 765-4321</p>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="display-6">⏰</div>
                                    </div>
                                    <div>
                                        <h6>Business Hours</h6>
                                        <p class="text-muted">Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
