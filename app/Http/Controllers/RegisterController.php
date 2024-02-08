<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Librarian ;

class RegisterController extends Controller{
public function register(Request $request){
 $nom=$request->input('first_name');
$prenom=$request->input('last_name');
$email=$request->input('email');
$password=$request->input('password');
$expectedEmailPattern = "/^" . preg_quote($nom, '/') . preg_quote($prenom, '/') . "@youbook\.com$/";

if (preg_match($expectedEmailPattern,$email)) {

  $user=new Librarian;
}else{
   
    $user=new Student;
}
$user->nom = $nom;
$user->prenom = $prenom;
$user->email =$email;
$user->password =$password;
$user->save();
return redirect()->route('login');
}



}