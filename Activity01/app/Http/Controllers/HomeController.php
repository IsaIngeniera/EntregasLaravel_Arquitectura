<?php 
  
namespace App\Http\Controllers; 
 
use Illuminate\View\View; 
  
class HomeController extends Controller 
{ 
    public function index(): View 
    { 
        return view('home.index'); 
    } 


    public function contact(): View {
    return view('home.contact', [
        'title'       => "Contact - Online Store",
        'subtitle'    => "Contact us",
        'Name'        => "Author: Isabella Ocampo Sánchez",
        'Address'     => "Address: Cll 28a 45b-41",
        'Phone'       => "Phone: 3174860858",
    ]);
}
}