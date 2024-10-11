<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Settings;
use App\Uploads\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class SettingController extends Controller
{

    private $settings;

    function __construct(Settings $setting)
    {
        $this->settings = $setting;
    }

    function index() {
        $data = $this->settings->first();
        return view('admin.pages.setting.form', [
            'page_title' => 'Setting Page',
            'data' => $data
        ]);
    }

    function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $image = null;

            if($request->file('logo') != " "){
                $image = Images::uploadImageToStorage($request->file('logo'));
            }

            $formdata = [
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'logo' => $image,
            ];

            if($request->id != " "){
                $this->settings->whereId($request->id)->update($formdata);
            }else{
                $this->settings->create($formdata);
            }

            DB::commit();
            return $this->success('admin.setting.index', 'Data save successfully !');
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->error('Something went wrong' . ' - ' . $th->getMessage());
        } catch (\Exception $th) {
            DB::rollBack();
            return $this->error('Something went wrong' . ' - ' . $th->getMessage());
        }
    }

}
