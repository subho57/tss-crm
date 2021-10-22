<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" id="js-trigger-nav-client">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <!--home-->
                <li class="sidenav-menu-item {{ $page['mainmenu_home'] ?? '' }} menu-tooltip menu-with-tooltip"
                title="{{ cleanLang(__('lang.home')) }}">
                    <a class="waves-effect waves-dark" href="/home" aria-expanded="false" target="_self">
                        <i class="ti-home"></i>
                        <span class="hide-menu">{{ cleanLang(__('lang.dashboard')) }}
                        </span>
                    </a>
                </li>
                <!--home-->


                <!--projects[home]-->
                @if(config('visibility.modules.projects'))
                <li class="sidenav-menu-item {{ $page['mainmenu_projects'] ?? '' }} menu-tooltip menu-with-tooltip"
                title="{{ cleanLang(__('lang.projects')) }}">
                    <a class="waves-effect waves-dark" href="{{ _url('/projects') }}" aria-expanded="false" target="_self">
                        <i class="ti-folder"></i>
                        <span class="hide-menu">{{ cleanLang(__('lang.projects')) }}
                        </span>
                    </a>
                </li>
                @endif
                <!--projects-->


                <!--invoices-->
                @if(config('visibility.modules.invoices'))
                <li class="sidenav-menu-item {{ $page['mainmenu_invoices'] ?? '' }} menu-tooltip menu-with-tooltip"
                title="{{ cleanLang(__('lang.invoices')) }}">
                    <a class="waves-effect waves-dark" href="/invoices" aria-expanded="false" target="_self">
                        <i class="ti-receipt"></i>
                        <span class="hide-menu">{{ cleanLang(__('lang.invoices')) }}
                        </span>
                    </a>
                </li>
                @endif
                <!--invoices-->

                <!--payments-->
                @if(config('visibility.modules.payments'))
                <li class="sidenav-menu-item {{ $page['mainmenu_payments'] ?? '' }} menu-tooltip menu-with-tooltip"
                title="{{ cleanLang(__('lang.payments')) }}">
                    <a class="waves-effect waves-dark" href="/payments" aria-expanded="false" target="_self">
                        <i class="sl-icon-credit-card"></i>
                        <span class="hide-menu">{{ cleanLang(__('lang.payments')) }}
                        </span>
                    </a>
                </li>
                @endif
                <!--payments-->

                
                <!--subscriptions-->
                @if(config('visibility.modules.subscriptions'))
                <li class="sidenav-menu-item {{ $page['mainmenu_subscription'] ?? '' }} menu-tooltip menu-with-tooltip"
                    title="{{ cleanLang(__('lang.subscriptions')) }}">
                    <a class="waves-effect waves-dark p-r-20" href="/subscriptions" aria-expanded="false"
                        target="_self">
                        <i class="sl-icon-layers"></i>
                        <span class="hide-menu">{{ cleanLang(__('lang.subscriptions')) }}
                        </span>
                    </a>
                </li>
                @endif

                <!--estimates-->
                @if(config('visibility.modules.estimates'))
                <li class="sidenav-menu-item {{ $page['mainmenu_estimates'] ?? '' }} menu-tooltip menu-with-tooltip"
                title="{{ cleanLang(__('lang.estimates')) }}">
                    <a class="waves-effect waves-dark" href="/estimates" aria-expanded="false" target="_self">
                        <i class="sl-icon-calculator"></i>
                        <span class="hide-menu">{{ cleanLang(__('lang.estimates')) }}
                        </span>
                    </a>
                </li>
                @endif
                <!--estimates-->


                <!--users-->
                @if(auth()->user()->is_client_owner)
                <li class="sidenav-menu-item {{ $page['mainmenu_contacts'] ?? '' }} menu-tooltip menu-with-tooltip"
                title="{{ cleanLang(__('lang.users')) }}">
                    <a class="waves-effect waves-dark" href="/users" aria-expanded="false" target="_self">
                        <i class="sl-icon-people"></i>
                        <span class="hide-menu">{{ cleanLang(__('lang.users')) }}
                        </span>
                    </a>
                </li>
                @endif
                <!--users-->

                <!--tickets-->
                @if(config('visibility.modules.tickets'))
                <li class="sidenav-menu-item {{ $page['mainmenu_tickets'] ?? '' }} menu-tooltip menu-with-tooltip"
                title="{{ cleanLang(__('lang.support_tickets')) }}">
                    <a class="waves-effect waves-dark" href="/tickets" aria-expanded="false" target="_self">
                        <i class="ti-comments"></i>
                        <span class="hide-menu">{{ cleanLang(__('lang.support')) }}
                        </span>
                    </a>
                </li>
                @endif
                <!--tickets-->

                <!--knowledgebase-->
                @if(config('visibility.modules.knowledgebase'))
                <li class="sidenav-menu-item {{ $page['mainmenu_kb'] ?? '' }} menu-tooltip menu-with-tooltip"
                title="{{ cleanLang(__('lang.knowledgebase')) }}">
                    <a class="waves-effect waves-dark p-r-20" href="/knowledgebase" aria-expanded="false" target="_self"
                        >
                        <i class="sl-icon-docs"></i>
                        <span class="hide-menu">{{ cleanLang(__('lang.knowledgebase')) }}
                        </span>
                    </a>
                </li>
                @endif
                <!--knowledgebase-->

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>