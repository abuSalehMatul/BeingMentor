<div class="et_pb_section et_pb_section_7 et_pb_with_background et_section_regular">
    <div class="et_pb_row et_pb_row_14">
        <div class="et_pb_column et_pb_column_4_4 et_pb_column_27  et_pb_css_mix_blend_mode_passthrough et-last-child">
            <div class="et_pb_module dsm_dual_heading dsm_dual_heading_4  et_pb_text_align_center et_pb_bg_layout_light">
                <div class="et_pb_module_inner">
                    <h1 class="dsm-dual-heading-main et_pb_module_header"><span class="dsm-dual-heading-before">Package</span><span class="dsm-dual-heading-middle"> List</span></h1>
                </div>
            </div>
            <div id="et_pb_contact_form_0" class="et_pb_with_border et_pb_module et_pb_contact_form_0 et_animated et_pb_recaptcha_enabled et_pb_contact_form_container clearfix  et_pb_text_align_center" data-form_unique_num="0">
                <div class="et-pb-contact-message"></div>

                <div class="et_pb_contact">
                    <div class="row">
                        @php
                        $packages = DB::table('packages')->get();
                        $i =0;
                        $color =['#38c172', '#1FB6EA', '#2D82D0'];
                        @endphp
                        <div class="packageList" style="display: flex">
                            @foreach($packages as $package)
                            <div class="package-box col-md-4" style="background: {{$color[$i]}};
                            vertical-align: baseline;
                            padding: 20px;margin: 3px; border: 1px solid gainsboro; 
                            border-radius: 30px;
                            font-size: 18px;
                            line-height: 1.3em;color: white;font-family: Open Sans,Arial,sans-serif;">
                                @php
                                $i++;
                                @endphp
                                <div>
                                    <h5 style="
                                    color: white;
                                    font-size: 32px;
                                    font-family: sans-serif;
                                    display: inline-flex;
                                    font-weight: 800;
                                " class="package-name"> {{$package->name}} </h5>
                                    <img src="{{$package->icon}}" style="max-height: 180px;
                                    padding: 10px;
                                    margin-left: auto;
                                    margin-right: auto;
                                    display: block;
                                    border-radius: 32px;" width="180" height="180" class="package-icon">
                                </div>
                                <div class="package-title">
                                    {{$package->short_title}}
                                </div>
                                <div class="package-description">
                                    {{$package->description}}
                                </div>
                                <hr>
                                <div class="package-info">
                                    @if($package->duration)
                                    <h6 style="color: white;
                                            font-size: 18px;
                                            font-family: serif;
                                            margin: 6px;
                                            padding: 5px;
                                            font-weight: 600;">Duration: {{$package->duration}} Months</h6>
                                    @endif
                                    @if($package->price)
                                    <h6 style="color: white;
                                            font-size: 18px;
                                            font-family: serif;
                                            margin: 6px;
                                            padding: 5px;
                                            font-weight: 600;">Price: ${{$package->price}}</h6>
                                    @else
                                    <h6 style="color: white;
                                            font-size: 18px;
                                            font-family: serif;
                                            margin: 6px;
                                            padding: 5px;
                                            font-weight: 600;">Price: $0 (Free)</h6>
                                    @endif
                                    @if($package->video_calling)
                                    <h6 style="color: white;
                                            font-size: 18px;
                                            font-family: serif;
                                            margin: 6px;
                                            padding: 5px;
                                            font-weight: 600;">Video Calling: {{$package->video_calling}}</h6>
                                    @endif
                                    @if($package->chatting)
                                    <h6 style="color: white;
                                            font-size: 18px;
                                            font-family: serif;
                                            margin: 6px;
                                            padding: 5px;
                                            font-weight: 600;">Chatting: {{$package->chatting}}</h6>
                                    @endif
                                    @if($package->questions)
                                    <h6 style="color: white;
                                            font-size: 18px;
                                            font-family: serif;
                                            margin: 6px;
                                            padding: 5px;
                                            font-weight: 600;">Questions: {{$package->questions}}</h6>
                                    @endif
                                </div>
                                <div>
                                    <form method="post" action="{{route('submit-package')}}">
                                        @csrf
                                        <input type="hidden" name="package_id" value="{{$package->id}}">
                                        <input type="submit" style="padding: 10px 55px;
                                        position: relative;
                                        bottom: 1px;
                                        color: #2D82D0;
                                        background: white;
                                        font-size: 18px;
                                        font-weight: 600;
                                        border-radius: 15px;
                                        vertical-align: -webkit-baseline-middle;
                                        line-height: 22px;" value="purchase" class="btn btn-lg package-btn">
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        </div> <!-- .et_pb_contact -->
                    </div> <!-- .et_pb_contact_form_container -->
                </div> <!-- .et_pb_column -->
            </div> <!-- .et_pb_row -->
        </div> <!-- .et_pb_section -->
    </div>
</div>
