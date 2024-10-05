<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Storage;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $data = Subject::all();
      return response()->json([
        'data' => $data
      ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->request->add(["name" => $request->name]);
      $request->request->add(["description" => $request->description]);
      $request->request->add(["image" => '']);

      $response = Subject::create($request->all());
  
      if (isset($response)) {
        return response()->json(['message' => 'Product created successfully', "subject" => $response], 200);
      } else {
        return response()->json(['message' => 'Product can´t be created'], 500);
      }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $subject = Subject::find($id);

      if (isset($subject)) {
        return response()->json([
          'data' => $subject
        ], 200);
      } else {
        return response()->json([
          "error" => "The id provided doesn't exist"
        ], 404);
      }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      $subject = Subject::find($id);

      if (isset($subject)) {
        $subject->name = $request->name;
        $subject->description = $request->description;
        $subject->image = '';

        if ($subject->save()) {
				  return response()->json(['message' => 'Product update successfully', "subject" => $subject], 200);
        } else {
          return response()->json(['message' => 'Can´t update the data'], 500);
        }
      } else {
				return response()->json(['message' => 'Id provided doesn´t exist'], 404);
      }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $subject = Subject::find($id);

      if (isset($subject)) {
        $response = Subject::destroy($id);
        if ($response) {
          return response()->json(['message' => 'Subject deleted successfully'], 200);
        } else {
          return response()->json(['message' => 'Can´t delete the subject'], 500);
        }
      }	else {
        return response()->json(['message' => 'Id provided doesn´t exist'], 404);
      }
    }
}
