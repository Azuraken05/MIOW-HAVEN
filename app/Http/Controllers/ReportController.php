<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserReports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function createReport(Request $request)
    {
        $data = $request->all();
        $data["user_id"] = $request->user()->id;
        $userReport = UserReports::create($data);
        return $userReport;
        //probably a redirect
    }

    public function getReport($reportId)
    {
        return UserReports::find($reportId);
        //return a view for the report
    }

    public function getUserSubmissions($userId)
    {
        $user = User::find($userId);
        return UserReports::where("user_id", $userId)
            ->where("type", "submission")
            ->get();
        //view for submissions
    }

    public function getUserReports($userId)
    {
        $user = User::find($userId);
        return UserReports::where("user_id", $userId)
            ->where("type", "report")
            ->get();
        //view for reports
    }

    public function getReports(Request $request)
    {
        $type = $request->type;

        $reports = [];
        switch ($type) {
            case "submissions":
                $reports = UserReports::where("type", "submission")
                    ->get();
                break;
            case "reports":
                $reports = UserReports::where("type", "report")
                    ->get();
                break;
            default:
                $reports = UserReports::all();
        }

        return $reports;
        //return view for reports
    }

    public function updateReport(Request $request, $reportId)
    {
        $data = $request->all();
        $report = UserReports::find($reportId);
        $report->update($data);
    }
}
