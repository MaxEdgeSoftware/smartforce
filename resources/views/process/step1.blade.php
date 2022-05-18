@extends("layouts.process")
@section("title")
<title>ACCOUNT - INFO</title>
@endsection


@section("content")
<section class="section who-we-are">
    <div class="container">
        <form action="{{route('step1Post')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title mb-0 pb-2">
                        <p class="text-muted mx-auto mb-0">Step 1</p>
                    </div>
                    <div class="">
                        <h2 class="fs-5 mb-4">Hi {{auth()->user()->name}} — Tell Us About Yourself...</h2>
                    </div>

                    @if (Session::has('message'))
                    <ul class="text-danger">
                        <li>{{Session::get('message')}}</li>
                    </ul>
                    @endif

                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                How should we address you ?
                            </div>

                            <div class="col-md-8">
                                <select name="gender" id="" class="form-select w-100">
                                    <option value="">Please Select</option>
                                    <option value="Male">Mr</option>
                                    <option value="Female">Mrs./Miss</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                Mobile :
                            </div>

                            <div class="col-md-8">
                                <input type="text" name="mobile" id="" class="form-control" placeholder="Telephone">
                            </div>
                        </div>
                    </div>


                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                Date of Birth :
                            </div>

                            <div class="col-md-8">
                                <input type="date" name="dob" id="" class="form-control" placeholder="DOB">
                            </div>
                        </div>
                    </div>

                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                Location :
                            </div>

                            <div class="col-md-8">
                                <select name="location" id="" class="form-select w-100">
                                    <option value="">Please Select</option>
                                    <option value="State 1">State 1</option>
                                    <option value="State 2">State 2</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                Willing to relocate ?
                            </div>

                            <div class="col-md-8">
                                <select name="toRelocate" id="" class="form-select w-100">
                                    <option value="">Please Select</option>
                                    <option value="Yes">Yes</option>
                                    <option selected value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>



                    <hr class="my-3">

                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                Primary Job Interest :
                            </div>

                            <div class="col-md-8">
                                <select name="primary_id" id="" class="form-select w-100">
                                    <option value="">Please Select</option>
                                    @foreach ($jobs as $job)
                                    <option value="{{$job->id}}">{{$job->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                How many years of working experience do you have in this field ?
                            </div>

                            <div class="col-md-8">
                                <select name="primaryExperience" id="" class="form-select w-100">
                                    <option value="">Please Select</option>
                                    <option value="1-2years">1-2years</option>
                                    <option value="3-5years">3-5years</option>
                                    <option value="5-10years">5-10years</option>
                                    <option value="More than 10years">More than 10years</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                Secondary Job Interest :
                            </div>

                            <div class="col-md-8">
                                <select name="secondary_id" id="" class="form-select w-100">
                                    <option value="">Please Select</option>
                                    @foreach ($jobs as $job)
                                    <option value="{{$job->id}}">{{$job->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>



                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                How many years of working experience do you have in this field?
                            </div>

                            <div class="col-md-8">
                                <select name="secondaryExperience" id="" class="form-select w-100">
                                    <option value="">Please Select</option>
                                    <option value="1-2years">1-2years</option>
                                    <option value="3-5years">3-5years</option>
                                    <option value="5-10years">5-10years</option>
                                    <option value="More than 10years">More than 10years</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                How did you hear about us?
                            </div>

                            <div class="col-md-8">
                                <select name="hearaboutus" id="" class="form-select w-100">
                                    <option value="">Please Select</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Twitter">Twitter</option>
                                    <option value="Youtube">Youtube</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-group my-5">
                        <button class="btn btn-primary">Save & Continue</button>
                    </div>

                </div>
                <!--end col-->

                <div class="col-lg-5">

                </div>

            </div>
            <!--end row-->
        </form>
    </div>
    <!--end container-->
</section>

@endSection