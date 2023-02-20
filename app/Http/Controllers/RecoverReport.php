<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use InvalidArgumentException;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class RecoverReport extends Controller
{
    public function store(Request $request)
    {
        $validator=[];
        //dd($request);
        if(in_array($request->file('report')->getClientOriginalExtension(),["pdf",]))
        {
            $file=$request->file('report');
            $mat2=(!empty($request->mat2))?"_".$request->mat2:null;
            $name=$request->mat1.$mat2.".pdf";
            $path="Reports".DIRECTORY_SEPARATOR.$request->filiere;
            try
            {
                $file->storeas($path,$name);
            }catch(FileException|FileNotFoundException|InvalidArgumentException $e)
            {
                $validator["fileNotUpload"]=1;
                return redirect()->back()->withErrors($validator);
            }
            $report1=$request->except("_token","submit","delete","report");
            $report1["report"]=$path.DIRECTORY_SEPARATOR.$name;
            $report=new Report($report1);
            $report->save();
            return redirect()->route("home1",["reportSend"=>1]);
        }
        else
        {
            $validator["fileExtensionWrong"]=1;
            return redirect()->back()->withErrors($validator)->withInput(["report","mat1","mat2","fiilliere"]);
        }
    }
    }