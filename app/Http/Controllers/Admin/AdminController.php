<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    
    public function fileuploader($file,$path){
        $filename=time().'-'.$file->getClientOriginalName();
        $dir=public_path("admin/img/uploads/".$path."/");
        $files=$file->move($dir,$filename);
        return "admin/img/uploads/".$path."/".$filename;
    }

}
