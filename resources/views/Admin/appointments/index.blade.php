@extends('admin.layouts.app')
<style>
    #filter {
        padding: 5px 20px;
        background: #3b82f6;
        color: white;
        border: none;
        border-radius: 5px;
    }
</style>
@section('content')
<section class="section main-section">
    <section class="is-title-bar" style="padding:0px;">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>Employee List</li>
            </ul>
            <a href="{{route('create_employee')}}" class="button blue">
                <span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>
                <span>Add Employee</span>
            </a>
        </div>


        <!-- Search Form
    <form method="GET" action="" class="search-form">
        <input type="text" name="name" placeholder="Search by Name" value="{{ request('name') }}">
        <button type="submit" class="btn btn-primary">Search</button>
    </form> -->
    </section>
    <!-- <div class="notification blue">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
            <div>
                <span class="icon"><i class="mdi mdi-buffer"></i></span>
                <b>Responsive table</b>
            </div>
            <button type="button" class="button small textual --jb-notification-dismiss">Dismiss</button>
        </div>
    </div> -->
    <form method="GET" action="{{ route('appointment.list') }}" class="my-3">
        <label for="from_date" class="font-medium" style="font-weight: 500;">From Date:</label>
        <input type="date" name="from_date" id="from_date" value="{{ request('from_date') }}">

        <label for="to_date" class="font-medium" style="font-weight: 500;">To Date:</label>
        <input type="date" name="to_date" id="to_date" value="{{ request('to_date') }}">

        <button type="submit" class="btn btn-primary" id="filter">Filter</button>
    </form>

    <div class="card has-table">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                Clients
            </p>
            <a href="#" class="card-header-icon">
                <span class="icon"><i class="mdi mdi-reload"></i></span>
            </a>
        </header>
        <div class="card-content">
            <table>
                <thead>
                    <tr>
                        <th>Slots</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->timeSlot ? $appointment->timeSlot->slot : 'N/A' }}</td>
                            <td>{{ $appointment->date }}</td>
                            <td>{{ $appointment->name }}</td>
                            <td>{{ $appointment->email }}</td>
                            <td>{{ $appointment->mobile }}</td>
                            <td>
                                <form action="{{ route('delete.appointment', $appointment->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete red"
                                        onclick="return confirm('Are you sure you want to delete this appointment?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No appointments found for the selected date range.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card empty">
        <div class="card-content">
            <div>
                <span class="icon large"><i class="mdi mdi-emoticon-sad mdi-48px"></i></span>
            </div>
            <p>Nothing's here…</p>
        </div>
    </div>
</section>
@endsection