@extends('admin.layout.app')

@section('title', 'Profile')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Profile</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.update') }}" data-parsley-validate="" method="post">
                        @csrf
                        @method('patch')
                        <div class="row row-sm">
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control @error('name') parsley-error @enderror" name="name"
                                        placeholder="Enter name" required="" type="text" value="{{ old('name') }}">
                                    @error('name')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Email: <span class="tx-danger">*</span></label>
                                    <input class="form-control @error('email') parsley-error @enderror" name="email"
                                        placeholder="Enter email" required="" type="email" value="{{ old('email') }}">
                                    @error('email')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Password: <span class="tx-danger">*</span></label>
                                    <input class="form-control @error('password') parsley-error @enderror" name="password"
                                        placeholder="Enter password" required="" type="password">
                                    @error('password')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Confirm Password: <span class="tx-danger">*</span></label>
                                    <input class="form-control @error('password_confirmation') parsley-error @enderror"
                                        name="password_confirmation" placeholder="Confirm password" required=""
                                        type="password">
                                    @error('password_confirmation')
                                        <ul class="parsley-errors-list filled" id="parsley-id-9">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12"><button class="btn btn-main-primary pd-x-20 mg-t-10" type="submit">Validate
                                    Form</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
