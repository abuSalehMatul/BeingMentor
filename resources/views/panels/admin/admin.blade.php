@extends('panels.backend')
@section('title', 'Admin Management')
@section('custom_css')
<style>
    .admin-image{
    width: 120px;
    max-width: 120px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    height: 100px;
    max-height: 100px;
    }
    .table td{
        vertical-align: middle !important;
    }
</style>
@endsection
@section('content')
<div class="col-md-12 mB-10 col-sm-12">
    <div class="col-md-12"> 
        <h3 class="text-center text-bold"> Admin List</h3>
        <a role="button" class="btn btn-success" href="{{url('admin/create')}}">Add An Admin</a>
    </div>  
    <table class="table table-bordered ">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Image</th>
            <th>Address</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($admins as $admin)
            <tr>
                <td>{{$admin->first_name}}</td>
                <td>{{$admin->email}}</td>
                <td>{{$admin->mobile}}</td>
                <td>
                    <img src="{{asset($admin->profile_image)}}" class="admin-image">    
                </td>
                <td>{{$admin->address}}</td>
                <td>
                    <button class="btn btn-warning" onclick="onDeleteClick({{$admin->id}})" id="delete{{$admin->id}}" style="display: block">Delete</button>
                    <form method="POST" action="{{url('admin/delete')}}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$admin->id}}">
                        <input id="delete-confirm{{$admin->id}}" type="submit" role="button" class="btn btn-danger" value="Confirm Delete" style="display:none">
                    </form>
                    <a class="btn btn-info" href="{{url('admin/edit/'.$admin->id)}}">Edit</a>
                </td>
            </tr>
            @endforeach
           
        <tbody>
    </table>
</div>
@endsection
@section('route')
<script>
function onDeleteClick(admin_id){
    document.getElementById("delete"+admin_id).style.display = "none";
    document.getElementById('delete-confirm'+admin_id).style.display = "block";
}
</script>
@endsection
