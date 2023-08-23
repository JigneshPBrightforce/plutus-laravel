<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technology;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;


class TechnologyController extends Controller
{
    
    public function index()
    {
        $arrdata = Technology::all();
        return view('admin.technology.index', compact('arrdata'));
    }   
    
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.technology.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        //  dd($data);
        $data->validate([
            'tech_name' => 'required',
        ]);
        
        $logo = NULL;
        if ($data->hasFile('logo')) {
            $data->validate([
                'logo' => 'sometimes|image|mimes:jpg,png,jpeg,svg',
            ]);
            $logo = $this->imageUploadOnFolder($data->file('logo'), 'technology');
        }

        $user = Technology::create([
            'tech_name' => $data['tech_name'],
            'logo' => $logo,
            'is_active' => $data['is_active'],
            'created_by' => auth()->user()->id            
        ]);
        return redirect("/admin/technology")->with('message','Record created successfully.');

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
        $arrData = Technology::find($id);
        if(empty($arrData)){
            return redirect('/admin/technology')->with('alert','No record found.');
        }
        return view('admin.technology.edit', compact('arrData'));
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
        
        Technology::where('id',$data['action'])->update([
            'tech_name' => $data['tech_name'],
            'is_active' => $data['is_active'],
            'updated_by' => auth()->user()->id            
        ]);
        
        if ($data->hasFile('logo')) {
            $data->validate([
                'logo' => 'sometimes|image|mimes:jpg,png,jpeg,svg',
            ]);
            $user = Technology::find($data['action']);
            if($user->logo != ''){
                $this->deleteImageOnFolder(str_replace(config('app.url'),'',$user->logo));
            }
            $logo = $this->imageUploadOnFolder($data->file('logo'), 'technology');
            Technology::where('id',$data['action'])->update([
                'logo' => $logo,
            ]);                    
        }
        return redirect("/admin/technology")->with('message','Record updated successfully.');
    }

    /* change status of the record */
    public function changeStatus($id)
    { 

        $status = Technology::select('id','is_active')
        ->where('id',$id)
        ->withTrashed()
        ->first();

        if($status->is_active == 0){
            Technology::where('id', $id)->update([
                'is_active' => 1,
                'deleted_at' => date("Y-m-d H:i:s")
            ]);

        }else{
            Technology::withTrashed()->where('id', $id)->restore();
            Technology::where('id', $id)->update([
                'is_active' => 0,
            ]);
        }

        return redirect('/admin/technology')->with('message', 'Record updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
 
        Technology::where('id', $id)->update([
            'is_active' => 1,
            // 'deleted_at' => date("Y-m-d H:i:s")
        ]);
        return redirect('/admin/technology')->with('message', 'Record Deleted successfully.');

    }

    public function gettechnologyTableData(Request $request)
    {

        $columns =  [ 'id','tech_name','is_active'];

        $columnss = ['tech_name']; 
         
        $where = [];      

        $query = Technology::select('id','tech_name','is_active')
        ->where($where)
        ->withTrashed()
        ->orderBy("id");
        //->get();
        //->toSql();
        //dd($query);

        $query = Technology::select('id','tech_name','is_active')
        ->where($where)
        ->withTrashed()
        ->orderBy("tech_name");

        return getRecordFromQuery($request, $columns, $columnss, $where, $query,'App\Models\Technology','technology', 'id','edit','delete');
        
    }

    public function imageUploadOnFolder($file, $path='')
    {
        $filePath = ($path != '') ? $path.'/' : 'avatar/';        
        $filenameWithExt = $file->getClientOriginalName();
        $filename = pathinfo(str_replace(" ","_",$filenameWithExt), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;                       
        $path = $file->storeAs($filePath, $fileNameToStore,['disk' => 'public']);
        return $filePath.$fileNameToStore;
    }

    function deleteImageOnFolder($filePath){
        Storage::disk('public')->delete($filePath);
    }
}