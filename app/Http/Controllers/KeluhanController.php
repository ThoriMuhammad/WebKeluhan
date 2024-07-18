<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class KeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Keluhan::all();
        return view('datakeluhan',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'keluhan' => 'required|string|max:255',
            'TKP' => 'required|string|max:255',
            'saran' => 'required|string|max:255',
            'Tanggal_Keluhan' => 'required|date',
            'name_file' => 'required|string|max:255',
        ]);
    
            Keluhan::create($request->all());
            return redirect()->route('keluhans.index')->with('success', 'Keluhan created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
         $keluhan=Keluhan::findOrFail($id);
        // dd($keluhan);

         return view('editkeluhan', compact('keluhan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // $keluhan->update($request->all());
    $request->validate([
        'keluhan' => 'required|string|max:255',
        'TKP' => 'required|string|max:255',
        'saran' => 'required|string|max:255',
        'Tanggal_Keluhan' => 'required|date',
        'name_file' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    
    $keluhan=Keluhan::findOrFail($id);
    $keluhan->update($request->all());

    return redirect()->route('index.keluhan')->with('success', 'Keluhan updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $keluhan = Keluhan::findOrFail($id);
        $keluhan->delete();
    
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }

    public function dashboard()
    {
        $data=Keluhan::all();
        $user=User::where('nik',session('nik'))->first();

        return view('dashboard',compact('data','user'));
    }

    public function dashboardAdmin()
    {
        $data=Keluhan::all();
        $user=User::where('nik',session('nik'))->first();
        
        return view('admin.formadmin',compact('data'));


    }

    public function updateAdmin(Request $request, $id)
    {
        // $keluhan->update($request->all());
        $request->validate([
            'keluhan' => 'required|string|max:255',
            'TKP' => 'required|string|max:255',
            'saran' => 'required|string|max:255',
            'Tanggal_Keluhan' => 'required|date',
            'name_file' => 'nullable',
            'name_file' => 'nullable',
        ]);

        $keluhan = Keluhan::findOrFail($id)->first();
        $keluhan->update($request->all());

        return redirect()->route('dashboard.admin')->with('success', 'Keluhan updated successfully.');
    }

    public function editadmin(Request $request,$id)
    {
         $keluhan=Keluhan::findOrFail($id);
        // dd($keluhan);

         return view('admin/editadmin', compact('keluhan'));
    }

    public function updateStatus(Request $request, $id)
    {
        $keluhan = Keluhan::find($id);
        if ($keluhan) {
            $keluhan->status = $request->status;
            $keluhan->save();
            return redirect()->back()->with('success', 'Status berhasil diperbarui');
        }
        return redirect()->back()->with('error', 'Keluhan tidak ditemukan');
    }

}
