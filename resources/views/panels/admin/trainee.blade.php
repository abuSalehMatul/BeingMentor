@extends('panels.backend')
@section('title', 'Trainee')
@section('content')
    <trainee></trainee>
@endsection
@section('route')
<script>
    window.getTraineeRoute = "{{ route('api.get.trainee', $user_id) }}";
</script>
@endsection
