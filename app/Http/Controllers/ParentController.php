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
        $address_forms = Parents::all();
        return view('lists',['lists'=>$address_forms]);
        // return $address_forms;
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
    //    $lastinsertid=  $parent->create($request->all());
    //    return $lastinsertid;
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

        $parent->district = $request->get('district');


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
        if(isset($childd[1])){
            $parent->no_male_child = $childd[1];
        }else{
            $parent->no_male_child = 0;
        }
        if(isset($childd[2])){
            $parent->no_female_child = $childd[2];
        }else{
            $parent->no_female_child = 0;
        }




        $parent->uid = "AVS_". $request->get('district')."_".strtoupper(uniqid());

        $parent->created_by = 1;

        $parent->updated_by = 1;

        $parent->save();

        $lastinsertid = $parent->id;

        $c=count($request->cname);

        if($c>0 && $request->cname[0]!== NULL){
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
        $parents= Parents::find($id);
        $child = Child::find($id);
       // dd($child);exit;
        return view('edit',['parents'=>$parents],['child'=>$child]);
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
       // $parent = new Parents;
       if($request->hasFile('photo'))
         {
           // $rdata=$request->all();


         $imagename = time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('images'), $imagename);

        $parents= Parents::find($id)->update($request->except(['photo']));
        $parents= Parents::find($id)->update(['photo'=>$imagename]);

         }else{
            $parents= Parents::find($id)->update($request->all());
         }

       //  dd($parents);exit;
        //return $request;
        // dd($parents);exit;
    //    $parents->name = $request->name;

    //    $parents->father_name = $request->father_name;

    //     $parents->date_of_birth =$request->date_of_birth;

    //     $parents->age = $request->age;

    //     $parents->blood_group = $request->blood_group;

    //    if($request->hasFile('photo'))
    //     {

    //     $imagename = time().'.'.$request->photo->getClientOriginalExtension();
    //     $parents->photo = $imagename;
    //     $request->photo->move(public_path('images'), $imagename);
    //     }

    //     $parents->native_place = $request->native_place;

    //     $parents->district = $request->district;


    //     $parents->ancestry = $request->ancestry;

    //     $parents->address = $request->address;

    //     $parents->telephone = $request->telephone;

    //     $parents->cell_no = $request->cell_no;

    //     $parents->email = $request->email;

    //     $parents->job_details = $request->job_details;

    //     $parents->job_description = $request->job_description;

    //     $parents->designation = $request->designation;

    //     $parents->company_name = $request->company_name;

    //     $parents->company_address = $request->address;

    //     $parents->company_telephone = $request->company_telephone;

    //     $parents->company_cell_no = $request->company_cell_no;

    //     $parents->company_email = $request->company_email;

    //     $parents->qualification = $request->qualification;

    //     $parents->wife_name = $request->wife_name;

    //     $parents->wife_native_place = $request->wife_native_place;

    //     $parents->wife_ancestry = $request->wife_ancestry;
    //     $childd= array_count_values($request->childs);
    //     if(isset($childd[1])){
    //         $parents->no_male_child = $childd[1];
    //     }else{
    //         $parents->no_male_child = 0;
    //     }
    //     if(isset($childd[2])){
    //         $parents->no_female_child = $childd[2];
    //     }else{
    //         $parents->no_female_child = 0;
    //     }




    //     $parents->uid = "AVS_". $request->district."_".strtoupper(uniqid());

    //     $parents->created_by = 1;

    //     $parents->updated_by = 1;

    //     $parents->save();
return redirect()->back()->with('success','You have successfully Updated Parent Details');
       // $lastinsertid = $parents->id;


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
