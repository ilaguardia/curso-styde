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
    
    public function show($id){
    	$title = 'Detalle del usuario';
	$content = 'Detalle del usuario: '.$id;

	$users = User::get('id', $id);

	// dd(compact('title', 'id'));
    
    	return view('users.show', compact('title', 'content', 'id'));
    	

    	
    	//     	return 'Detalle del usuario: '.$id;
    }
    
    public function create(){
    	return 'Create usuario nuevo';
    }
}
