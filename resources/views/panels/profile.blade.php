@extends('panels.backend')
@section('title', 'Profile')
@section('content')
    <profile></profile>
@endsection
@section('route')
<script>
    window.getProfileRoute = "{{ route('api.panel.profile.index') }}"
</script>
@endsection
