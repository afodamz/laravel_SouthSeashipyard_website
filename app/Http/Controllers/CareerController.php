<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\careers;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\Input;

class CareerController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'position' => 'required',
            'message' => 'required',
        ]);

        // create career
        $career = new careers;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            // $name = Str::slug($request->title).'.'.$file->getClientOriginalExtension();
            // $name = $file->getClientOriginalName().'.'.$file->getClientOriginalExtension();
            $name = $file->getClientOriginalName();
            $destinationPath = public_path('/uploads/careers');
            $filePath = $destinationPath. "/".  $name;
            $file->move($destinationPath, $name);
            $career->file = $name;
          }


        // $filename = $request->file('file')->getClientOriginalName();
        // $request->file('file')->storeAs('storage/careers',$filename);

        
        $career->name = $request->input('name');
        $career->email = $request->input('email');
        $career->phone = $request->input('phone');
        $career->position = $request->input('position');
        $career->message = $request->input('message');
        // save career
        $career->save();
        

        return redirect('/career')->with('status', 'Message Sent');
    }
}


// $this->validate($request, [
//     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//   ]);

//   $article = new Article();

//   if ($request->hasFile('image')) {
//       $image = $request->file('image');
//       $name = str_slug($request->title).'.'.$image->getClientOriginalExtension();
//       $destinationPath = public_path('/uploads/articles');
//       $imagePath = $destinationPath. "/".  $name;
//       $image->move($destinationPath, $name);
//       $article->image = $name;
//     }

//     $article->title = $request->get('title');
//     $article->category_id = $request->get('category_id');
//     // $article->image = str_slug($request->get('image'));
//     $article->subtitle = $request->get('subtitle');
//     $article->description = $request->get('description');

//     $article->save();
//     return back()->with('success', 'Your article has been added successfully. Please wait for the admin to approve.');