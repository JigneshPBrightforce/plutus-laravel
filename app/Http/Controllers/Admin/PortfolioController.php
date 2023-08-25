<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Technology;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    
    public function index()
    {
        $arrdata = Portfolio::all();
        return view('admin.portfolio.index', compact('arrdata'));
    }       
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
        $technology = Technology::all();
        return view('admin.portfolio.create', compact('technology'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $data)
    {
            // dd($data);
        $data->validate([
            'project_type' => 'required',
            'project_name' => 'required',
            'project_short_description' => 'required',
            'project_long_description' => 'required',
            'project_logo' => 'required',
            'project_image' => 'required',
            'project_banner' => 'required',
        ]);
        
        $project_logo = NULL;
        if ($data->hasFile('project_logo')) {
            $data->validate([
                'project_logo' => 'sometimes|image|mimes:jpg,png,jpeg,svg',
            ]);
            $project_logo = $this->imageUploadOnFolder($data->file('project_logo'), str_replace(" ", "_",strtolower($data['project_name'])));
        }
        $project_banner = NULL;
        if ($data->hasFile('project_banner')) {
            $data->validate([
                'project_banner' => 'sometimes|image|mimes:jpg,png,jpeg',
            ]);
            $project_banner = $this->imageUploadOnFolder($data->file('project_banner'), str_replace(" ", "_",strtolower($data['project_name'])));
        }
        $project_image = NULL;
        if ($data->hasFile('project_image')) {
            $data->validate([
                'project_image' => 'sometimes|image|mimes:jpg,png,jpeg',
            ]);
            $project_image = $this->imageUploadOnFolder($data->file('project_image'), str_replace(" ", "_",strtolower($data['project_name'])));
        }
        $screenshort_banner = NULL;
        if ($data->hasFile('screenshort_banner')) {
            $data->validate([
                'screenshort_banner' => 'sometimes|image|mimes:jpg,png,jpeg',
            ]);
            $screenshort_banner = $this->imageUploadOnFolder($data->file('screenshort_banner'), str_replace(" ", "_",strtolower($data['project_name'])));
        }
        
        Portfolio::create([
                "slug" => str_replace(" ", "_",strtolower($data['project_name'])),
                "project_type" => $data['project_type'],
                "project_name" => $data['project_name'],
                "project_short_description" => $data['project_short_description'],
                "project_long_description" => $data['project_long_description'],
                "about_title" => $data['about_title'],
                "country_name" => $data['country_name'],
                "targeted_audience" => $data['targeted_audience'],
                "industry" => $data['industry'],
                "technology" => $data['technology'],
                'project_logo' => $project_logo,
                'project_banner' => $project_banner,
                'project_image' => $project_image,
                'screenshort_banner' => $screenshort_banner,
                'created_by' => auth()->user()->id            
        ]);
        return redirect("/admin/portfolio")->with('message','Record created successfully.');

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
        $arrData = Portfolio::find($id);
        if(empty($arrData)){
            return redirect('/admin/portfolio')->with('alert','No record found.');
        }
        $technology = Technology::all();
            
        return view('admin.portfolio.edit', compact('arrData','technology'));
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
            'project_name' => 'required',
        ]);
        
        $PortfolioData = Portfolio::find($data['action']);
        Portfolio::where('id',$data['action'])->update([
                "project_type" => $data['project_type'],
                "slug" => str_replace(" ", "_",strtolower($data['project_name'])),
                "project_name" => $data['project_name'],
                "project_short_description" => $data['project_short_description'],
                "project_long_description" => $data['project_long_description'],
                "about_title" => $data['about_title'],
                "country_name" => $data['country_name'],
                "targeted_audience" => $data['targeted_audience'],
                "industry" => $data['industry'],
                'updated_by' => auth()->user()->id            
        ]);
        
        if ($data['technology'] != "") {
            Portfolio::where('id',$data['action'])->update([
                "technology" => $data['technology'],
            ]);                    
        }
        if ($data->hasFile('project_logo')) {
            $data->validate([
                'project_logo' => 'sometimes|image|mimes:jpg,png,jpeg,svg',
            ]);
            if($PortfolioData->project_logo != ''){
                $this->deleteImageOnFolder(str_replace(config('app.url'),'',$PortfolioData->project_logo));
            }
            $project_logo = $this->imageUploadOnFolder($data->file('project_logo'), str_replace(" ", "_",strtolower($data['project_name'])));
            Portfolio::where('id',$data['action'])->update([
                'project_logo' => $project_logo,
            ]);                    
        }
        if ($data->hasFile('project_banner')) {
            $data->validate([
                'project_banner' => 'sometimes|image|mimes:jpg,png,jpeg',
            ]);
            
            if($PortfolioData->project_banner != ''){
                $this->deleteImageOnFolder(str_replace(config('app.url'),'',$PortfolioData->project_banner));
            }
            $project_banner = $this->imageUploadOnFolder($data->file('project_banner'), str_replace(" ", "_",strtolower($data['project_name'])));
            Portfolio::where('id',$data['action'])->update([
                'project_banner' => $project_banner,
            ]);                    
        }

        if ($data->hasFile('project_image')) {
            $data->validate([
                'project_image' => 'sometimes|image|mimes:jpg,png,jpeg',
            ]);
            if($PortfolioData->project_image != ''){
                $this->deleteImageOnFolder(str_replace(config('app.url'),'',$PortfolioData->project_image));
            }
            $project_image = $this->imageUploadOnFolder($data->file('project_image'), str_replace(" ", "_",strtolower($data['project_name'])));
            Portfolio::where('id',$data['action'])->update([
                'project_image' => $project_image,
            ]);                    
        }


        if ($data->hasFile('screenshort_banner')) {
            $data->validate([
                'screenshort_banner' => 'sometimes|image|mimes:jpg,png,jpeg',
            ]);
            if($PortfolioData->screenshort_banner != ''){
                $this->deleteImageOnFolder(str_replace(config('app.url'),'',$PortfolioData->screenshort_banner));
            }
            $screenshort_banner = $this->imageUploadOnFolder($data->file('screenshort_banner'), str_replace(" ", "_",strtolower($data['project_name'])));
            Portfolio::where('id',$data['action'])->update([
                'screenshort_banner' => $screenshort_banner,
            ]);                    
        }
        $screenshort_images=array();
        $rules = [];
        if ($data->hasFile('screenshort_images')) {
            $ssImages = explode(',',$PortfolioData->screenshort_images);
            foreach ($ssImages as $file) {
                $this->deleteImageOnFolder(str_replace(config('app.url'),'',$file));
            }

            $files = $data->file('screenshort_images');
            $allowedfileExtension=['jpeg','jpg','png'];
            foreach ($files as $file) {
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check)
                {
                    $screenshort_images[] = $this->imageUploadOnFolder($file, str_replace(" ", "_",strtolower($data['project_name'])));
                }else{
                    $rules ['screenshort_images'] = 'Image type must be jpeg,jpg,png';
                }
            }
            $data->validate($rules);
            Portfolio::where('id',$data['action'])->update([
                'screenshort_images' => implode(",",$screenshort_images),
            ]);
        }
        
        return redirect("/admin/portfolio")->with('message','Record updated successfully.');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {

        Portfolio::where('id', $id)->update([
            'deleted_at' => date("Y-m-d H:i:s")
        ]);
        return redirect('/admin/portfolio')->with('message', 'Record Deleted successfully.');

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