

<div class="header navbar ">
    <div class="header-container customize-header">
        <ul class="nav-left">
           
           
        </ul>
        <ul class="nav-right">
            <li>
                <a  class="" href="{{url('/')}}">
                    Home
                </a>
            </li>
            <li>
                <a id='' class="" href="{{route('mentor')}}">
                    Mentor
                </a>
            </li>
            <li>
                <a id='' class="" href="{{url('contact')}}">
                    Contact
                </a>
            </li>
            <li>
                <a id='' class="" href="{{route('about.us')}}">
                    About 
                </a>
            </li>
            <li>
                <a id='' class="" href="{{route('forum')}}">
                    Forum
                </a>
            </li>
            <li class="dropdown">
                <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                    @role('trainee')
                    @php
                    $userPackage = App\Model\UserPackage::where('user_id', auth()->id())
                    ->where('is_active', 1)
                    ->latest('created_at')
                    ->first();

                    @endphp
                    <div class="mR-20">
                        <b>Package:</b> <i class="badge badge-info">
                            @if($userPackage)
                            @php
                            $package = App\Model\Package::findOrFail($userPackage->package_id);
                            @endphp
                            {{$package->name}}
                            @else
                            <i class="badge badge-danger"> No Package !!!!!!</i>
                            @endif
                        </i>
                    </div>

                    @endrole
                    <div class="peer mR-10">
                        @auth
                        <img class="w-2r bdrs-50p" src="{{ auth()->user()->profile_image }}" alt="">
                        @endauth

                    </div>
                    <div class="peer">
                        @auth
                        <span class="fsz-sm c-grey-900">{{ auth()->user()->first_name }}</span>
                        @endauth
                    </div>
                </a>
                <ul class="dropdown-menu fsz-sm">
                    <li>
                        <a href="{{ route('panels.profile.show') }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-user mR-10"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-power-off mR-10"></i>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf()
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
