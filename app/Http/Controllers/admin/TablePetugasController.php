<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TablePetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $User = DB::table('users')->orderBy('id', 'desc')->get();

        if (empty(Auth::user()) || Auth::user()->role == 'pelanggan') {
            return redirect()->route('beranda');
        } else {
            return view('admin.tablepetugas', ['User' => $User]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tablepetugas#primary');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'jenis_kelamin' => 'required',
            'role' => 'required',

        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'jenis_kelamin' => $request->jenis_kelamin,
            'role' => $request->role,
        ]);

        return redirect()->route('table-petugas.index')
            ->with('success', 'Petugas created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $User = User::find($id);
        return view(
            'admin.editpetugas',
            [
                'User' => $User,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'jenis_kelamin' => 'required',
            'role' => 'required',
        ]);

        $User = User::findOrFail($id);
        // dd($request->all());

        $User->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'jenis_kelamin' => $request->jenis_kelamin,
            'role' => $request->role,
        ]);

        //$tablePaket->update($User);

        return redirect()->route('table-petugas.index')
            ->with('success', 'Petugas updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $User = User::find($id);
        //dd($ruangan);

        $delete = User::where('id', $id)->delete();
        return redirect()->back();
    }
}
