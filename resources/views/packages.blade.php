<div class="package-div">
    <div class="et_pb_module dsm_dual_heading dsm_dual_heading_4  et_pb_text_align_center et_pb_bg_layout_light">
        <div class="et_pb_module_inner">
            <h1 class="dsm-dual-heading-main et_pb_module_header"><span class="dsm-dual-heading-before">Package</span><span class="dsm-dual-heading-middle"> LIST</span></h1>
        </div>
    </div>
    <div class="row">
        @php
        $packages = DB::table('packages')->get();
        $i =0;
        $color =['#38c172', '#1FB6EA', '#2D82D0'];
        @endphp
        <div class="packageList">
            @foreach($packages as $package)
            <div class="package-box col-md-3" style="background: {{$color[$i]}}; margin-left:55px">
                @php
                $i++;
                @endphp
                <div>
                    <h5 class="package-name"> {{$package->name}} </h5>
                    <img src="{{$package->icon}}" class="package-icon">
                </div>
                <div class="package-title">
                    {{$package->short_title}}
                </div>
                <div class="package-description">
                    {{$package->description}}
                </div>
                <div class="package-info">
                    @if($package->duration)
                    <h6>Duration: {{$package->duration}} Months</h6>
                    @endif
                    @if($package->price)
                    <h6>Price: ${{$package->price}}</h6>
                    @else 
                    <h6>Price: $0 (Free)</h6>
                    @endif
                    @if($package->video_calling)
                    <h6>Video Calling: {{$package->video_calling}}</h6>
                    @endif
                    @if($package->chatting)
                    <h6>Chatting: {{$package->chatting}}</h6>
                    @endif
                    @if($package->questions)
                    <h6>Questions: {{$package->questions}}</h6>
                    @endif
                </div>
                <div>
                    <form method="post" action="{{route('submit-package')}}">
                        @csrf
                        <input type="hidden" name="package_id" value="{{$package->id}}">
                        <input type="submit" value="purchase" class="btn btn-lg package-btn">
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
