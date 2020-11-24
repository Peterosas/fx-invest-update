<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Rules\ValidatePackage;
use App\Investment;
use App\Package;
use App\User;

class InvestmentController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $packages = Package::orderBy('roi', 'ASC')->get();
        
        return view('backend.investments.index', compact('packages'));
    }
    
    public function add_invest(Request $request) {
        if ($request->isMethod('post')) {
            
            $data = $request->all();
            $package_id = 0;
            
            if (isset($data['package_id'])) $package_id = $data['package_id'];
            
            $validator = Validator::make($data, [
                'amount' => 'required',
                'package_id' => [
                    'required',
                    new ValidatePackage(new Package())
                ],
            ]);
            
            if ($validator->fails()) {
                if ($request->ajax()) {
                    return response()->json(['message'=>'Transaction failed.', 'errors' => $validator->errors()]);
                }
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            
            
            //Process request
            $status = $this->updateTransactionUponInvest($request->all());
            
            $status_type = getBalanceStatusType($status);
            
            
            if ($request->ajax()) {
                
                $min_invest = formatAmount($this->getMinPackageInvest($package_id));
                  
                
                $data[$status_type] = sprintf(getBalanceStatusText($status), $min_invest);
                $data['reload'] = true;
                
                
                
                return response()->json($data);
            }
            else {
                return redirect()
                ->back()
                ->with($status_type, getBalanceStatusText($status));
            }
            
        }
        
        return redirect()->back();
    }
    
    public function details($id) {
        $investment = Investment::findOrFail($id);
        
        return view("backend.investments.partials.per_invest_table", compact('investment'));
    }  
}
