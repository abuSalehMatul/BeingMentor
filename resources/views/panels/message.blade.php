@extends('panels.backend')
@section('title', 'My Messages')
@section('content')
    <message :user_id="{{$userId}}"></message>
@endsection
@section('route')
<script>
    window.getMyMessageRoute = "{{ route('api.panel.my.message', $userId) }}";
</script>
@endsection
