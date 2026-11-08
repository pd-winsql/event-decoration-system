@extends('layouts.app')

@section('title', 'Request a Consultaion')

@section('content')

<h1>Request a Consulation</h1>

<p>
    Tell us about your event and propose a consultation date.
    Our team will contact you to agreee on a schedule.
    Submitting a request does not reserve your event date.
</p>

<p>This form is a practice preview. Submission is not available yet.</p>

<form action="/consultation" method="POST">
    @csrf <!-- adds Laravel’s protection against cross-site request forgery. -->
    <div>
        <label for="full-name">Full name</label>
        <input
            type="text"
            id="full-name"
            name="full_name"
            required">
    </div>

    <div>
        <label for="email">Email address</label>
        <input
            type="email"
            id="email"
            name="email"
            required>
    </div>

    <div>
        <label for="phone">Phone Number</label>
        <input
            type="tel"
            id="phone"
            name="phone"
            required>
    </div>

    <div>
        <label for="event-type">Event type</label>
        <select name="event_type" id="event-type" required>
            <option value="">--Choose an event--</option>
            <option value="wedding">Wedding</option>
            <option value="birthday">Birthday</option>
            <option value="debut">Debut</option>
            <option value="anniversary">Anniversary</option>
            <option value="school_program">School Program</option>
            <option value="other">Other</option>
        </select>
    </div>

    <div>
        <label for="preferred-event-date">Preferred event date</label>
        <input
            type="date"
            id="preferred-event-date"
            name="preferred_event_date"
            required>
    </div>

    <div>
        <label for="proposed-consultation-date">
            Proposed consultation date
        </label>
        <input
            type="date"
            id="proposed-consultation-date"
            name="proposed_consultation_date"
            required>
    </div>

    <div>
        <label for="additional-details">
            Additional details (optional)
        </label>
        <textarea name="additional_details" id="additional-details" rows="5"></textarea>
    </div>

    <button type="submit">Submit request</button>
</form>

@endsection