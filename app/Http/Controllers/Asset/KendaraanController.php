<?php
namespace App\Http\Controllers\Asset;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index(){
        return view('asset.index');
    }

    public function test(){
        return "test fungsi";
    }
    
    public function tambah(){
        return "fungsi tambah";
    }
}
