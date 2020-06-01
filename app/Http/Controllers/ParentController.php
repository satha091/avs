<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Parents;
use App\Child;

use Illuminate\Support\Str;

use function GuzzleHttp\Promise\all;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address_forms = Parent::all();
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
       
        // return  $request->all();
        $parent = new Parents;
    //   $lastinsertid=  $parent->create($request->all());
    //   return $request->name;;
        $parent->name = $request->name;

        $parent->father_name = $request->get('father_name');

        $parent->date_of_birth =$request->get('date_of_birth');

        $parent->age = $request->get('age');

        $parent->blood_group = $request->get('blood_group');

        if($request->hasFile('photo'))
        {

        $imagename = time().'.'.$request->photo->getClientOriginalExtension();
        $parent->photo = $imagename;
        $request->photo->move(public_path('images'), $imagename);
        }

        $parent->native_place = $request->get('native_place');


        $parent->ancestry = $request->get('ancestry');

        $parent->address = $request->get('address');

        $parent->telephone = $request->get('telephone');

        $parent->cell_no = $request->get('cellno');

        $parent->email = $request->get('email');

        $parent->job_details = $request->get('job_details');

        $parent->job_description = $request->get('job_description');

        $parent->designation = $request->get('designation');

        $parent->company_name = $request->get('company_name');

        $parent->company_address = $request->get('address');

        $parent->company_telephone = $request->get('company_telephone');

        $parent->company_cell_no = $request->get('company_cellno');

        $parent->company_email = $request->get('company_email');

        $parent->qualification = $request->get('qualification');

        $parent->wife_name = $request->get('wife_name');

        $parent->wife_native_place = $request->get('wife_native_place');

        $parent->wife_ancestry = $request->get('wife_ancestry');
        $childd= array_count_values($request->childs);
        
        $parent->no_male_child = $childd[1];

        $parent->no_female_child = $childd[2];

        $parent->uid = "AVS_". $request->get('district')."_".strtoupper(uniqid());

        $parent->created_by = 1;

        $parent->updated_by = 1;

        $parent->save();

        $lastinsertid = $parent->id;
       
        $c=count($request->cname);
        if($c>0){
            for ($i=0; $i < $c ; $i++) {
                $child = new Child;
    
                $child->name=  $request->cname[$i];
    
                $child->date_of_birth = date("Y-m-d",strtotime($request->date_of_cbirth[$i]));
                $child->education = $request->education[$i];
                $child->marital_status = $request->marital_status[$i];
                $child->relationship_id =$request->childs[$i];
                $child->parent_id = $lastinsertid;
                $child->save();
                # code...
            }
        }
        

       // echo $lastinsertid;



//old code

        // if($request->get('child') !== ""){
        //     $child = new Child;



        //     $child->name = $request->get('name');
        //     $child->date_of_birth = date("Y-m-d",strtotime($request->get('date_of_birth')));
        //     $child->education = $request->get('education');
        //     $child->marital_status = $request->get('marital_status');
        //     // $child->marital_status = $request->get('marital_status');
        //      $child->parent_id = $lastinsertid;
        //      if($request->get('child') == "son"){
        //         //  $relationship = 1;
        //         $child->relationship_id = 1;
        //      }else{
        //         $child->relationship_id = 2;
        //        // $relationship = 2;
        //      }

        //      $child->save();
        // }
        // if($request->get('child2') !== ""){
        //     $child = new Child;



        //     $child->name = $request->get('name2');
        //     $child->date_of_birth = date("Y-m-d",strtotime($request->get('date_of_birth2')));
        //     $child->education = $request->get('education2');
        //     $child->marital_status = $request->get('marital_status2');
        //     // $child->marital_status = $request->get('marital_status');
        //      $child->parent_id = $lastinsertid;
        //      if($request->get('child2') == "son"){
        //         //  $relationship = 1;
        //         $child->relationship_id = 1;
        //      }else{
        //         $child->relationship_id = 2;
        //        // $relationship = 2;
        //      }

        //      $child->save();
        // }
        // if($request->get('child3') !== ""){
        //     $child = new Child;



        //     $child->name = $request->get('name3');
        //     $child->date_of_birth = date("Y-m-d",strtotime($request->get('date_of_birth3')));
        //     $child->education = $request->get('education3');
        //     $child->marital_status = $request->get('marital_status3');
        //     // $child->marital_status = $request->get('marital_status');
        //      $child->parent_id = $lastinsertid;
        //      if($request->get('child3') == "son"){
        //         //  $relationship = 1;
        //         $child->relationship_id = 1;
        //      }else{
        //         $child->relationship_id = 2;
        //        // $relationship = 2;
        //      }

        //      $child->save();
        // }
        // if($request->get('child4') !== ""){
        //     $child = new Child;



        //     $child->name = $request->get('name4');
        //     $child->date_of_birth = date("Y-m-d",strtotime($request->get('date_of_birth4')));
        //     $child->education = $request->get('education4');
        //     $child->marital_status = $request->get('marital_status4');
        //     // $child->marital_status = $request->get('marital_status');
        //      $child->parent_id = $lastinsertid;
        //      if($request->get('child4') == "son"){
        //         //  $relationship = 1;
        //         $child->relationship_id = 1;
        //      }else{
        //         $child->relationship_id = 2;
        //        // $relationship = 2;
        //      }

        //      $child->save();
        // }

        return redirect()->back()->with('uid', $parent->uid);


    }
// public function dynamic(Request $request){
// return 1;
// }


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
