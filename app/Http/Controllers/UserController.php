<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller {

    public function index() {

        // $users = DB::table('users')->get();
        // otra opción con elocuent

        $users = User::all()->sortByDesc("id");

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

    public function show(User $user) {
        $title = 'Detalle del usuario';

        $fields = [
            'name',
            'email',
            'password',
        ];

        return view('users.show', compact('title', 'user', 'fields'));
    }

    /*
      public function show(User $id){
      $title = 'Detalle del usuario';

      $content = 'Detalle del usuario: ' . $user->id;

      // $user = User::findOrFail($id); // si no encuentra usuario devuelve 404 - estudiar si mejor redirección a .com

      return view('users.show', compact('title', 'user'));

      } */

    public function create() {
        $title = 'Crear usuario';
        return view('users.create');
    }

    public function store() {

        /* ESTE SISTEMA SERÍA PARA VALIDAR UNO A UNO CADA CAMPO
         * 
         * $data = request()->all();

          // Para controlar que no se da de alta un usuario sin los campos required
          if (empty($data['name'])){
          return redirect(route('users.create'))->withErrors([
          "name" => 'Este campo es obligatorio',
          ]);
          } */

        // dd($data);


        $data = request()->validate([
            'name' => 'required',
            // 'email' => 'required|email', // lo mismo que abajo. Pero la parte de unique da error
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'between:6,30'],
                ], [
            'name.required' => 'Este campo es obligatorio',
            'email.required' => 'Este campo es obligatorio',
            'email.unique' => 'Ya existe un usuario con ese email',
            'password.required' => 'Este campo es obligatorio',
            'password.between' => 'La contraseña debe tener al menos 6 dígitos y menos de 30',
                ]
        );

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        /* $user = new User;
        $data['name'] = $user->name = $request->name;
        $data['email'] = $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(100);
        $data['confirm_token'] = $user->confirm_token = str_random(100);
        $user->save(); */

        Mail::send('mails.register', ['data' => $data], function ($mail) use ($data) {
            $mail->subject('Confirma tu cuenta');
            $mail->to($data['email'], $data['name']);
        });

        return redirect()->route('users');
    }

    public function edit(User $user) {
        $title = 'Editar usuario ';

        $fields = [
            'name',
            'email',
            'password',
        ];
        
        /* $fields = [
            'prof_relation_id',
            'first_visit_date',
            'dni',
            'name',
            'surname',
            'certification',
            'birthdate',
            'telephone',
            'email', // unique: nombreTabla, nombreColumna -- Ver documentacion validaciones laravel
            'job',
            'address',
            'cp',
            'city',
            'province',
            'country',
            'emergency_contact',
            'emergency_telephone',
            'known_by',
            'certification',
            'certifier',
            'certification_id',
            'dives',
            'last_dive',
            'insurance_company',
            'insurance_end_date',
            'read_risk',
            'read_rental',
            'mailing_list',
            'allow_photos',
            'friend_of',
            'password',
        ]; */

        return view('users.edit', compact('title', 'user', 'fields'));
    }
    
    public function update(User $user) {
        $title = 'Update usuario ';

        $fields = [
            'name',
            'email',
            'password',
        ];
        
        // $data = request()->all(); // intentar no usar request()->all() puede ser peligroso
        
        $data = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email'], // unique: nombreTabla, nombreColumna -- Ver documentacion validaciones laravel
            'password' => '', // ['required', 'between:6,30'], quitamos password en la validación
                ], [
            'name.required' => 'Este campo es obligatorio',
            'email.required' => 'Este campo es obligatorio',
            'email.unique' => 'Ya existe un usuario con ese email',
        ]); 
        
        if ($data['password'] != null){
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }
        
        $user->update($data);

        // return redirect(route('users.show', $user->id));
        return redirect()->route('users.show', ['user' => $user]); // lo mismo de arriba pero pasando el usuario en lugar del id
    }

}
