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

    public function __construct(RepositoryInterface $repo , InvoicesTransformer $invoicesTransform)
    {
        $this->invoicesTransform = $invoicesTransform;
        $this->repo = $repo;
    }

}