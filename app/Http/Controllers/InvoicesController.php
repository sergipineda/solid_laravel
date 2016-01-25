<?php
namespace App\Http\Controllers;
use App\Invoices;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class InvoicesController extends Controller
{
    //
    public function index()
    {
        $invoices = $this->invoicesTransform->transform(
            $this->repo->all());
        return view('invoices',compact('invoices'));

//        return view('invoices',$data);
    }

    public function __construct(UserRepository $repo)
    {

        $this->repo = $repo;
    }
    private function transform($database_invoices)
    {
        //Nothing here -> no transformations example
        return $database_invoices;
    }
}