<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Admin\TimeSlotController;
use App\Http\Controllers\Admin\AppointmentsController;
use App\Http\Controllers\Admin\dashboardController;
// use App\Http\Controllers\AppointmentController;
// Route::get('/', function () {
//     return view('home')->name('main.page');
// });
// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

});

// Public routes (guest middleware)
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('account.login');
    Route::post('/login/authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
    Route::get('/register', [LoginController::class, 'register'])->name('account.register');
    Route::post('/register/process', [LoginController::class, 'processRegister'])->name('account.processRegister');
    Route::get('/', [AppointmentController::class, 'home'])->name('home');
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::post('/appointments/book', [AppointmentController::class, 'book'])->name('appointments.book');
    Route::get('/contact', [AppointmentController::class, 'contact'])->name('contact');
    Route::get('star', function () {
        return view('star');
    });
});

Route::post('/logout', [LoginController::class, 'logout'])->name('account.logout');
// Protected routes (auth middleware)
Route::group(['middleware' => 'auth'], function () {

    Route::get('/login_list', [LoginController::class, 'login_list'])->name('login_list');
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('time-slots', [TimeSlotController::class, 'index'])->name('time-slots.index');
    Route::get('time-slots/create', [TimeSlotController::class, 'create'])->name('time-slots.create');
    Route::post('time-slots', [TimeSlotController::class, 'store'])->name('time-slots.store');
    Route::get('time-slots/{bookTimeSlot}/edit', [TimeSlotController::class, 'edit'])->name('time-slots.edit');
    Route::put('time-slots/{bookTimeSlot}', [TimeSlotController::class, 'update'])->name('time-slots.update');
    Route::delete('time-slots/{bookTimeSlot}', [TimeSlotController::class, 'destroy'])->name('time-slots.destroy');
    Route::get('/admin-appointments', [AppointmentsController::class, 'index'])->name('appointment.list');
    Route::delete('/delete_appointment/{id}', [AppointmentsController::class, 'delete_appointment'])->name('delete.appointment');

    // Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('/patiant_list', [dashboardController::class, 'patiant_list'])->name('patiant_list');
    Route::get('/create_patiant', [dashboardController::class, 'create_patiant'])->name('create_patiant');
    Route::post('/store_patiant', [dashboardController::class, 'store_patiant'])->name('store_patiant');
    Route::get('/edit_patiant/{id}', [dashboardController::class, 'edit_patiant'])->name('edit_patiant');
    Route::patch('/update_patiant/{patiant_list}', [dashboardController::class, 'update_patiant'])->name('update_patiant');
    Route::delete('/appointments/delete/{id}', [dashboardController::class, 'destroy'])->name('delete.patiant');
    Route::get('/employee', [dashboardController::class, 'employee_list'])->name('employee_list');
    Route::post('/employee', [dashboardController::class, 'employee_store'])->name('employee_store');
    Route::get('/create_employee', [dashboardController::class, 'employee_create'])->name('create_employee');
    Route::get('/edit_employee/{id}', [dashboardController::class, 'edit_employee'])->name('edit_employee');
    Route::patch('/update_employee/{employee}', [dashboardController::class, 'update_employee'])->name('update_employee');
    Route::delete('/delete_employee/{id}', [dashboardController::class, 'delete_employee'])->name('delete_employee');
});





// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('time-slots', [TimeSlotController::class, 'index'])->name('time-slots.index');
//     Route::get('time-slots/create', [TimeSlotController::class, 'create'])->name('time-slots.create');
//     Route::post('time-slots', [TimeSlotController::class, 'store'])->name('time-slots.store');
//     Route::get('time-slots/{bookTimeSlot}/edit', [TimeSlotController::class, 'edit'])->name('time-slots.edit');
//     Route::put('time-slots/{bookTimeSlot}', [TimeSlotController::class, 'update'])->name('time-slots.update');
//     Route::delete('time-slots/{bookTimeSlot}', [TimeSlotController::class, 'destroy'])->name('time-slots.destroy');
// });