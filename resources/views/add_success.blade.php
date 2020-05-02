@extends('layouts.app')
@section('container')
<article id="post-9" class="post-9 page type-page status-publish hentry">
    <div class="entry-content">
        <div class="et-l et-l--post">
            <div class="et_builder_inner_content et_pb_gutters3">
               <div class="card">
                    <form class="col-md-10" method="post" action="{{url('save-story')}}">
                     @csrf
                        <div class="form-group">
                            <label> Add Your Story </label>
                            <textarea class="form-control" rows="10" name="story" placeholder="Add your story">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Say it">
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </div>
</article>
@include('footer')
@endsection
