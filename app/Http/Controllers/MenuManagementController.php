<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Menus;

class MenuManagementController extends Controller
{
       /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/menu-management';

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
        $menus = Menus::paginate(5);

        return view('menu-management/index', ['menus' => $menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu-management.create');
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
    $image->move(base_path() . '/uploads/menus/', $input['imagename']);
    $insert_array=array_merge($insert_array,['picture'=>$input['imagename']]);
     
}
    
    Menus::create($insert_array);

        return redirect()->intended('/menu-management');
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
        $menu = Menus::find($id);
        
        // Redirect to user list if updating user wasn't existed
        if ($menu == null || $menu->count() == 0) {
            return redirect()->intended('/user-management');
        }
        
   
        return view('menu-management/edit', ['menu' => $menu]);
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
       
        $user = \App\Menus::findOrFail($id);
        
        $this->validateInput($request);
        $input=$request->all();
         $image = $request->file('picture');
if(!empty($image)){
    $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
     $image->move(base_path() . '/uploads/menus/', $input['imagename']);
$request=array_merge($request->all(),['picture'=>$input['imagename']]);
}
        $menu=\App\Menus::find($id);
        $menu->fill($request->all())->save();
        return redirect()->intended('/menu-management');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menus::where('id', $id)->delete();
        
         return redirect()->intended('/menu-management');
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

       $menus = $this->doSearchingQuery($constraints);
       return view('users-mgmt/index', ['users' => $menus, 'searchingVals' => $constraints]);
    }

    private function doSearchingQuery($constraints) {
        $query = Menus::query();
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
        'name' => 'required|max:30',
       
    ]);
    }
}
