@extends('layouts.app')
@section('container')
<article id="post-9" class="post-9 page type-page status-publish hentry">
    <div class="entry-content">
        <div class="et-l et-l--post">
            <div class="et_builder_inner_content et_pb_gutters3">

                <form method="post" class="row" style="padding:10px" action="{{route('save.question')}}">
                    @csrf
                    <div class="form-group col-md-6 ">
                        <label> Title of the question </label>
                        <input type="text" name="title" class="form-control" required placeholder="your question tilte">
                    </div>
                    <div class="col-md-6 form-group ">
                        <label> Select Tag </label>
                        <select class="form-control" name="tag" required>
                            @foreach($tags as $tag)
                            <option value="{{$tag}}"> {{$tag}} </option>
                            @endforeach
                        </select>
                        <label> Select Type </label>
                        <select class="form-control" name="inquire" required>
                            @foreach($inquires as $inquire)
                            <option value="{{$inquire}}"> {{$inquire}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                        <label> Question </label>
                        <textarea class="form-control" name="question" placeholder="question" required>
                            </textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="submit" class="btn btn-success">
                    </div>

                </form>

            </div>
        </div>
    </div>
</article>
@include('footer')
@endsection
