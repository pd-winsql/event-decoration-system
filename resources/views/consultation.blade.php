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

<form>
    <div>
        <label for="fullName">Full name</label>
        <input
            type="text"
            id="fullName"
            name="fullName"
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
        <label for="eventType">Event type</label>
        <select name="eventType" id="eventType" required>
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
        <label for="preferredEventDate">Preferred event date</label>
        <input
            type="date"
            id="preferredEventDate"
            name="preferredEventDate"
            required>
    </div>

    <div>
        <label for="proposedConsultationDate">
            Proposed consultation date
        </label>
        <input
            type="date"
            id="proposedConsultationDate"
            name="proposedConsultationDate"
            required>
    </div>

    <div>
        <label for="additionalDetails">
            Additional details (optional)
        </label>
        <textarea name="additionalDetails" id="additionalDetails" rows="5"></textarea>
    </div>

    <button type="submit" disabled>Submit request</button>
</form>

@endsection