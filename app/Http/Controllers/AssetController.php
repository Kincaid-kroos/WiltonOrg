<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;

class AssetController extends Controller
{
    public function index()
    {
        $assets = Asset::all();
        return view('assets.index', compact('assets'));
    }

    public function create()
    {
        return view('assets.create');
    }

    public function store(Request $request)
    {
        // Validate and store the asset data
        $request->validate([
            // Add validation rules for asset fields
        ]);

        Asset::create([
            // Assign request data to asset fields
        ]);

        return redirect()->route('assets.index')->with('success', 'Asset created successfully!');
    }

    public function show($id)
    {
        $asset = Asset::findOrFail($id);
        return view('assets.show', compact('asset'));
    }

    public function edit($id)
    {
        $asset = Asset::findOrFail($id);
        return view('assets.edit', compact('asset'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the asset data
        $request->validate([
            // Add validation rules for asset fields
        ]);

        $asset = Asset::findOrFail($id);
        $asset->update([
            // Update asset fields with request data
        ]);

        return redirect()->route('assets.index')->with('success', 'Asset updated successfully!');
    }

    public function destroy($id)
    {
        $asset = Asset::findOrFail($id);
        $asset->delete();

        return redirect()->route('assets.index')->with('success', 'Asset deleted successfully!');
    }
}
