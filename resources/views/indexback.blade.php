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

                                <input type="text" name="bride_name" class="form-control tamil" value=""  placeholder="பெயர்" required>

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
                                <label for="age">Native Place / பூர்விக ஊர் </label><span class="text-danger">*</span>

                                <input type="text" name="native_place" class="form-control" value="" placeholder="பூர்விக ஊர்" required>

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

                               <div class="form-group">
                                <label for="birth_time">பிறந்த நேரம் </label><span class="text-danger">*</span>

                                <input type="text" name="birth_time"  class="form-control timepicker" value="" placeholder="பிறந்த நேரம்" required>

                            </div>
                               <div class="form-group">
                                <label for="birth_place">பிறந்த இடம்</label><span class="text-danger">*</span>

                                <input type="text" name="birth_place" class="form-control  tamil " value="" placeholder="பிறந்த இடம்" required>

                              </div>
                              <div class="form-group">
                                <label for="natchatram">ஜென்ம நட்சத்திரம்</label><span class="text-danger">*</span>

                                 <select name="natchatram" id="natchatram"  class="form-control select2 tamil" required>
                                                                <option value="">தேர்ந்தெடு</option>
                                                                <option value="1">அஸ்வினி</option>
                                                                <option value="2">பரணி</option>
                                                                <option value="3">கார்த்திகை</option>
                                                                <option value="4">ரோகிணி</option>
                                                                <option value="5">மிருகசீரிடம்</option>
                                                                <option value="6">திருவாதிரை</option>
                                                                <option value="7">புனர்பூசம்</option>
                                                                <option value="8">பூசம்</option>
                                                                <option value="9">ஆயில்யம்</option>
                                                                <option value="10">மகம்</option>
                                                                <option value="11">பூரம்</option>
                                                                <option value="12">உத்தரம்</option>
                                                                <option value="13">அஸ்தம்</option>
                                                                <option value="14">சித்திரை</option>
                                                                <option value="15">சுவாதி</option>
                                                                <option value="16">விசாகம்</option>
                                                                <option value="17">அனுஷம்</option>
                                                                <option value="18">கேட்டை</option>
                                                                <option value="19">மூலம்</option>
                                                                <option value="20">பூராடம்</option>
                                                                <option value="21">உத்திராடம்</option>
                                                                <option value="22">திருவோணம்</option>
                                                                <option value="23">அவிட்டம்</option>
                                                                <option value="24">சதயம்</option>
                                                                <option value="25">பூரட்டாதி</option>
                                                                <option value="26">உத்திரட்டாதி</option>
                                                                <option value="27">ரேவதி</option>


                                    </select>



                              </div>
                             <div class="form-group">
                                <label for="laknam">ஜென்ம லக்கினம்</label><span class="text-danger">*</span>

                                 <select name="laknam" id="laknam"  class="form-control select2 tamil" required>
                                                                <option value="">தேர்ந்தெடு</option>
                                                            <option value="1">மேஷம்</option>
                                                                <option value="2">ரிஷபம்</option>
                                                                <option value="3">மிதுனம்</option>
                                                                <option value="4">கடகம்</option>
                                                                <option value="5">சிம்மம்</option>
                                                                <option value="6">கன்னி</option>
                                                                <option value="7">துலாம்</option>
                                                                <option value="8">விருச்சிகம்</option>
                                                                <option value="9">தனுசு</option>
                                                                <option value="10">மகரம்</option>
                                                                <option value="11">கும்பம்</option>
                                                                <option value="12">மீனம்</option>


                                    </select>



                              </div>
                                <div class="form-group">
                                <label for="rasi">ஜென்ம இராசி</label><span class="text-danger">*</span>

                                 <select name="rasi" id="rasi"  class="form-control  select2 tamil" required="required">
                                                                <option value="">தேர்ந்தெடு</option>
                                                            <option value="1">மேஷம்</option>
                                                                <option value="2">ரிஷபம்</option>
                                                                <option value="3">மிதுனம்</option>
                                                                <option value="4">கடகம்</option>
                                                                <option value="5">சிம்மம்</option>
                                                                <option value="6">கன்னி</option>
                                                                <option value="7">துலாம்</option>
                                                                <option value="8">விருச்சிகம்</option>
                                                                <option value="9">தனுசு</option>
                                                                <option value="10">மகரம்</option>
                                                                <option value="11">கும்பம்</option>
                                                                <option value="12">மீனம்</option>


                                  </select>



                              </div>
                           <div class="form-group">
                                <label for="photo">போட்டோ </label>

                                <input type="file" name="photo" class="form-control tamil "  onchange="readURL(this);">
                                <img id="blah" src="#" alt="போட்டோ"  style="display:none;"/>
                            </div>
                              <div class="form-group">
                               <table class="table table-borderless table-responsive mobiletable">
                                        <thead>
                                          <tr>
                                            <td></td>
                                            <td class="brothers">சகோதரிகள்</td>
                                            <td class="sisters">சகோதரர்கள்</td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td scope="row">உடன் பிறந்தவர்கள்</th>
                                            <td>
                                              <input type = "text" name="no_sisters" class = "form-control" style="width:60px;" maxlength="2">

                                              </td>
                                            <td>

                                               <input type = "text" name="no_brothers" class = "form-control" style="width:60px;" maxlength="2">

                                             </td>
                                          </tr>
                                           <tr>
                                            <td scope="row">திருமணம் ஆனவர்கள்</th>
                                            <td>
                                              <input type = "text" name="no_brothers_mar" class = "form-control" style="width:60px;" maxlength="2">

                                              </td>
                                            <td>

                                               <input type = "text" name="no_sisters_mar" class = "form-control" style="width:60px;" maxlength="2">

                                            </td>

                                          </tr>

                                         </table>


                            </div>
                           <div class="form-group">
                                <label for="education">கல்வித்தகுதி</label><span class="text-danger">*</span>

                                <input type="text" name="education" class="form-control tamil " value="" placeholder="கல்வித்தகுதி" required>

                            </div>




                       </div>

                    <div class="offset-md-1 col-md-5">

                             <div class="form-group">
                                <label for="job">தொழில்</label><span class="text-danger">*</span>

                                <input type="text" name="job" class="form-control tamil "  placeholder="தொழில்" required>

                            </div>
                             <div class="form-group">
                                <label for="salary">சம்பளம்</label><span class="text-danger">*</span>

                              <div class="input-group">
                                  <input id="salary" type="number" name="salary" class="form-control" min="0" placeholder="சம்பளம்" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-rupee"></i></span>
                                        </div>
                                    </div><!-- input-group -->

                            </div>
                             <div class="form-group">
                                <label for="caste">இனம்</label><span class="text-danger">*</span>

                                <input type="text" name="caste" class="form-control tamil " value="" placeholder="இனம்" required>

                            </div>
                            <div class="form-group">
                                <label for="class">வகுப்பு</label><span class="text-danger">*</span>

                                <input type="text" name="class" class="form-control tamil " value="" placeholder="வகுப்பு" required>

                            </div>
                           <div class="form-group">
                                <label for="subcaste">பிரிவு</label>

                                <input type="text" name="subcaste" class="form-control tamil " value="" placeholder="பிரிவு">

                            </div>
                            <div class="form-group">
                                <label for="father_kulam">தகப்பனாரின் குலம்</label>

                                <input type="text" name="father_kulam" class="form-control tamil " value="" placeholder="தகப்பனாரின் குலம்">

                            </div>
                           <div class="form-group">
                                <label for="mother_kulam">தாயாரின் குலம்</label>

                                <input type="text" name="mother_kulam" class="form-control tamil " value="" placeholder="தாயாரின் குலம்">

                            </div>
                              <div class="form-group">
                                <label for="dhosam">தோஷம்

                                <input type="text" name="dhosam" class="form-control tamil " value="" placeholder="தோஷம்">

                            </div>

                             <div class="form-group">
                                <label for="family_god">குலதெய்வம் </label>

                                <input type="text" name="family_god" class="form-control tamil " value="" placeholder="குலதெய்வம்">

                            </div>
                          <div class="form-group">

                                    <label for="dhisa">ஜனன கால திசை இருப்பு : </label>



                                         <select name="dhisa" id="dhisa" class="form-control select2 pull-left tamil" >
                                            <option value="">தேர்ந்தெடு</option>
                                             <option value="1">சூரியன்</option>
                                             <option value="2">சந்திரன்</option>
                                             <option value="3">செவ்வாய்</option>
                                             <option value="4">புதன்</option>
                                             <option value="5">குரு</option>
                                             <option value="6">சுக்கிரன்</option>
                                             <option value="7">சனி</option>
                                             <option value="8">ராகு</option>
                                             <option value="9">கேது</option>
                                         </select>
                                     <div class="row">
                                        <div class="col mt-2">
                                            <label for="dyears">வருடம்</label>
                                            <input type = "number" name="dyears" id="dyears" class = "form-control" style="width:110px;" maxlength="2" min="0">
                                        </div>
                                         <div class="col mt-2">
                                            <label for="dmonth">மாதம்</label>
                                                <input type = "number" name="dmonth" id="dmonth" class = "form-control" style="width:110px;" maxlength="2" min="0">
                                        </div>
                                          <div class="col mt-2">
                                            <label for="ddays">நாள்</label>
                                                <input type = "number" name="ddays" id="dmonth" class = "form-control" style="width:110px;" maxlength="2" min="0">
                                        </div>

                                    </div>
                             </div>


                                    <div class="form-group">
                                                     <label for="date_of_registration">பதிவு தேதி</label><span class="text-danger">*</span>
                                                          <input type="text" name="date_of_registration" class="form-control tamil datepicker " value="" placeholder="மா/நா/வரு" required>
                                    </div>
                            </div>

                                <div class="col-12">


                           <div class="row card-box">

                                    <div class="col-md-5">
                                          <div class="form-group p-2">
                                                        <label for="rasi_laknam">இராசி லக்கினம்</label>

                                                         <select name="rasi_laknam" id="rasi_laknam"  class="form-control select2 tamil" style="width:90%;">
                                                                                        <option value="">தேர்ந்தெடு</option>
                                                                                    <option value="1">மேஷம்</option>
                                                                                        <option value="2">ரிஷபம்</option>
                                                                                        <option value="3">மிதுனம்</option>
                                                                                        <option value="4">கடகம்</option>
                                                                                        <option value="5">சிம்மம்</option>
                                                                                        <option value="6">கன்னி</option>
                                                                                        <option value="7">துலாம்</option>
                                                                                        <option value="8">விருச்சிகம்</option>
                                                                                        <option value="9">தனுசு</option>
                                                                                        <option value="10">மகரம்</option>
                                                                                        <option value="11">கும்பம்</option>
                                                                                        <option value="12">மீனம்</option>


                                                            </select>

                                                 </div>

                                        <div class="row border-grey-light" style="min-height:100px;">

                                            <div class="col-md-3  p-2" style="border:1px solid #ccc;">
                                              <select name="rasi1[]" id="rasi1" class="form-control select2" multiple="multiple" style="margin-top:5px; border:0px!important; height:80px!important; width:100%;">

                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>

                                            </div>
                                            <div class="col-md-3  border-grey-light   p-2" style="border:1px solid #ccc;">
                                              <select name="rasi2[]" id="rasi2" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">

                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>

                                            </div>
                                            <div class="col-md-3  border-grey-light   p-2" style="border:1px solid #ccc;">

                                             <select name="rasi3[]" id="rasi3" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">

                                             <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>

                                            </div>
                                            <div class="col-md-3  border-grey-light  p-2" style="border:1px solid #ccc;">
                                                  <select name="rasi4[]" id="rasi4" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>


                                            </div>
                                        </div>

                                          <div class="row border-grey-light" style="min-height:100px;">
                                            <div class="col-md-3  p-2" style="border:1px solid #ccc;">
                                              <select name="rasi5[]" id="rasi5" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>

                                            </div>
                                            <div class="col-md-6    p-2 " style="border:0px solid #ccc;">
                                                <h3 class="text-center mt-5">  இராசி</h3>
                                            </div>

                                            <div class="col-md-3  border-grey-light   p-2" style="border:1px solid #ccc;">
                                                  <select name="rasi6[]" id="rasi6" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>


                                            </div>
                                        </div>

                                          <div class="row border-grey-light" style="min-height:100px;">
                                            <div class="col-md-3  p-2" style="border:1px solid #ccc;">
                                              <select name="rasi7[]" id="rasi7" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>

                                            </div>
                                            <div class="col-md-3    p-2 " style="border:0px solid #ccc;">

                                            </div>
                                            <div class="col-md-3   p-2" style="border:0px solid #ccc;">



                                            </div>
                                            <div class="col-md-3    p-2 border-grey-light" style="border:1px solid #ccc;">
                                                  <select name="rasi8[]" id="rasi8" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>


                                            </div>
                                        </div>

                                        <div class="row border-grey-light" style="min-height:100px;">
                                            <div class="col-md-3  p-2" style="border:1px solid #ccc;">
                                              <select name="rasi9[]" id="rasi9" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>

                                            </div>
                                            <div class="col-md-3    p-2 border-grey-light" style="border:1px solid #ccc;">
                                                  <select name="rasi10[]" id="rasi10" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>

                                            </div>
                                            <div class="col-md-3   p-2  border-grey-light" style="border:1px solid #ccc;">

                                             <select name="rasi11[]" id="rasi11" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>

                                            </div>
                                            <div class="col-md-3    p-2 border-grey-light" style="border:1px solid #ccc;">
                                                  <select name="rasi12[]" id="rasi12" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>


                                            </div>
                                        </div>
                                    </div>
                                                <div class="col-md-1"></div>

                               <div class="col-md-5">
                                    <div class="form-group p-2">
                                                        <label for="nav_laknam">நவாம்ச லக்கினம்</label>

                                                        <select name="nav_laknam" id="nav_laknam"  class="form-control select2 tamil" style="width:90%;">
                                                                                        <option value="">தேர்ந்தெடு</option>
                                                                                    <option value="1">மேஷம்</option>
                                                                                        <option value="2">ரிஷபம்</option>
                                                                                        <option value="3">மிதுனம்</option>
                                                                                        <option value="4">கடகம்</option>
                                                                                        <option value="5">சிம்மம்</option>
                                                                                        <option value="6">கன்னி</option>
                                                                                        <option value="7">துலாம்</option>
                                                                                        <option value="8">விருச்சிகம்</option>
                                                                                        <option value="9">தனுசு</option>
                                                                                        <option value="10">மகரம்</option>
                                                                                        <option value="11">கும்பம்</option>
                                                                                        <option value="12">மீனம்</option>


                                                            </select>

                                                 </div>

                                        <div class="row border-grey-light" style="min-height:100px;">
                                            <div class="col-md-3  p-2" style="border:1px solid #ccc;">
                                              <select name="nav1[]" id="nav1" class="form-control select2" multiple="multiple" style="margin-top:5px; border:0px!important; height:80px!important;width:100%;">

                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>

                                            </div>
                                            <div class="col-md-3  border-grey-light   p-2" style="border:1px solid #ccc;">
                                                  <select name="nav2[]" id="nav2" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>

                                            </div>
                                            <div class="col-md-3  border-grey-light   p-2" style="border:1px solid #ccc;">

                                             <select name="nav3[]" id="nav3" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>

                                            </div>
                                            <div class="col-md-3  border-grey-light  p-2" style="border:1px solid #ccc;">
                                                  <select name="nav4[]" id="nav4" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>


                                            </div>
                                        </div>

                                          <div class="row border-grey-light" style="min-height:100px;">
                                            <div class="col-md-3  p-2" style="border:1px solid #ccc;">
                                              <select name="nav5[]" id="nav5" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>

                                            </div>
                                            <div class="col-md-6 p-2 " style="border:0px solid #ccc;">
                                                <h3 class="text-center mt-5">  நவாம்சம்</h3>

                                            </div>
                                            <div class="col-md-3  border-grey-light   p-2" style="border:1px solid #ccc;">
                                                  <select name="nav6[]" id="nav6" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>


                                            </div>
                                        </div>

                                          <div class="row border-grey-light" style="min-height:100px;">
                                            <div class="col-md-3  p-2" style="border:1px solid #ccc;">
                                              <select name="nav7[]" id="nav7" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>

                                            </div>
                                            <div class="col-md-3    p-2 " style="border:0px solid #ccc;">

                                            </div>
                                            <div class="col-md-3   p-2" style="border:0px solid #ccc;">



                                            </div>
                                            <div class="col-md-3    p-2 border-grey-light" style="border:1px solid #ccc;">
                                                  <select name="nav8[]" id="nav8" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>


                                            </div>
                                        </div>

                                        <div class="row border-grey-light" style="min-height:100px;">
                                            <div class="col-md-3  p-2" style="border:1px solid #ccc;">
                                              <select name="nav9[]" id="nav9" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>

                                            </div>
                                            <div class="col-md-3    p-2 border-grey-light" style="border:1px solid #ccc;">
                                                  <select name="nav10[]" id="nav10" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>

                                            </div>
                                            <div class="col-md-3   p-2  border-grey-light" style="border:1px solid #ccc;">

                                             <select name="nav11[]" id="nav11" class="form-control select2" multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>

                                            </div>
                                            <div class="col-md-3    p-2 border-grey-light" style="border:1px solid #ccc;">
                                                  <select name="nav12[]" id="nav12" class="form-control select2 " multiple="multiple" style="padding:0px; border:0px!important; height:80px!important;width:100%;">
                                              <option>சூ</option>
                                              <option>சந்</option>
                                              <option>செ</option>
                                              <option>பு</option>
                                              <option>கு</option>
                                              <option>சு</option>
                                              <option>சனி</option>
                                              <option>ரா</option>
                                              <option>கே</option>

                                              </select>


                                            </div>
                                        </div>
                               </div>
                           </div>

                               <div class="row card-box ">
                                    <div class="form-group col-12 text-center mt-5 justify-content-center">
                                        <button type="submit" class="btn btn-info center-page">சமர்ப்பி</button>
                                        <button type="submit" class="btn btn-info">மறு சீரமை</button>
                                   </div>
                              </div>
                           </div>
                             </div>
                        </form>
                </div>

                        <!-- end row -->

        @endsection
