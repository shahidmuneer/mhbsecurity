<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Advantages;

class AdvantageManagementController extends Controller
{
       /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/advantage-management';

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advantages = Advantages::paginate(5);

        return view('advantage-mgt/index', ['advantages' => $advantages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('advantage-mgt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validateInput($request);
    
$insert_array=$request->all();
    $image = $request->file('picture');
    
if(!empty($image)){
    $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
    $image->move(base_path() . '/uploads/advantages/', $input['imagename']);
    $insert_array=array_merge($insert_array,['picture'=>$input['imagename']]);
     
}
    Advantages::create($insert_array);
        return redirect()->intended('/advantage-management');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advantage = Advantages::find($id);
        
        // Redirect to user list if updating user wasn't existed
        if ($advantage == null || $advantage->count() == 0) {
            return redirect()->intended('/user-management');
        }
        
   
        return view('advantage-mgt/edit', ['advantage' => $advantage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $user = \App\Advantages::findOrFail($id);
        
        $this->validateInput($request);
        $input=$request->all();
         $image = $request->file('picture');
if(!empty($image)){
    $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
     $image->move(base_path() . '/uploads/advantages/', $input['imagename']);
$request=array_merge($input,['picture'=>$input['imagename']]);
}
        $advantage=\App\Advantages::find($id);
        $advantage->fill($input)->save();
        return redirect()->intended('/advantage-management');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Advantages::where('id', $id)->delete();
        
         return redirect()->intended('/advantage-management');
    }

    /**
     * Search user from database base on some specific constraints
     *
     * @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
    public function search(Request $request) {
        $constraints = [
            'username' => $request['username'],
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'department' => $request['department']
            ];

       $advantages = $this->doSearchingQuery($constraints);
       return view('users-mgmt/index', ['users' => $advantages, 'searchingVals' => $constraints]);
    }

    private function doSearchingQuery($constraints) {
        $query = Advantages::query();
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where( $fields[$index], 'like', '%'.$constraint.'%');
            }

            $index++;
        }
        return $query->paginate(5);
    }
    private function validateInput($request) {
        $this->validate($request, [
        'name' => 'required',
        'picture' => 'image',
        'picture_description' => 'required|max:155',
        'details' => 'required',
    ]);
    }
}
