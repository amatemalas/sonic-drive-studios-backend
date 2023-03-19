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

            $songPrice = 350;
            $total = $data['songs'] * $songPrice;

            if ($total === 0) {
                $total = 10 * $songPrice;
            }

            DB::beginTransaction();
            $contact = Contact::updateOrCreate(['email' => $data['email']], [
                'name' => $data['name'],
                'surname' => $data['surname'],
                'email' => $data['email'],
                'songs' => $data['songs'],
                'subject' => 'Presupuesto de trabajo',
                'body' => 'Enviado desde el calculador de trabajos de la web de Sonic Drive Studios',
                'instruments' => $data['instruments'],
                'estimation' => $total,
                'is_read' => 0,
            ]);
            DB::commit();

            return $total;

        } catch (\Exception $e) {
            DB::rollBack();
            return 0;
        }
    }
}
