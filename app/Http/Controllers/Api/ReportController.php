<?php

namespace App\Http\Controllers\Api;

use App\Models\ReportModel;
use Illuminate\Http\Request;
use App\Models\ReportDiseaseModel;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function listReport()
    {
        $reports = ReportModel::latest()->paginate(20);

        return response()->json([
            'success' => true,
            'message' => 'Analisys Result.',
            'data' => $reports
        ], 200);
    }

    public function reports(Request $request) {
        $reports = ReportModel::where('user_id', $request->user()->id)->with("reportDisease.diseases")->latest()->paginate(20);

        return response()->json([
            'success' => true,
            'message' => 'Analisys Result.',
            'data' => $reports->items()
        ], 200);
    }

    public function detailReport(Request $request)
    {
        if ($request->id) {
            $report = ReportModel::where('id', $request->id)->with("reportDisease.diseases")->first();
        } else {
            $report = ReportModel::with("reportDisease.diseases")->latest()->first();
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Analisys Result.',
            'data' => $report
        ], 200);
    }

    public function latestReport(Request $request) {
        $report = ReportModel::where('user_id', $request->user()->id)->with("reportDisease.diseases")->latest()->first();

        return response()->json([
            'success' => true,
            'message' => 'Latest Analisys Result.',
            'data' => $report
        ], 200);
    }

    public function store(Request $request)
    {

        $data = collect(json_decode($request[0]));
        $report = ReportModel::create([
            'user_id' => $data["user_id"],
            // file
            "date" => $data["date"],
            "raw_image" => $data["raw_image"],
            "result_image" => $data["processed_image"],
        ]);

        Log::info(collect($data["data"]));
        foreach (collect($data["data"]) as $value) {
//            Log::info($diseases);
            $value = collect($value);
$diseases = $value["class"] + 1;
            ReportDiseaseModel::create([
                'report_model_id' => $report["id"],
                'disease_model_id' => $diseases,
                'confidence' => $value["confidence"],
                'bounding_box' => implode(',', $value["boxes"]),
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Analisys Result.',
            'data' => 200
        ], 200);
    }

    public function summary(Request $request){
        $reports = ReportModel::where('user_id', $request->user()->id)->with("reportDisease.diseases")->latest()->get();
        $detectionInAMonth = $reports->count();
        $sickChick = $reports->where('reportDisease.disease_model_id', "!=", 3)->count();
        $healthyChick = $reports->where('reportDisease.disease_model_id', 3)->count();
        $diseases = [
            "total" => $detectionInAMonth,
            "sickChick" => $sickChick,
            "healthyChick" => $healthyChick,
        ];

        return response()->json([
            'success' => true,
            'message' => 'Summary Analisys Result.',
            'data' => $diseases
        ], 200);
    }
}
