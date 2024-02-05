<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create()
    {
        return view('reservation');
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
        ]);

        return redirect()->route('reservation.create')->with('success', 'Réservation effectuée avec succès!');
    }
}
