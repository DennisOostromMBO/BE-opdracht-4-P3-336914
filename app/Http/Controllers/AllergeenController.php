<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllergeenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = collect(DB::select('CALL spGetAllAllergenen()'));
        $allergenen = $data->pluck('AllergeenNaam')->unique()->values();

        // Only filter if allergeen is selected and not empty
        if ($request->filled('allergeen')) {
            $data = $data->filter(function ($item) use ($request) {
                return $item->AllergeenNaam === $request->allergeen;
            })->values();
        }

        return view('allergenen.index', [
            'data' => $data,
            'allergenen' => $allergenen
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = DB::select('CALL spGetAllContact()');
        $item = collect($data)->firstWhere('Id', $id);

        if (!$item) {
            abort(404);
        }

        return view('allergenen.show', compact('item'));
    }
}