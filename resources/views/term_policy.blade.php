@extends('layouts.app')
@section('container')
<article id="post-9" class="post-9 page type-page status-publish hentry">
    <div class="entry-content">
        <div class="et-l et-l--post">
            <div class="et_builder_inner_content et_pb_gutters3 card">
            <h2 class="card-header"> Terms And Policy </h2>
            <div class="card-body">
               @php
                   print_r($website->term_policy);
               @endphp
            </div>
            </div>
        </div>
    </div>
</article>
@include('footer')
@endsection
