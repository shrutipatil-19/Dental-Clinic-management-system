<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\bookAppointment;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function index(Request $request)
    {
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');

        // Query the database with date filters
        $appointments = bookAppointment::query();

        if ($fromDate) {
            $appointments->whereDate('created_at', '>=', $fromDate);
        }

        if ($toDate) {
            $appointments->whereDate('created_at', '<=', $toDate);
        }

        // Get the filtered results with pagination
        $appointments = $appointments->paginate(10);

        // Return view with patients
        // return view('patients.index', compact('patients'));
        return view('Admin.appointments.index', compact('appointments'));
    }

    public function destroy(bookAppointment $bookAppointment)
    {
        $bookAppointment->timeSlot->update(['is_booked' => false]);
        $bookAppointment->delete();
        return redirect()->route('appointments.index')->with('success', 'bookAppointment Deleted!');
    }
    public function delete_appointment($id)
    {
        $appointment = bookAppointment::findOrFail($id);
        $appointment->delete();

        return redirect()->route('Admin.appointments.index')->with('success', 'Appointment deleted successfully.');
    }
}
