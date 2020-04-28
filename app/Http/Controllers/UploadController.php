<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use File;

class UploadController extends BaseController
{
    //
    public function upload_brief(Request $request) {
        if(Sentinel::check()) { 
            $this->validate($request, [ 'file' => 'required']);
            $file = $request->file('file');
            
            $location_upload = 'uploads/brief';
            $file_name = "BRIEF_".time().".".$file->getClientOriginalExtension();
            $file->move($location_upload, $file_name);
    
            return response()->json(["success" => true,"file_name" => $file_name]);
        } else {
            return response()->json(["success" => false,"msg" => "unauthorize"]);
        }
    }

    public function delete_file(Request $request) {
        if(Sentinel::check()) { 
            $location_upload = 'uploads/brief';
            File::delete($location_upload."/".$request->fileName);
            
            return response()->json(["success" => true]);
        } else {
            return response()->json(["success" => false]);
        }
    }
}
