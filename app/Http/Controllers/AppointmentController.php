<?php

namespace App\Http\Controllers;

use App\Models\bookAppointment;
use App\Models\bookTimeSlot;
use App\Models\service;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{

    public function home(Request $request)
    {
        $services = Service::paginate(2); // Load 2 services at a time
        if ($request->ajax()) {
            return response()->json($services); // Return paginated data as JSON
        }
        return view('home', compact('services'));
    }

    //     public function loadMoreServices(Request $request)
// {
//     $page = $request->get('page', 1);
//     $perPage = $request->get('perPage', 2);

    //     // Paginate the services
//     $services = Service::skip(($page - 1) * $perPage)->take($perPage)->get();

    //     // Return the response in JSON format
//     return response()->json([
//         'services' => $services
//     ]);
// }

    // public function index()
    // {
    //     $timeSlots = bookTimeSlot::all();
    //     return view('appointments.index', compact('timeSlots'));
    // }

    public function index(Request $request)
    {
        $date = $request->query('date', now()->toDateString()); // Default to today if no date provided

        // Fetch all time slots and check if they're booked for the selected date
        $timeSlots = bookTimeSlot::with('appointments')->get()->map(function ($slot) use ($date) {
            $slot->is_booked = $slot->isBookedForDate($date); // Dynamically check booking status
            return $slot;
        });

        return view('appointments.index', compact('timeSlots', 'date'));
    }


    public function book(Request $request)
    {
        $validated = $request->validate([
            'time_slot_id' => 'required|exists:book_time_slots,id',
            'date' => 'required|date',
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'city' => 'nullable|string',
            'village' => 'nullable|string',
            'mobile' => 'required|string|regex:/^\d{10}$/',
        ]);

        $timeSlot = bookTimeSlot::findOrFail($validated['time_slot_id']);

        // Check if the slot is already booked for the selected date
        if ($timeSlot->isBookedForDate($validated['date'])) {
            return back()->withErrors(['time_slot_id' => 'This time slot is already booked for the selected date.']);
        }

        // Create the appointment
        bookAppointment::create($validated);

        return redirect()->route('appointments.index')->with('success', 'Appointment booked successfully!');
    }



    // public function book(Request $request)
    // {
    //     // Validate the request inputs
    //     $request->validate([
    //         'time_slot_id' => 'required|exists:book_time_slots,id',
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'city' => 'required|string|max:255',
    //         'village' => 'nullable|string|max:255',
    //         'mobile' => 'required|digits:10',
    //         'date' => 'required|date',
    //     ]);

    //     // Retrieve the time slot
    //     $timeSlot = BookTimeSlot::findOrFail($request->time_slot_id);

    //     // Check if the time slot is already booked
    //     if ($timeSlot->is_booked) {
    //         return redirect()->back()->with('error', 'This time slot is already booked.');
    //     }

    //     // Create the appointment
    //     $appointment = BookAppointment::create([
    //         'time_slot_id' => $timeSlot->id,
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'city' => $request->city,
    //         'village' => $request->village,
    //         'mobile' => $request->mobile,
    //         'date' => $request->date,
    //     ]);

    //     // Update the time slot to mark it as booked
    //     $timeSlot->update(['is_booked' => true]);

    //     // Redirect to the appointments index with success message
    //     return redirect()->route('appointments.index')->with('success', 'Appointment booked successfully!');
    // }
    public function about()
    {
        return view('about');
    }
    public function services_page(Request $request)
    {
        $services = Service::paginate(2); // Load 2 services at a time
        if ($request->ajax()) {
            return response()->json($services); // Return paginated data as JSON
        }
        return view('services', compact('services'));
        // return view('services');
    }
    public function contact()
    {
        return view('contact');
    }
}
