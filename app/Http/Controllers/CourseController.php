<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('courses.index', [
            'courses' => Course::all()
        ]);
    }

    public function show_learnings()
    {
        return view('learnings.index', [
            'courses' => Course::all()
        ]);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'course' => 'required',
            'description' => 'required'
        ]);        

        $formFields['course'] = ucwords($formFields['course']);
        $formFields['description'] = ucwords($formFields['description']);

        Course::create($formFields);

        return redirect('/courses')->with('message', 'Course created successfully!');
    }

    public function show(Course $course)
    {
        $videos = Video::where('course_id', $course->id)->orderBy('order_level', 'ASC')->get();        

        return view('courses.show', [
            'videos' => $videos,
            'course' => $course
        ]);
    }

    public function show_course(Course $course, Video $video)
    {
        $videos = Video::where('course_id', $course->id)->orderBy('order_level', 'ASC')->get();

        if(empty($video->id)){
            $current_video = $videos->first();
        }else{
            $current_video = Video::where('id', $video->id)->first();
        }
        
        $exploded = explode("v=", $current_video->video_link);
        $watch_link = $exploded[1];

        return view('learnings.show', [
            'videos' => $videos,
            'watch_link' => $watch_link,
            'course' => $course
        ]);
    }

    public function edit(Course $course)
    {
        return view('courses.edit', [
            'course' => $course
        ]);
    }

    public function update(Request $request, Course $course)
    {
        $formFields = $request->validate([
            'course' => 'required',
            'description' => 'required'
        ]);        

        $formFields['course'] = ucwords($formFields['course']);
        $formFields['description'] = ucwords($formFields['description']);

        $course->update($formFields);

        return redirect('/courses')->with('message', 'Course updated successfully!');
    }

    public function store_video(Request $request, Course $course)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'video_link' => 'required',
            'order_level' => 'required|integer'
        ]);    

        $exploded = explode("v=", $formFields['video_link']);
        if(empty($exploded[1])){
            return redirect()->back()->with('error', 'Invalid video link.');
        }

        $formFields['title'] = ucwords($formFields['title']);
        $formFields['video_link'] = $formFields['video_link'];
        $formFields['order_level'] = $formFields['order_level'];
        $formFields['course_id'] = $course->id;

        Video::create($formFields);

        $videos = Video::where('course_id', $course->id)->orderBy('order_level', 'ASC')->get();

        return view('courses.show', [
            'videos' => $videos,
            'course' => $course
        ]);
    }

    public function delete_video(Video $video)
    {
        $course_id = $video->course_id;
        $video->delete();

        //'/diagnosis/{diagnosis}/show'
        return redirect('/courses/'.$course_id.'/show')->with('message', 'Video deleted.');
    }

    public function destroy(Course $course)
    {
        
        $videos = Video::where('course_id', $course->id);
        $course->delete();
        $videos->delete();
        return redirect('/courses')->with('message', 'Course deleted successfully');
    }
}
