@extends('panels.backend')
@section('title', 'Contact Us')
@section('content')
<div class="col-md-10">
    <div class="panel"> 
        <h3 class="text-center text-bold">Edit Admin</h3>    
    </div>
    <form method="POST" action="{{url('admin/edit')}}">
        @csrf
        <input type="hidden" name="user_id" value="{{$admin->id}}">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="first_name" value="{{$admin->first_name}}" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{$admin->email}}" required>
        </div>
        <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control" name="mobile" value="{{$admin->mobile}}" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" value="{{$admin->address}}" required>
        </div>
        <div class="form-group">
            <label>password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="form-group">
            <input type="submit" role="button" class="btn btn-success">
        </div>
    </form>
</div>
@endsection
@section('route')
<script>

</script>
@endsection
