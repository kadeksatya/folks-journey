<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use App\Uploads\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class FAQController extends Controller
{

    private $faqs;

    function __construct(FAQ $faq)
    {
        $this->faqs = $faq;
    }

    function index() {
        return view('admin.pages.faq.index', [
            'page_title' => 'FAQ'
        ]);
    }
    function create()
    {
        $data = null;
        return view('admin.pages.faq.form', [
            'page_title' => 'Create FAQ',
            'data' => $data
        ]);
    }
    function edit($id)
    {
        $data = $this->faqs->find($id);
        return view('admin.pages.faq.form', [
            'page_title' => 'Edit FAQ',
            'data' => $data
        ]);
    }

    function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $formdata = [
                'title' => $request->title,
                'sort_number' => $request->sort_number,
                'description' => $request->description,
                'slug' => Str::slug($request->slug),
            ];

            $this->faqs->create($formdata);
            DB::commit();
            return $this->success('admin.faq.create', 'Data save successfully !');
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->error('Something went wrong' . ' - ' . $th->getMessage());
        } catch (\Exception $th) {
            DB::rollBack();
            return $this->error('Something went wrong' . ' - ' . $th->getMessage());
        }
    }

    function update(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $formdata = [
                'title' => $request->title,
                'sort_number' => $request->sort_number,
                'description' => $request->description,
                'slug' => Str::slug($request->slug),
            ];

            $this->faqs->whereId($id)->update($formdata);
            DB::commit();
            return $this->success('admin.faq.index', 'Data save successfully !');
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->error('Something went wrong' . ' - ' . $th->getMessage());
        } catch (\Exception $th) {
            DB::rollBack();
            return $this->error('Something went wrong' . ' - ' . $th->getMessage());
        }
    }

    function destroy($id)
    {
        try {
            $this->faqs->whereId($id)->delete();
            return response()->json([
                'success' => true,
                'message' => 'Data has been deleted!'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong - '. ' '.$th->getMessage()
            ], 500);
        } catch (\Exception $th) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong - '. ' '.$th->getMessage()
            ], 500);
        }
    }

    function getdata()
    {
        try {

            $data =  $this->faqs->query();

            return DataTables::of($data)
            ->addColumn('action', function($data){
                $action = '';
                $action .= '<center><a href="' . route('admin.faq.edit', $data->id) . '" class="btn btn-dark btn-sm"><i class="fa fa-pen"></i></a>';
                $action .= ' ';
                $action .= '<button class="btn btn-danger btn-sm delete-item" data-url="' . route('admin.faq.destroy', $data->id) . '"><i class="fa fa-trash"></i></button></center>';
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
