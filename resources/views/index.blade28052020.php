@extends('layout')
@section('content')

                <div class="row">
                    <div class="col-sm-12 card-header" style="background-color:#820101;">
                        <h4 class="header-title mt-3 m-b-20 text-white">Add Address Form / புதிய முகவரி மலர்</h4>
                    </div>
                    @if (session()->has('success'))
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
                         @endif
                </div>




                <div class="row card-box ">

                    <form class="form-horizontal form-validation" role="form" action="{{ url('profile/add') }}" method="post" enctype="multipart/form-data">
                            <div class="row">

                         <div class="col-md-5">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <div class="form-group">
                                <label>Name / பெயர் </label><span class="text-danger">*</span>

                                <input type="text" name="name" class="form-control tamil" value=""  placeholder="பெயர்" required>

                            </div>
                            <div class="form-group">
                                <label for="father_name">Father's Name / தந்தை பெயர் :</label><span class="text-danger">*</span>

                                <input type="text" name="father_name" class="form-control tamil" value="" placeholder="தந்தை பெயர்" required title="Please enter at least 5 characters">

                            </div>
                            <div class="form-group">
                                <label for="date_of_birth">Date of Birth / பிறந்த தேதி </label><span class="text-danger">*</span>

                                <input type="text" name="date_of_birth" class="form-control tamil datepicker " value="" placeholder="மா/நா/வரு" required>

                            </div>

                             <div class="form-group">
                                <label for="age">Age / வயது </label><span class="text-danger">*</span>

                                <input type="text" name="age" class="form-control" value="" placeholder="வயது" required>

                            </div>
                            <div class="form-group">
                                <label for="age">Blood Group / இரத்த வகை </label><span class="text-danger">*</span>

                                <input type="text" name="blood_group" class="form-control" value="" placeholder="இரத்த வகை" required>

                            </div>

                            <div class="form-group">
                                <label for="photo">போட்டோ </label>

                                <input type="file" name="photo" class="form-control tamil "  onchange="readURL(this);">
                                <img id="blah" src="#" alt="போட்டோ"  style="display:none;"/>
                            </div>

                            <div class="form-group">
                                <label for="age">Native Place / பூர்விக ஊர் </label><span class="text-danger">*</span>

                                <input type="text" name="native_place" class="form-control" value="" placeholder="பூர்விக ஊர்" required>

                            </div>
                            <div class="form-group">
                                <label for="district">District / மாவட்டம்  </label><span class="text-danger">*</span>

                            <select onchange="get_district_announcements(this.value)" class="form-control form-select" id="district_wise" name="district">
                                <option value="">Select</option>
                                <option value="1">Ariyalur</option>
                                <option value="2">Chennai</option>
                                <option value="3">Coimbatore</option>
                                <option value="4">Cuddalore</option>
                                <option value="5">Dharmapuri</option>
                                <option value="6">Dindigul</option>
                                <option value="7">Erode</option>
                                <option value="8">Kancheepuram</option>
                                <option value="9">Kanyakumari</option>
                                <option value="10">Karur</option>
                                <option value="11">Krishnagiri</option>
                                <option value="12">Madurai</option>
                                <option value="13">Nagapattinam</option>
                                <option value="14">Namakkal</option>
                                <option value="15">Perambalur</option>
                                <option value="16">Pudukottai</option>
                                <option value="17">Ramanathapuram</option>
                                <option value="18">Salem</option>
                                <option value="19">Sivagangai</option>
                                <option value="20">Thanjavur</option>
                                <option value="21">The Nilgiris</option>
                                <option value="22">Theni</option>
                                <option value="23">Thiruvallur</option>
                                <option value="24">Thiruvannamalai</option>
                                <option value="25">Thiruvarur</option>
                                <option value="26">Thirunelveli</option>
                                <option value="27">Trichirappalli</option>
                                <option value="28">Tiruppur</option>
                                <option value="29">Tuticorin</option>
                                <option value="30">Vellore</option>
                                <option value="31">Viluppuram</option>
                                <option value="32">Virudhunagar</option>
                                <option value="33">Tenkasi</option>
                                <option value="34">Kallakurichi</option>
                                <option value="35">Chengalpet</option>
                                <option value="36">Tirupattur</option>
                                <option value="37">Ranipet</option></select>
                            </div>

                            <div class="form-group">
                                <label for="ancestry">கோத்திரம் </label>

                                <input type="text" name="ancestry" class="form-control tamil " value="" placeholder="கோத்திரம்">

                            </div>


                           <div class="form-group">
                                <label for="address">Address / இருப்பிடம் - விலாசம் </label><span class="text-danger">*</span>

                                <textarea name="address" class="form-control tamil" required></textarea>


                            </div>
                            <div class="form-group">
                                <label for="telephone">Telephone / தொலைபேசி </label>

                                <input type="text" name="telephone" class="form-control tamil " value="" placeholder="தொலைபேசி">

                            </div>
                            <div class="form-group">
                                <label for="telephone">Cell / செல் </label>

                                <input type="number" name="cellno" class="form-control tamil " value="" placeholder="செல்">

                            </div>

                            <div class="form-group">
                                <label for="telephone">Email Id / மின்னஞ்சல் </label>

                                <input type="number" name="email" class="form-control tamil " value="" placeholder="மின்னஞ்சல்">

                            </div>
                            <div class="form-group">
                                <label for="natchatram">Job Details / பணி புரியும் விபரம்</label><span class="text-danger">*</span>

                                 <select name="job_details" id="job_details"  class="form-control select2 tamil" required>
                                                                <option value="">Select</option>
                                                                <option value="1">Business</option>
                                                                <option value="2">Agriculture</option>
                                                                <option value="3">Job</option>


                                    </select>



                              </div>



                       </div>

                    <div class="offset-md-1 col-md-5">

                             <div class="form-group">
                                <label for="designation">Designation / பதவி பெயர்</label><span class="text-danger">*</span>

                                <input type="text" name="designation" class="form-control tamil "  placeholder="பதவி பெயர்" required>

                            </div>
                            <div class="form-group">
                                <label for="company_name">Company Name / நிறுவனத்தின் பெயர் </label><span class="text-danger">*</span>

                                <input type="text" name="company_name" class="form-control tamil "  placeholder="நிறுவனத்தின் பெயர்" required>

                            </div>
                            <div class="form-group">
                                <label for="company_address">Company Address / நிறுவன விலாசம் </label><span class="text-danger">*</span>

                                <textarea name="company_address" class="form-control tamil" required></textarea>


                            </div>

                            <div class="form-group">
                                <label for="company_telephone">Telephone / தொலைபேசி </label>

                                <input type="text" name="company_telephone" class="form-control tamil " value="" placeholder="தொலைபேசி">

                            </div>
                            <div class="form-group">
                                <label for="cellno">Cell / செல் </label>

                                <input type="number" name="company_cellno" class="form-control tamil " value="" placeholder="செல்">

                            </div>
                            <div class="form-group">
                                <label for="company_email">Email Id / மின்னஞ்சல் </label>

                                <input type="number" name="company_email" class="form-control tamil " value="" placeholder="மின்னஞ்சல்">

                            </div>
                            <div class="form-group">
                                <label for="qualification">தனித்தகுதி</label><span class="text-danger">*</span>

                                <input type="text" name="qualification" class="form-control tamil " value="" placeholder="தனித்தகுதி" required>

                            </div>
                            <div class="form-group">
                                <label for="wife_name">Wife's Name / மனைவி பெயர் </label><span class="text-danger">*</span>

                                <input type="text" name="wife_name" class="form-control tamil" value=""  placeholder="மனைவி பெயர்" required>

                            </div>
                            <div class="form-group">
                                <label for="wife_native_place">Wife Native Place / மனைவி பூர்விக ஊர் </label><span class="text-danger">*</span>

                                <input type="text" name="wife_native_place" class="form-control" value="" placeholder="மனைவி பூர்விக ஊர்" required>

                            </div>
                            <div class="form-group">
                                <label for="wife_ancestry">மனைவி கோத்திரம் </label>

                                <input type="text" name="wife_ancestry" class="form-control tamil " value="" placeholder="மனைவி கோத்திரம்">

                            </div>
                            <div class="form-group">
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
                                             <td scope="row">குழந்தைகள் விபரம்</th>
                                             <td>
                                               <input type = "number" name="no_male" class = "form-control" style="width:60px;" maxlength="2">

                                               </td>
                                             <td>

                                                <input type = "number" name="no_female" class = "form-control" style="width:60px;" maxlength="2">

                                              </td>
                                           </tr>

                                          </table>


                             </div>


                            </div>

                                <div class="col-12">


                           <div class="row card-box">

                                    <div class="col-md-5">
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
                                            <label>Name / பெயர் </label><span class="text-danger">*</span>

                                            <input type="text" name="child1_name" class="form-control tamil" value=""  placeholder="பெயர்" required>

                                        </div>
                                        <div class="form-group">
                                            <label for="child1_dob">Date of Birth / பிறந்த தேதி </label><span class="text-danger">*</span>

                                            <input type="text" name="child1_dob" class="form-control tamil datepicker " value="" placeholder="மா/நா/வரு" required>

                                        </div>

                                        <div class="form-group">
                                            <label for="education">Education / படிப்பு</label><span class="text-danger">*</span>

                                            <input type="text" name="child1_education" class="form-control tamil " value="" placeholder="படிப்பு" required>

                                        </div>
                                        <div class="form-group">
                                            <label for="child1_marrige">Married Details / திருமண விபரம்</label><span class="text-danger">*</span>

                                             <select name="child1_marrige" id="child1_marrige"  class="form-control select2 tamil" required>
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
                                        <label>Name / பெயர் </label><span class="text-danger">*</span>

                                        <input type="text" name="child3_name" class="form-control tamil" value=""  placeholder="பெயர்" required>

                                    </div>
                                    <div class="form-group">
                                        <label for="child1_dob">Date of Birth / பிறந்த தேதி </label><span class="text-danger">*</span>

                                        <input type="text" name="child3_dob" class="form-control tamil datepicker " value="" placeholder="மா/நா/வரு" required>

                                    </div>

                                    <div class="form-group">
                                        <label for="education">Education / படிப்பு</label><span class="text-danger">*</span>

                                        <input type="text" name="child3_education" class="form-control tamil " value="" placeholder="படிப்பு" required>

                                    </div>
                                    <div class="form-group">
                                        <label for="child3_marrige">Married Details / திருமண விபரம்</label><span class="text-danger">*</span>

                                         <select name="child3_marrige" id="child3_marrige"  class="form-control select2 tamil" required>
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
                                <label>Name / பெயர் </label><span class="text-danger">*</span>

                                <input type="text" name="child2_name" class="form-control tamil" value=""  placeholder="பெயர்" required>

                            </div>
                            <div class="form-group">
                                <label for="child1_dob">Date of Birth / பிறந்த தேதி </label><span class="text-danger">*</span>

                                <input type="text" name="child1_dob" class="form-control tamil datepicker " value="" placeholder="மா/நா/வரு" required>

                            </div>

                            <div class="form-group">
                                <label for="education">Education / படிப்பு</label><span class="text-danger">*</span>

                                <input type="text" name="child1_education" class="form-control tamil " value="" placeholder="படிப்பு" required>

                            </div>
                            <div class="form-group">
                                <label for="child1_marrige">Married Details / திருமண விபரம்</label><span class="text-danger">*</span>

                                 <select name="child1_marrige" id="child1_marrige"  class="form-control select2 tamil" required>
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
                            <label>Name / பெயர் </label><span class="text-danger">*</span>

                            <input type="text" name="child4_name" class="form-control tamil" value=""  placeholder="பெயர்" required>

                        </div>
                        <div class="form-group">
                            <label for="child4_dob">Date of Birth / பிறந்த தேதி </label><span class="text-danger">*</span>

                            <input type="text" name="child4_dob" class="form-control tamil datepicker " value="" placeholder="மா/நா/வரு" required>

                        </div>

                        <div class="form-group">
                            <label for="education">Education / படிப்பு</label><span class="text-danger">*</span>

                            <input type="text" name="child4_education" class="form-control tamil " value="" placeholder="படிப்பு" required>

                        </div>
                        <div class="form-group">
                            <label for="child4_marrige">Married Details / திருமண விபரம்</label><span class="text-danger">*</span>

                             <select name="child4_marrige" id="child4_marrige"  class="form-control select2 tamil" required>
                                <option value="">Select</option>
                                <option value="1">Married</option>
                                <option value="2">Unmarried</option>



                                </select>



                          </div>








                               </div>
                           </div>

                               <div class="row card-box ">
                                    <div class="form-group col-12 text-center mt-5 justify-content-center">
                                        <button type="submit" class="btn btn-red center-page">சமர்ப்பி</button>
                                        <button type="submit" class="btn btn-red">மறு சீரமை</button>
                                   </div>
                              </div>
                           </div>
                             </div>
                        </form>
                </div>

                        <!-- end row -->

        @endsection
