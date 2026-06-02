<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
    public function index()
    {
        $records    = Auth::user()->records;
        return view('records.index', ['records' => $records]);
    }

    public function create()
    {
        return view('records.create');
    }

    public function store(Request $request)
    {
        $validated  = $request->validate([
            'date'          => 'required|date',
            'category'      => 'required|string|max:50',
            'description'   => 'nullable|string|max:255',
            'amount'        => 'required|integer|min:0',
            'type'          => 'required|in:expense,income'
        ]);

        $validated['user_id'] = Auth::id();

        Record::create($validated);

        return redirect()->route('records.index')->with('success', '収支を登録しました。');
    }

    public function destroy(Record $record)
    {
        if ($record->user_id !== Auth::id()) {
            abort(403);
        }    

        $record->delete();

        return redirect()->route('records.index')->with('success', '収支を削除しました。');
    }
}
