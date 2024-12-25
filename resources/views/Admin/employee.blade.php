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

    /* table {
        border-collapse: collapse;
        /* Ensure clean borders */
    /* width: 100%; */
    /* Force the table to take full width */
    /* min-width: 2000px; */
    /* Optional: Set a minimum width if columns overflow 
    } */

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

<section class="section main-section">

    <div class="card has-table">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                Employee
            </p>
            <!-- <a href="#" class="card-header-icon">
                <span class="icon"><i class="mdi mdi-reload"></i></span>
            </a> -->
            <form method="GET" action="{{ route('employee_list') }}" class="search-form">
                <input type="text" name="name" placeholder="Search by Name" value="{{ request('name') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
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
                        <th>Date of Join</th>
                        <th>Date of Leave</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->mobile_number}}</td>
                            <td>{{$employee->city_village}}</td>
                            <td>{{$employee->gender}}</td>
                            <td>{{$employee->date_of_join}}</td>
                            <td>{{$employee->date_of_leave}}</td>
                            <td><a href="{{ route('edit_employee', $employee->id) }}" class="btn-edit btn-primary">
                                    Edit
                                </a>
                                <!-- Delete Button (with confirmation) -->
                                <form action="{{ route('delete_employee', $employee->id) }}" method="POST"
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
            <!-- Pagination Links -->
            <div class="pagination">
                {{ $employees->links() }}
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