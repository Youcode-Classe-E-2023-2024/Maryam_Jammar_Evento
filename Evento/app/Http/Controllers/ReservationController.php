<?php

namespace App\Http\Controllers;

use App\Mail\NewEventNotification;
use App\Mail\Reservation;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function paiement($id)
    {
        $event = Event::find($id);
        return view('paiement', compact('event'));
    }


    /***
     * Envoyer un email apres la reservation
     */
    public function buy($id)
    {
        $user = Auth::user();

        $event = Event::find($id);

        Mail::to($user->email)->send(new Reservation($event));

        return back()->with('success', 'Email sent successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
