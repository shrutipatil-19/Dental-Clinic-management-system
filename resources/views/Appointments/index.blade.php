@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
<form method="GET" action="{{ route('appointments.index') }}" class="w-[70%]">
    <div class="formbold-mb-5 w-full">
        <label for="date" class="formbold-form-label"> Date </label>
        <input type="date" name="date" id="date" class="formbold-form-input" value="{{ request('date') }}"
            onchange="this.form.submit()" required />
    </div>
</form>
<form method="POST" action="{{ route('appointments.book') }}" class="w-[70%]">
    @csrf
    <input type="hidden" name="date" value="{{ $date }}">

    <div class="formbold-mb-5">
        <label for="time_slot_id" class="formbold-form-label">Select Time Slot:</label>
        <select name="time_slot_id" id="time_slot_id" class="formbold-form-input" required>
            <option value="" disabled selected>Select a time slot</option>
            @foreach($timeSlots as $slot)
                <option value="{{ $slot->id }}" {{ $slot->is_booked ? 'disabled' : '' }}>
                    {{ $slot->slot }} {{ $slot->is_booked ? '(Booked)' : '' }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="formbold-mb-5">
        <label for="name" class="formbold-form-label">Name:</label>
        <input type="text" name="name" id="name" class="formbold-form-input" placeholder="First Name" required>
    </div>
    <div class="formbold-mb-5">
        <label for="mobile" class="formbold-form-label">Mobile Number:</label>
        <input type="text" name="mobile" id="mobile" class="formbold-form-input" placeholder="mobile " required>
    </div>
    <div class="formbold-mb-5">
        <label for="email" class="formbold-form-label">Email:</label>
        <input type="email" name="email" id="email" class="formbold-form-input" placeholder="Email Address">
    </div>

    <div>
        <button class="formbold-btn">Submit</button>
    </div>
</form>




@endsection

<style>
    .formbold-mb-5 {
        margin-bottom: 20px;
    }

    .formbold-pt-3 {
        padding-top: 12px;
    }

    .formbold-main-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 48px;
    }

    .formbold-form-wrapper {
        margin: 0 auto;
        max-width: 750px;
        width: 100%;
        background: white;
    }

    .formbold-form-label {
        display: block;
        font-weight: 500;
        font-size: 16px;
        color: #07074d;
        margin-bottom: 12px;
    }

    .formbold-form-label-2 {
        font-weight: 600;
        font-size: 20px;
        margin-bottom: 20px;
    }

    .formbold-form-input {
        width: 100%;
        padding: 12px 24px;
        border-radius: 6px;
        border: 1px solid #e0e0e0;
        background: white;
        font-weight: 500;
        font-size: 16px;
        color: #6b7280;
        outline: none;
        resize: none;
    }

    .formbold-form-input:focus {
        border-color: #6a64f1;
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .formbold-btn {
        text-align: center;
        font-size: 16px;
        border-radius: 6px;
        padding: 14px 32px;
        border: none;
        font-weight: 600;
        background-color: #6a64f1;
        color: white;
        cursor: pointer;
    }

    .formbold-btn:hover {
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .formbold--mx-3 {
        margin-left: -12px;
        margin-right: -12px;
    }

    .formbold-px-3 {
        padding-left: 12px;
        padding-right: 12px;
    }

    .flex {
        display: flex;
    }

    .flex-wrap {
        flex-wrap: wrap;
    }

    .w-full {
        width: 100%;
    }

    .formbold-radio {
        width: 20px;
        height: 20px;
    }

    .formbold-radio-label {
        font-weight: 500;
        font-size: 16px;
        padding-left: 12px;
        color: #070707;
        padding-right: 20px;
    }

    form {
        width: 70%;
    }

    .content {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    @media (min-width: 540px) {
        .sm\:w-half {
            width: 50%;
        }
    }
</style>