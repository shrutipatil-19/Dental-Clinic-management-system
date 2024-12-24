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
<form action="{{ route('employee_store') }}" method="post" class="w-[70%] mx-auto" style="width:70%;">
    @csrf
    <div class="container">
        <!-- Name and Email -->
        <div class="field">
            <label class="label">From</label>
            <div class="field-body">
                <div class="field">
                    <div class="control icons-left">
                        <input class="input" type="text" name="name" placeholder="Name">
                        <span class="icon left"><i class="mdi mdi-account"></i></span>
                    </div>
                </div>
                <div class="field">
                    <div class="control icons-left icons-right">
                        <input class="input" type="email" name="email" placeholder="Email">
                        <span class="icon left"><i class="mdi mdi-mail"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Phone -->
        <div class="field">
            <div class="field-body">
                <div class="field">
                    <div class="field addons">
                        <div class="control">
                            <input class="input" value="+91" size="3" readonly>
                        </div>
                        <div class="control expanded">
                            <input class="input" type="tel" name="mobile_number" placeholder="Your phone number">
                        </div>
                    </div>
                    <p class="help">Do not enter the first zero</p>
                </div>
            </div>
        </div>

        <!-- Village -->
        <div class="field">
            <div class="field-body">
                <div class="field">
                    <div class="control icons-left">
                        <input class="input" type="text" name="city_village" placeholder="Village">
                        <span class="icon left"><i class="mdi mdi-map-marker"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gender -->
        <div class="field">
            <label class="label">Gender</label>
            <div class="control">
                <div class="select">
                    <select name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="field">
            <div class="field-body">
                <div class="field">
                    <div class="control icons-left">
                        <input class="input" type="date" name="date_of_join" placeholder="Date of Join">
                        <span class="icon left"><i class="mdi mdi-calendar"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="field">
            <div class="field-body">
                <div class="field">
                    <div class="control icons-left">
                        <input class="input" type="date" name="date_of_leave" placeholder="Date of Leave">
                        <span class="icon left"><i class="mdi mdi-calendar"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <!-- Submit and Reset Buttons -->
        <div class="field grouped">
            <div class="control">
                <button type="submit" class="button green">Submit</button>
            </div>
            <div class="control">
                <button type="reset" class="button red">Reset</button>
            </div>
        </div>
    </div>
</form>

@endsection