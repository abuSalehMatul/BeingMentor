@extends('panels.backend')
@section('title', 'Tag')
@section('content')
   <admin-tag></admin-tag>
@endsection
@section('route')
<script>
   window.getTagRoute = "{{ route('api.admin.get.tag') }}";
   window.saveTagRoute = "{{ route('api.admin.save.tag') }}";
</script>
@endsection
