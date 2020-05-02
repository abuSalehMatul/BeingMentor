@extends('panels.backend')
@section('title', 'Dashboard')
@section('content')
    @role('admin')
    <admin-dashboard></admin-dashboard>
    @endrole
    @role('mentor')
    <mentor-dashboard></mentor-dashboard>
    @endrole
    @role('trainee')
    <trainee-dashboard></trainee-dashboard>
    @endrole
@endsection
@section('route')
<script>
    
</script>
@endsection
