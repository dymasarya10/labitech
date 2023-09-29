@extends('admin.layout.app')

@section('heading', 'Setting')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_setting_update',$setting_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $setting_data->phone }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $setting_data->email }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Home Testimonial Status</label>
                                    <select name="home_testimonial_status" class="form-control">
                                        <option value="Show" @if($setting_data->home_testimonial_status == 'Show') selected @endif>Show</option>
                                        <option value="Hide" @if($setting_data->home_testimonial_status == 'Hide') selected @endif>Hide</option>
                                    </select>
                                </div>


                                <div class="mb-4">
                                    <label class="form-label">Home Latest Post Total</label>
                                    <input type="text" class="form-control" name="home_latest_post_total" value="{{ $setting_data->home_latest_post_total }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Home Latest Post Status</label>
                                    <select name="home_latest_post_status" class="form-control">
                                        <option value="Show" @if($setting_data->home_latest_post_status == 'Show') selected @endif>Show</option>
                                        <option value="Hide" @if($setting_data->home_latest_post_status == 'Hide') selected @endif>Hide</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Address</label>
                                    <textarea name="address" class="form-control h_100" cols="30" rows="10">{{ $setting_data->address }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Copyright Text</label>
                                    <input type="text" class="form-control" name="copyright" value="{{ $setting_data->copyright }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{ $setting_data->facebook }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" value="{{ $setting_data->twitter }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">LinkedIn</label>
                                    <input type="text" class="form-control" name="linkedin" value="{{ $setting_data->linkedin }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Pinterest</label>
                                    <input type="text" class="form-control" name="pinterest" value="{{ $setting_data->pinterest }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" value="{{ $setting_data->instagram }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection