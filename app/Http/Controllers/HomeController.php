<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;



class HomeController extends Controller

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

        return view('home');
    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function adminHome()
    {
        return view('admin.home', [
            "title" => "Home"
        ]);
    }


    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function satkerHome()
    {
        return view('satker.home', [
            "title" => "Home"
        ]);
    }


    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function reviuHome()
    {
        return view('reviu.home', [
            "title" => "Home"
        ]);
    }


    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function akuntansiHome()
    {
        return view('akuntansi.home', [
            "title" => "Home"
        ]);
    }
}
