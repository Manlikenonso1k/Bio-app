<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;

class CvController extends Controller
{
    // Show all CVs for the logged-in user
    public function index()
    {
        $cvs = auth()->user()->cvs()->latest()->get();
        return view('cv.index', compact('cvs'));
    }

    // Show form to create a CV
    public function create()
    {
        return view('cv.create');
    }

    // Store a new CV
    public function store(Request $request)
    {
        // Validate incoming data
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'summary' => 'required',
        ]);

        // Create a new CV record linked to the logged-in user
        Cv::create([
            'user_id' => auth()->id(),
            'name' => $data['name'],
            'email' => $data['email'],
            'summary' => $data['summary'],
        ]);

        // Redirect back to the create CV page with success message
        return redirect()->route('cv.create')->with('success', 'CV saved successfully!');
    }

    // Show form to edit a CV
    public function edit(Cv $cv)
    {
        $this->authorize('update', $cv);
        return view('cv.edit', compact('cv'));
    }

    // Update a CV
    public function update(Request $request, Cv $cv)
    {
        $this->authorize('update', $cv);

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'summary' => 'required',
        ]);

        $cv->update($data);

        return redirect()->route('cv.index')->with('success', 'CV updated!');
    }

    // Delete a CV
    public function destroy(Cv $cv)
    {
        $this->authorize('delete', $cv);
        $cv->delete();

        return redirect()->route('cv.index')->with('success', 'CV deleted!');
    }
}
