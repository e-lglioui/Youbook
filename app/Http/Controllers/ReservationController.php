<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('reservation.create');
    }

 
    public function store(Request $request)
    {
        // Validez les données du formulaire si nécessaire
        // $request->validate([
        //     'nom' => 'required|string',
        //     'email' => 'required|email',
        //     'date_reservation' => 'required|date',
        // ]);

        Reservation::create([
            'nom' => $request->input('nom'),
            'email' => $request->input('email'),
            'date_reservation' => $request->input('date_reservation'),
            'livre_id' => 8,
            'etudiant_id' => 1,
        ]);

        return redirect()->route('reservation.create')->with('success', 'Réservation effectuée avec succès!');
    }

    public function show(string $id)
    {
        
    }

 
    public function edit(string $id)
    {
        
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
