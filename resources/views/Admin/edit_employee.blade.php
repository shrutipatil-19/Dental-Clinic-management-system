@extends('admin.layouts.app')
@section('content')
<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <li>Admin</li>
            <li>Forms</li>
        </ul>
        <a href="https://justboil.me/" onclick="alert('Coming soon'); return false" target="_blank" class="button blue">
            <span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>
            <span>Back</span>
        </a>
    </div>
</section>
<form action="{{ route('update_employee', $employee->id) }}" method="post" class="w-[70%] mx-auto" style="width:70%;">
    @csrf
    @method('PATCH')
    <div class="container">
        <!-- Name and Email -->
        <div class="field">
            <label class="label">Name</label>
            <div class="control icons-left">
                <input class="input" type="text" name="name" value="{{ $employee->name }}" placeholder="Name">
                <span class="icon left"><i class="mdi mdi-account"></i></span>
            </div>
        </div>
        <div class="field">
            <label class="label">Email</label>
            <div class="control icons-left">
                <input class="input" type="email" name="email" value="{{ $employee->email }}" placeholder="Email">
                <span class="icon left"><i class="mdi mdi-mail"></i></span>
            </div>
        </div>

        <!-- Mobile Number -->
        <div class="field">
            <label class="label">Phone</label>
            <div class="field addons">
                <div class="control">
                    <input class="input" value="+91" size="3" readonly>
                </div>
                <div class="control expanded">
                    <input class="input" type="tel" name="mobile_number" value="{{ $employee->mobile_number }}" placeholder="Your phone number">
                </div>
            </div>
            <p class="help">Do not enter the first zero</p>
        </div>

        <!-- Village -->
        <div class="field">
            <label class="label">Village</label>
            <div class="control icons-left">
                <input class="input" type="text" name="city_village" value="{{ $employee->city_village }}" placeholder="Village">
                <span class="icon left"><i class="mdi mdi-map-marker"></i></span>
            </div>
        </div>

        <!-- Gender -->
        <div class="field">
            <label class="label">Gender</label>
            <div class="control">
                <div class="select">
                    <select name="gender">
                        <option value="male" {{ $employee->gender == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ $employee->gender == 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{ $employee->gender == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Dates -->
        <div class="field">
            <label class="label">Date of Join</label>
            <div class="control icons-left">
                <input class="input" type="date" name="date_of_join" value="{{ $employee->date_of_join }}" placeholder="Date of Join">
                <span class="icon left"><i class="mdi mdi-calendar"></i></span>
            </div>
        </div>

        <div class="field">
            <label class="label">Date of Leave</label>
            <div class="control icons-left">
                <input class="input" type="date" name="date_of_leave" value="{{ $employee->date_of_leave }}" placeholder="Date of Leave">
                <span class="icon left"><i class="mdi mdi-calendar"></i></span>
            </div>
        </div>

        <!-- Submit -->
        <div class="field grouped">
            <div class="control">
                <button type="submit" class="button green">Update</button>
            </div>
        </div>
    </div>
</form>


@endsection