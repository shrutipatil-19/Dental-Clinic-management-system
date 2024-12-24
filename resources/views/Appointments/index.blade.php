@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    @if(session('success'))
        <p style="color: green; text-align: center; background: #dbf9db;">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p style="color: red; text-align: center; background: #f3e5e5;;">{{ session('error') }}</p>
    @endif
</div>
<form action="{{ route('appointments.book') }}" method="POST">
    @csrf
    <div class="formbold-main-wrapper">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="formbold-form-wrapper">
            <form action="https://formbold.com/s/FORM_ID" method="POST">
                <div class="flex flex-wrap formbold--mx-3">
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                            <label for="name" class="formbold-form-label">Name:</label>
                            <input type="text" name="name" id="name" class="formbold-form-input"
                                placeholder="First Name" required>

                        </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                            <label for="email" class="formbold-form-label">Email:</label>
                            <input type="email" name="email" id="email" class="formbold-form-input"
                                placeholder="Eamil Address">

                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap formbold--mx-3">
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                            <label for="city" class="formbold-form-label">City:</label>
                            <input type="text" name="city" id="city" class="formbold-form-input"
                                placeholder="Enter City" required>
                        </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                            <label for="village" class="formbold-form-label">Village:</label>
                            <input type="text" name="village" id="village" class="formbold-form-input"
                                placeholder="Enter Village">

                        </div>
                    </div>
                </div>


                <div class="flex flex-wrap formbold--mx-3">
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5 w-full">
                            <label for="date" class="formbold-form-label"> Date </label>
                            <input type="date" name="date" id="date" class="formbold-form-input" />
                        </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                            <label for="time_slot_id" class="formbold-form-label">Select Time Slot:</label>
                            <select name="time_slot_id" class="formbold-form-input" id="time_slot_id" required>
                                @foreach($timeSlots as $slot)
                                    <option value="{{ $slot->id }}" {{ $slot->is_booked ? 'disabled' : '' }}>
                                        {{ $slot->slot }} {{ $slot->is_booked ? '(Booked)' : '' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="formbold-mb-5">
                    <label for="mobile" class="formbold-form-label">Mobile Number:</label>
                    <input type="tel" name="mobile" class="formbold-form-input" id="mobile" pattern="[0-9]{10}"
                        placeholder="Enter 10-digit number" required>

                </div>
                <!-- <div class="flex formbold-mb-5">
                <div class="flex">
                    <input type="radio" name="radio1" id="radioButton1" class="formbold-radio" />
                    <label for="radioButton1" class="formbold-radio-label"> Yes </label>
                </div>
                <div class="flex">
                    <input type="radio" name="radio1" id="radioButton2" class="formbold-radio" />
                    <label for="radioButton2" class="formbold-radio-label"> No </label>
                </div>
            </div> -->

                <div>
                    <button class="formbold-btn">Submit</button>
                </div>
            </form>
        </div>
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

    @media (min-width: 540px) {
        .sm\:w-half {
            width: 50%;
        }
    }
</style>