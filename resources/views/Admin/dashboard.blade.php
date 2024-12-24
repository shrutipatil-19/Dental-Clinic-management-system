@extends('admin.layouts.app')
@section('content')
<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <li>Admin</li>
            <li>Dashboard</li>
        </ul>
        <a href="https://justboil.me/" onclick="alert('Coming soon'); return false" target="_blank" class="button blue">
            <span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>
            <span>Premium Demo</span>
        </a>
    </div>
</section>



<section class="section main-section">
    <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                            Patiant
                        </h3>
                        <h1>
                        {{ $patientCount }}
                        </h1>
                    </div>
                    <span class="icon widget-icon text-green-500"><i
                            class="mdi mdi-account-multiple mdi-48px"></i></span>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                            Appointment
                        </h3>
                        <h1>
                        {{ $appointmentCount }}
                        </h1>
                    </div>
                    <span class="icon widget-icon text-blue-500"><i class="mdi mdi-cart-outline mdi-48px"></i></span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection