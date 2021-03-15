<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
    
    	// $users = DB::table('users')->get();
    	// otra opción con elocuent
    	
    	$users = User::all();
    	
    	$title = 'Listado de Usuarios';
    	
    	// dd(compact('title', 'users'));
    	
    	return view('users.index') 
    		->with('users', $users)
    		->with('title', $title);
    	
    	/* Equivalente:
    	return view('users.index', compact('title', 'users'));
    	*/
    	/* Equivalente:
    	return view('users', [
    		'users' => $users,
    		'title' => 'Listado de Usuarios'
    	]);
    	*/
    	/* Equivalente:
    	return view('users') 
    		->with('users', $users)
    		->with('title', 'Listado de Usuarios');
    	*/ 
    }
    
    /* 
    public function show($id){
    	$title = 'Detalle del usuario';
	$content = 'Detalle del usuario: '.$id;

	// $users = User::get('id', $id);
        
        /*
         * // Interesante para cuando quieres especificar una vista para un error determinado
        $user = User::find($id);
        
        if ($user == null){
            // return view('errors.404');
            return response()->view('errors.404',[],404);
        }
         
        return view('users.show', compact('title', 'user'));
         * 
         */
        
        /* 
        // Versión 2 de lo mismo (si no encuentra el usuario da error directamente)
        $user = User::findOrFail($id);
        return view('users.show', compact('title', 'user'));
         * 
         */
    /*
    	
    	//     	return 'Detalle del usuario: '.$id;
    }
    */ 
    
    public function show(User $user){
    	$title = 'Detalle del usuario';
	return view('users.show', compact('title', 'user'));
        
    }
    
    public function create(){
    	$title = 'Crear usuario';
	return view('users.create');
    }
    
    public function store() {

        $data = request()->all();

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return redirect()->route('users');
    }

}
