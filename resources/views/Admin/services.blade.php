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
</style>
@section('content')
<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <li>Admin</li>
            <li>Services List</li>
        </ul>
        <a href="{{route('create_services')}}" class="button blue">
            <span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>
            <span>Add Services</span>
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
                Services
            </p>
            <!-- <a href="#" class="card-header-icon">
                <span class="icon"><i class="mdi mdi-reload"></i></span>
            </a> -->
            <!-- <form method="GET" action="{{ route('services_list') }}" class="search-form">
                <input type="text" name="name" placeholder="Search by Name" value="{{ request('name') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </form> -->
        </header>
        <div class="card-content">
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Process </th>
                        <th>Duration</th>
                        <th>Pros</th>
                        <th>Cons</th>
                    </tr>
                </thead>
                <tbody>
               
                    @foreach ($services as $service)
                        <tr>
                           
                            <td>{{ $service->title }}</td>
                            <td>{{ Str::limit($service->description, 50) }}</td>
                            <!-- Process -->
                            <td>
                                @if (!empty($service->process) && is_array($service->process))
                                    <ul>
                                        @foreach ($service->process as $step)
                                            <li>{{ json_encode($step) }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <em>No Process Added</em>
                                @endif

                            </td>
                            <td>
                                @if (!empty($service->duration) && is_array($service->duration))
                                    <ul>
                                        @foreach ($service->duration as $step)
                                            <li>{{ json_encode($step) }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <em>No duration Added</em>
                                @endif

                            </td>
                            <td>
                                @if (!empty($service->pros) && is_array($service->pros))
                                    <ul>
                                        @foreach ($service->pros as $step)
                                            <li>{{ json_encode($step) }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <em>No pros Added</em>
                                @endif

                            </td>
                            <td>
                                @if (!empty($service->cons) && is_array($service->cons))
                                    <ul>
                                        @foreach ($service->cons as $step)
                                            <li>{{ json_encode($step) }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <em>No cons Added</em>
                                @endif

                            </td>

                            <td>
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button red is-small" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </tbody>
            </table>
            <!-- Pagination Links -->

        </div>
    </div>
</section>
@endsection