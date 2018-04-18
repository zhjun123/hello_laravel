<div class="tpl-left-nav tpl-left-nav-hover">
    <div class="tpl-left-nav-title">
        菜单列表
    </div>
    <div class="tpl-left-nav-list">
        <ul class="tpl-left-nav-menu">
            <li class="tpl-left-nav-item">
                <a href="{{url('admins')}}" class="nav-link active">
                    <i class="am-icon-home"></i>
                    <span>首页</span>
                </a>
            </li>

            <li class="tpl-left-nav-item">
                <a href="{{url('admins/members')}}" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-bars"></i>
                    <span>{{trans('admin.nav_members')}}</span>
                </a>
            </li>
            <li class="tpl-left-nav-item">
                <a href="{{url('admins/admins')}}" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-bars"></i>
                    <span>{{trans('admin.nav_admins')}}</span>
                </a>
            </li>
            <li class="tpl-left-nav-item">
                <a href="{{url('admins/categories')}}" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-wpforms"></i>
                    <span>{{trans('admin.nav_categories')}}</span>
                </a>
            </li>
            <li class="tpl-left-nav-item">
                <a href="{{url('admins/powers')}}" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-wpforms"></i>
                    <span>{{trans('admin.nav_powers')}}</span>
                </a>
            </li>
            <li class="tpl-left-nav-item">
                <a href="{{url('admins/roles')}}" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-wpforms"></i>
                    <span>{{trans('admin.nav_roles')}}</span>
                </a>
            </li>
            <li class="tpl-left-nav-item">
                <a href="{{url('logout')}}" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-key"></i>
                    <span>{{trans('admin.nav_loginout')}}</span>

                </a>
            </li>
        </ul>
    </div>
</div>