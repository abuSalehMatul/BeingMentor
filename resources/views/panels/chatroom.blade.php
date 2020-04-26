@extends('panels.backend')
@section('title', 'Chat Room')
@section('content')
    <chat-room :room_id="{{$roomId}}" :own_id="{{$ownId}}"></chat-room>
@endsection
@section('route')
<script>
    window.getChatRoute = "{{ route('api.panel.chatroom', $roomId) }}";
    window.setTicketRoute = "{{ route('api.panel.chatromm.ticket', $roomId) }}";
    window.sendChatRoute ="{{ route('api.panel.send.message', $roomId) }}";
    window.postTicketRoute ="{{ route('api.panel.solve.ticket') }}";
</script>
@endsection
