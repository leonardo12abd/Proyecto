<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;



class UserController extends Controller
{

//--------------------- Listar --------------------------------
    public function index()
    {
        $users = User::paginate(4);
        return view('users.index', compact('users'));
    }


//--------------------- Vista Create Users-----------------------
    public function create()
    {
        return view('users.create');
    }
//---------------------- Inicio CRUD ------------------------------------
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'username'=>'required',
            'email'=>'required|email|unique:users',
            'password' =>'required',
            'photo'=>'image|mimes:gif,jpeg,jpg,png',
        ]);

        $user=User::create($request->only('name','username','email','photo')
        +[
            'password'=>bcrypt($request->input('password')),
        ]);
        return redirect()->route('users.index')->with('success','Usuario creado correctamente')
        ;

    }

//------------------- Show Users ---------------------------------
    public function show(User $user)
    {
        //$user = User::findOrFail($id);
        //dd($user);
        return view('users.show',compact('user'));

    }

//------------------- Edit Users ---------------------------------
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

//------------------- Update Users ---------------------------------
    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);
        $data = $request->only('name','username','email','photo');
        if(trim($request->password)=='')
        {
            $data=$request->except('password');
        }
        else{
            $data=$request->all();
            $data['password']=bcrypt($request->password);
        }

        $user->update($data);
        return redirect()->route('users.index')->with('success','Usuario editado exitosamente');
    }

    //------------------- Update Delete ---------------------------------
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('error','Usuario eliminado exitosamente');
    }

//------------------ PDF-----------------------------------------------
//--------------------Funcion PDF Users -------------------------------
    public function pdfusers()
    {
        $users = User::all();
        return view('users.pdfusers', compact('users'));
    }

//-------------------Download PDF ----------------------------------------
//-------------------Funcion DownloadPDFUSERS--------------------------------
    public function downloadPDF()
    {
        $users = User::all();
        $pdf = PDF::loadView('users.pdfusers', compact('users'));
        return $pdf->download('PDF_Users.pdf');

    }


//------------------------Download Excel

public function importExportView()
{
   return view('import');
}

/**
* @return \Illuminate\Support\Collection
*/
public function export()
{
    return Excel::download(new UsersExport, 'users.xlsx');
}

/**
* @return \Illuminate\Support\Collection
*/
public function import()
{
    Excel::import(new UsersImport,request()->file('file'));

    return back();
}



/**Intento */



}
