<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CaseStudy;
use App\Models\Technology;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;


class CaseStudyController extends Controller
{

    public function index()
    {
        $arrdata = CaseStudy::all();
        return view('admin.casestudy.index', compact('arrdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $technology = Technology::all();
        return view('admin.casestudy.create', compact('technology'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        $data->validate([
            'title' => 'required',
            'case_study_short_description' => 'required',
            'case_study_long_description' => 'required',
            'case_study_banner' => 'required',
        ]);

        $case_study_banner = NULL;
        if ($data->hasFile('case_study_banner')) {
            $data->validate([
                'case_study_banner' => 'sometimes|image|mimes:jpg,png,jpeg',
            ]);
            $case_study_banner = $this->imageUploadOnFolder($data->file('case_study_banner'), str_replace(" ", "_", strtolower($data['title'])));
        }

        CaseStudy::create([
            "title" => $data['title'],
            "slug" => str_replace(" ", "_", strtolower($data['title'])),
            "case_study_short_description" => $data['case_study_short_description'],
            "case_study_long_description" => $data['case_study_long_description'],
            "about_title" => $data['about_title'],
            "about_description" => $data['about_description'],
            "technology" => $data['technology'],
            'case_study_banner' => $case_study_banner,
            'created_by' => auth()->user()->id
        ]);

        return redirect("/admin/casestudy")->with('message', 'Record created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $arrData = casestudy::find($id);
        if (empty($arrData)) {
            return redirect('/admin/casestudy')->with('alert', 'No record found.');
        }
        return view('admin.casestudy.edit', compact('arrData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data)
    {
        $data->validate([
            'tech_name' => 'required',
        ]);

        casestudy::where('id', $data['action'])->update([
            'tech_name' => $data['tech_name'],
            'is_active' => $data['is_active'],
            'updated_by' => auth()->user()->id
        ]);

        if ($data->hasFile('logo')) {
            $data->validate([
                'logo' => 'sometimes|image|mimes:jpg,png,jpeg,svg',
            ]);
            $user = casestudy::find($data['action']);
            if ($user->logo != '') {
                $this->deleteImageOnFolder(str_replace(config('app.url'), '', $user->logo));
            }
            $logo = $this->imageUploadOnFolder($data->file('logo'), 'casestudy');
            casestudy::where('id', $data['action'])->update([
                'logo' => $logo,
            ]);
        }
        return redirect("/admin/casestudy")->with('message', 'Record updated successfully.');
    }

    /* change status of the record */
    public function changeStatus($id)
    {

        $status = casestudy::select('id', 'is_active')
            ->where('id', $id)
            ->withTrashed()
            ->first();

        if ($status->is_active == 0) {
            casestudy::where('id', $id)->update([
                'is_active' => 1,
                'deleted_at' => date("Y-m-d H:i:s")
            ]);
        } else {
            casestudy::withTrashed()->where('id', $id)->restore();
            casestudy::where('id', $id)->update([
                'is_active' => 0,
            ]);
        }

        return redirect('/admin/casestudy')->with('message', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        casestudy::where('id', $id)->update([
            'is_active' => 1,
            // 'deleted_at' => date("Y-m-d H:i:s")
        ]);
        return redirect('/admin/casestudy')->with('message', 'Record Deleted successfully.');
    }

    public function getcasestudyTableData(Request $request)
    {

        $columns =  ['id', 'tech_name', 'is_active'];

        $columnss = ['tech_name'];

        $where = [];

        $query = casestudy::select('id', 'tech_name', 'is_active')
            ->where($where)
            ->withTrashed()
            ->orderBy("id");
        //->get();
        //->toSql();
        //dd($query);

        $query = casestudy::select('id', 'tech_name', 'is_active')
            ->where($where)
            ->withTrashed()
            ->orderBy("tech_name");

        return getRecordFromQuery($request, $columns, $columnss, $where, $query, 'App\Models\casestudy', 'casestudy', 'id', 'edit', 'delete');
    }

    public function imageUploadOnFolder($file, $path = '')
    {
        $filePath = ($path != '') ? $path . '/' : 'avatar/';
        $filenameWithExt = $file->getClientOriginalName();
        $filename = pathinfo(str_replace(" ", "_", $filenameWithExt), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        $path = $file->storeAs($filePath, $fileNameToStore, ['disk' => 'public']);
        return $filePath . $fileNameToStore;
    }

    function deleteImageOnFolder($filePath)
    {
        Storage::disk('public')->delete($filePath);
    }
}
