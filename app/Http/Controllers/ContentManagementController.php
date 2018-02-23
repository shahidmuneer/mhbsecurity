<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contents;

class ContentManagementController extends Controller
{
       /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/content-management';

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
        $contents = Contents::with(['menu'])->paginate(5);
      
        return view('content-management/index', ['contents' => $contents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $menus= \App\Menus::get();
        return view('content-management.create')->with(["menus"=>$menus]);
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
    $image->move(base_path() . '/uploads/contents/', $input['imagename']);
    $insert_array=array_merge($insert_array,['picture'=>$input['imagename']]);
     
}
    
    Contents::create($insert_array);

        return redirect()->intended('/content-management');
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
        $content = Contents::find($id);
        
        // Redirect to user list if updating user wasn't existed
        if ($content == null || $content->count() == 0) {
            return redirect()->intended('/user-management');
        }
        
        $menus= \App\Menus::get();
   
        return view('content-management/edit')->with(["menus"=>$menus,'content' => $content]);
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
        
        $user = \App\Contents::findOrFail($id);
        
        $this->validateInput($request);
        $input=$request->all();
         $image = $request->file('picture');
if(!empty($image)){
    $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
     $image->move(base_path() . '/uploads/contents/', $input['imagename']);
$request=array_merge($input,['picture'=>$input['imagename']]);
}
        $content=\App\Contents::find($id);
        $content->fill($input)->save();
        return redirect()->intended('/content-management');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contents::where('id', $id)->delete();
        
         return redirect()->intended('/content-management');
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

       $contents = $this->doSearchingQuery($constraints);
       return view('users-mgmt/index', ['users' => $contents, 'searchingVals' => $constraints]);
    }

    private function doSearchingQuery($constraints) {
        $query = Contents::query();
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
        "menu_id"=>"required",
        'heading' => 'required|max:64',
        'picture' => 'image',
        'picture_description' => 'required|max:155',
        "metaTitle"=>"required",
        "metaDescription"=>"required",
        "content"=>"required",
        "keywords"=>"required"
    ]);
    }
}
