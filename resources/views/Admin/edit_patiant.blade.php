@extends('admin.layouts.app')
  <!-- Tailwind is included -->
  <link rel="stylesheet" href="css/main.css">

  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"/>
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png"/>
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"/>
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6"/>

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
<form id="updatePatientForm"  action="{{ route('update_patiant', $patiant_list->id) }}" method="POST" class="w-[70%] mx-auto" style="width:70%;">
    @csrf
    @method('PATCH')
    <div class="container">
        <!-- Name and Email -->
        <div class="field">
            <label class="label">From</label>
            <div class="field-body">
                <div class="field">
                    <div class="control icons-left">
                        <input class="input" type="text" name="name" placeholder="Name" value="{{$patiant_list->name}}">
                        <span class="icon left"><i class="mdi mdi-account"></i></span>
                    </div>
                </div>
                <div class="field">
                    <div class="control icons-left icons-right">
                        <input class="input" type="email" name="email" placeholder="Email" value="{{$patiant_list->email}}">
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
                            <input class="input" type="tel" name="phone" placeholder="Your phone number" value="{{$patiant_list->phone}}">
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
                        <input class="input" type="text" name="village" placeholder="Village" value="{{$patiant_list->village}}">
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
                    <select name="gender" value="{{$patiant_list->gender}}">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Treatment -->
        <div class="field">
            <label class="label">Treatment</label>
            <div class="control">
                <div class="select">
                    <select name="treatment" value="{{$patiant_list->treatment}}">
                        <option value="Regular checkup">Regular checkup</option>
                        <option value="Tooth cleaning">Tooth cleaning</option>
                        <option value="Tooth whitening">Tooth whitening</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Treatment Status -->
        <div class="field">
            <label class="label">Treatment Status</label>
            <div class="control">
                <div class="select">
                    <select name="treatment_status" value="{{$patiant_list->treatment_stutus}}">
                        <option value="in-progress">In Progress</option>
                        <option value="completed">Completed</option>
                        <option value="not-started">Not Started</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- totle Fees -->
        <div class="field">
            <label class="label">Fees</label>
            <div class="control">
                <input class="input" type="number" name="totle_fees" placeholder="Total Fees" value="{{$patiant_list->totle_fees}}">
            </div>
        </div>

        <!-- Paid Fees -->
        <div class="field">
            <label class="label">Paid Fees</label>
            <div class="control">
                <input class="input" type="number" name="paid_fees" placeholder="Paid Fees" value="{{$patiant_list->paid_fees}}">
            </div>
        </div>

        <!-- Pending Fees -->
        <div class="field">
            <label class="label">Pending Fees</label>
            <div class="control">
                <input class="input" type="number" name="pending_fees" placeholder="Pending Fees" value="{{$patiant_list->pending_fees}}">
            </div>
        </div>

        <!-- Next Schedule Date -->
        <div class="field">
            <label class="label">Next Schedule Date</label>
            <div class="control">
                <input class="input" type="date" name="next_schedule_date" value=" {{$patiant_list->next_schedule_date}}">
            </div>
        </div>

        <!-- Progress -->
        <div class="field">
            <label class="label">Progress</label>
            <div class="control">
                <div class="select">
                    <select name="progress" value="{{$patiant_list->progress}}">
                        <option value="active">Active</option>
                        <option value="done">Done</option>
                        <!-- <option value="pending">Pending</option> -->
                    </select>
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