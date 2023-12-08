<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch; // Use singular for the model name
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class batchController extends Controller
{
    public function index(): View
    {
        $batches = Batch::all();
        return view('batches.index')->with('batches', $batches);
    }

    public function create(): View
    {
        return view('batches.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Batch::create($input);
        return redirect('batches')->with('flash_message', 'Batch Added!');
    }

    public function show(string $id): View
    {
        $batch = Batch::find($id);
        return view('batches.show')->with('batch', $batch);
    }

    public function edit(string $id): View
    {
        $batch = Batch::find($id);
        return view('batches.edit')->with('batch', $batch);
    }

    public function update(Request $request, string $id):RedirectResponse
    {
        $batch = Batch::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('batches')->with('flash_message', 'batch Updated!');
    }
    public function destroy(string $id):RedirectResponse
    {
        Batch::destroy($id);
        return redirect('batches')->with('flash_message', 'batch deleted!'); 
    }
}
