<?php
namespace laravelselect2\select2\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class select2Controller extends Controller
{
	public function index(Request $request)
	{
		$message='welcome';
		return view('select2::index',compact('message'));		
	}	
}
?>
