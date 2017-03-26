<?php

namespace App\Http\Controllers;




use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use DB;
use Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;


class Front extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $value = Cookie::get('remember');
        if($value!=null) {
            //var_dump($value);
            return view('welcomemain');
            //return Response::make($view)->withCookie($cookie);
        }

        else{
            //var_dump($value);
            return view('home');
        }
       // return view('home');
    }

    public function cart() {

        $cart = DB::table('carts')->lists('product_id');


       $data =  DB::table('products')->lists('id');


        $no_of_data_cart=count($cart);
        $no_of_data_data=count($data);
        $cnt=0;
        for($x = 0; $x<$no_of_data_cart;$x++)
        {
            for($y=0;$y<$no_of_data_data;$y++)
            {
                if($cart[$x]==$data[$y])
                {
                    $id=$data[$y];
                    $ans[$cnt++] = DB::table('products')->where('id',$id)->first();

                    //print "id = " . $ans->id . " name = " . $ans->name . " price = " . $ans->price ;
                    //echo "<br>";
                }
            }
        }
        //$test = Product::orderBy('id', 'asc')->get();

        return view('cart',['allCarts' => $ans]);
    }

    public function update_cart()
    {
        return view('cart');
    }

    public function addtocart($id=null) {
        //dd($id);
        /*$cart=Cart::create(array(

            'product_id'=>$id
        ));*/
        DB::table('carts')->insert([
            'product_id'=>$id
        ]);
        //return 'Hello';*/
        return view('index');

    }

    public function deletetocart($id=null) {
        //return "Hello";
        //dd($id);

        DB::table('carts')->where('product_id','=',$id)->delete();
        return view('cart');

    }



    public function register() {
        DB::table('users')->
        insert(array(
            'email'=> $_POST['email'],
            'password'=> $_POST['password'],
            'name'=> $_POST['name'],
            'remember_token'=>$_POST['_token']
        ));

        return view('login');
    }



    public function authenticate() {
        /*$creds = array(
            'name' => Input::get('name'),
            'password' => Input::get('password')
        );*/
        //var_dump(Input::all());

        // captcha instance of the login page
        //$captcha = $this->getLoginCaptchaInstance();

        // validate the user-entered Captcha code when the form is submitted
        //$code = Input::get('CaptchaCode');
        //$isHuman = $captcha->Validate($code);

        //if ($isHuman) {
       /*     if (Auth::attempt($creds)) {
                $view = View::make('welcomemain');
                if(Input::get('rememberme')){
                    dd("remembered");
                    $cookie = Cookie::forever('remember',Input::get('email') );
                    return Response::make($view)->withCookie($cookie);
                }
                return Response::make($view);
            }

            //else {
             //   return Redirect::to('/')->withInput();
            //}

      //  }

        else{
            return Redirect::to('/')->withInput();
        }*/




        /*$remember=(Input::has('remember'))?true:false;

        //dd($remember);
        //var_dump($_POST);
        /* $auth= Auth::attempt(array(
                 'email' => strtolower(Input::get('email')),
                 'password' => Input::get('password'),

         ),$remember
         );*/
         //dd($auth);
        $users = DB::table('users')->select('email','password','name')->where('email',$_POST['email'])->first();
        //dd($users);
        if($users==null){
            return "Not registerred";
        }
        elseif($users->{'password'}!=$_POST['password'] ){
            return "password mismatch";
        }
        elseif($users->{'password'}==$_POST['password'] && $users->{'email'}==$_POST['email'] ) {


            return view('welcome',['name'=>$users]);
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

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
        //
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

    public function kids()
    {
        return view('kids');
    }

    public function KidsDressingUp()
    {
        return view('KidsDressingUp');
    }

    public function KidsStationery()
    {
        return view('KidsStationery');
    }

    public function KidsToysPuzzles()
    {
        return view('KidsToysPuzzles');
    }

    public function NewInKids()
    {
        return view('NewInKids');
    }
}
