@extends('panels.backend')
@section('title', 'Contact Us')
@section('content')
<div class="bgc-white bd bdrs-3 p-20 mB-20 mT-15">
    @foreach($packages as $package)
    <form method="post" action="{{route('save.package')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <input type="hidden" value="{{$package->id}}" name="package_id">
            <div class="form-group col-md-6">
                <label> Name of the package </label>
                <input type="text" value="{{$package->name}}" class="form-control" name="name" required>
            </div>
            <div class="form-group col-md-12">
                <label> Short title </label>
                <input type="text" value="{{$package->short_title}}" class="form-control" required name="short_title">
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label> Duration </label>
                <input type="number" value="{{$package->duration}}" class="form-control" required name="duration">
            </div>
            <div class="form-group col-md-5 col-sm-12">
                <label> Price (in dollar) </label>
                <input type="number" value="{{$package->price}}" class="form-control" required name="price">
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label> Number of video call ? </label>
                <input type="number" value="{{$package->video_calling}}" class="form-control" name="video_calling">
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label> Number of Chat ? </label>
                <input type="number" value="{{$package->chatting}}" class="form-control" name="chatting">
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label> Number of Question can ask? </label>
                <input type="number" value="{{$package->questions}}" class="form-control" name="questions">
            </div>
             <div class="form-group col-md-12 col-sm-12">
                <label> Icon of the package </label>
                <input type="file"  class="form-control" name="icon">
                <img src="{{$package->icon}}" class="img-fluid img-thumbnail rounded">
            </div>
            <div class="form-group col-md-12 col-sm-12">
                <label> Description </label>
                <textarea class="form-control" name="description" value="{{$package->description}}">
                {{$package->description}}
                 </textarea>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-lg btn-success" value="Save this Package">
        </div>

    </form>
    <hr>
    <hr>
    @endforeach
</div>
@endsection
@section('route')
<script>

</script>
@endsection
