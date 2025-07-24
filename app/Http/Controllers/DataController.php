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

    // Sorting
    $orderColumnIndex = $request->input('order.0.column');
    $orderDirection = $request->input('order.0.dir');

    // Match column index to actual column names in your table
    $columns = ['id', 'name', 'email']; // Adjust to match your table columns
    $orderColumn = $columns[$orderColumnIndex] ?? 'id'; // Default to 'id' if index invalid

    $query = Data::query();

    // Filtering
    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('name', 'like', "%{$search}%")
              ->orWhere('email', 'like', "%{$search}%");
        });
    }

    $total = $query->count();

    // Apply sorting, pagination
    $data = $query->orderBy($orderColumn, $orderDirection)
                  ->offset($start)
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
