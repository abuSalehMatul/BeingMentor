@extends('panels.backend')
@section('title', 'Chat Room')
@section('content')
    <chat-room :room_id="{{$roomId}}" :own_id="{{$ownId}}"></chat-room>
@endsection
@section('route')
<script>
    window.getChatRoute = "{{ route('api.panel.chatroom', $roomId) }}";
</script>
@endsection
