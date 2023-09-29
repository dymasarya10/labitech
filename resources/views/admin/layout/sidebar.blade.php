<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_home') }}"></a>
        </div>
        
        <ul class="sidebar-menu">
            <li class="{{ Request::is('admin') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_home') }}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            <li class="{{ Request::is('admin/post/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_post_view') }}"><i class="fas fa-blog"></i><span>Post</span></a></li>
           
            <li class="{{ Request::is('admin/slide/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_slide_view') }}"><i class="fas fa-images"></i> <span>Slide</span></a></li>
            <li class="{{ Request::is('admin/testimonial/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_testimonial_view') }}"><i class="fas fa-comments"></i><span>Testimonial</span></a></li>
            <li class="{{ Request::is('admin/faq/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_faq_view') }}"><i class="fas fa-question-circle"></i></i><span>FAQ</span></a></li>
            <li class="nav-item dropdown {{ Request::is('admin/page/about') || Request::is('admin/page/contact') || Request::is('admin/page/image-gallery') || Request::is('admin/page/faq') || Request::is('admin/page/blog') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-file"></i></i><span>Pages</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/page/contact') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_contact') }}"><i class="fa fa-angle-right"></i> Contact</a></li>
                    <li class="{{ Request::is('admin/page/faq') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_faq') }}"><i class="fa fa-angle-right"></i> FAQ</a></li>
                    <li class="{{ Request::is('admin/page/blog') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_blog') }}"><i class="fa fa-angle-right"></i> Blog</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('admin/setting') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_setting') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Setting"><i class="fa fa-cog"></i> <span>Setting</span></a></li>
        </ul>
    </aside>
</div>
