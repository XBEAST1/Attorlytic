<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/frontend/css/admin.css">
</head>

<body>
    </head>

    <body>
        <div id="sidebar">
            <a href="/" class="logo">
                <img src="assets/uploads/media-uploader/logo1621240982.png" alt />
            </a>
            <h2 id="admin-heading">Admin Panel</h2>
            <div class="side-pages mt-5">
                <a href="home" id="add-profile">Add Profile</a>
                <a href="updateprofile" id="update-profile">Update Profile</a>
            </div>
        </div>
        <div id="content">
            <h2 id="profile-heading">Add Profile</h2>
            @if(session('status') && session('message') && session('status') === 'success')
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Success!</strong> Profile Added Successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            @if(session('status') && session('message') && session('status') === 'error')
            <div class="alert alert-danger alert-dismissible fade show">
                <strong>Error!</strong> Please Fill All The Fields.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif
            <br>
            <form action="home" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                @csrf
                <div class="form-group">
                    <label for="username">First Name</label>
                    <label class="lastname" for="last name">Last Name</label> <br>
                    <input class="mt-2 rounded-5 p-2" type="text" class="form-control" name="firstname" id="firstname">
                    <input class="rounded-5 p-2 ms-3" type="text" class="form-control" name="lastname" id="lastname">
                </div>
                <br>
                <div class="form-group">
                    <label for="description">Description</label> <br>
                    <textarea class="mt-2 rounded-5 p-2" name="description" id="description" rows="5"></textarea>
                </div>
                <br>
                <h5>Gender</h5>
                <br>
                <div class="form-check">
                    <input type="radio" name="gender" value="male" id="male" class="form-check-input">
                    <label for="" class="form-check-label">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" value="female" id="female" class="ms-2 form-check-input">
                    <label for="" class="ms-2 form-check-label">Female</label>
                </div>
                <br>
                <br>
                <div class="form-group w-50">
                    <label class="form-label" for="image">Image</label> <br>
                    <input type="file" class="form-control file" name="image">
                </div>
                <br>
                <div class="form-group">
                    <label for="fee">Fee</label> <br>
                    <input class="mt-2 rounded-5 p-2" name="fee" type="text" class="form-control" id="fee">
                </div>
                <br>
                <div class="form-group">
                    <label for="country">Country</label>
                    <label class="city" for="lastname">City</label> <br>
                    <select class="rounded-5 p-2 country" name="country">
                        <option value="  " selected>Select a country</option>
                        <option value="--">Not Specified</option><?php

                        namespace App\Http\Controllers;
                        
                        use Illuminate\Http\Request;
                        use Illuminate\Support\Facades\Validator;
                        use App\Models\FormData;
                        
                        class Formcontroller extends Controller
                        {
                            function store_data(Request $request)
                            {
                                $validator = Validator::make($request->all(), [
                                    'firstname' => 'required',
                                    'lastname' => 'required',
                                    'description' => 'required',
                                    'gender' => 'required|in:male,female',
                                    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                                    'fee' => 'required|numeric',
                                    'country' => 'required',
                                    'city' => 'required',
                                    'educationinfo' => 'required',
                                    'additionalinfo' => 'required',
                                    'specializeinfo' => 'required',
                                    'about' => 'required',
                                ]);
                        
                                if ($validator->fails()) {
                                    return redirect()->back()->with('status', 'error')->with('message', 'Please Fill All Fields');
                                }
                        
                                $data = new FormData();
                        
                                $data->firstname = $request->input('firstname');
                                $data->lastname = $request->input('lastname');
                                $data->description = $request->input('description');
                                $data->gender = $request->input('gender');
                                $data->fee = $request->input('fee');
                                $data->country = $request->input('country');
                                $data->city = $request->input('city');
                                $data->educationinfo = $request->input('educationinfo');
                                $data->additionalinfo = $request->input('additionalinfo');
                                $data->specializeinfo = $request->input('specializeinfo');
                                $data->about = $request->input('about');
                        
                                if ($request->hasFile('image')) {
                                    $image = $request->file('image');
                                    $ext = $image->getClientOriginalExtension();
                                    $image_name = time() . "." . $ext;
                                    $image->move('images', $image_name);
                                    $data->image = $image_name;
                                }
                        
                                $data->save();
                        
                                return redirect()->back()->with('status', 'success')->with('message', 'Data submitted successfully!');
                            }
                        
                            function deleteprofile($id){
                                FormData::destroy($id);
                                return view('index');
                            }
                        }
                        
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BA">Bosnia and Herzegowina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, the Democratic Republic of the</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Cote d'Ivoire</option>
                        <option value="HR">Croatia (Hrvatska)</option>
                        <option value="CU">Cuba</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="TP">East Timor</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands (Malvinas)</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="FX">France, Metropolitan</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard and Mc Donald Islands</option>
                        <option value="VA">Holy See (Vatican City State)</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran (Islamic Republic of)</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KP">Korea, Democratic People's Republic of</option>
                        <option value="KR">Korea, Republic of</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Lao People's Democratic Republic</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libyan Arab Jamahiriya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macau</option>
                        <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia, Federated States of</option>
                        <option value="MD">Moldova, Republic of</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation</option>
                        <option value="RW">Rwanda</option>
                        <option value="KN">Saint Kitts and Nevis</option> 
                        <option value="LC">Saint LUCIA</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option> 
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia (Slovak Republic)</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SH">St. Helena</option>
                        <option value="PM">St. Pierre and Miquelon</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen Islands</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syrian Arab Republic</option>
                        <option value="TW">Taiwan, Province of China</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania, United Republic of</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Viet Nam</option>
                        <option value="VG">Virgin Islands (British)</option>
                        <option value="VI">Virgin Islands (U.S.)</option>
                        <option value="WF">Wallis and Futuna Islands</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="YU">Yugoslavia</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                    <input class="mt-2 rounded-5 p-2 ms-3" name="city" type="text" class="form-control" id="city">
                </div>
                <br>
                <div class="form-group">
                    <label for="education-info">Education Info</label>
                    <label class="additional-info" for="additional-info">Additional Info</label>
                    <label class="specialize-info" for="specialize-info">Specialize Info</label> <br>
                    <input class="mt-2 rounded-5 p-2" name="educationinfo" type="text" class="form-control"
                        id="education-info">
                    <input class="mt-2 rounded-5 p-2 ms-2" name="additionalinfo" type="text" class="form-control"
                        id="additional-info">
                    <input class="mt-2 rounded-5 p-2 ms-2" name="specializeinfo" type="text" class="form-control"
                        id="specialize-info">
                </div>
                <br>
                <div class="form-group">
                    <label for="about">About</label> <br>
                    <textarea class="mt-2 rounded-5 p-2" name="about" id="about" rows="10"></textarea>
                </div>
                <br>
                <br>
                <button type="submit" value="add" class="form-button btn btn-light rounded-4 p-3">Submit</button>
            </form>
        </div>
        <script src="assets/frontend/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var successPopup = document.getElementById('success-popup');
                var errorPopup = document.getElementById('error-popup');

                if (successPopup) {
                    successPopup.style.display = 'block';
                    setTimeout(function () {
                        successPopup.style.display = 'none';
                    }, 5000);
                }

                if (errorPopup) {
                    errorPopup.style.display = 'block';
                    setTimeout(function () {
                        errorPopup.style.display = 'none';
                    }, 5000);
                }
            });
        </script>
    </body>

</html>