<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController
{
    public function index(Request $request) {
        $data = Data::all();

        return view('data', compact('data'));
    }

    public function getData(Request $request)
    {
        $search = $request->input('search.value');
        $start = $request->input('start');
        $length = $request->input('length');

        $query = Data::query();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $total = $query->count();

        $data = $query->offset($start)
                      ->limit($length)
                      ->get();

        return response()->json([
            'draw' => intval($request->input('draw')),
            'recordsTotal' => Data::count(),
            'recordsFiltered' => $total,
            'data' => $data,
        ]);
    }
}
