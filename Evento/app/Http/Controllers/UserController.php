<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Pagination\Paginator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $categories = Category::all();
        $LatestEvents = Event::limit(5)->where('status', 'Public')->get();
        $events = Event::where('status', 'Public')->paginate(6);

        return view('welcome', compact('categories', 'LatestEvents', 'events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function statistic()
    {
        $organizer = Auth::user();

        $totalEvents = Event::where('creator', $organizer->id)->count();
        $publicEvents = Event::where('creator', $organizer->id)
            ->where('status', 'Public')->count();
        $LatestEvents = Event::limit(3)->where('creator', $organizer->id)->get();

//        dd($totalEvents);

        return view('organiser.dashboard', compact('totalEvents', 'publicEvents', 'LatestEvents'));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $users = User::paginate(8);
//        $roles = Role::all();
        return view('admin.allusers', compact('users'));
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
