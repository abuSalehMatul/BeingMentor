@extends('layouts.app')
@section('container')
<article id="post-9" class="post-9 page type-page status-publish hentry">
    <div class="entry-content">
        <div class="et-l et-l--post">
            <div class="et_builder_inner_content et_pb_gutters3">
                <div class="card-body">
                    <h3 class="text-black-50 text-capitalize text-center"> Success Stories </h3>
                    <a class="btn btn-sm btn-info" href="{{url('add-success')}}"> Add My Success Story </a>
                </div>
                <success-story user="front"></success-story>
            </div>
        </div>
    </div>
</article>
@include('footer')
@endsection
