<mentor-info user_id="website"></mentor-info>
@section('route')
<script>
    window.getMentorRoute = "{{ route('api.get.mentor', 'website') }}";
    window.chatInitializerRoute ="{{ route('chat.initializer') }}";
</script>
@endsection