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

@if ($errors->any())
<div role="alert">
    <p>Please correct the following:</p>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif

<form action="/consultation" method="POST">
    @csrf <!-- adds Laravel’s protection against cross-site request forgery. -->
    <div>
        <label for="full-name">Full name</label>
        <input
            type="text"
            id="full-name"
            name="full_name"
            value="{{ old('full_name') }}"
            required>
    </div>

    <div>
        <label for="email">Email address</label>
        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            required>
    </div>

    <div>
        <label for="phone">Phone Number</label>
        <input
            type="tel"
            id="phone"
            name="phone"
            value="{{ old('phone') }}"
            required>
    </div>

    <div>
        <label for="event-type">Event type</label>
        <select name="event_type" id="event-type" required>
            <option value="">--Choose an event--</option>
            <option value="wedding" @selected(old('event_type')==='wedding' )>Wedding</option>
            <option value="birthday" @selected(old('event_type')==='birthday' )>Birthday</option>
            <option value="debut" @selected(old('event_type')==='debut' )>Debut</option>
            <option value="anniversary" @selected(old('event_type')==='anniversary' )>Anniversary</option>
            <option value="school_program" @selected(old('event_type')==='school_program' )>School Program</option>
            <option value="other" @selected(old('event_type')==='other' )>Other</option>
        </select>
    </div>

    <div>
        <label for="preferred-event-date">Preferred event date</label>
        <input
            type="date"
            id="preferred-event-date"
            name="preferred_event_date"
            value="{{ old('preferred_event_date') }}"
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
            value="{{ old('proposed_consultation_date') }}"
            required>
    </div>

    <div>
        <label for="additional-details">
            Additional details (optional)
        </label>
        <textarea name="additional_details" id="additional-details" rows="5">{{ old('additional_details') }}</textarea>
    </div>

    <button type="submit">Submit request</button>
</form>

@endsection