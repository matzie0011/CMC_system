<x-guest-layout>
    @if(Session::get('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif

    @if(Session::get('fail'))
    <div class="alert alert-danger">
        {{ Session::get('fail') }}
    </div>
    @endif

    <script>
    function showWelcomeAlert() {
        Swal.fire({
            title: 'Welcome!',
            text: 'Please fill up all necessary information.',
            icon: 'info',
            confirmButtonText: 'Close'
        });
    }

    // Call the function to show the welcome alert when the page loads
    document.addEventListener('DOMContentLoaded', function() {
        showWelcomeAlert();
    });
    </script>

    <form method="post" action="add" enctype="multipart/form-data">
        @csrf
        <div x-data="{ step: 1 }">
            <div x-show="step === 1" class="grid grid-cols 1 gap-3">
                <div>
                    <center>
                        <span style="font-size: 1.5em; "><b>Fill Up all the following Information</b></span>
                    </center>
                </div>

                <div class="grind grid-cols-2 ap-6">
                    <div class="grind grid-rows-2 ap-6">

                        <!-- Serial Number -->
                        <div>
                            <x-input-label for="serial_number" :value="__('Serial Number*')" />
                            <x-text-input id="serial_number" class="block mt-1 w-full" type="text" name="serial_number"
                                :value="old('serial_number')" required autofocus autocomplete="serial_number" />
                            <x-input-error :messages="$errors->get('serial_number')" class="mt-2" />
                        </div>
                        <!--Rank -->
                        <div>
                            <x-input-label for="Rank" :value="__('Rank*')" />
                            {{-- <x-text-input id="rank" class="block mt-1 w-full" type="text" name="rank" :value="old('rank')" required autofocus autocomplete="rank" />  --}}
                            <select name="rank" id="rank" value="rank" class="">
                                <option>Choose Rank </option>
                                <option value="CAPT">Coast Guard Captain</option>
                                <option value="COMMO">Coast Guard Commodore</option>
                                <option value="CDR">Coast Guard Commander</option>
                                <option value="LCDR">Coast Guard Lieutenant Commander</option>
                                <option value="LT">Coast Guard Lieutenant</option>
                                <option value="LTJG">Coast Guard Lieutenant Junior Grade</option>
                                <option value="ENS">Coast Guard Ensign</option>
                                <option value="FMCPO">First Master Chief Petty Officer</option>
                                <option value="MCPO">Master Chief Petty Officer</option>
                                <option value="SCPO">Senior Chief Petty Officer</option>
                                <option value="CPO">Chief Petty Officer</option>
                                <option value="PO1">Petty Officer First Class</option>
                                <option value="PO2">Petty Officer Second Class</option>
                                <option value="PO3">Petty Officer Third Class</option>
                                <option value="SN1/SW1">Seaman/Seawomen First Class</option>
                                <option value="SN2/SW2">Seaman/Seawomen Second Class</option>
                                <option value="ASN">Apprentice Seaman/Seawoman</option>
                            </select>
                            <x-input-error :messages="$errors->get('unit_assignment')" class="mt-2" />
                        </div>
                        <!--Unit Assignments-->
                        <div>
                            <label for="Unit Assignment">
                                Unit Assignment* <span style="font-size: 0.7em;">(Format)</span>
                            </label>
                            <x-text-input id="unit_assignment" class="block mt-1 w-full" type="text"
                                name="unit_assignment" :value="old('unit_assignment')" required autofocus
                                autocomplete="unit_assignment" />
                            <x-input-error :messages="$errors->get('unit_assignment')" class="mt-2" />
                        </div>



                        @auth
                        <div>
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email', Auth::user()->email)" required autocomplete="email"
                                style="display:none;" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        @endauth
                        <div>
                            <x-input-label for="date_of_last_promotion" :value="__('Date of Last Promotion*')" />
                            <x-text-input id="date_of_last_promotion" class="block mt-1 w-full" type="date"
                                name="date_of_last_promotion" :value="old('date_of_last_promotion')" required autofocus
                                autocomplete="date_of_last_promotion" />
                            <x-input-error :messages="$errors->get('date_of_last_promotion')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="cgoc" :value="__('Coast Guard Officer Class*')" />
                            <x-text-input id="cgoc" class="block mt-1 w-full" type="text" name="cgoc"
                                :value="old('cgoc')" required autofocus autocomplete="cgoc" />
                            <x-input-error :messages="$errors->get('cgoc')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="date_of_cad" :value="__('Date of Call Active Duty*')" />
                            <x-text-input id="date_of_cad" class="block mt-1 w-full" type="date" name="date_of_cad"
                                :value="old('date_of_cad')" required autofocus autocomplete="unit_assignment" />
                            <x-input-error :messages="$errors->get('date_of_cad')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-span-2 flex justify-end mt-4">
                        <button @click="step++" class="secondary-warning">
                            Next</button>
                    </div>
                </div>
            </div>

            <div x-show="step === 2" style="display: none;">
                <center>
                    <span style="font-size: 1.5em; "><b>PERSONAL INFORMATION</b></span>
                </center>
                <div>
                    <x-input-label for="lname" :value="__('Last Name*')" />
                    <x-text-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')"
                        required autofocus autocomplete="lname" />
                    <x-input-error :messages="$errors->get('lname')" class="mt-2" />
                </div>

                <!-- First Number -->
                <div>
                    <x-input-label for="fname" :value="__('First Name*')" />
                    <x-text-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')"
                        required autofocus autocomplete="fname" />
                    <x-input-error :messages="$errors->get('fname')" class="mt-2" />
                </div>
                <!-- Middle Name -->
                <div>
                    <x-input-label for="mname" :value="__('Middle Name*')" />
                    <x-text-input id="mname" class="block mt-1 w-full" type="text" name="mname" :value="old('mname')"
                        required autofocus autocomplete="mname" />
                    <x-input-error :messages="$errors->get('mname')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="name_extention" :value="__('Name Extension')" />
                    <x-text-input id="name_extention" class="block mt-1 w-full" type="text" name="name_extention"
                        :value="old('name_extention')" autofocus />
                    <x-input-error :messages="$errors->get('name_extention')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="date_of_birth" :value="__('Date of Birth*')" />
                    <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth"
                        :value="old('date_of_birth')" required autofocus autocomplete="date_of_birth" />
                    <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                </div>
                <!-- script for age-->
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const dateOfBirthInput = document.getElementById('date_of_birth');
                    const ageInput = document.getElementById('age');

                    function calculateAge(dateOfBirth) {
                        const today = new Date();
                        const dob = new Date(dateOfBirth);
                        let age = today.getFullYear() - dob.getFullYear();
                        const monthDifference = today.getMonth() - dob.getMonth();

                        if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < dob.getDate())) {
                            age--;
                        }

                        return age;
                    }

                    dateOfBirthInput.addEventListener('change', function() {
                        const dobValue = dateOfBirthInput.value;
                        if (dobValue) {
                            const age = calculateAge(dobValue);
                            ageInput.value = age;
                        } else {
                            ageInput.value = '';
                        }
                    });
                });
                </script>

                <!-- Add this new field for displaying the age -->
                <div>
                    <label for="age" class="block mt-1">Age:</label>
                    <input id="age" class="block mt-1 w-full" type="text" readonly />
                </div>

                <div>
                    <x-input-label for="permanent_address" :value="__('Permanent Address*')" />
                    <x-text-input id="permanent_address" class="block mt-1 w-full" type="text" name="permanent_address"
                        :value="old('permanent_address')" required autofocus autocomplete="permanent_address" />
                    <x-input-error :messages="$errors->get('permanent_address')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="contact_number" :value="__('Contact Number*')" />
                    <x-text-input id="contact_number" placeholder="09..." class="block mt-1 w-full" type="text"
                        name="contact_number" :value="old('contact_number')" required autofocus
                        autocomplete="contact_number" maxlength="11" pattern="\d{11}"
                        title="Please enter exactly 11 digits." oninput="this.value = this.value.replace(/\D/g, '')" />
                    <x-input-error :messages="$errors->get('contact_number')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between mt-4">
                    <button @click="step--" class="secondary-warning">
                        Back
                    </button>
                    <button @click="step++" class="secondary-warning">
                        Next
                    </button>
                </div>

            </div>

            <div x-show="step === 3" style="display: none;">

                <center>
                    <span style="font-size: 1.5em; "><b>EDUCATIONAL BACKGROUND</b></span>
                </center>

                <div>
                    <x-input-label for="College School" :value="__('College/University*')" />
                    <x-text-input id="college_school" class="block mt-1 w-full" type="text" name="college_school"
                        :value="old('college_school')" required autofocus autocomplete="School (College)" />
                    <x-input-error :messages="$errors->get('college_school')" class="mt-2" />
                </div>

                <!--course-->
                <div>
                    <label for="school">
                        Course* <span style="font-size: 0.7em;">(Bachelor of Science in Information Systems)</span>
                    </label>
                    <x-text-input id="course" class="block mt-1 w-full" type="text" name="course" :value="old('course')"
                        required autofocus autocomplete="course" />
                    <x-input-error :messages="$errors->get('course')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="date_of_attendance" :value="__('Date of Attendance*')" />
                    <x-text-input id="date_of_attendance" class="block mt-1 w-full" type="date"
                        name="date_of_attendance" :value="old('date_of_attendance')" required autofocus
                        autocomplete="date_of_attendance" />
                    <x-input-error :messages="$errors->get('date_of_attendance')" class="mt-2" />
                </div>

                <!-- -->
                <div>
                    <x-input-label for="year_graduated" :value="__('Year Graduated*')" />
                    <x-text-input id="year_graduated" class="block mt-1 w-full" type="date" name="year_graduated"
                        :value="old('year_graduated')" required autofocus autocomplete="year_graduated" />
                    <x-input-error :messages="$errors->get('year_graduated')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="certificate_of_eligibility" :value="__('Certificate of Eligibility')" />

                    <select name="certificate_of_eligibility" id="certificate_of_eligibility"
                        value="certificate_of_eligibility" class="">
                        <option>Choose Eligibility </option>
                        <option value="Prof">Civil Service Proffesional</option>
                        <option value="Sub-Prof">Civil Service Sub-Professional</option>
                        <option value="PRC License">PRC License</option>

                        <!-- <option value="NC2">National Certificate 2</option> -->
                    </select>
                    <x-input-error :messages="$errors->get('Certificate of Eligibility')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between mt-4">
                    <button @click="step--" class="secondary-warning">
                        Back
                    </button>

                    <x-primary-button class="ms-50">
                        {{ __('add') }}
                    </x-primary-button>
                </div>

            </div>

            <div x-show="step === 4" style="display: none;">
                <h1>
                    <center> ATTACHMENT </center>
                </h1>
                <hr>
                <div>
                    <x-input-label for="2by2_picture" :value="__('2by2 with WHITE background and name tag')" />
                    <input type="file" name="2by2_picture" id="2by2_picture" accept="image/*,application/pdf" />
                    <div id="preview-container" class="mt-2">
                        <!-- Placeholder for image preview -->
                        <img id="image-preview" style="display:none; max-width: 100%; height: auto;" />
                        <!-- Placeholder for PDF display -->
                        <div id="pdf-preview" style="display:none;">
                            <embed id="pdf-embed" type="application/pdf" style="width: 100%; height: 500px;" />
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('2by2_picture')" class="mt-2" />

                    <div class="mt-4">
                        <x-input-label for="whole_body" :value="__('Whole Body Picture')" />
                        <input type="file" name="whole_body" id="pr" accept="image/*,application/pdf" />
                        <div id="preview-container" class="mt-2">
                            <!-- Placeholder for image preview -->
                            <img id="image-preview" style="display:none; max-width: 100%; height: auto;" />
                            <!-- Placeholder for PDF display -->
                            <div id="pdf-preview" style="display:none;">
                                <embed id="pdf-embed" type="application/pdf" style="width: 100%; height: 500px;" />
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('whole_body')" class="mt-2" />
                        <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const fileInput = document.getElementById('2by2_picture');
                            const imagePreview = document.getElementById('image-preview');
                            const pdfPreview = document.getElementById('pdf-preview');
                            const pdfEmbed = document.getElementById('pdf-embed');

                            fileInput.addEventListener('change', function(event) {
                                const file = event.target.files[0];

                                if (file) {
                                    const fileType = file.type;

                                    if (fileType.startsWith('image/')) {
                                        // Handle image file
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            imagePreview.src = e.target.result;
                                            imagePreview.style.display = 'block';
                                            pdfPreview.style.display = 'none';
                                        }
                                        reader.readAsDataURL(file);
                                    } else if (fileType === 'application/pdf') {
                                        // Handle PDF file
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            pdfEmbed.src = e.target.result;
                                            pdfPreview.style.display = 'block';
                                            imagePreview.style.display = 'none';
                                        }
                                        reader.readAsDataURL(file);
                                    } else {
                                        // Handle unsupported file types
                                        imagePreview.style.display = 'none';
                                        pdfPreview.style.display = 'none';
                                    }
                                } else {
                                    // No file selected
                                    imagePreview.style.display = 'none';
                                    pdfPreview.style.display = 'none';
                                }
                            });
                        });
                        </script>
                        <!-- Add the following script at the bottom of your Blade template -->
                        <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const fileInput = document.getElementById('certificate_of_non_enlistment');
                            const pdfPreviewContainer = document.getElementById('pdf-preview-container');
                            const pdfPreview = document.getElementById('pdf-preview');

                            fileInput.addEventListener('change', function() {
                                const file = fileInput.files[0];

                                if (file && file.type === 'application/pdf') {
                                    const reader = new FileReader();

                                    reader.onload = function(e) {
                                        pdfPreview.src = e.target.result;
                                        pdfPreviewContainer.style.display = 'block';
                                    };

                                    reader.readAsDataURL(file);
                                } else {
                                    pdfPreviewContainer.style.display = 'none';
                                    pdfPreview.src = '';
                                }
                            });
                        });
                        </script>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                        <div class="flex items-center justify-between mt-4">
                            <button @click="step--" class="secondary-warning">
                                Back
                            </button>
                            <!--  
                    <button type="submit" class="secondary-warning">
                        Register
                    </button>
-->
                            <x-primary-button class="ms-50">
                                {{ __('add') }}
                            </x-primary-button>
                        </div>
                    </div>
                </div>
    </form>
</x-guest-layout>
<!-- START -->
<!-- CSS TEMPLATE -->
<!-- CSS TEMPLATE -->
<style>
.secondary-warning {
    background-color: green;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
}

.secondary-warning:hover {
    background-color: green;
}

input[type=text],
select {
    width: 100%;
    padding: 5px 10px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box;
    text-align: left;
}
</style>