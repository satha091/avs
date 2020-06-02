@extends('layout')
@section('content')
<!--<div class="row">
    <a class="btn-primary primary-info p-20 m-b-5  " href="{{  url('lists') }} ">View List</a>
</div>-->

                <div class="row">
                    <div class="col-sm-12 card-header" style="background-color:#820101;">
                        <h4 class="header-title mt-3 m-b-20 text-white">Update Address Form / புதிய முகவரி மலர்</h4>
                    </div>

                    @if(session()->has('uid'))
                    <div class="col-12 m-1">
                    <div class="alert alert-success alert-dismissible" id="mes" style="margin-top:20px;">

                    <button type="button" class="close" data-dismiss="alert" onclick="javascript:document.getElementById('mes').style.display = 'none';">x</button>
                    You have successfully created address form. Your id is <b>{{ session()->get('uid') }}</b>



                    </div>
                </div>
                    @endif

                    {{-- @if (session()->has('success'))
                    <div class="col-12 m-2">
                        <div class="alert alert-success">
                            @if(is_array(session()->get('success')))
                            <ul>
                                @foreach (session()->get('success') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @else
                                {{ session()->get('success') }}
                            @endif
                        </div>
                </div>
                         @endif --}}
                </div>




                <div class="row card-box ">

                    <form id="dyn" class="form-horizontal form-validation" role="form" action="{{ route('parents.update',['id'=>$parents->id]) }}" method="post" enctype="multipart/form-data">

                        @method('put')
                        @csrf

                     <div class="row">

                         <div class="col-md-5">
                            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"/> --}}
                            <div class="form-group">
                                <label>Name / பெயர் </label><span class="text-danger">*</span>

                            <input type="text" name="name" class="form-control tamil" value="{{$parents->name}}"  placeholder="பெயர்" required>

                            </div>

                            <div class="form-group">
                                <label for="date_of_birth">Date of Birth / பிறந்த தேதி </label><span class="text-danger">*</span>

                                <input type="date" name="date_of_birth" class="form-control tamil  " value="{{$parents->date_of_birth}}" placeholder="மா/நா/வரு" required>

                            </div>


                            <div class="form-group">
                                <label for="blood_group">Blood Group / இரத்த வகை </label><span class="text-danger">*</span>

                                <input type="text" name="blood_group" class="form-control" value="{{$parents->blood_group}}" placeholder="இரத்த வகை" required>

                            </div>



                            <div class="form-group">
                                <label for="native_place">Native Place / பூர்விக ஊர் </label><span class="text-danger">*</span>

                                <input type="text" name="native_place" class="form-control" value="{{$parents->native_place}}" placeholder="பூர்விக ஊர்" required>

                            </div>
                            <div class="form-group">
                                <label for="district">District / மாவட்டம்  </label><span class="text-danger">*</span>

                            <select onchange="get_district_announcements(this.value)" class="form-control form-select" id="district_wise" name="district">
                                <option value="">Select</option>
                                <option value="ARI">Ariyalur</option>
                                <option value="CHE">Chennai</option>
                                <option value="COI">Coimbatore</option>
                                <option value="CUD">Cuddalore</option>
                                <option value="DHA">Dharmapuri</option>
                                <option value="DGL">Dindigul</option>
                                <option value="ERD">Erode</option>
                                <option value="KANC">Kancheepuram</option>
                                <option value="KANY">Kanyakumari</option>
                                <option value="KAR">Karur</option>
                                <option value="KRI">Krishnagiri</option>
                                <option value="MAD">Madurai</option>
                                <option value="NAG">Nagapattinam</option>
                                <option value="NAM">Namakkal</option>
                                <option value="PER">Perambalur</option>
                                <option value="PUD">Pudukottai</option>
                                <option value="RAM">Ramanathapuram</option>
                                <option value="SLM">Salem</option>
                                <option value="SVG">Sivagangai</option>
                                <option value="THAN">Thanjavur</option>
                                <option value="NIL">The Nilgiris</option>
                                <option value="THE">Theni</option>
                                <option value="TVR">Thiruvallur</option>
                                <option value="TVI">Thiruvannamalai</option>
                                <option value="TVR">Thiruvarur</option>
                                <option value="TNI">Thirunelveli</option>
                                <option value="TRI">Trichirappalli</option>
                                <option value="TPR">Tiruppur</option>
                                <option value="TUT">Tuticorin</option>
                                <option value="VEL">Vellore</option>
                                <option value="VIL">Viluppuram</option>
                                <option value="VIR">Virudhunagar</option>
                                <option value="TEN">Tenkasi</option>
                                <option value="KAL">Kallakurichi</option>
                                <option value="CGT">Chengalpet</option>
                                <option value="TPR">Tirupattur</option>
                                <option value="RAN">Ranipet</option></select>
                            </div>





                            <div class="form-group">
                                <label for="telephone">Telephone / தொலைபேசி </label><span class="text-danger">*</span>

                                <input type="text" name="telephone" class="form-control tamil " value="{{$parents->telephone}}" placeholder="தொலைபேசி" required>

                            </div>


                            <div class="form-group">
                                <label for="email">Email Id / மின்னஞ்சல் </label><span class="text-danger">*</span>

                                <input type="email" name="email" class="form-control tamil " value="{{$parents->email}}" placeholder="மின்னஞ்சல்" required>

                            </div>

                              <div class="form-group">
                                <label for="description">Job Description / பணி புரியும் விபரம்</label>

                                <input type="text" name="job_description" class="form-control tamil"  value="{{$parents->job_description}}" placeholder="பதவி பெயர்">

                            </div>
                            <div class="form-group">
                                <label for="company_name">Company Name / நிறுவனத்தின் பெயர் </label><span class="text-danger">*</span>

                                <input type="text" name="company_name" class="form-control tamil" value="{{$parents->company_name}}" placeholder="நிறுவனத்தின் பெயர்" required>

                            </div>
                            <div class="form-group">
                                <label for="company_telephone">Telephone / தொலைபேசி </label><span class="text-danger">*</span>

                                <input type="text" name="company_telephone" class="form-control tamil " value="{{$parents->company_telephone}}" placeholder="தொலைபேசி" required>

                            </div>
                            <div class="form-group">
                                <label for="company_email">Email Id / மின்னஞ்சல் </label><span class="text-danger">*</span>

                                <input type="email" name="company_email" class="form-control tamil " value="{{$parents->company_email}}" placeholder="மின்னஞ்சல்" required>

                            </div>
                            <div class="form-group">
                                <label for="wife_name">Wife's Name / மனைவி பெயர் </label><span class="text-danger"></span>

                                <input type="text" name="wife_name" class="form-control tamil" value="{{$parents->wife_name}}"  placeholder="மனைவி பெயர்" >

                            </div>
                            <div class="form-group">
                                <label for="wife_ancestry">மனைவி கோத்திரம் </label>

                                <input type="text" name="wife_ancestry" class="form-control tamil " value="{{$parents->wife_ancestry}}" placeholder="மனைவி கோத்திரம்">

                            </div>

                       </div>

                    <div class="offset-md-1 col-md-5">
                        <div class="form-group">
                            <label for="father_name">Father's Name / தந்தை பெயர் :</label><span class="text-danger">*</span>

                            <input type="text" name="father_name" class="form-control tamil" value="{{$parents->father_name}}" placeholder="தந்தை பெயர்" required title="Please enter at least 5 characters">

                        </div>
                        <div class="form-group">
                            <label for="age">Age / வயது </label><span class="text-danger">*</span>

                            <input type="text" name="age" class="form-control" value="{{$parents->age}}" placeholder="வயது" required>

                        </div>

                        <div class="form-group">
                            <label for="photo">போட்டோ </label><span class="text-danger">*</span>
                            <img id="blah" src="#" alt="போட்டோ"  style="display:none;"/>
                            <input type="file" name="photo" class="form-control tamil "  onchange="readURL(this);" required>

                        </div>

                        <div class="form-group">
                            <label for="ancestry">கோத்திரம் </label><span class="text-danger">*</span>

                            <input type="text" name="ancestry" class="form-control tamil " value="{{$parents->ancestry}}" placeholder="கோத்திரம்" required>

                        </div>
                        <div class="form-group">
                            <label for="address">Address / இருப்பிடம் - விலாசம் </label><span class="text-danger">*</span>

                            <textarea name="address" class="form-control tamil" rows="1" style="min-height: 0px" required> {{$parents->address}}</textarea>


                        </div>
                        <div class="form-group">
                            <label for="cellno">Cell / செல் </label><span class="text-danger">*</span>

                            <input type="number" name="cellno" class="form-control tamil " value="{{$parents->cellno}}" placeholder="செல்" required>

                        </div>
                        <div class="form-group">
                            <label for="natchatram">Job Type / பணி புரியும் வகைகள்</label><span class="text-danger">*</span>

                             <select name="job_details" id="job_details"  class="form-control select2 tamil" required>
                                                            <option value="">Select</option>
                                                            <option value="1">Business</option>
                                                            <option value="2">Agriculture</option>
                                                            <option value="3">Job</option>


                                </select>



                          </div>
                             <div class="form-group">
                                <label for="designation">Designation / பதவி பெயர்</label><span class="text-danger">*</span>

                                <input type="text" name="designation" class="form-control tamil" value="{{$parents->designation}}"  placeholder="பதவி பெயர்" required>

                            </div>

                            <div class="form-group">
                                <label for="company_address">Company Address / நிறுவன விலாசம் </label><span class="text-danger">*</span>

                                <textarea name="company_address" class="form-control tamil" rows="1" style="min-height: 0px" required>{{$parents->company_address}}</textarea>


                            </div>


                            <div class="form-group">
                                <label for="company_cellno">Cell / செல் </label><span class="text-danger">*</span>

                                <input type="number" name="company_cellno" class="form-control tamil " value="{{$parents->company_cellno}}" placeholder="செல்" required>

                            </div>

                            <div class="form-group">
                                <label for="company_cellno">Qualification / தனிதகுதி </label>

                                <input type="number" name="qualification" class="form-control tamil " value="{{$parents->qualification}}" placeholder=" தனிதகுதி" >

                            </div>



                            <div class="form-group">
                                <label for="wife_native_place">Wife Native Place / மனைவி பூர்விக ஊர் </label><span class="text-danger"></span>

                                <input type="text" name="wife_native_place" class="form-control" value="{{$parents->wife_native_place}}" placeholder="மனைவி பூர்விக ஊர்" >

                            </div>

                            {{-- <div class="form-group">
                                <table class="table table-borderless table-responsive mobiletable">
                                         <thead>
                                           <tr>
                                             <td></td>
                                             <td class="brothers">ஆண்</td>
                                             <td class="sisters">பெண்</td>
                                           </tr>
                                         </thead>
                                         <tbody>
                                           <tr>
                                             <th scope="row">குழந்தைகள் விபரம்</th>
                                             <td>
                                               <input type = "number" id="no_male" name="no_male"  class = "form-control" style="width:60px;" maxlength="2">

                                               </td>
                                             <td>

                                                <input type = "number" id="no_female" name="no_female"  class = "form-control" style="width:60px;" maxlength="2">

                                              </td>
                                           </tr>

                                          </table>


                             </div> --}}


                            </div>

                                <div class="col-12">


                           <div class="row card-box">

                                    {{-- <div class="col-md-5">
                                        <div class="form-group row">
                                                <div class="form-check form-check-inline">
                                                    <h4>(1)&nbsp;&nbsp;</h4>
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input mt-1" name="child1" value="son"> Son / மகன்
                                                    </label>
                                                  </div>
                                                  <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input mt-1" name="child1" value="daughter">Daughter / மகள்
                                                    </label>
                                                  </div>
                                         </div>
                                         <div class="form-group">
                                            <label>Name / பெயர் </label><span class="text-danger"></span>

                                            <input type="text" name="name1" class="form-control tamil" value=""  placeholder="பெயர்" >

                                        </div>
                                        <div class="form-group">
                                            <label for="child1_dob">Date of Birth / பிறந்த தேதி </label><span class="text-danger"></span>

                                            <input type="text" name="date_of_birth1" class="form-control tamil datepicker " value="" placeholder="மா/நா/வரு" >

                                        </div>

                                        <div class="form-group">
                                            <label for="education">Education / படிப்பு</label><span class="text-danger"></span>

                                            <input type="text" name="education" class="form-control tamil " value="" placeholder="படிப்பு" >

                                        </div>
                                        <div class="form-group">
                                            <label for="child1_marrige">Married Details / திருமண விபரம்</label><span class="text-danger"></span>

                                             <select name="marital_status1" id="marital_status"  class="form-control select2 tamil" >
                                                <option value="">Select</option>
                                                <option value="1">Married</option>
                                                <option value="2">Unmarried</option>



                                                </select>



                                          </div>



                                          <div class="form-group row">
                                            <div class="form-check form-check-inline">
                                                <h4>(3)&nbsp;&nbsp;</h4>
                                                <label class="form-check-label">
                                                  <input type="radio" class="form-check-input mt-1" name="child3" value="son"> Son / மகன்
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                  <input type="radio" class="form-check-input mt-1" name="child3" value="daughter">Daughter / மகள்
                                                </label>
                                              </div>
                                     </div>
                                     <div class="form-group">
                                        <label>Name / பெயர் </label><span class="text-danger"></span>

                                        <input type="text" name="name3" class="form-control tamil" value=""  placeholder="பெயர்" >

                                    </div>
                                    <div class="form-group">
                                        <label for="child1_dob">Date of Birth / பிறந்த தேதி </label><span class="text-danger"></span>

                                        <input type="text" name="date_of_birth3" class="form-control tamil datepicker " value="" placeholder="மா/நா/வரு" >

                                    </div>

                                    <div class="form-group">
                                        <label for="education">Education / படிப்பு</label><span class="text-danger"></span>

                                        <input type="text" name="education3" class="form-control tamil " value="" placeholder="படிப்பு" >

                                    </div>
                                    <div class="form-group">
                                        <label for="child3_marrige">Married Details / திருமண விபரம்</label><span class="text-danger"></span>

                                         <select name="marital_status3" id="marital_status"  class="form-control select2 tamil" >
                                            <option value="">Select</option>
                                            <option value="1">Married</option>
                                            <option value="2">Unmarried</option>



                                            </select>



                                      </div>










                                    </div>
                              <div class="col-md-1"></div>

                               <div class="col-md-5">

                                <div class="form-group row">
                                    <div class="form-check form-check-inline">
                                        <h4>(2)&nbsp;&nbsp;</h4>
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input mt-1" name="child2" value="son"> Son / மகன்
                                        </label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input mt-1" name="child2" value="daughter">Daughter / மகள்
                                        </label>
                                      </div>
                             </div>
                             <div class="form-group">
                                <label>Name / பெயர் </label><span class="text-danger"></span>

                                <input type="text" name="name2" class="form-control tamil" value=""  placeholder="பெயர்" >

                            </div>
                            <div class="form-group">
                                <label for="child1_dob">Date of Birth / பிறந்த தேதி </label><span class="text-danger"></span>

                                <input type="text" name="date_of_birth2" class="form-control tamil datepicker " value="" placeholder="மா/நா/வரு" >

                            </div>

                            <div class="form-group">
                                <label for="education">Education / படிப்பு</label><span class="text-danger"></span>

                                <input type="text" name="education2" class="form-control tamil " value="" placeholder="படிப்பு" >

                            </div>
                            <div class="form-group">
                                <label for="child1_marrige">Married Details / திருமண விபரம்</label><span class="text-danger"></span>

                                 <select name="marital_status2" id="marital_status"  class="form-control select2 tamil" >
                                    <option value="">Select</option>
                                    <option value="1">Married</option>
                                    <option value="2">Unmarried</option>



                                    </select>



                              </div>


                              <div class="form-group row">
                                <div class="form-check form-check-inline">
                                    <h4>(4)&nbsp;&nbsp;</h4>
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input mt-1" name="child4" value="son"> Son / மகன்
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input mt-1" name="child4" value="daughter">Daughter / மகள்
                                    </label>
                                  </div>
                         </div>
                         <div class="form-group">
                            <label>Name / பெயர் </label><span class="text-danger"></span>

                            <input type="text" name="name4" class="form-control tamil" value=""  placeholder="பெயர்" >

                        </div>
                        <div class="form-group">
                            <label for="child4_dob">Date of Birth / பிறந்த தேதி </label><span class="text-danger"></span>

                            <input type="text" name="date_of_birth4" class="form-control tamil datepicker " value="" placeholder="மா/நா/வரு" >

                        </div>

                        <div class="form-group">
                            <label for="education">Education / படிப்பு</label><span class="text-danger"></span>

                            <input type="text" name="education4" class="form-control tamil " value="" placeholder="படிப்பு" >

                        </div>
                        <div class="form-group">
                            <label for="child4_marrige">Married Details / திருமண விபரம்</label><span class="text-danger"></span>

                             <select name="marital_status4" id="marital_status"  class="form-control select2 tamil" >
                                <option value="">Select</option>
                                <option value="1">Married</option>
                                <option value="2">Unmarried</option>



                                </select>



                          </div> --}}

                          <div id="dynamic" style="width: 100%">
                          <h6 class="col-md-offset-6 " style="text-align: center">  குழந்தைகள் விபரம்</h6>
                            <table class="table table-bordered table-striped col-md-12"  id="user_table">
                                <thead>
                                 <tr>
                                     <th> Name</th>
                                     <th>Date Of Birth</th>
                                     <th> Education</th>
                                     <th>Married Details</th>
                                     <th>
        Childs

                                     </th>

                                     <th >Action</th>
                                 </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                 <tr>
                                                 {{-- <td colspan="2" align="right">&nbsp;</td> --}}

                                 </tr>
                                </tfoot>
                            </table>
                          </div>







                               </div>
                           </div>

                               <div class="row card-box col-md-12">
                                    <div class="form-group col-12 text-center mt-5 justify-content-center">
                                        <button type="submit" class="btn btn-red center-page">சமர்ப்பி</button>
                                        <button type="submit" class="btn btn-red">மறு சீரமை</button>
                                   </div>
                              </div>
                           </div>
                             </div>

                        </form>
                </div>

                <script>
                    $(document).ready(function(){

                     var count = 1;

                     dynamic_field(count);

                     function dynamic_field(number)
                     {
                      html = '<tr>';
                            html += '<td><input type="text" name="cname[]" class="form-control" /></td>';
                            html += '<td><input type="date" name="date_of_cbirth[]" class="form-control" /></td>';
                            html += '<td><input type="text" name="education[]" class="form-control" /></td>';
                            html += '<td><select  type="text" name="marital_status[]" class="form-control" ><option>Select</option><option value="1">Married </option><option value="2">Un Married </option>  </select></td>';
                            html += '<td><select  type="text" name="childs[]" class="form-control" ><option>Select</option><option value="1">ஆண்</option><option value="2">பெண் </option>  </select></td>';
                            if(number > 1)
                            {
                                html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
                                $('#dynamic tbody').append(html);
                            }
                            else
                            {
                                html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
                                $('#dynamic tbody').html(html);
                            }
                     }

                     $(document).on('click', '#add', function(){
                      count++;
                      dynamic_field(count);
                     });

                     $(document).on('click', '.remove', function(){
                      count--;
                      $(this).closest("tr").remove();
                     });


                    });
                    </script>
                        <!-- end row -->

        @endsection
