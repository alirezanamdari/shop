        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                    <li class="active">
                        <a class="" href="{{route('dashboard')}}">
                            <i class="icon-dashboard"></i>
                            <span>صفحه اصلی</span>
                        </a>
                    </li>

                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-book"></i>
                                <span>  مدیریت کاربران </span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a  href="{{route('user.index')}}">لیست کاربران</a></li>
                                <li><a  href="{{route('register.create')}}">افزودن کاربر </a></li>

                                <li><a  href="{{route('role.index')}}">لیست سطوح دسترسی </a></li>
                                <li><a  href="{{route('role.create')}}">افزودن سطح دسترسی جدید</a></li>

                                <li><a  href="{{route('permission.index')}}"> لیست مجوزها  </a></li>
                                <li><a  href="{{route('permission.create')}}">افزودن  مجوز جدید</a></li>

                            </ul>
                        </li>

                    {{-- @can('product_manager') --}}
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-book"></i>
                                <span>مدیریت محصولات</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                            <li><a class="" href="{{route('product.index')}}">لیست محصولات</a></li>
                            <li><a class="" href="{{route('product.create')}}">افزودن محصول </a></li>
                            <li><a class="" href="{{route('category.index')}}">لیست دسته بندی ها </a></li>
                            <li><a class="" href="{{route('category.create')}}">افزودن دسته بندی </a></li>
                            </ul>
                        </li>

                    {{-- @endcan --}}
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="icon-book"></i>
                            <span>مدیریت برندها</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                        <li><a  href="{{route('brand.index')}}">لیست برندها</a></li>
                        <li><a  href="{{route('brand.create')}}">افزودن برند </a></li>
                        </ul>
                    </li>

                    {{-- @can('slider_manager') --}}
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="icon-book"></i>
                                <span>مدیریت اسلایدر</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                            <li><a  href="">لیست اسلایدر</a></li>
                            <li><a  href="">افزودن اسلایدر </a></li>
                            </ul>
                        </li>
                    {{-- @endcan --}}
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="icon-book"></i>
                            <span>مدیریت فیلترها</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                        <li><a  href="">لیست فیلترها</a></li>
                        <li><a  href="">افزودن فیلتر </a></li>
                        </ul>
                    </li>


                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
