<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculatorController extends Controller
{
    public function calculate(Request $request)
    {
        try {
            $data = $request->all();

            $songPrice = 450;
            $total = $data['songs'] * $songPrice;

            DB::beginTransaction();
            $contact = Contact::create([
                'name' => $data['name'],
                'surname' => $data['surname'],
                'email' => $data['email'],
                'songs' => $data['songs'],
                'subject' => 'Presupuesto de trabajo',
                'body' => 'Enviado desde el calculador de trabajos de la web de Sonic Drive Studios',
                'members' => $data['members'],
                'estimation' => $total,
                'band' => $data['band'],
                'genre' => $data['genre'],
                'is_read' => 0,
            ]);

            // Mail ?

            DB::commit();

            return $total;

        } catch (\Exception $e) {
            DB::rollBack();
            return 0;
        }
    }
}
