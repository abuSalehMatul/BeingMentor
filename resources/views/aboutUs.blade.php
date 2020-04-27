@extends('layouts.app')
@section('container')
<article id="post-9" class="post-9 page type-page status-publish hentry">
    <div class="entry-content">
        <div class="et-l et-l--post">
            <div class="col-md-12 col-sm-12 card">
                <div class="card-body">
                <img src="{{asset('images/aboutus.jpg')}}" class="d-block -m-1 img-fluid img-thumbnail" style="min-width:100%;height: 40%">
                </div>
                <div class="card-body">
                    @php
                         print_r($website->about_us);
                    @endphp
                </div>

            </div>
        </div>
    </div>
</article>
@include('footer')
@endsection
