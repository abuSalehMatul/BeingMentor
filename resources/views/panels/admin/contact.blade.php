@extends('panels.backend')
@section('title', 'Contact Us')
@section('content')
   <admin-contact-us></admin-contact-us>
@endsection
@section('route')
<script>
   window.getContactUsRoute = "{{ route('api.contact.us.admin') }}";
   window.changeStatusRoute = "{{ route('api.contact.us.change.status') }}";
</script>
@endsection
