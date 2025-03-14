<?php

namespace App\Http\Controllers;
use App\Models\Venues;
use Illuminate\Http\Request;
use App\Http\Requests\Venue\VenueCreateRequest;
use App\Http\Requests\Venue\VenueUpdateRequest;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $venues= venues::all();
        return view('backend.venues.index', compact('venues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.venues.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VenueCreateRequest $request)
{
    $data = $request->all();

    if ($request->hasFile('layout')) {
        $imageFile = $request->file('layout');
        $imageFileName = $imageFile->getClientOriginalName();
        $image = $imageFile->move('public/upload/venue/layout', $imageFileName);
        $data['layout'] = $imageFileName;
    }

    // Convert facilities and accessibility arrays to JSON strings
    $data['facilities'] = json_encode($data['facilities']);
    $data['accessibility'] = json_encode($data['accessibility']);

    $venue = Venues::create($data);

    return redirect()->route('venue.index')->with('success', 'Venue added successfully!');
}


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $venues= venues::find($id);
        return view('backend.venues.show', compact('venues'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VenueUpdateRequest $request, $id)
{
    $venue = Venues::findOrFail($id); // Find the venue by its ID

    // Store update request data in $venues variable
    $venues = $request->all();

    // Convert accessibility and facilities arrays to JSON strings
    $venues['accessibility'] = json_encode($venues['accessibility']);
    $venues['facilities'] = json_encode($venues['facilities']);

    // Update the venue attributes with the updated request data
    $venue->update($venues);

    return redirect()->route('venue.index', $id)->with('success', 'Update successful!');
}


    /**
     * Update the specified resource in storage.
     */
    public function update($id)
{
    $venues = Venues::find($id);
    return view('backend.venues.update', compact('venues'));
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $venues = venues::find($id); // Find the event by ID

            // Perform any additional checks or authorization here

            $venues->delete(); // Delete the event

            return redirect()->route('venue.index')->with('success', 'Event deleted successfully');
        } catch (\Exception $e) {
            // Handle exceptions, e.g., if the event is not found
            return redirect()->route('venue.index')->with('error', 'Failed to delete the event');
        }

    }
}
