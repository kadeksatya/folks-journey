<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Uploads\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class BannerController extends Controller
{

    private $banners;

    function __construct(Banner $banner)
    {
        $this->banners = $banner;
    }

    function index() {
        return view('admin.pages.masterdata.banner.index', [
            'page_title' => 'Banner'
        ]);
    }
    function create()
    {
        $data = null;
        return view('admin.pages.masterdata.banner.form', [
            'page_title' => 'Create Banner',
            'data' => $data
        ]);
    }
    function edit($id)
    {
        $data = $this->banners->find($id);
        return view('admin.pages.masterdata.banner.form', [
            'page_title' => 'Edit Banner',
            'data' => $data
        ]);
    }

    function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $image = null;

            if($request->file('image') != " "){
                $image = Images::uploadImageToStorage($request->file('image'));
            }

            $formdata = [
                'title' => $request->title,
                'link' => $request->link,
                'description' => $request->description,
                'slug' => Str::slug($request->slug),
                'image' => $image,
            ];

            $this->banners->create($formdata);
            DB::commit();
            return $this->success('admin.masterdata.banner.index', 'Data save successfully !');
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
            $banner = $this->banners->whereId($id)->first();
            $image = $banner ? $banner->image : null;

            if ($request->file('image') != " ") {
                $image = Images::uploadImageToStorage($request->file('image'));
            }

            $formdata = [
                'title' => $request->title,
                'link' => $request->link,
                'description' => $request->description,
                'slug' => Str::slug($request->slug),
                'image' => $image,
            ];

            $this->banners->whereId($id)->update($formdata);
            DB::commit();
            return $this->success('admin.masterdata.banner.index', 'Data save successfully !');
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
            $this->banners->whereId($id)->delete();
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

            $data =  $this->banners->query();

            return DataTables::of($data)
            ->addColumn('action', function($data){
                $action = '';
                $action .= '<center><a href="' . route('admin.masterdata.banner.edit', $data->id) . '" class="btn btn-dark btn-sm"><i class="fa fa-pen"></i></a>';
                $action .= ' ';
                $action .= '<button class="btn btn-danger btn-sm delete-item" data-url="' . route('admin.masterdata.banner.destroy', $data->id) . '"><i class="fa fa-trash"></i></button></center>';
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
