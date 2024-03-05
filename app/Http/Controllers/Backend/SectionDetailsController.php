<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SectionDetails;
class SectionDetailsController extends Controller
{
    public function SectionDetailsAdd(){
        return view('backend.section_details.insert');
    }//
    public function StoreSectionDetails(Request $request){
        $request->validate([
            'title' => 'required',
            'desciption' => 'required',
            'multi_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Validate each uploaded image
        ]);
    
        // Store each uploaded image
        $imageNames = [];
        if ($request->hasFile('multi_image')) {
            foreach ($request->file('multi_image') as $image) {
                $imageName = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/multi_img/'), $imageName);
                $imageNames[] = $imageName; // Store the image name in an array
            }
        }
    
        // Create a new instance of SectionDetails model
        $sectionDetails = new SectionDetails;
        $sectionDetails->title = $request->title;
        $sectionDetails->desciption = $request->desciption;
    
        // If there are uploaded images, store the image names in the multi_image column
        if (!empty($imageNames)) {
            $sectionDetails->multi_image = implode(',', $imageNames); // Store multiple image names as comma-separated string
        }
    
        // Save the section details to the database
        $sectionDetails->save();
    
        // Redirect back with success message
        $notification = array(
            'message' => 'Section Details Successfully Inserted',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
    public function ViewSectionDetails(){
        $sectionDetails = SectionDetails::latest()->get();
        return view('backend.section_details.view', compact('sectionDetails'));
    }//
    public function EditSectionDetails($id){
        $sectionDetails = SectionDetails::findOrFail($id);
        $sectionDetailsall = SectionDetails::findOrFail($id)->get();
        return view('backend.section_details.edit', compact('sectionDetails','sectionDetailsall'));
    }//
}
