<?php

namespace App\Http\Controllers;

use App\Models\StageRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StageRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "mat1"=>["required","min:8","unique:stage_requests,mat1","unique:stage_requests,mat2"],
                "mat2"=>["nullable",Rule::requiredIf($request->binome!=0),"min:8","unique:stage_requests,mat1","unique:stage_requests,mat2"],
                "mail1"=>["required","Email","unique:stage_requests,mail1","unique:stage_requests,mail2"],
                "mail2"=>["nullable","Email","unique:stage_requests,mail1","unique:stage_requests,mail2",Rule::prohibitedIf($request->binome==0)]
            ]
        );
        $stageRequest=new StageRequest($request->except("_token","submit","binome"));
        $stageRequest->save();
        return redirect()->route("home1",["requestSend"=>1]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StageRequest  $stageRequest
     * @return \Illuminate\Http\Response
     */
    public function show(StageRequest $stageRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StageRequest  $stageRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(StageRequest $stageRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StageRequest  $stageRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StageRequest $stageRequest)
    {
        if($request->user()->cannot("update",$stageRequest))
        {
            return view("notAllowed");
        }
        else
        {
            $stageRequest->is_valid=($request->is_valid)!=0;
            return redirect()->route("sendRequestValidateMail",["stageRequest"=>$stageRequest]);
        }
    }
    public function massiveUpdate(Request $request)
    {
        $stageRequests=null;
            foreach($request->stageRequestIds as $id)
            {
                $stageRequest=StageRequest::find($id);
                if($request->user()->cannot("update",$stageRequest))
                {
                    return view("notAllowed");
                }
                else
                {
                    $stageRequest->is_valid=true;
                    $stageRequests[]=$stageRequest;
                    return redirect()->route("sendMassiveRequestValidateMail",$stageRequests);
                }
                
            }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StageRequest  $stageRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(StageRequest $stageRequest)
    {
        //
    }
}
