<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Rules\ValidatePackage;
use App\Investment;
use App\Package;
use App\User;
use App\Transaction;
use Illuminate\Support\Facades\Hash;


class PackageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function packages(Request $request, $id = null)
    {
        $packages = Package::get();
        
        if ($request->ajax()) {
            
            $package = Package::whereId($id)->first();
            
            if ($request->isMethod('post')) {
                $rules = ['name' => 'required', 'min_amount' => 'required', 'roi' => 'required', 'duration_in_days' => 'required'];

                $data = $request->all();
                
                $validator = Validator::make($data, $rules);

                if ($validator->fails()) {
                    if ($request->ajax()) {
                        return response()->json(['message'=>'Error updating package. Please make sure you fill all fields correctly.', 'errors' => $validator->errors()]);
                    }

                    return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
                } 
                
                //Create or Update package
                if (!$package)
                    $package = new Package();
                
                
                $package->name = $data['name'];
                $package->roi = $data['roi'];
                $package->min_amount = $data['min_amount'];
                $package->duration_in_days = $data['duration_in_days'];
                $package->description = $data['description'];
                
                $package->save();
                
                return response()->json(['success'=>'success', 'Package updated', 'reload' => true ]);
                
                
            }
            
            
        

            return view('backend.admin.partials.package_form', compact('package'));
            
           
        }
        
        return view('backend.admin.packages', compact('packages'));
    }
    

    
    public function deletePackage(Request $request, $id) {
        
        Package::where('id', $id)->delete();
        
        if ($request->ajax()) {
            return response()->json(['success'=>'Package deleted successfully']);
        }
        
        return redirect()->back()->with('success', 'Package deleted successfully');
    }
    
    
      
}
