<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth;
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
//$emailUnique=$this->email($email);
//$user->email =$emailUnique;
$user->email =$email;
$user->nom = $nom;
$user->prenom = $prenom;
$user->password = Hash::make($password);
$user->save();
Auth::login($user);
 $request->session()->put('user', $user);
return redirect()->route('login');
}

//email unique
// public function email(string $imail)
// {
//     $imailEtu = Student::find($imail);
//     $imailStaf = Librarian::find($imail);
//     if (!$imailStaf && $imailEtu ) {
//         return $imail;
//     }else{
//         return redirect()->route('login');
//     }
// }


}