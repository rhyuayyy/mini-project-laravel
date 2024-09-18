<?php
namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurants.index', compact('restaurants'));
    }

    public function create()
    {
        return view('restaurants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'cuisine' => 'required|string|max:255',
            'capacity' => 'required|integer|min:0',
        ]);

        Restaurant::create($request->all());
        return redirect()->route('restaurants.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Restaurant $restaurant)
    {
        return view('restaurants.edit', compact('restaurant'));
    }

    public function update(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'cuisine' => 'required|string|max:255',
            'capacity' => 'required|integer|min:0',
        ]);

        $restaurant->update($request->all());
        return redirect()->route('restaurants.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return redirect()->route('restaurants.index')->with('success', 'Data berhasil dihapus');
    }
}
