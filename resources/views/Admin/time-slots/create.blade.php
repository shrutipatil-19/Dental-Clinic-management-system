@extends('admin.layouts.app')
@section('content')
<form action="{{ route('time-slots.create') }}" method="POST">
    @csrf

    <label for="slot">Time Slot:</label>
    <input type="text" name="slot" id="slot" value="{{ isset($timeSlot) ? $timeSlot->slot : '' }}" required>

    <button type="submit">{{ isset($timeSlot) ? 'Update' : 'Create' }}</button>
</form>
@endsection


