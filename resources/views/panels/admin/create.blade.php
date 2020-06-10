@extends('panels.backend')
@section('title', 'Create Admin')
@section('content')
<div class="col-md-10">
    <div class="panel"> 
        <h3 class="text-center text-bold">Create Admin</h3>    
    </div>
    <form method="POST" action="{{url('admin/create')}}">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="first_name"  required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email"  required>
        </div>
        <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control" name="mobile"  required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address"  required>
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
