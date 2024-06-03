<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();

        return view('abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:abouts,email',
        'phone' => 'required|string',
        'bio' => 'required|string',
        'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('profile_picture')) {
        $imagePath = $request->file('profile_picture')->store('profile_pictures', 'public');
        $validatedData['profile_picture'] = asset('storage/' . $imagePath);
    }

    About::create($validatedData);

    return redirect()->route('abouts.index')->with('success', 'About information has been successfully stored.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $about = About::first();
        return view('about', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $about = About::find($id);

    return view('about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:abouts,email,' . $id,
        'phone' => 'required|string',
        'bio' => 'required|string',
        'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('profile_picture')) {
        $imagePath = $request->file('profile_picture')->store('profile_pictures', 'public');
        $validatedData['profile_picture'] = $imagePath;
    }

    $about = About::find($id);
    $about->update($validatedData);

    return redirect()->route('abouts.index')->with('success', 'About information has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::find($id);
        $about->delete();

        return redirect()->route('abouts.index')->with('success', 'About information has been successfully deleted.');
    }
}
