<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <?php $currentRouteName = Route::current(); ?>
            <li class="{{ ($currentRouteName->getName() == 'admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home "></i> <span>@lang('app.dashboard')</span></a>
            </li>

            <li class="treeview {{ strrpos($currentRouteName->getPrefix(), 'user') ? 'active':'' }}">
                <a href="#">
                    <i class="fa fa-user"></i> <span>@lang('user.user')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="">
                        <a href="{{ route('user.index') }}">
                            <i class="fa fa-user-plus"></i> <span>@lang('user.user')
                            </span></a>
                    </li>
                    <li class="">
                        <a href="{{ route('user_group.index') }}">
                            <i class="fa fa-user"></i> <span>@lang('user.user_group')</span></a>
                    </li>

                </ul>
            </li>


            <li class="{{ ($currentRouteName->getName() == 'order.index') ? 'active' : '' }}">
                <a href="{{ route('order.index') }}">
                    <i class="fa fa-first-order"></i> <span>@lang('order.order')</span></a>
            </li>

            <li class="treeview {{ strrpos($currentRouteName->getPrefix(), 'product') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-cubes"></i> <span>@lang('product.product')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ ($currentRouteName->getPrefix() == 'product') ? 'active' : '' }}">
                        <a href="{{ route('product.index') }}">
                            <i class="fa fa-angle-right"></i> <span>@lang('product.product')</span></a>
                    </li>
                    <li class="{{ ($currentRouteName->getPrefix() == 'categories') ? 'active' : '' }}">
                        <a href="{{ route('categories.index') }}">
                            <i class="fa fa-angle-right"></i> <span>@lang('category.category')</span></a>
                    </li>

                    <li class="{{ ($currentRouteName->getPrefix() == 'brand') ? 'active' : '' }}">
                        <a href="{{ route('brand.index') }}">
                            <i class="fa fa-angle-right"></i> <span>@lang('brand.brand')</span></a>
                    </li>

                    <li class="{{ ($currentRouteName->getPrefix() == 'attribute') ? 'active' : '' }}">
                        <a href="{{ route('attribute.index') }}">
                            <i class="fa fa-angle-right"></i> <span> @lang('attribute.attribute')</span></a>
                    </li>

                    <li class="{{ ($currentRouteName->getPrefix() == 'type') ? 'active' : '' }}">
                        <a href="{{ route('type.index') }}">
                            <i class="fa fa-angle-right"></i> <span> @lang('type.type')</span></a>
                    </li>

                </ul>
            </li>

            <li class="{{ ($currentRouteName->getName() == 'page') ? 'active' : '' }}">
                <a href="{{ route('page.index') }}">
                    <i class="fa fa-file "></i> <span>@lang('page.page')</span></a>
            </li>

            <li class="treeview {{ strrpos($currentRouteName->getPrefix(), 'blog')?'active':'' }}">
                <a href="#">
                    <i class="fa fa-file"></i> <span>Blog</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="">
                        <a href="{{ route('blog.index') }}">
                            <i class="fa fa-angle-right"></i> Blog
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('blog-category.index') }}">
                            <i class="fa fa-angle-right"></i> @lang('blog.category')
                        </a>
                    </li>

                </ul>
            </li>

            <li class="treeview {{ strrpos($currentRouteName->getPrefix(), 'module')?'active':'' }}">
                <a href="#">
                    <i class="fa fa-file-word"></i> <span>@lang('app.appearance')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="">
                        <a href="{{ route('block.index') }}">
                            <i class="fa fa-angle-right"></i> Blocks
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('slider.index') }}">
                            <i class="fa fa-angle-right"></i> Slider
                        </a>
                    </li>

                    <li class="">
                        <a href="{{ route('menu.index') }}">
                            <i class="fa fa-angle-right"></i> Menu
                        </a>
                    </li>

                </ul>
            </li>



            <li class="{{ strrpos($currentRouteName->getPrefix(), 'systems') ?'active':'' }} treeview" >
                <a href="#">
                    <i class="fa fa-list-alt"></i> <span>Danh mục</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">

                    <li class="">
                        <a href="{{ route('client.index') }}">
                            <i class="fa fa-angle-right"></i> @lang('client.client')
                        </a>
                    </li>

                    <li class="">
                        <a href="{{ route('store.index') }}">
                            <i class="fa fa-angle-right"></i> @lang('store.store')
                        </a>
                    </li>

                    <li class="{{ ($currentRouteName->getName() == 'continent.index') ? 'active' : '' }}">
                        <a href="{{ route('continent.index') }}">
                            <i class="fa fa-angle-right"></i>{{ trans('admin.continent') }}
                        </a>
                    </li>
                    <li class="{{ ($currentRouteName->getName() == 'country.index') ? 'active' : '' }}">
                        <a href="{{ route('country.index') }}">
                            <i class="fa fa-angle-right"></i>{{ trans('admin.country') }}
                        </a>
                    </li>
                    <li class="{{ ($currentRouteName->getName() == 'city.index') ? 'active' : '' }}">
                        <a href="{{ route('city.index') }}">
                            <i class="fa fa-angle-right"></i>{{ trans('admin.city') }}
                        </a>
                    </li>
                    <li class="{{ ($currentRouteName->getName() == 'district.index') ? 'active' : '' }}">
                        <a href="{{ route('district.index') }}">
                            <i class="fa fa-angle-right"></i>{{ trans('admin.district') }}
                        </a>
                    </li>
                    <li class="{{ ($currentRouteName->getName() == 'ward.index') ? 'active' : '' }}">
                        <a href="{{ route('ward.index') }}">
                            <i class="fa fa-angle-right"></i>{{ trans('admin.ward') }}
                        </a>
                    </li>
                </ul>
            </li>


            <li class="{{ ($currentRouteName->getName() == 'contact.index') ? 'active' : '' }}">
                <a href="{{ route('contact.index') }}">
                    <i class="fa fa-users"></i> Contact
                </a>
            </li>

            <li class="treeview {{ strrpos($currentRouteName->getPrefix(), 'system')?'active':'' }}">
                <a href="#">
                    <i class="fas fa-cogs"></i> <span>@lang('app.system')</span>
                    <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($currentRouteName->getName() == 'configuration.index') ? 'active' : '' }}">
                        <a href="{{ route('configuration.index') }}">
                            <i class="fa fa-angle-right"></i> @lang('configurations.configurations')
                        </a>
                    </li>
                    <li class="{{ ($currentRouteName->getName() == 'email-template.index') ? 'active' : '' }}">
                        <a href="{{ route('email-template.index') }}">
                            <i class="fa fa-angle-right"></i> @lang('email-template.email')
                        </a>
                    </li>


                    <li class="{{ ($currentRouteName->getName() == 'sys_user.index') ? 'active' : '' }}">
                        <a href="{{ route('sys_user.index') }}">
                            <i class="fa fa-angle-right"></i> @lang('sys_user.user')
                        </a>
                    </li>
                    <li class="{{ ($currentRouteName->getName() == 'role.index') ? 'active' : '' }}">
                        <a href="{{ route('role.index') }}">
                            <i class="fa fa-angle-right"></i> Role</a>
                    </li>

                    <li class="{{ ($currentRouteName->getName() == 'permission.index') ? 'active' : '' }}">
                        <a href="{{ route('permission.index') }}">
                            <i class="fa fa-angle-right"></i> permission</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('generate.sitemap') }}">Generate Sitemap</a>
            </li>
            <li>
                <a href="{{ route('flush.cache') }}">Flush Cache</a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>