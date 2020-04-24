@extends('layouts.app')
@section('container')
<article id="post-9" class="post-9 page type-page status-publish hentry">
    <div class="entry-content">
        <div class="et-l et-l--post">
            <div class="et_builder_inner_content et_pb_gutters3">
                <mentor user_id="{{$user_id}}"></mentor>
            </div>
        </div>
    </div>
</article>
@include('footer')
@endsection
@section('route')
<script>
    window.getMentorRoute = "{{ route('api.get.mentor', $user_id) }}";
</script>
@endsection
