<?php

namespace App\Http\Controllers;

use App\Mail\MailStageRequestValidate;
use App\Models\Enterprise;
use App\Models\StageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailStageRequestValidatedController extends Controller
{
   /**
     * Send mail to the new user whose stageRequest is validate
     * 
     * @param \App\Models\StageRequest $stageRequest
     */
    public function newValidStageRequest(StageRequest $stageRequest)
    {
        $to=$stageRequest->mail1 ?: $stageRequest->mail2;
        $enterprise=Enterprise::find($stageRequest->enterprise_id);
        return Mail::to($to)->send(new MailStageRequestValidate($enterprise));
    }
    public function massiveValidStageRequest(array $stageRequests)
    {
        foreach($stageRequests as $stageRequest)
        {
            $to=$stageRequest->mail1 ?: $stageRequest->mail2;
            $enterprise=Enterprise::find($stageRequest->enterprise_id);
            return Mail::to($to)->send(new MailStageRequestValidate($enterprise));
        }
    }
}
