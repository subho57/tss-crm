<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar settings-menu">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" id="settings-scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav" id="settings-sidebar-nav">
            <ul id="sidebarnav">

                <!--main-->
                <li class="sidenav-menu-item {{ $page['settingsmenu_main'] ?? '' }}">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-main">
                        <span class="hide-menu">{{ cleanLang(__('lang.main_settings')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/general" id="settings-menu-main-general"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/modules" id="settings-menu-main-modules"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.modules')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/company" id="settings-menu-main-company"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.company_details')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/currency" id="settings-menu-main-currency"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.currency')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/theme" id="settings-menu-main-theme"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.theme')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/logos" id="settings-menu-main-logo"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.company_logo')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/cronjobs" id="settings-menu-main-cronjobs"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.cronjob_settings')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/system/clearcache"
                                id="settings-menu-main-cronjobs"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.clear_cache')) }}</a>
                        </li>
                    </ul>
                </li>

                <!--clients-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-clients">
                        <span class="hide-menu">{{ cleanLang(__('lang.clients')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0);" data-url="/settings/clients"
                                id="settings-menu-clients-general"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li><a href="javascript:void(0);" data-url="/settings/customfields/clients"
                                id="settings-menu-clients-forms"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.custom_form_fields')) }}</a>
                        </li>
                        <li><a href="javascript:void(0);" data-url="/settings/client/emailtemplates"
                                id="settings-menu-clients-email-templates"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.email_templates')) }}</a>
                        </li>
                    </ul>
                </li>

                <!--categories-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-categories">
                        <span class="hide-menu">{{ cleanLang(__('lang.categories')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <!--project-->
                        <li>
                            <a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-categories-project" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=project&source=ext">{{ cleanLang(__('lang.projects')) }}
                            </a>
                        </li>
                        <!--client-->
                        <li>
                            <a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-categories-client" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=client&source=ext">{{ cleanLang(__('lang.clients')) }}
                            </a></li>

                        <!--expense-->
                        <li><a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-categories-expense" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=expense&source=ext">{{ cleanLang(__('lang.expenses')) }}
                            </a></li>

                        <!--invoice-->
                        <li><a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-categories-invoice" href="app/settings/invoices"
                                data-url="/categories?filter_category_type=invoice&source=ext">{{ cleanLang(__('lang.invoices')) }}
                            </a></li>

                        <!--lead-->
                        <li><a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-categories-lead" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=lead&source=ext">{{ cleanLang(__('lang.leads')) }}</a>
                        </li>

                        <!--Products-->
                        <!-- not being used currently-->
                        <li><a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url hidden"
                                id="settings-menu-categories-product" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=item&source=ext">{{ cleanLang(__('lang.products')) }}
                            </a></li>

                        <!--estimate-->
                        <li><a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-categories-estimate" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=estimate&source=ext">{{ cleanLang(__('lang.estimates')) }}
                            </a></li>
                    </ul>
                </li>
                <!--projects-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-projects">
                        <span class="hide-menu">{{ cleanLang(__('lang.projects')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/projects/general"
                                id="settings-menu-projects-general"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/projects/staff"
                                id="settings-menu-projects-staff-permissions"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.team_permissions')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/projects/client"
                                id="settings-menu-client-permissions"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.client_permissions')) }}</a>
                        </li>
                        <li><a href="javascript:void(0);" data-url="/settings/customfields/projects"
                                id="settings-menu-projects-forms"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.custom_form_fields')) }}</a>
                        </li>
                    </ul>
                </li>

                <!--leads-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-leads">
                        <span class="hide-menu">{{ cleanLang(__('lang.leads')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/leads/general"
                                id="settings-menu-leads-settings"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/leads/statuses"
                                id="settings-menu-leads-stages"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.lead_stages')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/sources" id="settings-menu-leads-sources"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.lead_sources')) }}</a>
                        </li>
                        <li><a href="javascript:void(0);" data-url="/settings/customfields/leads"
                                id="settings-menu-leads-forms"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.custom_form_fields')) }}</a>
                        </li>
                        <li><a href="javascript:void(0);" data-url="/settings/webforms"
                                id="settings-menu-leads-webforms"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.web_forms')) }}</a>
                        </li>
                    </ul>
                </li>




                <!--milestone-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-milestones">
                        <span class="hide-menu">{{ cleanLang(__('lang.milestones')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/milestones/settings"
                                id="settings-menu-milestones-settings"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/milestones/default"
                                id="settings-menu-milestones-categories"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.default_milestones')) }}</a>
                        </li>
                    </ul>
                </li>

                <!--tasks-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-tasks">
                        <span class="hide-menu">{{ cleanLang(__('lang.tasks')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/tasks" id="settings-menu-tasks-settings"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/tasks/statuses"
                                id="settings-menu-tasks-stages"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.statuses')) }}</a>
                        </li>
                        <li><a href="javascript:void(0);" data-url="/settings/customfields/tasks"
                                id="settings-menu-tasks-forms"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.custom_form_fields')) }}</a>
                        </li>
                    </ul>
                </li>




                <!--billing-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-billing">
                        <span class="hide-menu">{{ cleanLang(__('lang.sales')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/invoices"
                                id="settings-menu-billing-invoice"
                                class="js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.invoices')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/taxrates"
                                id="settings-menu-billing-taxrate"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.tax_rates')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/estimates"
                                id="settings-menu-billing-estimate"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.estimates')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/subscriptions"
                                id="settings-menu-billing-subscription"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.subscriptions')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/expenses"
                                id="settings-menu-billing-expense"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.expenses')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/expenses"
                                id="settings-menu-billing-expense"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.expenses')) }}</a>
                        </li>
                        <li class="hidden">
                            <a href="javascript:void(0);" data-url="/settings/units" id="settings-menu-billing-unit"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.product_units')) }}</a>
                        </li>
                    </ul>
                </li>

                <!--tags-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-tags">
                        <span class="hide-menu">{{ cleanLang(__('lang.tags')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/tags" id="settings-menu-tags-settings"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/tags?source=ext" id="settings-menu-tags-view"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.view_tags')) }}</a>
                        </li>
                    </ul>
                </li>

                <!--payment gateways-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-payment-methods">
                        <span class="hide-menu">{{ cleanLang(__('lang.payment_methods')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <!--paypal-->
                        <li><a href="javascript:void(0);" data-url="/settings/paypal"
                                id="settings-menu-payment-methods-paypal"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">Paypal</a>
                        </li>
                        <!--stripe-->
                        <li><a href="javascript:void(0);" data-url="/settings/stripe"
                                id="settings-menu-payment-methods-stripe"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">Stripe</a>
                        </li>
                        <!--razorpay-->
                        <li><a href="javascript:void(0);" data-url="/settings/razorpay"
                                id="settings-menu-payment-methods-stripe"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">Razorpay</a>
                        </li>
                        <!--mollie-->
                        <li><a href="javascript:void(0);" data-url="/settings/mollie"
                                id="settings-menu-payment-methods-mollie"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">Mollie</a>
                        </li>
                        <!--bank-->
                        <li><a href="javascript:void(0);" data-url="/settings/bank"
                                id="settings-menu-payment-methods-bank"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.bank')) }}</a>
                        </li>


                    </ul>
                </li>

                <!--Email-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-email">
                        <span class="hide-menu">{{ cleanLang(__('lang.email')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <!--general-->
                        <li><a href="javascript:void(0);" data-url="/settings/email/general"
                                id="settings-menu-email-settings"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <!--templates-->
                        <li><a href="javascript:void(0);" data-url="/settings/email/templates"
                                id="settings-menu-email-templates"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.email_templates')) }}</a>
                        </li>
                        <!--smtp-->
                        <li><a href="javascript:void(0);" data-url="/settings/email/smtp" id="settings-menu-email-smtp"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.smtp_settings')) }}</a>
                        </li>
                    </ul>
                </li>


                <!--webmail-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-webmail">
                        <span class="hide-menu">{{ cleanLang(__('lang.webmail')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0);" data-url="/settings/webmail/templates"
                                id="settings-menu-webmail-templates"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.templates')) }}</a>
                        </li>
                    </ul>
                </li>


                <!--roles-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-roles">
                        <span class="hide-menu">{{ cleanLang(__('lang.user_roles')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0);" data-url="/settings/roles" id="settings-menu-roles-general"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                    </ul>
                </li>


                <!--tickets-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-tickets">
                        <span class="hide-menu">{{ cleanLang(__('lang.tickets')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/tickets"
                                id="settings-menu-tickets-settings"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li>
                            <a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-tickets-departments" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=ticket&source=ext">{{ cleanLang(__('lang.departments')) }}
                            </a>

                        </li>
                    </ul>
                </li>


                <!--knowledgeebase-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-knowledgebase">
                        <span class="hide-menu">{{ cleanLang(__('lang.knowledgebase')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/knowledgebase/settings"
                                id="settings-menu-knowledgebase-settings"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/knowledgebase/default"
                                id="settings-menu-knowledgebase-categories"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.categories')) }}</a>
                        </li>
                    </ul>
                </li>


                <!--Other-->
                {{-- <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-other">
                        <span class="hide-menu">{{ cleanLang(__('lang.other')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse" id="settings-menu-other">
                        <li><a href="javascript:void(0);" data-url="/settings/updates" id="settings-menu-other-updates"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.updates')) }}</a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>