<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothe;
class clothesController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(){
        $clothes = Clothe::all();
       return view('clothes',[
            'clothes' => $clothes,
        ]);

    }
    public function show($id){
        $clothe = Clothe::findOrfail($id);
        return view('details',['clothe'=> $clothe]);
    }
    public function create(){
        return view('create');
            }
    public function store(){

        $clothe = new Clothe();
        $clothe ->email = request('email');
        $clothe->name = request('name');
        $clothe->number = request('number');
        $clothe->save();
        

        return redirect('/');
    }
    public function destroy($id){
        $clothe =Clothe::find($id);
        $clothe->delete();
        return redirect('/clothes');
    }
   
    public function edit($id){
        $clothe = Clothe::find($id);
        return view('edit',['clothe'=> $clothe]);
      
}
public function update($id)
{
    $clothe = Clothe::findOrnew($id);
    $clothe ->email =request('email');
    $clothe->name = request('name');
    $clothe->number = request('number');
    $clothe->save();
    return redirect('/clothes');
    
//     $email = request('email');
//     $name = request('name');
//     $number = request('number');
 

//     // create sql
//    UPDATE clothes SET name ='$name' , email = '$email',number = '$number' WHERE id='$id';
//    return redirect('/clothes');
    
}

}