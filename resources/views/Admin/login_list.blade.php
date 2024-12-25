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
            <li>Login List</li>
        </ul>
    </div>


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
        </header>
        <div class="card-content">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($login_lists as $login_list)
                        <tr>
                            <td>{{$login_list->name}}</td>
                            <td>{{$login_list->email}}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</section>
@endsection