<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as CollectionController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
}Route::controller('collection','CollectionController');

?php>
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\CollectionController;

class AdminController extends Controller {

    public function index()
    {
        return view('admin.index');
    }
?>