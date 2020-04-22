@extends('panels.backend')
@section('title', 'Profile')
@section('content')
    <profile></profile>
@endsection
@section('route')
<script>
    window.getProfileRoute = "{{ route('api.panel.profile.index') }}";
    window.updateProfileRoute = "{{ route('api.panel.profile.update') }}";
</script>
@endsection
