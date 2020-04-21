@extends('panels.adminator')

@section('container')
    <div class="container-fluid">
        @yield('content')
    </div>
@endsection
@push('js')
    <script>
        @auth
            window.authId = "{{ auth()->id() }}";
        @endauth
    </script>
@endpush

