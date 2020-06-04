@extends('layout')
@section('content')
<!--<div class="row">
    <a class="btn-primary primary-info p-20 m-b-5  " href="{{  url('lists') }} ">View List</a>
</div>-->

                <div class="row">
                    <div class="col-sm-12 card-header" style="background-color:#820101;">
                        <h4 class="header-title mt-3 m-b-20 text-white">Update Address Form /  முகவரி மலர்</h4>
                    </div>

                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>

                    {{-- <div class="col-12 m-1">
                    <div class="alert alert-success alert-dismissible" id="mes" style="margin-top:20px;">

                    <button type="button" class="close" data-dismiss="alert" onclick="javascript:document.getElementById('mes').style.display = 'none';">x</button>
                    You have successfully Updated Parents form. Your id is



                    </div>
                </div>--}}
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
                                <option {{ $parents->district == "ARI" ? 'selected':'' }}>Ariyalur</option>
                                <option {{ $parents->district == "CHE" ? 'selected':'' }}>Chennai</option>
                                <option {{ $parents->district == "COI" ? 'selected':'' }}>Coimbatore</option>
                                <option {{ $parents->district == "CUD" ? 'selected':'' }}>Cuddalore</option>
                                <option {{ $parents->district == "DHA" ? 'selected':'' }}>Dharmapuri</option>
                                <option {{ $parents->district == "DGL" ? 'selected':'' }}>Dindigul</option>
                                <option {{ $parents->district == "ERD" ? 'selected':'' }}>Erode</option>
                                <option {{ $parents->district == "KANC" ? 'selected':'' }}>Kancheepuram</option>
                                <option {{ $parents->district == "KANY" ? 'selected':'' }}>Kanyakumari</option>
                                <option {{ $parents->district == "KAR" ? 'selected':'' }}>Karur</option>
                                <option {{ $parents->district == "KRI" ? 'selected':'' }}>Krishnagiri</option>
                                <option {{ $parents->district == "MAD" ? 'selected':'' }}>Madurai</option>

                                <option {{ $parents->district == "NAG" ? 'selected':'' }}>Nagapattinam</option>
                                <option {{ $parents->district == "NAM" ? 'selected':'' }}>Namakkal</option>
                                <option {{ $parents->district == "PER" ? 'selected':'' }}>Perambalur</option>
                                <option {{ $parents->district == "PUD" ? 'selected':'' }}>Pudukottai</option>
                                <option {{ $parents->district == "RAM" ? 'selected':'' }}>Ramanathapuram</option>
                                <option {{ $parents->district == "SLM" ? 'selected':'' }}>Salem</option>
                                <option {{ $parents->district == "SVG" ? 'selected':'' }}>Sivagangai</option>

                                <option {{ $parents->district == "THAN" ? 'selected':'' }}>Thanjavur</option>
                                <option {{ $parents->district == "NIL" ? 'selected':'' }}>Nilgiris</option>
                                <option {{ $parents->district == "THE" ? 'selected':'' }}>Theni</option>
                                <option {{ $parents->district == "TVR" ? 'selected':'' }}>Thiruvallur</option>
                                <option {{ $parents->district == "TVI" ? 'selected':'' }}>Thiruvannamalai</option>
                                <option {{ $parents->district == "TVR" ? 'selected':'' }}>Thiruvarur</option>
                                <option {{ $parents->district == "TNI" ? 'selected':'' }}>Thirunelveli</option>

                                <option {{ $parents->district == "TRI" ? 'selected':'' }}>Trichirappalli</option>
                                <option {{ $parents->district == "TPR" ? 'selected':'' }}>Tiruppur</option>
                                <option {{ $parents->district == "TUT" ? 'selected':'' }}>Tuticorin</option>
                                <option {{ $parents->district == "VEL" ? 'selected':'' }}>Vellore</option>
                                <option {{ $parents->district == "VIL" ? 'selected':'' }}>Viluppuram</option>
                                <option {{ $parents->district == "VIR" ? 'selected':'' }}>Virudhunagar</option>
                                <option {{ $parents->district == "TEN" ? 'selected':'' }}>Tenkasi</option>

                                <option {{ $parents->district == "KAL" ? 'selected':'' }}>Kallakurichi</option>
                                <option {{ $parents->district == "CGT" ? 'selected':'' }}>Chengalpet</option>
                                <option {{ $parents->district == "TPR" ? 'selected':'' }}>Tirupattur</option>
                                <option {{ $parents->district == "RAN" ? 'selected':'' }}>Ranipet</option>

                            </select>
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
                                <label for="company_email">Company Email Id / மின்னஞ்சல் </label><span class="text-danger">*</span>

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

                            <input type="text" name="cell_no" class="form-control tamil " value="{{$parents->cell_no}}" placeholder="செல்" required>

                        </div>
                        <div class="form-group">
                            <label for="natchatram">Job Type / பணி புரியும் வகைகள்</label><span class="text-danger">*</span>


                                <select class ="form-control select2 tamil" id="job_details" name="job_details">
                                    <option value="">Select</option>
                                    <option {{ $parents->job_details == 1 ? 'selected':'' }}>Business</option>
                                    <option {{ $parents->job_details == 2 ? 'selected':'' }}>Agriculture</option>
                                    <option {{ $parents->job_details == 3 ? 'selected':'' }}>Job</option>

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
                                <label for="company_cellno">Company Cell / செல் </label><span class="text-danger">*</span>

                                <input type="text" name="company_cell_no" class="form-control tamil " value="{{$parents->company_cell_no}}" placeholder="செல்" required>

                            </div>

                            <div class="form-group">
                                <label for="company_cellno">Qualification / தனிதகுதி </label>

                                <input type="text" name="qualification" class="form-control tamil " value="{{$parents->qualification}}" placeholder=" தனிதகுதி" >

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

                            <div id="dynamic" style="width: 100%">
                                        <table id="example" class="table table-striped table-bordered" style="width:100%">

                                            <thead>
                                                <th>S.No</th>
                                                <th>Name</th>
                                                <th>Date Of Birth</th>
                                                <th>Education</th>
                                                <th>Marital Status</th>

                                                <th>Edit</th>

                                            </thead>
                                            <tbody>
                                                @php
                                                 $i=1;
                                                @endphp
                                               @foreach ($childs as $child)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $child->name }}</td>
                                                    <td>{{ $child->date_of_birth }}</td>
                                                    <td>{{ $child->education }}</td>
                                                    <td>{{ $child->marital_status }}</td>

                                                    <td><a href="{{ route('parents.edit',['id'=>$child->id]) }}">Edit</a></td>


                                                </tr>
                                                @php
                                                 $i++;
                                                @endphp

                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>


                                    {{-- @foreach ($childs as $child)
                                        {{$child->name}}
                                    @endforeach --}}


                           </div>

                               <div class="row card-box col-md-12">
                                    <div class="form-group col-12 text-center mt-5 justify-content-center">
                                        <button type="submit" class="btn btn-red center-page">சமர்ப்பி</button>
                                        <button type="submit" class="btn btn-red">மறு சீரமை</button>
                                        <button type="submit" class="btn btn-red"><a href="{{ url('lists')}}" style="color: white">Back</a></button>
                                    </div>
                              </div>
                           </div>
                             </div>

                        </form>
                </div>


                        <!-- end row -->

        @endsection
