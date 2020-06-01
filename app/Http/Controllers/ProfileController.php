<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use App\Profile;
use App\RasiChart;
use App\NavChart;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data['name'] = request('bride_name');
        $data['father_name'] = request('father_name');
        $data['mother_name'] = request('mother_name');
        $data['address'] = request('address');
        $data['date_of_birth'] = date("Y-m-d",strtotime(request('date_of_birth')));
        $data['time_of_birth'] = request('birth_time');
        $data['birth_place'] = request('birth_place');
        $data['natchatram'] = request('natchatram');
        $data['laknam'] = request('laknam');
        $data['rasi'] = request('rasi');
        
        request()->validate([
             'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
          
         if ($files = $request->file('photo')) {
          $destinationPath =public_path('/uploads/'); // upload path
         $photo = date('YmdHis') . "." . $files->getClientOriginalExtension();
         $files->move($destinationPath, $photo);
         }
        else {
            $photo="";
            }
          
        $data['photo'] = $photo;
        
        $data['no_brothers'] = request('no_brothers');
        $data['no_brothers_married'] = request('no_brothers_mar');
        $data['no_sisters'] = request('no_sisters');
        $data['no_sisters_married'] = request('no_sisters_mar');
        $data['education'] = request('education');
        $data['job'] = request('job');
        $data['salary'] = request('salary');
        $data['caste'] = request('caste');
        $data['class'] = request('class');
        $data['subcaste'] = request('subcaste');
        $data['father_kulam'] = request('father_kulam');
        $data['mother_kulam'] = request('mother_kulam');
        $data['ancestry'] = request('ancestry');
        $data['dhosam'] = request('dhosam');
        $data['family_god'] = request('family_god');
        $data['dhisa'] = request('dhisa');
        $data['dhisa_year'] = request('dyears');
        $data['dhisa_month'] = request('dmonth');
        $data['dhisa_days'] = request('ddays');
        $data['registered_date'] = request('date_of_registration');
 
         $profile = Profile::create($data);
         
         $lastinsertid =$profile->id;
         
       
//Rasi chart part start   
         $rasidata['profile_id'] =  $lastinsertid;
         $rasidata['rasi_laknam'] = request('rasi_laknam');
          $rasidata['rasi1'] =is_array(request('rasi1')) ? implode(",",request('rasi1')) : request('rasi1');
       
          $rasidata['rasi2'] = is_array(request('rasi2')) ? implode(",",request('rasi2')):request('rasi2');
          $rasidata['rasi3'] = is_array(request('rasi3')) ? implode(",",request('rasi3')):request('rasi3');
          $rasidata['rasi4'] = is_array(request('rasi4')) ? implode(",",request('rasi4')):request('rasi4');
          $rasidata['rasi5'] =is_array(request('rasi5')) ? implode(",",request('rasi5')):request('rasi5');
          $rasidata['rasi6'] = is_array(request('rasi6')) ? implode(",",request('rasi6')):request('rasi6');
          $rasidata['rasi7'] = is_array(request('rasi7')) ? implode(",",request('rasi7')):request('rasi7');
          $rasidata['rasi8'] = is_array(request('rasi8')) ? implode(",",request('rasi8')):request('rasi8');
          $rasidata['rasi9'] = is_array(request('rasi9')) ? implode(",",request('rasi9')):request('rasi9');
          $rasidata['rasi10'] =is_array(request('rasi10')) ? implode(",",request('rasi10')):request('rasi10');
         $rasidata['rasi11'] = is_array(request('rasi11')) ? implode(",",request('rasi11')):request('rasi11');
         $rasidata['rasi12'] = is_array(request('rasi12')) ? implode(",",request('rasi12')):request('rasi12');
//         
         RasiChart::create($rasidata);
 
//Navamsam chart part start
          $navdata['profile_id'] =  $lastinsertid;
          $navdata['nav_laknam'] = request('nav_laknam');
          $navdata['nav1'] =is_array(request('nav1')) ? implode(",",request('nav1')) : request('nav1');
       
          $navdata['nav2'] = is_array(request('nav2')) ? implode(",",request('nav2')):request('nav2');
          $navdata['nav3'] = is_array(request('nav3')) ? implode(",",request('nav3')):request('nav3');
          $navdata['nav4'] = is_array(request('nav4')) ? implode(",",request('nav4')):request('nav4');
          $navdata['nav5'] =is_array(request('nav5')) ? implode(",",request('nav5')):request('nav5');
          $navdata['nav6'] = is_array(request('nav6')) ? implode(",",request('nav6')):request('nav6');
          $navdata['nav7'] = is_array(request('nav7')) ? implode(",",request('nav7')):request('nav7');
          $navdata['nav8'] = is_array(request('nav8')) ? implode(",",request('nav8')):request('nav8');
          $navdata['nav9'] = is_array(request('nav9')) ? implode(",",request('nav9')):request('nav9');
          $navdata['nav10'] =is_array(request('nav10')) ? implode(",",request('nav10')):request('nav10');
         $navdata['nav11'] = is_array(request('nav11')) ? implode(",",request('nav11')):request('nav11');
         $navdata['nav12'] = is_array(request('nav12')) ? implode(",",request('nav12')):request('nav12');
         NavChart::create($navdata);
         
         
      return redirect()->route('createprofile')->with('success', 'புதிய வரன் வெற்றிகரமாக பதிவேற்றப்பட்டது.');
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
}
