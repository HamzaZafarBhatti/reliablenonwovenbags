@extends('admin.layout.app')

@section('title', 'Settings')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>Page Settings</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.frontpage.settings.update') }}" data-parsley-validate="" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row row-sm">
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Logo</label>
                                    <div class="custom-file">
                                        <input class="custom-file-input @error('logo') parsley-error @enderror"
                                            id="logo" type="file" name="logo">
                                        <label class="custom-file-label" for="logo">Choose file</label>
                                    </div>
                                    @error('logo')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <h4>Banner</h4>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Heading 1</label>
                                    <input class="form-control @error('banner_heading_1') parsley-error @enderror"
                                        name="banner_heading_1" required="" type="text"
                                        value="{{ old('banner_heading_1', $settings?->banner_heading_1) }}">
                                    @error('banner_heading_1')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Heading 2</label>
                                    <input class="form-control @error('banner_heading_2') parsley-error @enderror"
                                        name="banner_heading_2" required="" type="text"
                                        value="{{ old('banner_heading_2', $settings?->banner_heading_2) }}">
                                    @error('banner_heading_2')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Button Text</label>
                                    <input class="form-control @error('banner_button_text') parsley-error @enderror"
                                        name="banner_button_text" required="" type="text"
                                        value="{{ old('banner_button_text', $settings?->banner_button_text) }}">
                                    @error('banner_button_text')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <h4>About Section</h4>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Image</label>
                                    <div class="custom-file">
                                        <input class="custom-file-input @error('about_us_image') parsley-error @enderror"
                                            id="about_us_image" type="file" name="about_us_image">
                                        <label class="custom-file-label" for="about_us_image">Choose file</label>
                                    </div>
                                    @error('about_us_image')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Heading</label>
                                    <input class="form-control @error('about_us_heading') parsley-error @enderror"
                                        name="about_us_heading" required="" type="text"
                                        value="{{ old('about_us_heading', $settings?->about_us_heading) }}">
                                    @error('about_us_heading')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Description 1</label>
                                    <textarea name="about_us_description_1" id="about_us_description_1" cols="30" rows="2"
                                        class="form-control @error('about_us_description_1') parsley-error @enderror">{{ old('about_us_description_1', $settings?->about_us_description_1) }}</textarea>
                                    @error('about_us_description_1')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Description 2</label>
                                    <textarea name="about_us_description_2" id="about_us_description_2" cols="30" rows="2"
                                        class="form-control @error('about_us_description_2') parsley-error @enderror">{{ old('about_us_description_2', $settings?->about_us_description_2) }}</textarea>
                                    @error('about_us_description_2')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Button Text</label>
                                    <input class="form-control @error('about_us_button_text') parsley-error @enderror"
                                        name="about_us_button_text" required="" type="text"
                                        value="{{ old('about_us_button_text', $settings?->about_us_button_text) }}">
                                    @error('about_us_button_text')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <h4>Product Section</h4>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Heading</label>
                                    <input class="form-control @error('products_heading') parsley-error @enderror"
                                        name="products_heading" required="" type="text"
                                        value="{{ old('products_heading', $settings?->products_heading) }}">
                                    @error('products_heading')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Description</label>
                                    <textarea name="products_description" id="products_description" cols="30" rows="2"
                                        class="form-control @error('products_description') parsley-error @enderror">{{ old('products_description', $settings?->products_description) }}</textarea>
                                    @error('products_description')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <h4>Contact us Section</h4>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Heading</label>
                                    <input class="form-control @error('contactus_heading') parsley-error @enderror"
                                        name="contactus_heading" required="" type="text"
                                        value="{{ old('contactus_heading', $settings?->contactus_heading) }}">
                                    @error('contactus_heading')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Button Text</label>
                                    <input class="form-control @error('contactus_button_text') parsley-error @enderror"
                                        name="contactus_button_text" required="" type="text"
                                        value="{{ old('contactus_button_text', $settings?->contactus_button_text) }}">
                                    @error('contactus_button_text')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Description</label>
                                    <textarea name="contactus_description" id="contactus_description" cols="30" rows="2"
                                        class="form-control @error('contactus_description') parsley-error @enderror">{{ old('contactus_description', $settings?->contactus_description) }}</textarea>
                                    @error('contactus_description')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <h4>Socials</h4>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Facebook</label>
                                    <input class="form-control @error('social_facebook') parsley-error @enderror"
                                        name="social_facebook" required="" type="text"
                                        value="{{ old('social_facebook', $settings?->social_facebook) }}">
                                    @error('social_facebook')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Twitter</label>
                                    <input class="form-control @error('social_twitter') parsley-error @enderror"
                                        name="social_twitter" required="" type="text"
                                        value="{{ old('social_twitter', $settings?->social_twitter) }}">
                                    @error('social_twitter')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Instagram</label>
                                    <input class="form-control @error('social_instagram') parsley-error @enderror"
                                        name="social_instagram" required="" type="text"
                                        value="{{ old('social_instagram', $settings?->social_instagram) }}">
                                    @error('social_instagram')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Whatsapp</label>
                                    <input class="form-control @error('social_whatsapp') parsley-error @enderror"
                                        name="social_whatsapp" required="" type="text"
                                        value="{{ old('social_whatsapp', $settings?->social_whatsapp) }}">
                                    @error('social_whatsapp')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Phone</label>
                                    <input class="form-control @error('social_phone') parsley-error @enderror"
                                        name="social_phone" required="" type="text"
                                        value="{{ old('social_phone', $settings?->social_phone) }}">
                                    @error('social_phone')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <h4>Company Information</h4>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Name</label>
                                    <input class="form-control @error('company_name') parsley-error @enderror"
                                        name="company_name" required="" type="text"
                                        value="{{ old('company_name', $settings?->company_name) }}">
                                    @error('company_name')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Phone</label>
                                    <input class="form-control @error('phone') parsley-error @enderror" name="phone"
                                        required="" type="text" value="{{ old('phone', $settings?->phone) }}">
                                    @error('phone')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Office Time</label>
                                    <input class="form-control @error('office_time') parsley-error @enderror"
                                        name="office_time" required="" type="text"
                                        value="{{ old('office_time', $settings?->office_time) }}">
                                    @error('office_time')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Address</label>
                                    <input class="form-control @error('address') parsley-error @enderror" name="address"
                                        required="" type="text" value="{{ old('address', $settings?->address) }}">
                                    @error('address')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-main-primary pd-x-20 mg-t-10" type="submit">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
