<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        $cvs = auth()->user()->cvs()->latest()->get();
        return view('cv.index', compact('cvs'));
    }

    public function create()
    {
        return view('cv.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'summary' => 'required',
        ]);

        Cv::create([
            'user_id' => auth()->id(),
            'name' => $data['name'],
            'email' => $data['email'],
            'summary' => $data['summary'],
        ]);

        return redirect()->route('cv.create')->with('success', 'CV saved successfully!');
    }

    public function edit(Cv $cv)
    {
        $this->authorize('update', $cv);
        return view('cv.edit', compact('cv'));
    }

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

    public function destroy(Cv $cv)
    {
        $this->authorize('delete', $cv);
        $cv->delete();

        return redirect()->route('cv.index')->with('success', 'CV deleted!');
    }
}
