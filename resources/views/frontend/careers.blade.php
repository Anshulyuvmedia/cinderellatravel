@extends('frontend.layout.websitemain')
@section('content')

<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-aos="fade-down" data-aos-delay="100">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Careers</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Careers</li>
            </ul>
        </div>
    </div>
</div>

<div class="space">
    <div class="container">
        <div class="title-area text-center" data-aos="fade-up" data-aos-delay="200">
            <span class="sub-title">Join Our Team</span>
            <h2 class="sec-title">Job Openings</h2>
        </div>
        <div class="row gy-5 justify-content-center">
            <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="about-contact-grid style2 position-relative pt-5">
                    <div class="about-contact-icon position-absolute start-50 translate-middle-x" style="top:-35px">
                        <img src="{{ asset('assets/img/icon/ticket-flight.png') }}" alt="ticket" width="50">
                    </div>
                    <div class="about-contact-details">
                        <h3 class="text-center">Air Ticketing</h3>
                        <p class="about-contact-details-text">Join our team to assist customers with flight bookings and travel itineraries.</p>
                        <p class="about-contact-details-text"><strong>Requirements:</strong></p>
                        <ul class="about-contact-details-text">
                            <li class="mb-2">Minimum 12th Pass</li>
                            <li class="mb-2">Basic Computer Knowledge</li>
                            <li class="mb-2">Good Communication Skills</li>
                            <li class="mb-2">Ready to Relocate</li>
                            <li class="mb-2">Experience and Fresher Both</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="about-contact-grid style2 position-relative pt-5 ">
                    <div class="about-contact-icon position-absolute start-50 translate-middle-x" style="top:-35px">
                        <img src="{{ asset('assets/img/icon/social-media-marketing.png') }}" alt="social media" width="50">
                    </div>
                    <div class="about-contact-details">
                        <h3 class="text-center">Sales & Marketing</h3>
                        <p class="about-contact-details-text">Drive our brand growth through innovative sales and marketing strategies.</p>
                        <p class="about-contact-details-text"><strong>Requirements:</strong></p>
                        <ul class="about-contact-details-text">
                            <li class="mb-2">Minimum 12th Pass</li>
                            <li class="mb-2">Basic Computer Knowledge</li>
                            <li class="mb-2">Good Communication Skills</li>
                            <li class="mb-2">Ready to Relocate</li>
                            <li class="mb-2">Experience and Fresher Both</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="500">
                <div class="about-contact-grid style2 position-relative pt-5">
                    <div class="about-contact-icon position-absolute start-50 translate-middle-x" style="top:-35px">
                        <img src="{{ asset('assets/img/icon/accounting.png') }}" alt="accounting" width="50">
                    </div>
                    <div class="about-contact-details">
                        <h3 class="text-center">Accountant</h3>
                        <p class="about-contact-details-text">Manage financial records and ensure accuracy in our accounting processes.</p>
                        <p class="about-contact-details-text"><strong>Requirements:</strong></p>
                        <ul class="about-contact-details-text ">
                            <li class="mb-2">Minimum 12th Pass</li>
                            <li class="mb-2">Basic Computer Knowledge</li>
                            <li class="mb-2">Good Communication Skills</li>
                            <li class="mb-2">Ready to Relocate</li>
                            <li class="mb-2">Experience and Fresher Both</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ route('job.application.submit') }}" method="POST" enctype="multipart/form-data"
            onsubmit="return validateJobForm()" id="jobApplicationForm" data-aos="fade-up" data-aos-delay="600">
            @csrf
            <div class="th-comment-form">
                <div class="row">
                    <div class="col-lg-7 row m-0">
                        <div class="col-md-6 form-group">
                            <input type="text" name="full_name" placeholder="Full Name*"
                                class="form-control @error('full_name') is-invalid @enderror"
                                value="{{ old('full_name') }}">
                            <i class="far fa-user"></i>
                            @error('full_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="error-message" id="name-error"></div>
                        </div>

                        <div class="col-md-6 form-group">
                            <input type="email" name="email" placeholder="Your Email*"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}">
                            <i class="far fa-envelope"></i>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="error-message" id="email-error"></div>
                        </div>

                        <div class="col-md-6 form-group">
                            <input type="number" name="phone" pattern="[0-9]{10}-[0-9]{3}-[0-9]{4}"
                                placeholder="Phone Number*"
                                class="form-control @error('phone') is-invalid @enderror"
                                value="{{ old('phone') }}">
                            <i class="far fa-phone"></i>
                            @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="error-message" id="phone-error"></div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-group mb-0 d-flex align-items-center">
                                <label for="file" class="form-control align-self-center @error('resume') is-invalid @enderror"
                                    style="padding-top: 16px; cursor: pointer;" id="filename">Select Resume*</label>
                                <input type="file" name="resume" class="form-control d-none" id="file"
                                    accept=".pdf,.doc,.docx">
                                <i class="far fa-globe"></i>
                            </div>
                            @error('resume')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="error-message" id="file-error"></div>
                        </div>

                        <!-- File Preview Section -->
                        <div class="col-12 form-group" id="filePreviewContainer" style="display: none;">
                            <div class="file-preview-wrapper">
                                <div class="file-preview-header">
                                    <h6>Resume Preview</h6>
                                    <button type="button" class="btn-close-preview" onclick="removeFile()">
                                        <i class="far fa-times"></i> Remove
                                    </button>
                                </div>
                                <div id="filePreviewContent"></div>
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <select name="service_type" id="subject"
                                class="form-select nice-select @error('service_type') is-invalid @enderror">
                                <option value="" selected disabled>Select Service Type*</option>
                                <option value="Air Ticketing" {{ old('service_type') == 'Air Ticketing' ? 'selected' : '' }}>
                                    Air Ticketing
                                </option>
                                <option value="Sales & Marketing" {{ old('service_type') == 'Sales & Marketing' ? 'selected' : '' }}>
                                    Sales & Marketing
                                </option>
                                <option value="Accountant" {{ old('service_type') == 'Accountant' ? 'selected' : '' }}>
                                    Accountant
                                </option>
                            </select>
                            @error('service_type')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="error-message" id="service-error"></div>
                        </div>

                        <div class="col-12 form-group">
                            <textarea name="message" placeholder="Cover Letter*"
                                class="form-control @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                            <i class="far fa-pencil"></i>
                            @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="error-message" id="message-error"></div>
                        </div>

                        <div class="col-12 form-group mb-0">
                            <button type="submit" class="th-btn style3 th-icon">
                                Send Application
                                <img src="{{ asset('assets/img/icon/plane2.svg') }}" alt="Send Icon">
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{ asset('assets/img/normal/job.webp') }}" alt=""
                            class="h-100" style="object-fit: cover; object-position: top;">
                    </div>
                </div>
            </div>
        </form>

        @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
        @endif
    </div>
</div>
</div>
<script>
    const fileInput = document.getElementById('file');
    const filename = document.getElementById('filename');
    const filePreviewContainer = document.getElementById('filePreviewContainer');
    const filePreviewContent = document.getElementById('filePreviewContent');

    // File input change handler with preview
    fileInput.addEventListener('change', function(event) {
        const files = event.target.files;

        if (files.length > 0) {
            const file = files[0];
            const fileName = file.name;
            const fileSize = file.size / 1024 / 1024; // Convert to MB
            const validExtensions = ['pdf', 'doc', 'docx'];
            const fileExtension = fileName.split('.').pop().toLowerCase();

            // Clear previous errors
            document.getElementById('file-error').textContent = '';

            // Validate file type
            if (!validExtensions.includes(fileExtension)) {
                document.getElementById('file-error').textContent =
                    'Please upload a PDF, DOC, or DOCX file.';
                fileInput.value = '';
                filename.innerHTML = 'Select Resume*';
                hidePreview();
                return;
            }

            // Validate file size (max 5MB)
            if (fileSize > 5) {
                document.getElementById('file-error').textContent =
                    'File size must be less than 5MB.';
                fileInput.value = '';
                filename.innerHTML = 'Select Resume*';
                hidePreview();
                return;
            }

            // Display filename
            if (fileName.length > 15) {
                filename.innerHTML = fileName.substring(0, 15) + "...";
            } else {
                filename.innerHTML = fileName;
            }

            // Show preview
            showFilePreview(file, fileExtension, fileName, fileSize);
        }
    });

    // Show file preview
    function showFilePreview(file, extension, fileName, fileSize) {
        filePreviewContainer.style.display = 'block';

        if (extension === 'pdf') {
            // PDF Preview
            const fileURL = URL.createObjectURL(file);
            filePreviewContent.innerHTML = `
                <div class="pdf-preview">
                    <iframe src="${fileURL}" style="width: 100%; height: 500px; border: 1px solid #ddd; border-radius: 8px;"></iframe>
                    <div class="file-info">
                        <div class="file-info-item">
                            <i class="far fa-file-pdf"></i>
                            <span><strong>File:</strong> ${fileName}</span>
                        </div>
                        <div class="file-info-item">
                            <i class="far fa-hdd"></i>
                            <span><strong>Size:</strong> ${fileSize.toFixed(2)} MB</span>
                        </div>
                    </div>
                </div>
            `;
        } else {
            // DOC/DOCX Preview (show file info)
            const iconClass = extension === 'doc' || extension === 'docx' ? 'fa-file-word' : 'fa-file';
            filePreviewContent.innerHTML = `
                <div class="doc-preview">
                    <div class="doc-icon">
                        <i class="far ${iconClass}"></i>
                    </div>
                    <div class="doc-details">
                        <h5>${fileName}</h5>
                        <div class="doc-meta">
                            <span class="badge badge-primary">${extension.toUpperCase()}</span>
                            <span class="doc-size">${fileSize.toFixed(2)} MB</span>
                        </div>
                        <p class="doc-note">
                            <i class="far fa-info-circle"></i>
                            Preview not available for ${extension.toUpperCase()} files. File will be attached to your application.
                        </p>
                    </div>
                </div>
            `;
        }

        // Smooth scroll to preview
        setTimeout(() => {
            filePreviewContainer.scrollIntoView({
                behavior: 'smooth',
                block: 'nearest'
            });
        }, 100);
    }

    // Hide preview
    function hidePreview() {
        filePreviewContainer.style.display = 'none';
        filePreviewContent.innerHTML = '';
    }

    // Remove file
    function removeFile() {
        fileInput.value = '';
        filename.innerHTML = 'Select Resume*';
        hidePreview();
        document.getElementById('file-error').textContent = '';
    }

    // Form validation (same as before)
    function validateJobForm() {
        let isValid = true;

        // Clear all errors
        document.querySelectorAll('.error-message').forEach(el => el.textContent = '');

        // Validate full name
        const fullName = document.querySelector('input[name="full_name"]').value.trim();
        if (fullName === '' || fullName.length < 3) {
            document.getElementById('name-error').textContent =
                'Please enter your full name (minimum 3 characters).';
            isValid = false;
        }

        // Validate email
        const email = document.querySelector('input[name="email"]').value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            document.getElementById('email-error').textContent =
                'Please enter a valid email address.';
            isValid = false;
        }

        // Validate phone
        const phone = document.querySelector('input[name="phone"]').value.trim();
        const phoneRegex = /^\d{3}-\d{3}-\d{4}$/;
        if (!phoneRegex.test(phone)) {
            document.getElementById('phone-error').textContent =
                'Please enter phone in format: 123-456-7890';
            isValid = false;
        }

        // Validate file
        if (!fileInput.files || fileInput.files.length === 0) {
            document.getElementById('file-error').textContent =
                'Please upload your resume.';
            isValid = false;
        }

        // Validate service type
        const serviceType = document.querySelector('select[name="service_type"]').value;
        if (serviceType === '') {
            document.getElementById('service-error').textContent =
                'Please select a service type.';
            isValid = false;
        }

        // Validate message
        const message = document.querySelector('textarea[name="message"]').value.trim();
        if (message === '' || message.length < 10) {
            document.getElementById('message-error').textContent =
                'Please enter a cover letter (minimum 10 characters).';
            isValid = false;
        }

        return isValid;
    }
</script>


<style>
    .error-message {
        color: #dc3545;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    .invalid-feedback {
        display: block;
    }
</style>

@endsection