@extends('layouts.app')
@section('container')
<article id="post-9" class="post-9 page type-page status-publish hentry">
    <div class="entry-content">
        <div class="et-l et-l--post">
            <div class="et_builder_inner_content et_pb_gutters3">
            @php
                $message = Session::get('package-message');
            @endphp
            @if($message)
                <div class="card-title">
                      <h3 class="text-center text-danger"> {{$message}} </h3>
                 </div>
            @endif
                @include('packages')
            </div>
        </div>
    </div>
</article>
@include('footer')
@endsection
