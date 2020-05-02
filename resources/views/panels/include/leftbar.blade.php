<div class="sidebar">
    <div class="sidebar-inner">
        <!-- ### $Sidebar Header ### -->
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed">
                    <a class="sidebar-link td-n" href="{{route('find.profile')}}">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer">
                                <div class="logo">
                                    <img src="{{asset('images/used_logo.png')}}" alt="" class="w-100" style="height: 65px">
                                </div>
                            </div>
                            <div class="peer peer-greed">
                                <h5 class="lh-1 mB-0 logo-text">Being Mentor</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="peer">
                    <div class="mobile-toggle sidebar-toggle">
                        <a href="" class="td-n">
                            <i class="ti-arrow-circle-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ### $Sidebar Menu ### -->
        <ul class="sidebar-menu scrollable pos-r">
            @role('admin')
            <li class="nav-item">
                <a class='sidebar-link {{ request()->is('admin/profi*') ? 'highlight' : '' }}'
                   href="{{ route('panels.admin.index') }}">
                    <span class="icon-holder">
                        <i class="c-brown-500 ti-id-badge"></i>
                    </span>
                    <span class="title">Home page</span>
                </a>
            </li>
                <li class="nav-item mT-30 active">
                    <a class="sidebar-link {{ request()->is('admin/train*') ? 'highlight' : '' }}"
                        href="{{route('panels.admin.trainee')}}">
                        <span class="icon-holder">
                            <i class="c-blue-500 ti-user"></i>
                        </span>
                        <span class="title">Trainee</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class='sidebar-link {{ request()->is('admin/ment*') ? 'highlight' : '' }}'
                       href="{{ route('panels.admin.mentor.index') }}">
                        <span class="icon-holder">
                            <i class="c-blue-500 ti-user"></i>
                        </span>
                        <span class="title">Mentors</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class='sidebar-link {{ request()->is('admin/contact*') ? 'highlight' : '' }}'
                       href="{{ route('panels.admin.contact_us.index')  }}">
                        <span class="icon-holder">
                            <i class="c-blue-500 ti-support"></i>
                        </span>
                        <span class="title">Contacted Us</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class='sidebar-link {{ request()->is('admin/forum*') ? 'highlight' : '' }}'
                       href="{{ route('panels.admin.forum.index')  }}">
                        <span class="icon-holder">
                            <i class="c-blue-500 ti-layers-alt"></i>
                        </span>
                        <span class="title">Forum</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class='sidebar-link {{ request()->is('admin/web*') ? 'highlight' : '' }}'
                       href="{{ route('panels.admin.website')  }}">
                        <span class="icon-holder">
                            <i class="c-blue-500 ti-settings"></i>
                        </span>
                        <span class="title">Website</span>
                    </a>
                </li>

                 <li class="nav-item">
                    <a class='sidebar-link {{ request()->is('admin/ta*') ? 'highlight' : '' }}'
                       href="{{ route('panels.admin.tag')  }}">
                        <span class="icon-holder">
                            <i class="c-blue-500 ti-tag"></i>
                        </span>
                        <span class="title">Tag</span>
                    </a>
                </li>

                 <li class="nav-item">
                    <a class='sidebar-link {{ request()->is('admin/suc*') ? 'highlight' : '' }}'
                       href="{{ route('panels.admin.story')  }}">
                        <span class="icon-holder">
                            <i class="c-blue-500 ti-bookmark-alt"></i>
                        </span>
                        <span class="title">Success Story</span>
                    </a>
                </li>
            @endrole

            @role('mentor')
            <li class="nav-item">
                <a class='sidebar-link {{ request()->is('mentor/dashboard*') ? 'highlight' : '' }}'
                   href="{{ route('panels.mentor.index') }}">
                    <span class="icon-holder">
                        <i class="c-brown-500 ti-id-badge"></i>
                    </span>
                    <span class="title">Home page</span>
                </a>
            </li>

            <li class="nav-item">
                <a class='sidebar-link {{ request()->is('mentor/my-trainee*') ? 'highlight' : '' }}'
                   href="{{ route('panels.mentor.my.trainee') }}">
                    <span class="icon-holder">
                        <i class="c-brown-500 ti-panel"></i>
                    </span>
                    <span class="title">My Trainees</span>
                </a>
            </li>

            <li class="nav-item">
                <a class='sidebar-link {{ request()->is('mentor/answer*') ? 'highlight' : '' }}'
                   href="{{ route('panels.mentor.answer') }}">
                    <span class="icon-holder">
                        <i class="c-brown-500 ti-ink-pen"></i>
                    </span>
                    <span class="title">My Answer</span>
                </a>
            </li>

            <li class="nav-item">
                <a class='sidebar-link {{ request()->is('mentor/message*') ? 'highlight' : '' }}'
                   href="{{ route('panels.mentor.message') }}">
                    <span class="icon-holder">
                        <i class="c-brown-500 ti-email"></i>
                    </span>
                    <span class="title">My Message</span>
                </a>
            </li>
            @endrole

            @role('trainee')
            <li class="nav-item">
                <a class='sidebar-link {{ request()->is('trainee/dashboard*') ? 'highlight' : '' }}'
                   href="{{ route('panels.trainee.index') }}">
                    <span class="icon-holder">
                        <i class="c-brown-500 ti-id-badge"></i>
                    </span>
                    <span class="title">Home page</span>
                </a>
            </li>

            <li class="nav-item">
                <a class='sidebar-link {{ request()->is('trainee/find-mentor*') ? 'highlight' : '' }}'
                   href="{{ route('panels.trainee.find.mentor') }}">
                    <span class="icon-holder">
                        <i class="c-brown-500 ti-search"></i>
                    </span>
                    <span class="title">Find Mentors</span>
                </a>
            </li>

            

            <li class="nav-item">
                <a class='sidebar-link {{ request()->is('trainee/question*') ? 'highlight' : '' }}'
                   href="{{ route('panels.trainee.question') }}">
                    <span class="icon-holder">
                        <i class="c-brown-500 ti-help"></i>
                    </span>
                    <span class="title">My Question</span>
                </a>
            </li>

            <li class="nav-item">
                <a class='sidebar-link {{ request()->is('trainee/message*') ? 'highlight' : '' }}'
                   href="{{ route('panels.trainee.message') }}">
                    <span class="icon-holder">
                        <i class="c-brown-500 ti-email"></i>
                    </span>
                    <span class="title">My Message</span>
                </a>
            </li>
            @endrole

        </ul>
    </div>
</div>
