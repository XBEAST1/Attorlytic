@extends('admin.masteradmin')
@section('main')

<title>Add Profile</title>
<div id="content">
    <h1 id="profile-heading">Add Profile</h1>
    @if(session('status') && session('message') && session('status') === 'success')
    <div class="alert alert-success alert-dismissible fade show">
        <strong>Success!</strong> Profile Added Successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    @if(session('status') && session('message') && session('status') === 'exist')
    <div class="alert alert-danger alert-dismissible fade show">
        <strong>Error!</strong> Only One Profile Is Alowed For Each Account.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif
    <br>
    <form action="addprofile" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        @csrf
        <div class="form-group">
            <label for="username">First Name</label>
            <label class="lastname" for="last name">Last Name</label> <br>
            <input class="mt-2 rounded-5 p-2" value="{{old('firstname')}}" type="text" class="form-control" name="firstname" id="firstname">
            <input class="rounded-5 p-2 ms-3" value="{{old('lastname')}}" type="text" class="form-control" name="lastname" id="lastname">
            <br>
            <span class="text-danger">
                @error('firstname')
                {{ $message }}
                @enderror
            </span>
            <span class="text-danger lastname-error">
                @error('lastname')
                {{ $message }}
                @enderror
            </span>
        </div>
        <br>
        <div class="form-group">
            <label for="description">Description</label> <br>
            <textarea class="mt-2 rounded-5 p-2" value="{{old('description')}}" name="description" id="description" rows="5"></textarea>
            <br>
            <span class="text-danger">
                @error('description')
                {{ $message }}
                @enderror
            </span>
        </div>
        <br>
        <h5>Gender</h5>
        <br>
        <div class="form-check">
            <input type="radio" name="gender" value="Male" id="male" class="form-check-input">
            <label for="" class="form-check-label">Male</label>
        </div>
        <div class="form-check">
            <input type="radio" name="gender" value="Female" id="female" class="ms-2 form-check-input">
            <label for="" class="ms-2 form-check-label">Female</label>
        </div>
        <br>
        <span class="text-danger">
            @error('gender')
            {{ $message }}
            @enderror
        </span>
        <br>
        <br>
        <div class="form-group w-50">
            <label class="form-label" for="image">Image</label> <br>
            <input id="file" type="file" class="form-control file rounded-5" name="image">
            <br>
            <span class="text-danger">
                @error('image')
                {{ $message }}
                @enderror
            </span>
        </div>
        <br>
        <div class="form-group">
            <label for="category">Category</label>
            <br>
            <select class="mt-3 rounded-5 p-2 category" name="category">
                <option value="RealState">Real State</option>
                <option value="Personal">Personal</option>
                <option value="Criminal">Criminal</option>
                <option value="Business">Business</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="fee">Fee</label> <br>
            <input class="mt-2 rounded-5 p-2" value="{{old('fee')}}" name="fee" type="number" class="form-control" id="fee">
            <br>
            <span class="text-danger">
                @error('fee')
                {{ $message }}
                @enderror
            </span>
        </div>
        <br>
        <div class="form-group">
            <label for="country">Country</label>
            <label class="city" for="lastname">City</label> <br>
            <select class="rounded-5 p-2 country" name="country">
                <option value="  " selected>Select a country</option>
                <option value="--">Not Specified</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="France, Metropolitan">France, Metropolitan</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-Bissau">Guinea-Bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of
                </option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic
                    of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint LUCIA">Saint LUCIA</option>
                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South
                    Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="St. Helena">St. Helena</option>
                <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Yugoslavia">Yugoslavia</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
            <input class="mt-2 rounded-5 p-2 ms-3" value="{{old('city')}}" name="city" type="text" class="form-control" id="city">
            <br>
            <span class="text-danger">
                @error('country')
                {{ $message }}
                @enderror
            </span>
            <span class="text-danger city-error">
                @error('city')
                {{ $message }}
                @enderror
            </span>
        </div>
        <br>
        <div class="form-group">
            <label for="education-info">Education Info</label>
            <label class="additional-info" for="additional-info">Additional Info</label>
            <label class="specialize-info" for="specialize-info">Specialize Info</label> <br>
            <input class="mt-2 rounded-5 p-2" value="{{old('educationinfo')}}" name="educationinfo" type="text" class="form-control" id="education-info">
            <input class="mt-2 rounded-5 p-2 ms-2" value="{{old('additionalinfo')}}" name="additionalinfo" type="text" class="form-control"
                id="additional-info">
            <input class="mt-2 rounded-5 p-2 ms-2" value="{{old('specializeinfo')}}" name="specializeinfo" type="text" class="form-control"
                id="specialize-info">
            <br>
            <span class="text-danger">
                @error('educationinfo')
                {{ $message }}
                @enderror
            </span>
        </div>
        <br>
        <div class="form-group">
            <label for="about">About</label> <br>
            <textarea class="mt-2 rounded-5 p-2" value="{{old('about')}}" name="about" id="about" rows="10"></textarea>
            <br>
            <span class="text-danger">
                @error('about')
                {{ $message }}
                @enderror
            </span>
        </div>
        <br>
        <br>
        <button type="submit" value="add" class="form-button btn btn-light rounded-4 p-3">Submit</button>
    </form>
</div>
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
</div>
</div>
</main>
@endsection