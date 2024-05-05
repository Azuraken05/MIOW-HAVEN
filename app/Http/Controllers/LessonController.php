<?php

namespace App\Http\Controllers;

use App\Models\DrawingLesson;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LessonController extends Controller
{
    public function createLesson(Request $request)
    {
        //types should be video or file
        $user = $request->user();
        $data = $request->all();
        $data["user_id"] = 1;//$user->id;

        switch ($data["type"]) {
            case "file":
                $data["path"] = "module-lessons/" . Storage::disk("module-lessons")
                ->putFileAs(
                    $user->id, //"1"
                    $request->file("uploaded_file"), 
                    $data["title"] . "." . $request->file("uploaded_file")->getClientOriginalExtension()
                );
                break;
            case "video":
                $data["path"] = "video-lessons/" . Storage::disk("video-lessons")
                ->putFileAs(
                    $user->id, //"1"
                    $request->file("uploaded_file"), 
                    $data["title"] . "." . $request->file("uploaded_file")->getClientOriginalExtension()
                );
                break;
        }
        unset($data["uploaded_file"]);
        $drawingLesson = DrawingLesson::create($data);
        return $drawingLesson;
        //return a view for it likely
    }

    public function getLesson($lessonId)
    {
        //everytime someone views a lesson add a view in this function
        return DrawingLesson::find($lessonId);
        // return a view with drawing lesson
    }

    public function getLessons()
    {
        return [
            "module_lessons" => DrawingLesson::where("type", "file")->get(),
            "video_lessons" => DrawingLesson::where("type", "video")->get()
        ];
        //return view for mixed lessons
    }

    public function getVideoLessons()
    {
        return DrawingLesson::where("type", "video")
            ->get();
        //return view for videos        
    }

    public function getModuleLessons()
    {
        return DrawingLesson::where("type", "file")
            ->get();
        //return view for modules
    }

    public function getUserOwnedLessons($userId)
    {
        $user = User::find($userId);
        $userModuleLessons = $user->ownedLessons()->where("type", "file")->get();
        $createdModuleLessons = DrawingLesson::where("user_id", $user->id)
            ->where("type", "file")
            ->get();
        $moduleLessons = $userModuleLessons->merge($createdModuleLessons);

        $userVideoLessons = $user->ownedLessons()->where("type", "video")->get();
        $createdVideoLessons = DrawingLesson::where("user_id", $user->id)
            ->where("type", "video")
            ->get();
        $videoLessons = $userVideoLessons->merge($createdVideoLessons);

        return [
            "module_lessons" => $moduleLessons,
            "video_lessons" => $videoLessons
        ];
        //return view for mixed user owned lessons
    }

    public function getUserVideoLessons($userId)
    {
        $user = User::find($userId);
        $userVideoLessons = $user->ownedLessons()->where("type", "video")->get();
        $createdVideoLessons = DrawingLesson::where("user_id", $user->id)
            ->where("type", "video")
            ->get();
        $videoLessons = $userVideoLessons->merge($createdVideoLessons);
        return $videoLessons;
        //return view for user video lessons
    }

    public function getUserModuleLessons($userId)
    {
        $user = User::find($userId);
        $userModuleLessons = $user->ownedLessons()->where("type", "file")->get();
        $createdModuleLessons = DrawingLesson::where("user_id", $user->id)
            ->where("type", "file")
            ->get();
        $moduleLessons = $userModuleLessons->merge($createdModuleLessons);
        return $moduleLessons;
        //return view for user module lessons
    }

    // public function getUserLessons($userId)
    // {
    //     $user = User::find($userId);
    //     return DrawingLesson::where("user_id", $userId)
    //         ->get();
    //     //return user lessons
    // }

    // public function getOwnedLessons($userId)
    // {
    //     $user = User::find($userId);
    //     return $user->ownedLessons;
    //     //return view of bought or owned lessons
    // }

    public function updateLesson(Request $request, $lessonId)
    {
        $data = $request->all();
        $lesson = DrawingLesson::find($lessonId);
        $lesson->update($data);
        return $lesson;
        //return updated lesson view
    }

    public function deleteLesson($lessonId)
    {
        $lesson = DrawingLesson::find($lessonId);

        $directoryFolder = "video_lessons";
        if ($lesson->type == "file") {
            $directoryFolder = "module_lessons";
        }

        $file = preg_replace("/{$directoryFolder}\/$lesson->user_id\//", "", $lesson->path);
        Storage::disk("{$directoryFolder}")->delete("{$lesson->user_id}/$file");
        return $lesson->delete();
        //return view
    }

    public function payLesson($lessonId, $userId)
    {
        $lesson = DrawingLesson::find($lessonId);
        $lesson->buyers += 1;
        $lesson->save();

        $user = User::find($userId);
        $user->ownedLessons()->attach($lessonId);
        return $user->ownedLessons;
        //return user owned lessons view
    }
}
