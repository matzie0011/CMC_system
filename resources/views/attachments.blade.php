<style>
        .navbar-brand {
            font-weight: bold;
        }

        .btn-logout {
            color: #fff;
            border: none;
            background: none;
            
        }

        .btn-logout:hover {
            color: #dc3545;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">MyApp</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">


                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="">home</a>
                    </li>
                    <!-- Add more navigation items here -->
                </ul>

                <form method="POST" action="{{ route('logout') }}" class="d-flex">
                    @csrf
                    <button type="submit" class="btn btn-logout">Logout</button>
                </form>
            </div>
        </div>
    </nav>
<x-guest-layout>
  <center>
<span style="font-size: 1.5em; font-style:normal"><b>ATTACHMENT</b></span></center>  
    @if (session('success'))
    <script>
        Swal.fire({
            title: 'Success data inserted!',
            text: '{{ session('
            success ') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
    @endif
    <!-- <form id="upload-form" method="POST" action="/upload" enctype="multipart/form-data"> -->
    <form id="upload-form" enctype="multipart/form-data">
        @csrf
        <!-- 2x2 Picture -->
        @php($data = request()->query('data'))
        <x-input-label for="serial" :value="__('Serial Number:')" />
        <input type="text" value="{{ $data }}" name="serial_number" id="serial_number" readonly>
        <div>
            <x-input-label for="picture" :value="__('2by2 with WHITE background and name tag')" />
            <input type="file" name="picture" id="picture" accept="image/*,application/pdf" />
            <div id="preview-container-2by2" class="mt-2">
                <img id="image-preview-2by2" style="display:none; max-width: 100%; height: auto;" />
                <div id="pdf-preview-2by2" style="display:none;">
                    <embed id="pdf-embed-2by2" type="application/pdf" style="width: 100%; height: 500px;" />
                </div>
            </div>
            <x-input-error :messages="$errors->get('picture')" class="mt-2" />
        </div>

        <!-- Whole Body Picture -->
        <div>
            <x-input-label for="whole_body" :value="__('Whole Body Picture')" />
            <input type="file" name="whole_body" id="whole_body" accept="image/*,application/pdf" />
            <div id="preview-container-whole_body" class="mt-2">
                <img id="image-preview-whole_body" style="display:none; max-width: 100%; height: auto;" />
                <div id="pdf-preview-whole_body" style="display:none;">
                    <embed id="pdf-embed-whole_body" type="application/pdf" style="width: 100%; height: 500px;" />
                </div>
            </div>
            <x-input-error :messages="$errors->get('whole_body')" class="mt-2" />
        </div>

        <!-- Updated SOI -->
        <div>
            <x-input-label for="updated_soi" :value="__('Updated SOI')" />
            <input type="file" name="updated_soi" id="updated_soi" accept="image/*,application/pdf" />
            <div id="preview-container-updated_soi" class="mt-2">
                <img id="image-preview-updated_soi" style="display:none; max-width: 100%; height: auto;" />
                <div id="pdf-preview-updated_soi" style="display:none;">
                    <embed id="pdf-embed-updated_soi" type="application/pdf" style="width: 100%; height: 500px;" />
                </div>
            </div>
            <x-input-error :messages="$errors->get('updated_soi')" class="mt-2" />
        </div>

        <!-- NBI Clearance -->
        <div>
            <x-input-label for="nbi_clearance" :value="__('NBI Clearance')" />
            <input type="file" name="nbi_clearance" id="nbi_clearance" accept="image/*,application/pdf" />
            <div id="preview-container-nbi_clearance" class="mt-2">
                <img id="image-preview-nbi_clearance" style="display:none; max-width: 100%; height: auto;" />
                <div id="pdf-preview-nbi_clearance" style="display:none;">
                    <embed id="pdf-embed-nbi_clearance" type="application/pdf" style="width: 100%; height: 500px;" />
                </div>
            </div>
            <x-input-error :messages="$errors->get('nbi_clearance')" class="mt-2" />
        </div>

        <!-- Ombudsman Clearance -->
        <div>
            <x-input-label for="ombudsman_clearance" :value="__('Ombudsman Clearance')" />
            <input type="file" name="ombudsman_clearance" id="ombudsman_clearance" accept="image/*,application/pdf" />
            <div id="preview-container-ombudsman_clearance" class="mt-2">
                <img id="image-preview-ombudsman_clearance" style="display:none; max-width: 100%; height: auto;" />
                <div id="pdf-preview-ombudsman_clearance" style="display:none;">
                    <embed id="pdf-embed-ombudsman_clearance" type="application/pdf" style="width: 100%; height: 500px;" />
                </div>
            </div>
            <x-input-error :messages="$errors->get('ombudsman_clearance')" class="mt-2" />
        </div>

        <!-- Sandigan Bayan Clearance -->
        <div>
            <x-input-label for="sandigan_bayan_clearance" :value="__('Sandigan Bayan Clearance')" />
            <input type="file" name="sandigan_bayan_clearance" id="sandigan_bayan_clearance" accept="image/*,application/pdf" />
            <div id="preview-container-sandigan_bayan_clearance" class="mt-2">
                <img id="image-preview-sandigan_bayan_clearance" style="display:none; max-width: 100%; height: auto;" />
                <div id="pdf-preview-sandigan_bayan_clearance" style="display:none;">
                    <embed id="pdf-embed-sandigan_bayan_clearance" type="application/pdf" style="width: 100%; height: 500px;" />
                </div>
            </div>
            <x-input-error :messages="$errors->get('sandigan_bayan_clearance')" class="mt-2" />
        </div>

        <!-- OFRS1 -->
        <div>
            <x-input-label for="ofrs1" :value="__('Latest Officer Fitness Report-1')" />
            <input type="file" name="ofrs1" id="ofrs1" accept="image/*,application/pdf" />
            <div id="preview-container-ofrs1" class="mt-2">
                <img id="image-preview-ofrs1" style="display:none; max-width: 100%; height: auto;" />
                <div id="pdf-preview-ofrs1" style="display:none;">
                    <embed id="pdf-embed-ofrs1" type="application/pdf" style="width: 100%; height: 500px;" />
                </div>
            </div>
            <x-input-error :messages="$errors->get('ofrs1')" class="mt-2" />
        </div>

        <!-- OFRS2 -->
        <div>
            <x-input-label for="ofrs2" :value="__('Latest Officer Fitness Report-2')" />
            <input type="file" name="ofrs2" id="ofrs2" accept="image/*,application/pdf" />
            <div id="preview-container-ofrs2" class="mt-2">
                <img id="image-preview-ofrs2" style="display:none; max-width: 100%; height: auto;" />
                <div id="pdf-preview-ofrs2" style="display:none;">
                    <embed id="pdf-embed-ofrs2" type="application/pdf" style="width: 100%; height: 500px;" />
                </div>
            </div>
            <x-input-error :messages="$errors->get('ofrs2')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="ofrs3" :value="__('Latest Officer Fitness Report-3')" />
            <input type="file" name="ofrs3" id="ofrs3" accept="image/*,application/pdf" />
            <div id="preview-container-ofrs3" class="mt-2">
                <img id="image-preview-ofrs3" style="display:none; max-width: 100%; height: auto;" />
                <div id="pdf-preview-ofrs3" style="display:none;">
                    <embed id="pdf-embed-ofrs3" type="application/pdf" style="width: 100%; height: 500px;" />
                </div>
            </div>
            <x-input-error :messages="$errors->get('ofrs3')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="certificate_of_non_enlistment" :value="__('Certificate of Non-Enlistment')" />
            <input type="file" name="certificate_of_non_enlistment" id="certificate_of_non_enlistment" accept="image/*,application/pdf" />
            <div id="preview-container-certificate_of_non_enlistment" class="mt-2">
                <img id="image-preview-certificate_of_non_enlistment" style="display:none; max-width: 100%; height: auto;" />
                <div id="pdf-preview-certificate_of_non_enlistment" style="display:none;">
                    <embed id="pdf-embed-certificate_of_non_enlistment" type="application/pdf" style="width: 100%; height: 500px;" />
                </div>
            </div>
            <x-input-error :messages="$errors->get('certificate_of_non_enlistment')" class="mt-2" />
        </div>

        <!-- Career Course -->
        <div>
            <x-input-label for="certificate_of_career_course" :value="__('Certificate of Career Course')" />
            <input type="file" name="certificate_of_career_course" id="certificate_of_career_course" accept="image/*,application/pdf" />
            <div id="preview-container-certificate_of_career_course" class="mt-2">
                <img id="image-preview-certificate_of_career_course" style="display:none; max-width: 100%; height: auto;" />
                <div id="pdf-preview-certificate_of_career_course" style="display:none;">
                    <embed id="pdf-embed-certificate_of_career_course" type="application/pdf" style="width: 100%; height: 500px;" />
                </div>
            </div>
            <x-input-error :messages="$errors->get('certificate_of_career_course')" class="mt-2" />
        </div>

        <button type="submit" class="upload-button">Upload</button>
    </form>

    <style>
        input[type=text], select {
        width: 50%;
        padding: 5px 10px;
        margin: 5px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 2px;
        box-sizing: border-box;
        text-align: left;

}
        .upload-button {
            background-color: #28a745;
            /* Green background */
            color: white;
            /* White text */
            border: none;
            /* Remove border */
            padding: 10px 20px;
            /* Padding */
            border-radius: 5px;
            /* Rounded corners */
            cursor: pointer;
            /* Pointer cursor on hover */
            font-size: 16px;
            /* Font size */
            transition: background-color 0.3s ease;
            /* Smooth transition */
        }

        .upload-button:hover {
            background-color: #218838;
            /* Darker green on hover */
        }

        .upload-button:focus {
            outline: none;
            /* Remove outline on focus */
            box-shadow: 0 0 0 2px rgba(40, 167, 69, 0.5);
            /* Shadow for focus */
        }
        
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- SweetAlert2 CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#upload-form').on('submit', function(event) {
                event.preventDefault(); // Prevent the form from submitting the default way

                var formData = new FormData(this);

                $.ajax({
                    url: "{{ route('upload-files') }}",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Handle response based on new format
                        if (response.message) {
                            Swal.fire({
                                title: 'Success!',
                                text: response.message, // Display the success message from the response
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Redirect back to the previous page or a specific route
                                    window.location.href = "{{ url()->previous() }}";
                                }
                            });
                        }
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON.errors;
                        let errorMessage = 'Failed to upload files.';
                        if (errors) {
                            errorMessage += '\n' + Object.values(errors).join('\n');
                        }
                        Swal.fire({
                            title: 'Error!',
                            text: errorMessage,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });

            function previewFile(input, imgPreviewSelector, pdfPreviewSelector, pdfEmbedSelector) {
                const file = input.files[0];
                const imgPreview = $(imgPreviewSelector);
                const pdfPreview = $(pdfPreviewSelector);
                const pdfEmbed = $(pdfEmbedSelector);

                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        if (file.type.includes('image')) {
                            imgPreview.attr('src', e.target.result).show();
                            pdfPreview.hide();
                        } else if (file.type.includes('pdf')) {
                            pdfEmbed.attr('src', e.target.result);
                            pdfPreview.show();
                            imgPreview.hide();
                        }
                    };

                    reader.readAsDataURL(file);
                } else {
                    imgPreview.hide();
                    pdfPreview.hide();
                }
            }

            // Bind preview functionality to input changes
            $('#picture').change(function() {
                previewFile(this, '#image-preview-2by2', '#pdf-preview-2by2', '#pdf-embed-2by2');
            });
            $('#whole_body').change(function() {
                previewFile(this, '#image-preview-whole_body', '#pdf-preview-whole_body', '#pdf-embed-whole_body');
            });
            $('#updated_soi').change(function() {
                previewFile(this, '#image-preview-updated_soi', '#pdf-preview-updated_soi', '#pdf-embed-updated_soi');
            });
            $('#nbi_clearance').change(function() {
                previewFile(this, '#image-preview-nbi_clearance', '#pdf-preview-nbi_clearance', '#pdf-embed-nbi_clearance');
            });
            $('#ombudsman_clearance').change(function() {
                previewFile(this, '#image-preview-ombudsman_clearance', '#pdf-preview-ombudsman_clearance', '#pdf-embed-ombudsman_clearance');
            });
            $('#sandigan_bayan_clearance').change(function() {
                previewFile(this, '#image-preview-sandigan_bayan_clearance', '#pdf-preview-sandigan_bayan_clearance', '#pdf-embed-sandigan_bayan_clearance');
            });
            $('#ofrs1').change(function() {
                previewFile(this, '#image-preview-ofrs1', '#pdf-preview-ofrs1', '#pdf-embed-ofrs1');
            });
            $('#ofrs2').change(function() {
                previewFile(this, '#image-preview-ofrs2', '#pdf-preview-ofrs2', '#pdf-embed-ofrs2');
            });
            $('#ofrs3').change(function() {
                previewFile(this, '#image-preview-ofrs3', '#pdf-preview-ofrs3', '#pdf-embed-ofrs3');
            });
            $('#certificate_of_non_enlistment').change(function() {
                previewFile(this, '#image-preview-certificate_of_non_enlistment', '#pdf-preview-certificate_of_non_enlistment', '#pdf-embed-certificate_of_non_enlistment');
            });
            $('#certificate_of_career_course').change(function() {
                previewFile(this, '#image-preview-certificate_of_career_course', '#pdf-preview-certificate_of_career_course', '#pdf-embed-certificate_of_career_course');
            });
        });
    </script>


    <!--    
    <script>
    $(document).ready(function() {
    // Preview file before upload
    function previewFile(input, imgPreviewSelector, pdfPreviewSelector, pdfEmbedSelector) {
        const file = input.files[0];
        const imgPreview = $(imgPreviewSelector);
        const pdfPreview = $(pdfPreviewSelector);
        const pdfEmbed = $(pdfEmbedSelector);

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                if (file.type.includes('image')) {
                    imgPreview.attr('src', e.target.result).show();
                    pdfPreview.hide();
                } else if (file.type.includes('pdf')) {
                    pdfEmbed.attr('src', e.target.result);
                    pdfPreview.show();
                    imgPreview.hide();
                }
            };

            reader.readAsDataURL(file);
        } else {
            imgPreview.hide();
            pdfPreview.hide();
        }
    }

    // Bind preview functionality to input changes
    $('#picture').change(function() {
        previewFile(this, '#image-preview-2by2', '#pdf-preview-2by2', '#pdf-embed-2by2');
    });
    $('#whole_body').change(function() {
        previewFile(this, '#image-preview-whole_body', '#pdf-preview-whole_body', '#pdf-embed-whole_body');
    });
    $('#updated_soi').change(function() {
        previewFile(this, '#image-preview-updated_soi', '#pdf-preview-updated_soi', '#pdf-embed-updated_soi');
    });
    $('#nbi_clearance').change(function() {
        previewFile(this, '#image-preview-nbi_clearance', '#pdf-preview-nbi_clearance', '#pdf-embed-nbi_clearance');
    });
    $('#ombudsman_clearance').change(function() {
        previewFile(this, '#image-preview-ombudsman_clearance', '#pdf-preview-ombudsman_clearance', '#pdf-embed-ombudsman_clearance');
    });
    $('#sandigan_bayan_clearance').change(function() {
        previewFile(this, '#image-preview-sandigan_bayan_clearance', '#pdf-preview-sandigan_bayan_clearance', '#pdf-embed-sandigan_bayan_clearance');
    });
    $('#ofrs1').change(function() {
        previewFile(this, '#image-preview-ofrs1', '#pdf-preview-ofrs1', '#pdf-embed-ofrs1');
    });
    $('#ofrs2').change(function() {
        previewFile(this, '#image-preview-ofrs2', '#pdf-preview-ofrs2', '#pdf-embed-ofrs2');
    });
    $('#ofrs3').change(function() {
        previewFile(this, '#image-preview-ofrs3', '#pdf-preview-ofrs3', '#pdf-embed-ofrs3');
    });
    $('#certificate_of_non_enlistment').change(function() {
        previewFile(this, '#image-preview-certificate_of_non_enlistment', '#pdf-preview-certificate_of_non_enlistment', '#pdf-embed-certificate_of_non_enlistment');
    });
    $('#certificate_of_career_course').change(function() {
        previewFile(this, '#image-preview-certificate_of_career_course', '#pdf-preview-certificate_of_career_course', '#pdf-embed-certificate_of_career_course');
    });

    // AJAX form submission
    
            $.ajax({
                url: "{{ route('upload-files') }}",
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Files uploaded successfully!',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                    }
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessage = 'Failed to upload files.';
                    if (errors) {
                        errorMessage += '\n' + Object.values(errors).join('\n');
                    }
                    Swal.fire({
                        title: 'Error!',
                        text: errorMessage,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
});
    </script> -->
</x-guest-layout>