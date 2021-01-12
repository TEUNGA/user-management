<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\UdemyUser;
use Illuminate\Support\Facades\Log;



class UserController extends Controller
{
    public function index()
    {   $users= UdemyUser::all();
        return view('welcome', compact('users'));
    }

    public function create()
    {
        return view('user.add_user');
    }

    public function store(Request $request)
    {   
        $this->validate(request(),[
        'user_name' => 'required|string|max:255',
        'email_adress' => 'required|string|max:255',
        'phone_number' => 'required|string|max:255',
        
        ]);  
        
        
       
        UdemyUser::create([
            'user_name'=> $request['user_name'],
            'email_adress' => $request['email_adress'],
            'phone_number' => $request['phone_number'],
        ]);
       
       
        return redirect('/') ;
    }


    



    public function show()
    {
        // 
    }

    public function edit(Request $request )
    {
        $user=UdemyUser::find($request['id']);
        
        return  view('user.edit_user', compact('user'));
    }
    public function update(Request $request)
    
    { 
        $this->validate(request(),[
            'user_name' => 'required|string|max:255',
            'email_adress' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            
            ]);  
            
        

            
            $input = $request->all();
            $user=UdemyUser::find($request['id']);
            $user->update( $input);
            
            
           
            
         return  
         redirect('/');
            
    }
    
    public function destroy(Request $request)
    {
       
           $user=UdemyUser::find($request['id']);

    if ($user != null) {
        
            $user->delete();
    
            
           
            return redirect('/');
    }

    return redirect('/')->with(['message'=>'erreur']);
            // Log::info('Showing the service id: ');
             
            
    }
   
}
