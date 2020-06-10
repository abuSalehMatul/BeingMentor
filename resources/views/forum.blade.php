@extends('layouts.app')
@section('container')
<article id="post-9" class="post-9 page type-page status-publish hentry">
    <div class="entry-content">
        <div class="et-l et-l--post">
            <div class="et_builder_inner_content et_pb_gutters3">
                @role('trainee')
                <div class="card-header p-10 text-break">
                    <a class="btn btn-success btn-sm" href="{{route('ask.a.question')}}"> Ask A question</a>
                    <forum user="front"></forum>
                </div>
                @endrole
                @role('mentor')
                <forum user="front"> </forum>
                @endrole
                @role('admin')
                <forum user="front"> </forum>
                @endrole
                @guest
                <forum user="front"> </forum>
                @endguest

            </div>
        </div>
    </div>
</article>
@include('footer')
@endsection



