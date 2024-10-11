<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Contact;
use App\Uploads\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ContactController extends Controller
{

    private $contacts;

    function __construct(Contact $contact)
    {
        $this->contacts = $contact;
    }

    function index() {
        return view('admin.pages.contact.index', [
            'page_title' => 'Contact'
        ]);
    }
    function getdata()
    {
        try {

            $data =  $this->contacts->query();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $action = '';
                $action .= '<center><a href="' . route('admin.contact.edit', $data->id) . '" class="btn btn-dark btn-sm"><i class="fa fa-pen"></i></a>';
                $action .= ' ';
                $action .= '<button class="btn btn-danger btn-sm delete-item" data-url="' . route('admin.contact.destroy', $data->id) . '"><i class="fa fa-trash"></i></button></center>';
                return $action;
            })
            ->rawColumns(['action'])->make(true);

        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong - ' . ' ' . $th->getMessage()
            ], 500);
        } catch (\Exception $th) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong - ' . ' ' . $th->getMessage()
            ], 500);
        }
    }

}
