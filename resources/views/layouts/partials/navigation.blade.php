<!-- Navigation -->
<aside id="menu">
    <div id="navigation">
{{--        <div class="profile-picture">--}}
{{--            <a href="index.html">--}}
{{--                <img src="images/profile.jpg" class="img-circle m-b" alt="logo">--}}
{{--            </a>--}}

{{--            <div class="stats-label text-color">--}}
{{--                <span class="font-extra-bold font-uppercase">Robert Razer</span>--}}

{{--                <div class="dropdown">--}}
{{--                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">--}}
{{--                        <small class="text-muted">Founder of App <b class="caret"></b></small>--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu animated flipInX m-t-xs">--}}
{{--                        <li><a href="contacts.html">Contacts</a></li>--}}
{{--                        <li><a href="profile.html">Profile</a></li>--}}
{{--                        <li><a href="analytics.html">Analytics</a></li>--}}
{{--                        <li class="divider"></li>--}}
{{--                        <li><a href="login.html">Logout</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}


{{--                <div id="sparkline1" class="small-chart m-t-sm"></div>--}}
{{--                <div>--}}
{{--                    <h4 class="font-extra-bold m-b-xs">--}}
{{--                        $260 104,200--}}
{{--                    </h4>--}}
{{--                    <small class="text-muted">Your income from the last year in sales product X.</small>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <ul class="nav" id="side-menu">
            <li class="active">
                <a href="{{ route('dashboard') }}"> <span class="nav-label">Dashboard</span> <span class="label label-danger pull-right">N/A</span> </a>
            </li>
            <li>
                <a href="#"> <span class="nav-label">Products</span><span class="label label-danger pull-right">N/A</span> </a>
            </li>
            <li>
                <a href="#"><span class="nav-label"><i class="fa fa-book"></i>  OMS</span><span class="fa arrow"></span><span class="label label-warning pull-right">WIP</span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('oms.overview') }}"><i class="fa fa-bar-chart"></i>  Overview</a></li>
                    <li><a href="{{ route('oms.orders') }}"><i class="fa fa-table"></i>  Orders</a></li>
                    <li><a href="{{ route('oms.reports') }}"><i class="fa fa-paperclip"></i>  Reports</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">OFS</span><span class="fa arrow"></span><span class="label label-danger pull-right">N/A</span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="#">Overview</a></li>
                    <li><a href="#">Channels</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">Integrations</span><span class="fa arrow"></span><span class="label label-warning pull-right">WIP</span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="#">Overview</a></li>
                    <li><a href="#">Amazon</a></li>
                    <li><a href="{{ route('integration.new') }}">New Integration</a></li>
                </ul>
            </li>
{{--            <li>--}}
{{--                <a href="#"><span class="nav-label">Charts</span><span class="fa arrow"></span> </a>--}}
{{--                <ul class="nav nav-second-level">--}}
{{--                    <li><a href="chartjs.html">ChartJs</a></li>--}}
{{--                    <li><a href="flot.html">Flot charts</a></li>--}}
{{--                    <li><a href="inline.html">Inline graphs</a></li>--}}
{{--                    <li><a href="chartist.html">Chartist</a></li>--}}
{{--                    <li><a href="c3.html">C3 Charts</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#"><span class="nav-label">Box transitions</span><span class="fa arrow"></span> </a>--}}
{{--                <ul class="nav nav-second-level">--}}
{{--                    <li><a href="overview.html"><span class="label label-success pull-right">Start</span> Overview </a>  </li>--}}
{{--                    <li><a href="transition_two.html">Columns from up</a></li>--}}
{{--                    <li><a href="transition_one.html">Columns custom</a></li>--}}
{{--                    <li><a href="transition_three.html">Panels zoom</a></li>--}}
{{--                    <li><a href="transition_four.html">Rows from down</a></li>--}}
{{--                    <li><a href="transition_five.html">Rows from right</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#"><span class="nav-label">Common views</span><span class="fa arrow"></span> </a>--}}
{{--                <ul class="nav nav-second-level">--}}
{{--                    <li><a href="login.html">Login</a></li>--}}
{{--                    <li><a href="register.html">Register</a></li>--}}
{{--                    <li><a href="error_one.html">Error 404</a></li>--}}
{{--                    <li><a href="error_two.html">Error 505</a></li>--}}
{{--                    <li><a href="lock.html">Lock screen</a></li>--}}
{{--                    <li><a href="password_recovery.html">Passwor recovery</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#"><span class="nav-label">Tables</span><span class="fa arrow"></span> </a>--}}
{{--                <ul class="nav nav-second-level">--}}
{{--                    <li><a href="tables_design.html">Tables design</a></li>--}}
{{--                    <li><a href="datatables.html">Data tables</a></li>--}}
{{--                    <li><a href="footable.html">Foo Table</a></li>--}}

{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="widgets.html"> <span class="nav-label">Widgets</span> <span class="label label-success pull-right">Special</span></a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#"><span class="nav-label">Forms</span><span class="fa arrow"></span> </a>--}}
{{--                <ul class="nav nav-second-level">--}}
{{--                    <li><a href="forms_elements.html">Forms elements</a></li>--}}
{{--                    <li><a href="forms_extended.html">Forms extended</a></li>--}}
{{--                    <li><a href="text_editor.html">Text editor</a></li>--}}
{{--                    <li><a href="wizard.html">Wizard</a></li>--}}
{{--                    <li><a href="validation.html">Validation</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="options.html"> <span class="nav-label">Layout options</span></a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="grid_system.html"> <span class="nav-label">Grid system</span></a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="landing_page.html"> <span class="nav-label">Landing page</span></a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="package.html"> <span class="nav-label">Package</span></a>--}}
{{--            </li>--}}

        </ul>
    </div>
</aside>
