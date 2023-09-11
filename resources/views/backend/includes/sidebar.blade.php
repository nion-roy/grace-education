<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-cyan elevation-3">
    <a class="brand-link" href="{{ route('frontend.index') }}">
        <img src="{{ asset(get_setting('admin_logo')) }}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ app_name() }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <x-utils.link-sidebar :href="route('admin.dashboard')" :text="__('Dashboard')" icon="nav-icon icon-speedometer" :active="activeClass(Route::is('admin.dashboard'))" class="nav-link" />
                </li>


                @if (
                $logged_in_user->hasAllAccess() ||
                ($logged_in_user->can('admin.access.user.list') ||
                $logged_in_user->can('admin.access.user.deactivate') ||
                $logged_in_user->can('admin.access.user.reactivate') ||
                $logged_in_user->can('admin.access.user.clear-session') ||
                $logged_in_user->can('admin.access.user.impersonate') ||
                $logged_in_user->can('admin.access.user.change-password')))

                <li class="nav-item {{ activeClass(Route::is('admin.auth.user.') || Route::is('admin.auth.role.'), 'menu-open') }}">
                    @if ($logged_in_user->hasAllAccess() || $logged_in_user->can('admin.setting'))
                <li class="nav-item">
                    <x-utils.link-sidebar href="#" :text="__('Site Settings')" icon="nav-icon icon-star" class="nav-link" rightIcon="fas fa-angle-left right" />
                    <ul class="nav nav-treeview">



                        <li class="nav-item">
                            <x-utils.link :href="route('admin.setting.general')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('General Settings')" />
                        </li>
                        {{-- <li class="nav-item">
                            <x-utils.link :href="route('admin.setting.price')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Price Settings')" />
                        </li>
                        <li class="nav-item">
                            <x-utils.link :href="route('admin.product.product.index')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Products Category')" />
                        </li>
                        <li class="nav-item">
                            <x-utils.link :href="route('admin.setting.notice')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Notice Settings')" />
                        </li>
                        <li class="nav-item">
                            <x-utils.link :href="route('admin.setting.info')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Information Settings')" />
                        </li> --}}
                        <li class="nav-item">
                            <x-utils.link :href="route('admin.about.settings')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('About Settings')" />
                        </li>
                        {{-- <li class="nav-item">
                            <x-utils.link-sidebar href="#" :text="__('About')" icon="nav-icon icon-star" class="nav-link" rightIcon="fas fa-angle-left right" />
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <x-utils.link :href="route('admin.about.settings')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('About Settings')" />
                                </li>
                                <li class="nav-item">
                                    <x-utils.link :href="route('admin.about.committee')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Committee Settings')" />
                                </li>
                                <li class="nav-item">
                                    <x-utils.link :href="route('admin.about.committee.type')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Committee Type Settings')" />
                                </li>
                            </ul>
                        </li> --}}


                        {{-- <li class="nav-item">
                            <x-utils.link-sidebar href="#" :text="__('Competition')" icon="nav-icon icon-star" class="nav-link" rightIcon="fas fa-angle-left right" />
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <x-utils.link :href="route('admin.competition.settings')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Competition Settings')" />
                                </li>
                                <li class="nav-item">
                                    <x-utils.link :href="route('admin.competition.year.settings')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Competition Years')" />
                                </li>
                                <li class="nav-item">
                                    <x-utils.link :href="route('admin.competition.type.settings')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Competition Types')" />
                                </li>
                            </ul>
                        </li> --}}
                        {{--
                        <li class="nav-item">
                            <x-utils.link :href="route('admin.history.settings')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('History Settings')" />
                        </li>
                        <li class="nav-item">
                            <x-utils.link :href="route('admin.setting.page')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Page Settings')" />
                        </li> --}}
                        <li class="nav-item">
                            <x-utils.link :href="route('admin.setting.slider')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Slider Settings')" />
                        </li>
                        {{-- <li class="nav-item">
                            <x-utils.link :href="route('admin.setting.activity')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Activity Settings')" />
                        </li> --}}
                        <li class="nav-item">
                            <x-utils.link :href="route('admin.setting.event')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Event Settings')" />
                        </li>
                        {{-- <li class="nav-item">
                            <x-utils.link :href="route('admin.setting.brand')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Brand Settings')" />
                        </li> --}}
                        {{-- <li class="nav-item">
                            <x-utils.link :href="route('admin.setting.gallery')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Gallery Settings')" />
                        </li> --}}

                        {{--
                        <li class="nav-item">
                            <x-utils.link :href="route('admin.setting.project')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Study Destination Settings')" />
                        </li> --}}

                        <li class="nav-item">
                            <x-utils.link-sidebar href="#" :text="__('Study Destination')" icon="nav-icon icon-star" class="nav-link" rightIcon="fas fa-angle-left right" />
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <x-utils.link :href="route('admin.setting.project')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Study Destination Settings')" />
                                </li>
                                <li class="nav-item">
                                    <x-utils.link :href="route('admin.university.index')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('University Settings')" />
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <x-utils.link :href="route('admin.setting.service')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Service Settings')" />
                        </li>
                        <li class="nav-item">
                            <x-utils.link :href="route('admin.setting.testmony')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Testmony Settings')" />
                        </li>
                        <li class="nav-item">
                            <x-utils.link :href="route('admin.setting.blog')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Blog Settings')" />
                        </li>

                        <li class="nav-item">
                            <x-utils.link-sidebar href="#" :text="__('Faq Settings')" icon="nav-icon icon-star" class="nav-link" rightIcon="fas fa-angle-left right" />
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <x-utils.link :href="route('admin.setting.faq')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Faq Content Settings')" />
                                </li>
                                <li class="nav-item">
                                    <x-utils.link :href="route('admin.setting.faq_video')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Faq Video Settings')" />
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <x-utils.link-sidebar href="#" :text="__('Why Us')" icon="nav-icon icon-star" class="nav-link" rightIcon="fas fa-angle-left right" />
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <x-utils.link :href="route('admin.setting.why')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Why Us Settings')" />
                                </li>
                                <li class="nav-item">
                                    <x-utils.link :href="route('admin.setting.why_us')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Why Us Description Settings')" />
                                </li>
                            </ul>
                        </li>

                        {{-- <li class="nav-item">
                            <x-utils.link :href="route('admin.team.settings')" icon="nav-icon icon-arrow-right" class="nav-link" :text="__('Team Settings')" />
                        </li> --}}

                    </ul>
                </li>
                @endif

                <x-utils.link-sidebar href="#" :text="__('Access')" icon="nav-icon flaticon-lock" class="nav-link" rightIcon="fas fa-angle-left right" />
                <ul class="nav nav-treeview">

                    @if (
                    $logged_in_user->hasAllAccess() ||
                    ($logged_in_user->can('admin.access.user.list') ||
                    $logged_in_user->can('admin.access.user.deactivate') ||
                    $logged_in_user->can('admin.access.user.reactivate') ||
                    $logged_in_user->can('admin.access.user.clear-session') ||
                    $logged_in_user->can('admin.access.user.impersonate') ||
                    $logged_in_user->can('admin.access.user.change-password')))
                    <li class="nav-item">
                        <x-utils.link :href="route('admin.auth.user.index')" icon="nav-icon icon-user" class="nav-link" :text="__('User Management')" :active="activeClass(Route::is('admin.auth.user.*'))" />
                    </li>
                    @endif

                    @if ($logged_in_user->hasAllAccess())
                    <li class="nav-item">
                        <x-utils.link :href="route('admin.auth.role.index')" icon="nav-icon fas fa-user" class="nav-link" :text="__('Role Management')" :active="activeClass(Route::is('admin.auth.role.*'))" />
                    </li>
                    @endif
                </ul>
                </li>
                @endif

                @if ($logged_in_user->hasAllAccess())
                <li class="nav-item ">
                    <x-utils.link-sidebar href="#" :text="__('Logs')" icon="nav-icon fas fa-list" class="nav-link" rightIcon="fas fa-angle-left right" />
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <x-utils.link :href="route('log-viewer::dashboard')" icon="nav-icon far fa-circle" class="nav-link" :text="__('Dashboard')" />
                        </li>
                        <li class="nav-item">
                            <x-utils.link :href="route('log-viewer::logs.list')" icon="nav-icon far fa-circle" class="nav-link" :text="__('Logs')" />
                        </li>
                    </ul>
                </li>
                @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>