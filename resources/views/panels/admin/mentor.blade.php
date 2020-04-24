@extends('panels.backend')
@section('title', 'Mentor')
@section('content')
    <mentor user_id="{{$user_id}}"></mentor>
@endsection
@section('route')
<script>
    window.getMentorRoute = "{{ route('api.get.mentor', $user_id) }}";
</script>
@endsection
