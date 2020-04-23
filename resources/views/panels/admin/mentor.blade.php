@extends('panels.backend')
@section('title', 'Mentor')
@section('content')
    <mentor></mentor>
@endsection
@section('route')
<script>
    window.getMentorRoute = "{{ route('api.get.mentor', $user_id) }}";
</script>
@endsection
