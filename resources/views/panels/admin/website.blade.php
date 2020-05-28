@extends('panels.backend')
@section('title', 'Website')
@section('content')
<div class="bgc-white bd bdrs-3 p-20 mB-20 mT-15">
    <div class="bg-info col-md-12 text-danger p-10 m-20 text-center"> Web Site Information </div>
    <form method="POST" action="{{route('panels.admin.website.update')}}" enctype="multipart/form-data">
        @csrf
        <div class="row m-10 p-10">
            <label>Website Email</label>
            <input type="email" class="form-control" value="{{$website->email}}" placeholder="{{$website->email}}" name="email">
            <label>Mobile</label>
            <input type="text" class="form-control" value="{{$website->mobile}}" placeholder="{{$website->mobile}}" name="mobile">
            <label>Phone</label>
            <input type="text" class="form-control" value="{{$website->mobile1}}" placeholder="{{$website->mobile1}}" name="mobile1">
            <label>Footer Quote</label>
            <input type="text" class="form-control" value="{{$website->footer_quote}}"  name="footer_quote">
            <label>Address</label>
            <input type="text" class="form-control" value="{{$website->address}}" placeholder="{{$website->address}}" name="address">

            {{-- <label>Quote Title 1</label>
            <input type="text" class="form-control" value="{{$website->quote_title1}}" placeholder="{{$website->quote_title1}}" name="quote_title1">

            <label>Quote Title 2</label>
            <input type="text" class="form-control" value="{{$website->quote_title1}}" placeholder="{{$website->quote_title1}}" name="quote_title2"> --}}

            <label>How it works title 1</label>
            <input type="text" class="form-control" value="{{$website->how_it_work_title1}}" placeholder="{{$website->how_it_work_title1}}" name="how_it_work_title1">

            <label>How it works title 2</label>
            <input type="text" class="form-control" value="{{$website->how_it_work_title2}}" placeholder="{{$website->how_it_work_title2}}" name="how_it_work_title2">

            <label>How it works title 3</label>
            <input type="text" class="form-control" value="{{$website->how_it_work_title3}}" placeholder="{{$website->how_it_work_title3}}" name="how_it_work_title3">


            <h3 class="col-md-12 ">Website Logo</h3>
            <img src="{{$website->logo}}" class="img-fluid img-thumbnail rounded mx-auto d-block col-md-5 col-sm-12" >
            <label class="col-md-12">Add A new Logo</label>
            <input type="file" class="form-control" name="logo">

            {{-- <h3 class="col-md-12 ">How it works image 1</h3>
            <img src="{{$website->how_it_work_image_one}}" class="img-fluid img-thumbnail rounded mx-auto d-block col-md-5 col-sm-12" >
            <label class="col-md-12">Add A new Image</label>
            <input type="file" class="form-control" name="how_it_work_image_one">

            <h3 class="col-md-12 ">How it works image 2</h3>
            <img src="{{$website->how_it_work_image_two}}" class="img-fluid img-thumbnail rounded mx-auto d-block col-md-5 col-sm-12" >
            <label class="col-md-12">Add A new Image</label>
            <input type="file" class="form-control" name="how_it_work_image_two">

            <h3 class="col-md-12 ">How it works image 3</h3>
            <img src="{{$website->how_it_work_image_three}}" class="img-fluid img-thumbnail rounded mx-auto d-block col-md-5 col-sm-12" >
            <label class="col-md-12">Add A new Image</label>
            <input type="file" class="form-control" name="how_it_work_image_three"> --}}
        </div>
        <h4>
            Index description
        </h4>
        <input class="form-control" value="{{$website->index_description}}" name="index_description">

        <div id="sample">
            {{-- <h4>
                About Us
            </h4>
            <textarea style="width: 100%; height: 100px;" value="{{$website->about_us}}" name="about_us">
                @php
                    print_r($website->about_us)
                @endphp
            </textarea> --}}

            <h4>
                Quote description 2
            </h4>
            <textarea style="width: 100%; height: 100px;" value="{{$website->quote_description2}}" name="quote_description2">
                @php
                    print_r($website->quote_description2)
                @endphp
            </textarea>

            <h4>
                Quote description 1
            </h4>
            <textarea style="width: 100%; height: 100px;" value="{{$website->quote_description1}}" name="quote_description1">
                @php
                    print_r($website->quote_description1)
                @endphp
            </textarea>
            <br />
            {{-- <h4>
                Term and policy
            </h4>
                <textarea  style="width: 100%; height: 100px;" name="term_policy" value="{{$website->term_policy}}">
                @php
                    print_r($website->term_policy)
                @endphp
            </textarea>
            <br /> --}}
            {{-- <h4>
                How it Works
            </h4>
            <textarea  style="width: 100%; height: 100px;" name="how_it_works">
                @php
                    print_r($website->how_it_works)
                @endphp
            </textarea> --}}

            <br />
            <h4>
                How it work description 1
            </h4>
            <textarea  style="width: 100%; height: 100px;" name="how_it_work_description1">
                @php
                    print_r($website->how_it_work_description1)
                @endphp
            </textarea>

            <br />
            <h4>
                How it work description 2
            </h4>
            <textarea  style="width: 100%; height: 100px;" name="how_it_work_description2">
                @php
                    print_r($website->how_it_work_description2)
                @endphp
            </textarea>


            <br />
            <h4>
                How it work description 3
            </h4>
            <textarea  style="width: 100%; height: 100px;" name="how_it_work_description3">
                @php
                    print_r($website->how_it_work_description3)
                @endphp
            </textarea>

            <br />
            <h4>
                Why us ?
            </h4>
            <textarea  style="width: 100%; height: 100px;" name="why_us_description">
                @php
                    print_r($website->why_us_description)
                @endphp
            </textarea>
        </div>
        <hr>
        <hr>
        <div class="form-group">
            <input type="submit" class="btn btn-success col-md-12 p-10 m-15" value="Update">
        </div>
    </form>
</div>
@endsection
@section('route')
{{-- <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script> --}}
@endsection
