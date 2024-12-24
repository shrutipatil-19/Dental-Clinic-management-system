@extends('admin/layouts.app')
<style>
    .btn-edit {
        color: white;
        background-color: #3b82f6;
        padding: 0.5rem 1rem;
        margin: 0.5rem;
        border-radius: 5px;
    }

    .btn-delete {
        color: white;
        background-color: #d63d3d;
        padding: 0.5rem 1rem;
        margin: 0.5rem;
        border-radius: 5px;
    }

    .card-content {
        overflow-x: auto;
        /* Enable horizontal scrolling */
        overflow-y: hidden;
        /* Prevent vertical scrolling */
        max-width: 100%;
        /* Ensures the table fits within the container */
    }

    table {
        border-collapse: collapse;
        /* Ensure clean borders */
        width: 100%;
        /* Force the table to take full width */
        min-width: 2000px;
        /* Optional: Set a minimum width if columns overflow */
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    thead th {
        background-color: #f4f4f4;
        /* Optional: Header background color */
    }

    #filter {
        padding: 5px 20px;
        background: #3b82f6;
        color: white;
        border: none;
        border-radius: 5px;
    }

    .search-form {
        margin-bottom: 15px;
        display: flex;
        gap: 10px;
    }

    .search-form input {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .search-form button {
        padding: 8px 12px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .search-form button:hover {
        background-color: #0056b3;
    }
</style>
@section('content')
<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <li>Admin</li>
            <li>Patiant List</li>
        </ul>
        <a href="{{route('create_patiant')}}" class="button blue">
            <span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>
            <span>Add Patiant</span>
        </a>
    </div>
    <form method="GET" action="{{ route('patiant_list') }}" class="mt-3">
        <label for="from_date" class="font-medium" style=" font-weight: 500;">From Date:</label>
        <input type="date" name="from_date" value="{{ request('from_date') }}">

        <label for="to_date" class="font-medium" style=" font-weight: 500;">To Date:</label>
        <input type="date" name="to_date" value="{{ request('to_date') }}">

        <label for="filter_pending" style=" font-weight: 500;">Filter Pending Fees:</label>
        <select name="filter_pending">
            <option value="1" {{ request('filter_pending') == '1' ? 'selected' : '' }}>Yes</option>
            <option value="0" {{ request('filter_pending') == '0' ? 'selected' : '' }}>No</option>
        </select>

        <button type="submit" id="filter">Filter</button>
    </form>

    <!-- Search Form -->
    <form method="GET" action="{{ route('patiant_list') }}" class="search-form">
        <input type="text" name="name" placeholder="Search by Name" value="{{ request('name') }}">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</section>

<!-- <section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <h1 class="title">
            Responsive Tables
        </h1>
        <button class="button light">Button</button>
    </div>
</section> -->

<section class="section main-section">
    <!-- <div class="notification blue">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
            <div>
                <span class="icon"><i class="mdi mdi-buffer"></i></span>
                <b>Responsive table</b>
            </div>
            <button type="button" class="button small textual --jb-notification-dismiss">Dismiss</button>
        </div>
    </div> -->
    <div class="card has-table">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                patients
            </p>
            <a href="#" class="card-header-icon">
                <span class="icon"><i class="mdi mdi-reload"></i></span>
            </a>
        </header>
        <div class="card-content">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>City / Village</th>
                        <th>Gender</th>
                        <th>Treatment</th>
                        <th>
                            Treatment Status
                        </th>
                        <th>Fees</th>
                        <th>Paid Fees</th>
                        <th> <a href="{{ route('patiant_list', [
    'sort' => 'pending_fees',
    'order' => request('order') === 'asc' ? 'desc' : 'asc',
    'filter_pending' => '1' // Add filter flag when sorting by pending fees
]) }}">
                                Pending Fees
                                @if(request('sort') === 'pending_fees')
                                    <span>{{ request('order') === 'asc' ? '↑' : '↓' }}</span>
                                @endif
                            </a></th>
                        <th>Next Schedule Date</th>
                        <th> <a href="{{ route('patiant_list', [
    'sort' => 'progress',
    'order' => request('order') === 'asc' ? 'desc' : 'asc'
]) }}">
                                Progress
                                @if(request('sort') === 'progress')
                                    <span>{{ request('order') === 'asc' ? '↑' : '↓' }}</span>
                                @endif
                            </a></th>
                        <th> <a
                                href="{{ route('patiant_list', ['sort' => 'created_at', 'order' => request('order') === 'asc' ? 'desc' : 'asc']) }}">
                                Date
                                @if(request('sort') === 'created_at')
                                    <span>{{ request('order') === 'asc' ? '↑' : '↓' }}</span>
                                @endif
                            </a>
                        </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($patiant_lists as $patiant_list)
                        <tr>
                            <td>{{ $patiant_list->name}}</td>
                            <td>{{ $patiant_list->email }}</td>
                            <td>{{ $patiant_list->phone }}</td>
                            <td>{{ $patiant_list->village }}</td>
                            <td>{{ $patiant_list->gender }}</td>
                            <td>{{ $patiant_list->treatment }}</td>
                            <td>{{ $patiant_list->treatment_status }}</td>
                            <td>{{ $patiant_list->totle_fees }}</td>
                            <td>{{ $patiant_list->paid_fees }}</td>
                            <td>{{ $patiant_list->pending_fees }}</td>
                            <td>{{ $patiant_list->next_schedule_date }}</td>
                            <td>{{ $patiant_list->progress }}</td>
                            <td>{{ $patiant_list->created_at }}</td>
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('edit_patiant', $patiant_list->id) }}" class="btn-edit btn-primary">
                                    Edit
                                </a>
                                <!-- Delete Button (with confirmation) -->
                                <form action="{{ route('delete.patiant', $patiant_list->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete red"
                                        onclick="return confirm('Are you sure you want to delete this appointment?')">Delete</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="pagination">
                {{ $patiant_lists->appends(request()->query())->links() }}
            </div>
            <!-- <div class="table-pagination">
                <div class="flex items-center justify-between">
                    <div class="buttons">
                        <button type="button" class="button active">1</button>
                        <button type="button" class="button">2</button>
                        <button type="button" class="button">3</button>
                    </div>
                    <small>Page 1 of 3</small>
                </div>
            </div> -->
        </div>
    </div>
</section>
@endsection