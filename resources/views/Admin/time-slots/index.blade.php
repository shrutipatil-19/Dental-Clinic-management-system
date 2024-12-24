@extends('admin.layouts.app')
@section('content')


<div class="card has-table">
    <header class="card-header">
        <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
            <a href="{{ route('time-slots.create') }}">Add New Time Slot</a>
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
                    <!-- <th>Date</th> -->
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($timeSlots as $slot)
                    <tr>
                        <td>{{ $slot->slot }}</td>
                        <td>
                            <a href="{{ route('time-slots.edit', $slot->id) }}">Edit</a> 
                           
                        </td>
                        <td>
                          
                            <form action="{{ route('time-slots.destroy', $slot->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection