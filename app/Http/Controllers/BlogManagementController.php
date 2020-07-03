<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Blog;
use Storage;

class BlogManagementController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',  ['except' => ['store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(5);

        return view('blogs-mgmt/index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        if($request->hasFile('browse')){
            if (Input::file('browse')->isValid()) {
                $file = Input::file('browse');
                $destination = public_path('uploads');
                $ext= Input::file('browse')->getClientOriginalExtension();
                $mainFilename =time().str_random(5).date('h-i-s');
                $file->move($destination, $mainFilename.".".$ext);
            }
        }

        $path = "uploads\\".$mainFilename.'.'.$ext;
        if(!isset($request['choice1'])) $ch1 = "off";
        else $ch1 = "on";
        if(!isset($request['choice2'])) $ch2 = "off";
        else $ch2 = "on";
        if(!isset($request['choice3'])) $ch3 = "off";
        else $ch3 = "on";

        Blog::create([
            'occupation' => $request['occupation'],
            'sdegree' => $request['sdegree'],
            'classnum' => $request['classnum'],
            'age' => $request['age'],
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'gender' => $request['gender'],
            'message' => $request['message'],
            'group1' => $request['group1'],
            'description' => $request['description'],
            'choice1' => $ch1,
            'choice2' => $ch2,
            'choice3' => $ch3,
            'expectedsalary' => $request['expectedsalary'],
            'CVfile' => $path,
            'filename' => $request['CVfile'],
            'totmessage' => $request['totmessage'],
        ]);

        // return "Success";
        return redirect('/');
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
        //
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
        $input['flag'] = $request['flag'];
        Blog::where('id', $id)
            ->update($input);
        
        return redirect()->intended('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function validateInput($request) {
        $this->validate($request, [
            'occupation' => 'required|max:20|min:1',
            'sdegree' => 'required|max:20|min:1',
            'classnum' => 'required|max:20|min:1',
            'age' => 'required|max:20|min:1',
            'name' => 'required|max:20|min:1',
            'email' => 'required|email|max:255|unique:blogs|min:1',
            'phone' => 'required|max:20|unique:blogs|min:1',
            'gender' => 'required|max:20|min:1',
            'message' => 'required|max:255|min:1',
            'group1' => 'required|max:20|min:1',
            'description' => 'required|max:255|min:1',
            'expectedsalary' => 'required|max:255|min:1',
            'totmessage' => 'required|max:255|min:1'
        ]);
    }
}
