<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\bookTimeSlot;
use Illuminate\Http\Request;

class TimeSlotController extends Controller
{
    public function index()
    {
        $timeSlots = bookTimeSlot::all();
        return view('Admin.time-slots.index', compact('timeSlots'));
    }

    public function create()
    {
        return view('Admin.time-slots.create');
    }

    public function store(Request $request)
    {
        $request->validate(['slot' => 'required|unique:time_slots,slot']);
        bookTimeSlot::create(['slot' => $request->slot]);
        return redirect()->route('time-slots.index')->with('success', 'Time Slot Created!');
    }

    public function edit(bookTimeSlot $bookTimeSlot)
    {
        return view('Admin.time-slots.edit', compact('bookTimeSlot'));
    }

    public function update(Request $request, bookTimeSlot $bookTimeSlot)
    {
        $request->validate(['slot' => 'required|unique:time_slots,slot,' . $bookTimeSlot->id]);
        $bookTimeSlot->update(['slot' => $request->slot]);
        return redirect()->route('time-slots.index')->with('success', 'Time Slot Updated!');
    }

    public function destroy(bookTimeSlot $bookTimeSlot)
    {
        $bookTimeSlot->delete();
        return redirect()->route('time-slots.index')->with('success', 'Time Slot Deleted!');
    }
}
