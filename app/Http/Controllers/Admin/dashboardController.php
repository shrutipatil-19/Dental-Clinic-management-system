<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\patiant_list;
use App\Models\Employee;
use App\Models\bookAppointment;
use Illuminate\Http\Request;
use App\Models\Service;
use Carbon\Carbon; // Import Carbon class for date handling

class dashboardController extends Controller
{
    public function index()
    {
        $patientCount = patiant_list::count();
        $appointmentCount = bookAppointment::count();
        return view('Admin.dashboard', compact('patientCount', 'appointmentCount'));
    }
    public function patiant_list(Request $request)
    {
        $sort = $request->get('sort', 'created_at'); // Default sort column is 'created_at'
        $order = $request->get('order', 'desc'); // Default sort order is descending

        // Start with a basic query
        $query = patiant_list::query();

        if ($request->has('name') && $request->name) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->has('sort') && $request->has('order')) {
            $query->orderBy($request->sort, $request->order);
        }

        // Check if we need to filter by pending fees
        if ($request->get('filter_pending') === '1') {
            // Only show records where pending_fees > 0
            $query->where('pending_fees', '>', 0);
        }

        // Filter by date range if provided
        $fromDate = $request->get('from_date');
        $toDate = $request->get('to_date');

        if ($fromDate && $toDate) {
            // Convert the date strings to Carbon instances for comparison
            $query->whereBetween('created_at', [Carbon::parse($fromDate)->startOfDay(), Carbon::parse($toDate)->endOfDay()]);
        }

        // Check for sorting by 'progress' (Active or Done)
        if ($sort === 'progress') {
            $query->orderByRaw("
                CASE
                    WHEN treatment_status IN ('Progress', 'active') THEN 1
                    WHEN treatment_status = 'done' THEN 2
                    ELSE 3
                END $order
            ");
        } else {
            // Default sorting by other columns like created_at, etc.
            $query->orderBy($sort, $order);
        }

        // Paginate the results (5 patients per page)
        $patiant_lists = $query->paginate(5);

        return view('Admin.patiant-list', compact('patiant_lists'));
    }




    public function create_patiant()
    {
        return view('Admin.form');
    }
    public function store_patiant(Request $request)
    {
        $patiant_lists = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'village' => 'nullable|string|max:255',
            'gender' => 'nullable|string|in:male,female,other',
            'treatment' => 'required|string',
            'treatment_status' => 'nullable|string|in:in-progress,completed,not-started',
            'totle_fees' => 'nullable|numeric|min:0',
            'paid_fees' => 'nullable|numeric|min:0',
            'pending_fees' => 'nullable|numeric|min:0',
            'next_schedule_date' => 'nullable|date',
            'progress' => 'required|in:active,done',
            'next_schedule_date' => 'nullable|date',
        ]);
        patiant_list::create($request->all());
        // dd($list);
        return view('Admin.patiant-list', compact('patiant_lists'));
        // return redirect()->route('Admin.patiant-list')->with('success', 'Appointment successfully submitted!');
    }
    public function edit_patiant($id)
    {
        $patiant_list = patiant_list::findOrFail($id);
        return view('Admin.edit_patiant', compact('patiant_list'));
    }

    public function update_patiant(Request $request, patiant_list $patiant_list)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'village' => 'nullable|string|max:255',
            'gender' => 'nullable|string|in:male,female,other',
            'treatment' => 'required|string',
            'treatment_status' => 'nullable|string|in:in-progress,completed,not-started',
            'totle_fees' => 'nullable|numeric|min:0',
            'paid_fees' => 'nullable|numeric|min:0',
            'pending_fees' => 'nullable|numeric|min:0',
            'next_schedule_date' => 'nullable|date',
            'progress' => 'required|in:active,done',
        ]);

        // Update the patient
        $patiant_list->update($validatedData);

        // If the request is AJAX, return the updated table content
        if ($request->ajax()) {
            // Get the latest patient list (you can also apply pagination if needed)
            $patiant_lists = patiant_list::paginate(5);

            // Return the updated view for the patient list
            return response()->json([
                'status' => 'success',
                'view' => view('Admin.patiant_list', compact('patiant_lists'))->render()
            ]);
        }

        // If it's not an AJAX request, redirect to the patient list page
        return redirect()->route('patiant_list')->with('success', 'Patient updated successfully.');
    }


    // public function destroy($id)
    // {
    //     // Find the appointment by ID and delete it
    //     patiant_list::destroy($id);

    //     // Redirect back to the list page with a success message
    //     // return view('admin.edit_patiant');
    //     return redirect()->route('Admin.patiant-list')->with('success', 'Appointment deleted successfully!');
    // }


    public function destroy($id)
    {
        $patiant = patiant_list::findOrFail($id);
        $patiant->delete();

        // Check if the request is an AJAX call
        if (request()->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Patient deleted successfully.'
            ]);
        }

        // For non-AJAX requests, redirect back
        return redirect()->back()->with('success', 'Patient deleted successfully.');
    }


    public function employee_list(Request $request)
    {

        // Fetch the 'name' query parameter
        $name = $request->input('name');

        // Query the Employee model with filtering logic
        $employees = Employee::query();

        if ($name) {
            $employees->where('name', 'like', "%$name%");
        }

        // Get the filtered results with pagination
        $employees = $employees->paginate(10);
        return view('Admin.employee', compact('employees'));
    }

    public function employee_create()
    {
        return view('Admin.create_employee');
    }

    public function employee_store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'mobile_number' => 'required|string|max:15',
            'city_village' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'date_of_join' => 'required|date',
            'date_of_leave' => 'nullable|date|after_or_equal:date_of_join',
        ]);

        // Save the validated data
        Employee::create($validatedData);

        // Redirect to the employee list page with a success message
        return redirect()->route('employee_list');
    }


    public function edit_employee($id)
    {
        $employee = Employee::findOrFail($id);
        return view('Admin.edit_employee', compact('employee'));
    }

    public function update_employee(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'mobile_number' => 'required|string|max:15',
            'city_village' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'date_of_join' => 'required|date',
            'date_of_leave' => 'nullable|date|after_or_equal:date_of_join',
        ]);

        $employee->update($validatedData);

        return redirect()->route('employee_list')->with('success', 'Employee updated successfully.');
    }

    public function delete_employee($id)
    {
        // Find the employee by ID
        $employee = Employee::findOrFail($id);

        // Delete the employee record
        $employee->delete();

        return redirect()->route('employee_list');
    }

    public function services_list()
    {
        $services = Service::all();
        foreach ($services as $service) {
            $service->process = json_decode($service->process, true); // Convert JSON to array
            $service->pros = json_decode($service->pros, true);
            $service->cons = json_decode($service->cons, true);
        }
        return view('Admin.services', compact('services'));
    }
    public function create_services()
    {
        return view('Admin.create_services');
    }
    public function services_store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'process' => 'nullable|array',
            'duration' => 'nullable|array',
            'pros' => 'nullable|array',
            'cons' => 'nullable|array',
        ]);

        Service::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'process' => json_encode($validated['process'] ?? []),
            'duration' => json_encode($validated['duration'] ?? []),
            'pros' => json_encode($validated['pros'] ?? []),
            'cons' => json_encode($validated['cons'] ?? []),
        ]);

        return redirect()->route('services_list')->with('success', 'Service created successfully.');
    }

}
