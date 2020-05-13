@extends('layouts.app')
@section('container')
<article id="post-9" class="post-9 page type-page status-publish hentry">
    <div class="entry-content">
        <div class="et-l et-l--post">
            <div class="et_builder_inner_content et_pb_gutters3">
                @include('index')
                @include('howWeWork')
                @include('mentorInfo')
                @include('statistic')
                @include('whyUs')
                @include('inspiration')
                @include('contactUs')
                @include('packages')
            </div>
        </div>
    </div>
</article>
@include('footer')
@endsection
