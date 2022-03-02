<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base-back-office.html.twig */
class __TwigTemplate_37c3d35e7dd15a61a098f99cf61afc60efb8cc57e9c947dfc103e08abc5b3ff0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'mainContent' => [$this, 'block_mainContent'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back-office.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back-office.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from seantheme.com/hud/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Feb 2022 23:18:57 GMT -->
<head>
    <meta charset=\"utf-8\" />
    <title>HUD | Dashboard</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />

    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/css/vendor.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/css/app.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />


    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/plugins/jvectormap-next/jquery-jvectormap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
</head>
<body>

<div id=\"app\" class=\"app\">

    <div id=\"header\" class=\"app-header\">

        <div class=\"desktop-toggler\">
            <button type=\"button\" class=\"menu-toggler\" data-toggle-class=\"app-sidebar-collapsed\" data-dismiss-class=\"app-sidebar-toggled\" data-toggle-target=\".app\">
                <span class=\"bar\"></span>
                <span class=\"bar\"></span>
                <span class=\"bar\"></span>
            </button>
        </div>


        <div class=\"mobile-toggler\">
            <button type=\"button\" class=\"menu-toggler\" data-toggle-class=\"app-sidebar-mobile-toggled\" data-toggle-target=\".app\">
                <span class=\"bar\"></span>
                <span class=\"bar\"></span>
                <span class=\"bar\"></span>
            </button>
        </div>


        <div class=\"brand\">
            <a href=\"#\" class=\"brand-logo\">
<span class=\"brand-img\">
<span class=\"brand-img-text text-theme\">H</span>
</span>
                <span class=\"brand-text\">HUD ADMIN</span>
            </a>
        </div>


        <div class=\"menu\">
            <div class=\"menu-item dropdown\">
                <a href=\"#\" data-toggle-class=\"app-header-menu-search-toggled\" data-toggle-target=\".app\" class=\"menu-link\">
                    <div class=\"menu-icon\"><i class=\"bi bi-search nav-icon\"></i></div>
                </a>
            </div>
            <div class=\"menu-item dropdown dropdown-mobile-full\">
                <a href=\"#\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" class=\"menu-link\">
                    <div class=\"menu-icon\"><i class=\"bi bi-grid-3x3-gap nav-icon\"></i></div>
                </a>
                <div class=\"dropdown-menu fade dropdown-menu-end w-300px text-center p-0 mt-1\">
                    <div class=\"row row-grid gx-0\">
                        <div class=\"col-4\">
                            <a href=\"#\" class=\"dropdown-item text-decoration-none p-3 bg-none\">
                                <div class=\"position-relative\">
                                    <i class=\"bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100\"></i>
                                    <i class=\"bi bi-envelope h2 opacity-5 d-block my-1\"></i>
                                </div>
                                <div class=\"fw-500 fs-10px text-white\">INBOX</div>
                            </a>
                        </div>
                        <div class=\"col-4\">
                            <a href=\"#\" class=\"dropdown-item text-decoration-none p-3 bg-none\">
                                <div><i class=\"bi bi-hdd-network h2 opacity-5 d-block my-1\"></i></div>
                                <div class=\"fw-500 fs-10px text-white\">DISK DRIVE</div>
                            </a>
                        </div>
                        <div class=\"col-4\">
                            <a href=\"#\" class=\"dropdown-item text-decoration-none p-3 bg-none\">
                                <div><i class=\"bi bi-calendar4 h2 opacity-5 d-block my-1\"></i></div>
                                <div class=\"fw-500 fs-10px text-white\">CALENDAR</div>
                            </a>
                        </div>
                    </div>
                    <div class=\"row row-grid gx-0\">
                        <div class=\"col-4\">
                            <a href=\"#\" class=\"dropdown-item text-decoration-none p-3 bg-none\">
                                <div><i class=\"bi bi-terminal h2 opacity-5 d-block my-1\"></i></div>
                                <div class=\"fw-500 fs-10px text-white\">TERMINAL</div>
                            </a>
                        </div>
                        <div class=\"col-4\">
                            <a href=\"#\" class=\"dropdown-item text-decoration-none p-3 bg-none\">
                                <div class=\"position-relative\">
                                    <i class=\"bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100\"></i>
                                    <i class=\"bi bi-sliders h2 opacity-5 d-block my-1\"></i>
                                </div>
                                <div class=\"fw-500 fs-10px text-white\">SETTINGS</div>
                            </a>
                        </div>
                        <div class=\"col-4\">
                            <a href=\"#\" class=\"dropdown-item text-decoration-none p-3 bg-none\">
                                <div><i class=\"bi bi-collection-play h2 opacity-5 d-block my-1\"></i></div>
                                <div class=\"fw-500 fs-10px text-white\">LIBRARY</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"menu-item dropdown dropdown-mobile-full\">
                <a href=\"#\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" class=\"menu-link\">
                    <div class=\"menu-icon\"><i class=\"bi bi-bell nav-icon\"></i></div>
                    <div class=\"menu-badge bg-theme\"></div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end mt-1 w-300px fs-11px pt-1\">
                    <h6 class=\"dropdown-header fs-10px mb-1\">NOTIFICATIONS</h6>
                    <div class=\"dropdown-divider mt-1\"></div>
                    <a href=\"#\" class=\"d-flex align-items-center py-10px dropdown-item text-wrap\">
                        <div class=\"fs-20px\">
                            <i class=\"bi bi-bag text-theme\"></i>
                        </div>
                        <div class=\"flex-1 flex-wrap ps-3\">
                            <div class=\"mb-1 text-white\">NEW ORDER RECEIVED (\$1,299)</div>
                            <div class=\"small\">JUST NOW</div>
                        </div>
                        <div class=\"ps-2 fs-16px\">
                            <i class=\"bi bi-chevron-right\"></i>
                        </div>
                    </a>
                    <a href=\"#\" class=\"d-flex align-items-center py-10px dropdown-item text-wrap\">
                        <div class=\"fs-20px w-20px\">
                            <i class=\"bi bi-person-circle text-theme\"></i>
                        </div>
                        <div class=\"flex-1 flex-wrap ps-3\">
                            <div class=\"mb-1 text-white\">3 NEW ACCOUNT CREATED</div>
                            <div class=\"small\">2 MINUTES AGO</div>
                        </div>
                        <div class=\"ps-2 fs-16px\">
                            <i class=\"bi bi-chevron-right\"></i>
                        </div>
                    </a>
                    <a href=\"#\" class=\"d-flex align-items-center py-10px dropdown-item text-wrap\">
                        <div class=\"fs-20px w-20px\">
                            <i class=\"bi bi-gear text-theme\"></i>
                        </div>
                        <div class=\"flex-1 flex-wrap ps-3\">
                            <div class=\"mb-1 text-white\">SETUP COMPLETED</div>
                            <div class=\"small\">3 MINUTES AGO</div>
                        </div>
                        <div class=\"ps-2 fs-16px\">
                            <i class=\"bi bi-chevron-right\"></i>
                        </div>
                    </a>
                    <a href=\"#\" class=\"d-flex align-items-center py-10px dropdown-item text-wrap\">
                        <div class=\"fs-20px w-20px\">
                            <i class=\"bi bi-grid text-theme\"></i>
                        </div>
                        <div class=\"flex-1 flex-wrap ps-3\">
                            <div class=\"mb-1 text-white\">WIDGET INSTALLATION DONE</div>
                            <div class=\"small\">5 MINUTES AGO</div>
                        </div>
                        <div class=\"ps-2 fs-16px\">
                            <i class=\"bi bi-chevron-right\"></i>
                        </div>
                    </a>
                    <a href=\"#\" class=\"d-flex align-items-center py-10px dropdown-item text-wrap\">
                        <div class=\"fs-20px w-20px\">
                            <i class=\"bi bi-credit-card text-theme\"></i>
                        </div>
                        <div class=\"flex-1 flex-wrap ps-3\">
                            <div class=\"mb-1 text-white\">PAYMENT METHOD ENABLED</div>
                            <div class=\"small\">10 MINUTES AGO</div>
                        </div>
                        <div class=\"ps-2 fs-16px\">
                            <i class=\"bi bi-chevron-right\"></i>
                        </div>
                    </a>
                    <hr class=\"bg-white-transparent-5 mb-0 mt-2\" />
                    <div class=\"py-10px mb-n2 text-center\">
                        <a href=\"#\" class=\"text-decoration-none fw-bold\">SEE ALL</a>
                    </div>
                </div>
            </div>
            <div class=\"menu-item dropdown dropdown-mobile-full\">
                <a href=\"#\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" class=\"menu-link\">
                    <div class=\"menu-img online\">
                        <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/img/user/profile.jpg"), "html", null, true);
        echo "\" height=\"60px\" />
                    </div>
                    <div class=\"menu-text d-sm-block d-none\"><span class=\"__cf_email__\" data-cfemail=\"1c696f796e727d71795c7d7f7f73697268327f7371\">[email&#160;protected]</span></div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1\">
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">PROFILE <i class=\"bi bi-person-circle ms-auto text-theme fs-16px my-n1\"></i></a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">INBOX <i class=\"bi bi-envelope ms-auto text-theme fs-16px my-n1\"></i></a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">CALENDAR <i class=\"bi bi-calendar ms-auto text-theme fs-16px my-n1\"></i></a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">SETTINGS <i class=\"bi bi-gear ms-auto text-theme fs-16px my-n1\"></i></a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">LOGOUT <i class=\"bi bi-toggle-off ms-auto text-theme fs-16px my-n1\"></i></a>
                </div>
            </div>
        </div>


        <form class=\"menu-search\" method=\"POST\" name=\"header_search_form\">
            <div class=\"menu-search-container\">
                <div class=\"menu-search-icon\"><i class=\"bi bi-search\"></i></div>
                <div class=\"menu-search-input\">
                    <input type=\"text\" class=\"form-control form-control-lg\" placeholder=\"Search menu...\" />
                </div>
                <div class=\"menu-search-icon\">
                    <a href=\"#\" data-toggle-class=\"app-header-menu-search-toggled\" data-toggle-target=\".app\"><i class=\"bi bi-x-lg\"></i></a>
                </div>
            </div>
        </form>

    </div>


    <div id=\"sidebar\" class=\"app-sidebar\">

        <div class=\"app-sidebar-content\" data-scrollbar=\"true\" data-height=\"100%\">

            <div class=\"menu\">
                <div class=\"menu-header\">Navigation</div>
                <div class=\"menu-item active\">
                    <a href=\"index-2.html\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-cpu\"></i></span>
                        <span class=\"menu-text\">Dashboard</span>
                    </a>
                </div>
                <div class=\"menu-item\">
                    <a href=\"analytics.html\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-bar-chart\"></i></span>
                        <span class=\"menu-text\">Analytics</span>
                    </a>
                </div>
                <div class=\"menu-item has-sub\">
                    <a href=\"#\" class=\"menu-link\">
<span class=\"menu-icon\">
<i class=\"bi bi-envelope\"></i>
</span>
                        <span class=\"menu-text\">Email</span>
                        <span class=\"menu-caret\"><b class=\"caret\"></b></span>
                    </a>
                    <div class=\"menu-submenu\">
                        <div class=\"menu-item\">
                            <a href=\"email_inbox.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Inbox</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"email_compose.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Compose</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"email_detail.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Detail</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"menu-header\">Components</div>
                <div class=\"menu-item\">
                    <a href=\"widgets.html\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-columns-gap\"></i></span>
                        <span class=\"menu-text\">Widgets</span>
                    </a>
                </div>
                <div class=\"menu-item has-sub\">
                    <a href=\"javascript:;\" class=\"menu-link\">
                        <div class=\"menu-icon\">
                            <i class=\"bi bi-bag-check\"></i>
                            <span class=\"w-5px h-5px rounded-3 bg-theme position-absolute top-0 end-0 mt-3px me-3px\"></span>
                        </div>
                        <div class=\"menu-text d-flex align-items-center\">POS System</div>
                        <span class=\"menu-caret\"><b class=\"caret\"></b></span>
                    </a>
                    <div class=\"menu-submenu\">
                        <div class=\"menu-item\">
                            <a href=\"pos_customer_order.html\" target=\"_blank\" class=\"menu-link\">
                                <div class=\"menu-text\">Customer Order</div>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"pos_kitchen_order.html\" target=\"_blank\" class=\"menu-link\">
                                <div class=\"menu-text\">Kitchen Order</div>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"pos_counter_checkout.html\" target=\"_blank\" class=\"menu-link\">
                                <div class=\"menu-text\">Counter Checkout</div>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"pos_table_booking.html\" target=\"_blank\" class=\"menu-link\">
                                <div class=\"menu-text\">Table Booking</div>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"pos_menu_stock.html\" target=\"_blank\" class=\"menu-link\">
                                <div class=\"menu-text\">Menu Stock</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"menu-item has-sub\">
                    <a href=\"#\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-controller\"></i></span>
                        <span class=\"menu-text\">UI Kits</span>
                        <span class=\"menu-caret\"><b class=\"caret\"></b></span>
                    </a>
                    <div class=\"menu-submenu\">
                        <div class=\"menu-item\">
                            <a href=\"ui_bootstrap.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Bootstrap</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"ui_buttons.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Buttons</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"ui_card.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Card</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"ui_icons.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Icons</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"ui_modal_notification.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Modal & Notification</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"ui_typography.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Typography</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"ui_tabs_accordions.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Tabs & Accordions</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"menu-item has-sub\">
                    <a href=\"#\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-pen\"></i></span>
                        <span class=\"menu-text\">Forms</span>
                        <span class=\"menu-caret\"><b class=\"caret\"></b></span>
                    </a>
                    <div class=\"menu-submenu\">
                        <div class=\"menu-item\">
                            <a href=\"form_elements.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Form Elements</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"form_plugins.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Form Plugins</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"form_wizards.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Wizards</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"menu-item has-sub\">
                    <a href=\"#\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-grid-3x3\"></i></span>
                        <span class=\"menu-text\">Tables</span>
                        <span class=\"menu-caret\"><b class=\"caret\"></b></span>
                    </a>
                    <div class=\"menu-submenu\">
                        <div class=\"menu-item\">
                            <a href=\"table_elements.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Table Elements</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"table_plugins.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Table Plugins</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"menu-item has-sub\">
                    <a href=\"#\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-pie-chart\"></i></span>
                        <span class=\"menu-text\">Charts</span>
                        <span class=\"menu-caret\"><b class=\"caret\"></b></span>
                    </a>
                    <div class=\"menu-submenu\">
                        <div class=\"menu-item\">
                            <a href=\"chart_js.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Chart.js</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"chart_apex.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Apexcharts.js</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <a href=\"map.html\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-compass\"></i></span>
                        <span class=\"menu-text\">Map</span>
                    </a>
                </div>
                <div class=\"menu-item has-sub\">
                    <a href=\"#\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-layout-sidebar\"></i></span>
                        <span class=\"menu-text\">Layout</span>
                        <span class=\"menu-caret\"><b class=\"caret\"></b></span>
                    </a>
                    <div class=\"menu-submenu\">
                        <div class=\"menu-item\">
                            <a href=\"layout_starter.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Starter Page</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"layout_fixed_footer.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Fixed Footer</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"layout_full_height.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Full Height</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"layout_full_width.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Full Width</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"layout_boxed_layout.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Boxed Layout</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"layout_collapsed_sidebar.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Collapsed Sidebar</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"menu-item has-sub\">
                    <a href=\"#\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-collection\"></i></span>
                        <span class=\"menu-text\">Pages</span>
                        <span class=\"menu-caret\"><b class=\"caret\"></b></span>
                    </a>
                    <div class=\"menu-submenu\">
                        <div class=\"menu-item\">
                            <a href=\"page_scrum_board.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Scrum Board</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"page_products.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Products</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"page_orders.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Orders</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"page_gallery.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Gallery</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"page_search_results.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Search Results</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"page_coming_soon.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Coming Soon Page</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"page_404_error.html\" class=\"menu-link\">
                                <span class=\"menu-text\">404 Error Page</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"page_login.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Login</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"page_register.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Register</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"menu-divider\"></div>
                <div class=\"menu-header\">Users</div>
                <div class=\"menu-item\">
                    <a href=\"profile.html\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-people\"></i></span>
                        <span class=\"menu-text\">Profile</span>
                    </a>
                </div>
                <div class=\"menu-item\">
                    <a href=\"calendar.html\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-calendar4\"></i></span>
                        <span class=\"menu-text\">Calendar</span>
                    </a>
                </div>
                <div class=\"menu-item\">
                    <a href=\"settings.html\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-gear\"></i></span>
                        <span class=\"menu-text\">Settings</span>
                    </a>
                </div>
                <div class=\"menu-item\">
                    <a href=\"helper.html\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-gem\"></i></span>
                        <span class=\"menu-text\">Helper</span>
                    </a>
                </div>
            </div>

            <div class=\"p-3 px-4 mt-auto\">
                <a href=\"documentation/index.html\" class=\"btn d-block btn-outline-theme\">
                    <i class=\"fa fa-code-branch me-2 ms-n2 opacity-5\"></i> Documentation
                </a>
            </div>
        </div>

    </div>


    <button class=\"app-sidebar-mobile-backdrop\" data-toggle-target=\".app\" data-toggle-class=\"app-sidebar-mobile-toggled\"></button>


    <div id=\"content\" class=\"app-content\">

        <div class=\"row\">

";
        // line 557
        $this->displayBlock('mainContent', $context, $blocks);
        // line 559
        echo "        </div>


        <a href=\"#\" data-toggle=\"scroll-to-top\" class=\"btn-scroll-top fade\"><i class=\"fa fa-arrow-up\"></i></a>


        <div class=\"app-theme-panel\">
            <div class=\"app-theme-panel-container\">
                <a href=\"javascript:;\" data-toggle=\"theme-panel-expand\" class=\"app-theme-toggle-btn\"><i class=\"bi bi-sliders\"></i></a>
                <div class=\"app-theme-panel-content\">
                    <div class=\"small fw-bold text-white mb-1\">Theme Color</div>
                    <div class=\"card mb-3\">

                        <div class=\"card-body p-2\">

                            <div class=\"app-theme-list\">
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-pink\" data-theme-class=\"theme-pink\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Pink\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-red\" data-theme-class=\"theme-red\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Red\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-warning\" data-theme-class=\"theme-warning\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Orange\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-yellow\" data-theme-class=\"theme-yellow\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Yellow\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-lime\" data-theme-class=\"theme-lime\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Lime\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-green\" data-theme-class=\"theme-green\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Green\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item active\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-teal\" data-theme-class=\"\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Default\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-info\" data-theme-class=\"theme-info\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Cyan\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-primary\" data-theme-class=\"theme-primary\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Blue\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-purple\" data-theme-class=\"theme-purple\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Purple\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-indigo\" data-theme-class=\"theme-indigo\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Indigo\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-gray-100\" data-theme-class=\"theme-gray-200\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Gray\">&nbsp;</a></div>
                            </div>

                        </div>


                        <div class=\"card-arrow\">
                            <div class=\"card-arrow-top-left\"></div>
                            <div class=\"card-arrow-top-right\"></div>
                            <div class=\"card-arrow-bottom-left\"></div>
                            <div class=\"card-arrow-bottom-right\"></div>
                        </div>

                    </div>
                    <div class=\"small fw-bold text-white mb-1\">Theme Cover</div>
                    <div class=\"card\">

                        <div class=\"card-body p-2\">

                            <div class=\"app-theme-cover\">
                                <div class=\"app-theme-cover-item active\">
                                    <a href=\"javascript:;\" class=\"app-theme-cover-link\" style=\"background-image: url(";
        // line 607
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/img/cover/cover-thumb-1.jpg);"), "html", null, true);
        echo "\" data-theme-cover-class=\"\" data-toggle=\"theme-cover-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Default\">&nbsp;</a>
                                </div>
                                <div class=\"app-theme-cover-item\">
                                    <a href=\"javascript:;\" class=\"app-theme-cover-link\" style=\"background-image: url(";
        // line 610
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/img/cover/cover-thumb-2.jpg);"), "html", null, true);
        echo "\" data-theme-cover-class=\"bg-cover-2\" data-toggle=\"theme-cover-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Cover 2\">&nbsp;</a>
                                </div>
                                <div class=\"app-theme-cover-item\">
                                    <a href=\"javascript:;\" class=\"app-theme-cover-link\" style=\"background-image: url(";
        // line 613
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/img/cover/cover-thumb-3.jpg);"), "html", null, true);
        echo "\" data-theme-cover-class=\"bg-cover-3\" data-toggle=\"theme-cover-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Cover 3\">&nbsp;</a>
                                </div>
                                <div class=\"app-theme-cover-item\">
                                    <a href=\"javascript:;\" class=\"app-theme-cover-link\" style=\"background-image: url(";
        // line 616
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/img/cover/cover-thumb-4.jpg);"), "html", null, true);
        echo "\" data-theme-cover-class=\"bg-cover-4\" data-toggle=\"theme-cover-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Cover 4\">&nbsp;</a>
                                </div>
                                <div class=\"app-theme-cover-item\">
                                    <a href=\"javascript:;\" class=\"app-theme-cover-link\" style=\"background-image: url(";
        // line 619
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/img/cover/cover-thumb-5.jpg);"), "html", null, true);
        echo "\" data-theme-cover-class=\"bg-cover-5\" data-toggle=\"theme-cover-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Cover 5\">&nbsp;</a>
                                </div>
                            </div>

                        </div>


                        <div class=\"card-arrow\">
                            <div class=\"card-arrow-top-left\"></div>
                            <div class=\"card-arrow-top-right\"></div>
                            <div class=\"card-arrow-bottom-left\"></div>
                            <div class=\"card-arrow-bottom-right\"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<script src=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/js/jquery-3.6.0.min.js"), "html", null, true);
        echo "\" type=\"application/javascript\"/>


    <script data-cfasync=\"false\" src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/js/vendor.min.js"), "html", null, true);
        echo "\" type=\"2d84e2308647906e156143e6-text/javascript\"></script>
    <script src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/js/app.min.js"), "html", null, true);
        echo "\" type=\"2d84e2308647906e156143e6-text/javascript\"></script>


    <script src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/plugins/jvectormap-next/jquery-jvectormap.min.js"), "html", null, true);
        echo "\" type=\"2d84e2308647906e156143e6-text/javascript\"></script>
    <script src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js"), "html", null, true);
        echo "\" type=\"2d84e2308647906e156143e6-text/javascript\"></script>
    <script src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/plugins/apexcharts/dist/apexcharts.min.js"), "html", null, true);
        echo "\" type=\"2d84e2308647906e156143e6-text/javascript\"></script>
    <script src=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/js/demo/dashboard.demo.js"), "html", null, true);
        echo "\" type=\"2d84e2308647906e156143e6-text/javascript\"></script>

    <script type=\"2d84e2308647906e156143e6-text/javascript\">
\t\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t\t})(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

\t\tga('create', 'UA-53034621-1', 'auto');
\t\tga('send', 'pageview');

\t</script>
    <script src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"), "html", null, true);
        echo "\" data-cf-settings=\"2d84e2308647906e156143e6-|49\" defer=\"\"></script><script defer src=\"https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194\" integrity=\"sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==\" data-cf-beacon='{\"rayId\":\"6db90f20384a39f9\",\"version\":\"2021.12.0\",\"r\":1,\"token\":\"4db8c6ef997743fda032d4f73cfeff63\",\"si\":100}' crossorigin=\"anonymous\"></script>
</body>

<!-- Mirrored from seantheme.com/hud/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Feb 2022 23:19:15 GMT -->
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 557
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 558
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-back-office.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  784 => 558,  774 => 557,  758 => 661,  743 => 649,  739 => 648,  735 => 647,  731 => 646,  725 => 643,  719 => 642,  713 => 639,  690 => 619,  684 => 616,  678 => 613,  672 => 610,  666 => 607,  616 => 559,  614 => 557,  242 => 188,  67 => 16,  61 => 13,  57 => 12,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from seantheme.com/hud/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Feb 2022 23:18:57 GMT -->
<head>
    <meta charset=\"utf-8\" />
    <title>HUD | Dashboard</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />

    <link href=\"{{ asset('back-office/assets/css/vendor.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('back-office/assets/css/app.min.css') }}\" rel=\"stylesheet\" />


    <link href=\"{{ asset('back-office/assets/plugins/jvectormap-next/jquery-jvectormap.css') }}\" rel=\"stylesheet\" />
</head>
<body>

<div id=\"app\" class=\"app\">

    <div id=\"header\" class=\"app-header\">

        <div class=\"desktop-toggler\">
            <button type=\"button\" class=\"menu-toggler\" data-toggle-class=\"app-sidebar-collapsed\" data-dismiss-class=\"app-sidebar-toggled\" data-toggle-target=\".app\">
                <span class=\"bar\"></span>
                <span class=\"bar\"></span>
                <span class=\"bar\"></span>
            </button>
        </div>


        <div class=\"mobile-toggler\">
            <button type=\"button\" class=\"menu-toggler\" data-toggle-class=\"app-sidebar-mobile-toggled\" data-toggle-target=\".app\">
                <span class=\"bar\"></span>
                <span class=\"bar\"></span>
                <span class=\"bar\"></span>
            </button>
        </div>


        <div class=\"brand\">
            <a href=\"#\" class=\"brand-logo\">
<span class=\"brand-img\">
<span class=\"brand-img-text text-theme\">H</span>
</span>
                <span class=\"brand-text\">HUD ADMIN</span>
            </a>
        </div>


        <div class=\"menu\">
            <div class=\"menu-item dropdown\">
                <a href=\"#\" data-toggle-class=\"app-header-menu-search-toggled\" data-toggle-target=\".app\" class=\"menu-link\">
                    <div class=\"menu-icon\"><i class=\"bi bi-search nav-icon\"></i></div>
                </a>
            </div>
            <div class=\"menu-item dropdown dropdown-mobile-full\">
                <a href=\"#\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" class=\"menu-link\">
                    <div class=\"menu-icon\"><i class=\"bi bi-grid-3x3-gap nav-icon\"></i></div>
                </a>
                <div class=\"dropdown-menu fade dropdown-menu-end w-300px text-center p-0 mt-1\">
                    <div class=\"row row-grid gx-0\">
                        <div class=\"col-4\">
                            <a href=\"#\" class=\"dropdown-item text-decoration-none p-3 bg-none\">
                                <div class=\"position-relative\">
                                    <i class=\"bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100\"></i>
                                    <i class=\"bi bi-envelope h2 opacity-5 d-block my-1\"></i>
                                </div>
                                <div class=\"fw-500 fs-10px text-white\">INBOX</div>
                            </a>
                        </div>
                        <div class=\"col-4\">
                            <a href=\"#\" class=\"dropdown-item text-decoration-none p-3 bg-none\">
                                <div><i class=\"bi bi-hdd-network h2 opacity-5 d-block my-1\"></i></div>
                                <div class=\"fw-500 fs-10px text-white\">DISK DRIVE</div>
                            </a>
                        </div>
                        <div class=\"col-4\">
                            <a href=\"#\" class=\"dropdown-item text-decoration-none p-3 bg-none\">
                                <div><i class=\"bi bi-calendar4 h2 opacity-5 d-block my-1\"></i></div>
                                <div class=\"fw-500 fs-10px text-white\">CALENDAR</div>
                            </a>
                        </div>
                    </div>
                    <div class=\"row row-grid gx-0\">
                        <div class=\"col-4\">
                            <a href=\"#\" class=\"dropdown-item text-decoration-none p-3 bg-none\">
                                <div><i class=\"bi bi-terminal h2 opacity-5 d-block my-1\"></i></div>
                                <div class=\"fw-500 fs-10px text-white\">TERMINAL</div>
                            </a>
                        </div>
                        <div class=\"col-4\">
                            <a href=\"#\" class=\"dropdown-item text-decoration-none p-3 bg-none\">
                                <div class=\"position-relative\">
                                    <i class=\"bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100\"></i>
                                    <i class=\"bi bi-sliders h2 opacity-5 d-block my-1\"></i>
                                </div>
                                <div class=\"fw-500 fs-10px text-white\">SETTINGS</div>
                            </a>
                        </div>
                        <div class=\"col-4\">
                            <a href=\"#\" class=\"dropdown-item text-decoration-none p-3 bg-none\">
                                <div><i class=\"bi bi-collection-play h2 opacity-5 d-block my-1\"></i></div>
                                <div class=\"fw-500 fs-10px text-white\">LIBRARY</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"menu-item dropdown dropdown-mobile-full\">
                <a href=\"#\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" class=\"menu-link\">
                    <div class=\"menu-icon\"><i class=\"bi bi-bell nav-icon\"></i></div>
                    <div class=\"menu-badge bg-theme\"></div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end mt-1 w-300px fs-11px pt-1\">
                    <h6 class=\"dropdown-header fs-10px mb-1\">NOTIFICATIONS</h6>
                    <div class=\"dropdown-divider mt-1\"></div>
                    <a href=\"#\" class=\"d-flex align-items-center py-10px dropdown-item text-wrap\">
                        <div class=\"fs-20px\">
                            <i class=\"bi bi-bag text-theme\"></i>
                        </div>
                        <div class=\"flex-1 flex-wrap ps-3\">
                            <div class=\"mb-1 text-white\">NEW ORDER RECEIVED (\$1,299)</div>
                            <div class=\"small\">JUST NOW</div>
                        </div>
                        <div class=\"ps-2 fs-16px\">
                            <i class=\"bi bi-chevron-right\"></i>
                        </div>
                    </a>
                    <a href=\"#\" class=\"d-flex align-items-center py-10px dropdown-item text-wrap\">
                        <div class=\"fs-20px w-20px\">
                            <i class=\"bi bi-person-circle text-theme\"></i>
                        </div>
                        <div class=\"flex-1 flex-wrap ps-3\">
                            <div class=\"mb-1 text-white\">3 NEW ACCOUNT CREATED</div>
                            <div class=\"small\">2 MINUTES AGO</div>
                        </div>
                        <div class=\"ps-2 fs-16px\">
                            <i class=\"bi bi-chevron-right\"></i>
                        </div>
                    </a>
                    <a href=\"#\" class=\"d-flex align-items-center py-10px dropdown-item text-wrap\">
                        <div class=\"fs-20px w-20px\">
                            <i class=\"bi bi-gear text-theme\"></i>
                        </div>
                        <div class=\"flex-1 flex-wrap ps-3\">
                            <div class=\"mb-1 text-white\">SETUP COMPLETED</div>
                            <div class=\"small\">3 MINUTES AGO</div>
                        </div>
                        <div class=\"ps-2 fs-16px\">
                            <i class=\"bi bi-chevron-right\"></i>
                        </div>
                    </a>
                    <a href=\"#\" class=\"d-flex align-items-center py-10px dropdown-item text-wrap\">
                        <div class=\"fs-20px w-20px\">
                            <i class=\"bi bi-grid text-theme\"></i>
                        </div>
                        <div class=\"flex-1 flex-wrap ps-3\">
                            <div class=\"mb-1 text-white\">WIDGET INSTALLATION DONE</div>
                            <div class=\"small\">5 MINUTES AGO</div>
                        </div>
                        <div class=\"ps-2 fs-16px\">
                            <i class=\"bi bi-chevron-right\"></i>
                        </div>
                    </a>
                    <a href=\"#\" class=\"d-flex align-items-center py-10px dropdown-item text-wrap\">
                        <div class=\"fs-20px w-20px\">
                            <i class=\"bi bi-credit-card text-theme\"></i>
                        </div>
                        <div class=\"flex-1 flex-wrap ps-3\">
                            <div class=\"mb-1 text-white\">PAYMENT METHOD ENABLED</div>
                            <div class=\"small\">10 MINUTES AGO</div>
                        </div>
                        <div class=\"ps-2 fs-16px\">
                            <i class=\"bi bi-chevron-right\"></i>
                        </div>
                    </a>
                    <hr class=\"bg-white-transparent-5 mb-0 mt-2\" />
                    <div class=\"py-10px mb-n2 text-center\">
                        <a href=\"#\" class=\"text-decoration-none fw-bold\">SEE ALL</a>
                    </div>
                </div>
            </div>
            <div class=\"menu-item dropdown dropdown-mobile-full\">
                <a href=\"#\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" class=\"menu-link\">
                    <div class=\"menu-img online\">
                        <img src=\"{{ asset('back-office/assets/img/user/profile.jpg') }}\" height=\"60px\" />
                    </div>
                    <div class=\"menu-text d-sm-block d-none\"><span class=\"__cf_email__\" data-cfemail=\"1c696f796e727d71795c7d7f7f73697268327f7371\">[email&#160;protected]</span></div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1\">
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">PROFILE <i class=\"bi bi-person-circle ms-auto text-theme fs-16px my-n1\"></i></a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">INBOX <i class=\"bi bi-envelope ms-auto text-theme fs-16px my-n1\"></i></a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">CALENDAR <i class=\"bi bi-calendar ms-auto text-theme fs-16px my-n1\"></i></a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">SETTINGS <i class=\"bi bi-gear ms-auto text-theme fs-16px my-n1\"></i></a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">LOGOUT <i class=\"bi bi-toggle-off ms-auto text-theme fs-16px my-n1\"></i></a>
                </div>
            </div>
        </div>


        <form class=\"menu-search\" method=\"POST\" name=\"header_search_form\">
            <div class=\"menu-search-container\">
                <div class=\"menu-search-icon\"><i class=\"bi bi-search\"></i></div>
                <div class=\"menu-search-input\">
                    <input type=\"text\" class=\"form-control form-control-lg\" placeholder=\"Search menu...\" />
                </div>
                <div class=\"menu-search-icon\">
                    <a href=\"#\" data-toggle-class=\"app-header-menu-search-toggled\" data-toggle-target=\".app\"><i class=\"bi bi-x-lg\"></i></a>
                </div>
            </div>
        </form>

    </div>


    <div id=\"sidebar\" class=\"app-sidebar\">

        <div class=\"app-sidebar-content\" data-scrollbar=\"true\" data-height=\"100%\">

            <div class=\"menu\">
                <div class=\"menu-header\">Navigation</div>
                <div class=\"menu-item active\">
                    <a href=\"index-2.html\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-cpu\"></i></span>
                        <span class=\"menu-text\">Dashboard</span>
                    </a>
                </div>
                <div class=\"menu-item\">
                    <a href=\"analytics.html\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-bar-chart\"></i></span>
                        <span class=\"menu-text\">Analytics</span>
                    </a>
                </div>
                <div class=\"menu-item has-sub\">
                    <a href=\"#\" class=\"menu-link\">
<span class=\"menu-icon\">
<i class=\"bi bi-envelope\"></i>
</span>
                        <span class=\"menu-text\">Email</span>
                        <span class=\"menu-caret\"><b class=\"caret\"></b></span>
                    </a>
                    <div class=\"menu-submenu\">
                        <div class=\"menu-item\">
                            <a href=\"email_inbox.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Inbox</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"email_compose.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Compose</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"email_detail.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Detail</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"menu-header\">Components</div>
                <div class=\"menu-item\">
                    <a href=\"widgets.html\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-columns-gap\"></i></span>
                        <span class=\"menu-text\">Widgets</span>
                    </a>
                </div>
                <div class=\"menu-item has-sub\">
                    <a href=\"javascript:;\" class=\"menu-link\">
                        <div class=\"menu-icon\">
                            <i class=\"bi bi-bag-check\"></i>
                            <span class=\"w-5px h-5px rounded-3 bg-theme position-absolute top-0 end-0 mt-3px me-3px\"></span>
                        </div>
                        <div class=\"menu-text d-flex align-items-center\">POS System</div>
                        <span class=\"menu-caret\"><b class=\"caret\"></b></span>
                    </a>
                    <div class=\"menu-submenu\">
                        <div class=\"menu-item\">
                            <a href=\"pos_customer_order.html\" target=\"_blank\" class=\"menu-link\">
                                <div class=\"menu-text\">Customer Order</div>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"pos_kitchen_order.html\" target=\"_blank\" class=\"menu-link\">
                                <div class=\"menu-text\">Kitchen Order</div>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"pos_counter_checkout.html\" target=\"_blank\" class=\"menu-link\">
                                <div class=\"menu-text\">Counter Checkout</div>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"pos_table_booking.html\" target=\"_blank\" class=\"menu-link\">
                                <div class=\"menu-text\">Table Booking</div>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"pos_menu_stock.html\" target=\"_blank\" class=\"menu-link\">
                                <div class=\"menu-text\">Menu Stock</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"menu-item has-sub\">
                    <a href=\"#\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-controller\"></i></span>
                        <span class=\"menu-text\">UI Kits</span>
                        <span class=\"menu-caret\"><b class=\"caret\"></b></span>
                    </a>
                    <div class=\"menu-submenu\">
                        <div class=\"menu-item\">
                            <a href=\"ui_bootstrap.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Bootstrap</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"ui_buttons.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Buttons</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"ui_card.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Card</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"ui_icons.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Icons</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"ui_modal_notification.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Modal & Notification</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"ui_typography.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Typography</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"ui_tabs_accordions.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Tabs & Accordions</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"menu-item has-sub\">
                    <a href=\"#\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-pen\"></i></span>
                        <span class=\"menu-text\">Forms</span>
                        <span class=\"menu-caret\"><b class=\"caret\"></b></span>
                    </a>
                    <div class=\"menu-submenu\">
                        <div class=\"menu-item\">
                            <a href=\"form_elements.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Form Elements</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"form_plugins.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Form Plugins</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"form_wizards.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Wizards</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"menu-item has-sub\">
                    <a href=\"#\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-grid-3x3\"></i></span>
                        <span class=\"menu-text\">Tables</span>
                        <span class=\"menu-caret\"><b class=\"caret\"></b></span>
                    </a>
                    <div class=\"menu-submenu\">
                        <div class=\"menu-item\">
                            <a href=\"table_elements.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Table Elements</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"table_plugins.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Table Plugins</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"menu-item has-sub\">
                    <a href=\"#\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-pie-chart\"></i></span>
                        <span class=\"menu-text\">Charts</span>
                        <span class=\"menu-caret\"><b class=\"caret\"></b></span>
                    </a>
                    <div class=\"menu-submenu\">
                        <div class=\"menu-item\">
                            <a href=\"chart_js.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Chart.js</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"chart_apex.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Apexcharts.js</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <a href=\"map.html\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-compass\"></i></span>
                        <span class=\"menu-text\">Map</span>
                    </a>
                </div>
                <div class=\"menu-item has-sub\">
                    <a href=\"#\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-layout-sidebar\"></i></span>
                        <span class=\"menu-text\">Layout</span>
                        <span class=\"menu-caret\"><b class=\"caret\"></b></span>
                    </a>
                    <div class=\"menu-submenu\">
                        <div class=\"menu-item\">
                            <a href=\"layout_starter.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Starter Page</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"layout_fixed_footer.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Fixed Footer</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"layout_full_height.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Full Height</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"layout_full_width.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Full Width</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"layout_boxed_layout.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Boxed Layout</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"layout_collapsed_sidebar.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Collapsed Sidebar</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"menu-item has-sub\">
                    <a href=\"#\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-collection\"></i></span>
                        <span class=\"menu-text\">Pages</span>
                        <span class=\"menu-caret\"><b class=\"caret\"></b></span>
                    </a>
                    <div class=\"menu-submenu\">
                        <div class=\"menu-item\">
                            <a href=\"page_scrum_board.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Scrum Board</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"page_products.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Products</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"page_orders.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Orders</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"page_gallery.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Gallery</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"page_search_results.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Search Results</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"page_coming_soon.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Coming Soon Page</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"page_404_error.html\" class=\"menu-link\">
                                <span class=\"menu-text\">404 Error Page</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"page_login.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Login</span>
                            </a>
                        </div>
                        <div class=\"menu-item\">
                            <a href=\"page_register.html\" class=\"menu-link\">
                                <span class=\"menu-text\">Register</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"menu-divider\"></div>
                <div class=\"menu-header\">Users</div>
                <div class=\"menu-item\">
                    <a href=\"profile.html\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-people\"></i></span>
                        <span class=\"menu-text\">Profile</span>
                    </a>
                </div>
                <div class=\"menu-item\">
                    <a href=\"calendar.html\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-calendar4\"></i></span>
                        <span class=\"menu-text\">Calendar</span>
                    </a>
                </div>
                <div class=\"menu-item\">
                    <a href=\"settings.html\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-gear\"></i></span>
                        <span class=\"menu-text\">Settings</span>
                    </a>
                </div>
                <div class=\"menu-item\">
                    <a href=\"helper.html\" class=\"menu-link\">
                        <span class=\"menu-icon\"><i class=\"bi bi-gem\"></i></span>
                        <span class=\"menu-text\">Helper</span>
                    </a>
                </div>
            </div>

            <div class=\"p-3 px-4 mt-auto\">
                <a href=\"documentation/index.html\" class=\"btn d-block btn-outline-theme\">
                    <i class=\"fa fa-code-branch me-2 ms-n2 opacity-5\"></i> Documentation
                </a>
            </div>
        </div>

    </div>


    <button class=\"app-sidebar-mobile-backdrop\" data-toggle-target=\".app\" data-toggle-class=\"app-sidebar-mobile-toggled\"></button>


    <div id=\"content\" class=\"app-content\">

        <div class=\"row\">

{% block mainContent %}
 {% endblock %}
        </div>


        <a href=\"#\" data-toggle=\"scroll-to-top\" class=\"btn-scroll-top fade\"><i class=\"fa fa-arrow-up\"></i></a>


        <div class=\"app-theme-panel\">
            <div class=\"app-theme-panel-container\">
                <a href=\"javascript:;\" data-toggle=\"theme-panel-expand\" class=\"app-theme-toggle-btn\"><i class=\"bi bi-sliders\"></i></a>
                <div class=\"app-theme-panel-content\">
                    <div class=\"small fw-bold text-white mb-1\">Theme Color</div>
                    <div class=\"card mb-3\">

                        <div class=\"card-body p-2\">

                            <div class=\"app-theme-list\">
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-pink\" data-theme-class=\"theme-pink\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Pink\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-red\" data-theme-class=\"theme-red\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Red\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-warning\" data-theme-class=\"theme-warning\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Orange\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-yellow\" data-theme-class=\"theme-yellow\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Yellow\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-lime\" data-theme-class=\"theme-lime\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Lime\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-green\" data-theme-class=\"theme-green\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Green\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item active\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-teal\" data-theme-class=\"\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Default\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-info\" data-theme-class=\"theme-info\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Cyan\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-primary\" data-theme-class=\"theme-primary\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Blue\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-purple\" data-theme-class=\"theme-purple\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Purple\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-indigo\" data-theme-class=\"theme-indigo\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Indigo\">&nbsp;</a></div>
                                <div class=\"app-theme-list-item\"><a href=\"javascript:;\" class=\"app-theme-list-link bg-gray-100\" data-theme-class=\"theme-gray-200\" data-toggle=\"theme-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Gray\">&nbsp;</a></div>
                            </div>

                        </div>


                        <div class=\"card-arrow\">
                            <div class=\"card-arrow-top-left\"></div>
                            <div class=\"card-arrow-top-right\"></div>
                            <div class=\"card-arrow-bottom-left\"></div>
                            <div class=\"card-arrow-bottom-right\"></div>
                        </div>

                    </div>
                    <div class=\"small fw-bold text-white mb-1\">Theme Cover</div>
                    <div class=\"card\">

                        <div class=\"card-body p-2\">

                            <div class=\"app-theme-cover\">
                                <div class=\"app-theme-cover-item active\">
                                    <a href=\"javascript:;\" class=\"app-theme-cover-link\" style=\"background-image: url({{ asset('back-office/assets/img/cover/cover-thumb-1.jpg);') }}\" data-theme-cover-class=\"\" data-toggle=\"theme-cover-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Default\">&nbsp;</a>
                                </div>
                                <div class=\"app-theme-cover-item\">
                                    <a href=\"javascript:;\" class=\"app-theme-cover-link\" style=\"background-image: url({{ asset('back-office/assets/img/cover/cover-thumb-2.jpg);') }}\" data-theme-cover-class=\"bg-cover-2\" data-toggle=\"theme-cover-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Cover 2\">&nbsp;</a>
                                </div>
                                <div class=\"app-theme-cover-item\">
                                    <a href=\"javascript:;\" class=\"app-theme-cover-link\" style=\"background-image: url({{ asset('back-office/assets/img/cover/cover-thumb-3.jpg);') }}\" data-theme-cover-class=\"bg-cover-3\" data-toggle=\"theme-cover-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Cover 3\">&nbsp;</a>
                                </div>
                                <div class=\"app-theme-cover-item\">
                                    <a href=\"javascript:;\" class=\"app-theme-cover-link\" style=\"background-image: url({{ asset('back-office/assets/img/cover/cover-thumb-4.jpg);')}}\" data-theme-cover-class=\"bg-cover-4\" data-toggle=\"theme-cover-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Cover 4\">&nbsp;</a>
                                </div>
                                <div class=\"app-theme-cover-item\">
                                    <a href=\"javascript:;\" class=\"app-theme-cover-link\" style=\"background-image: url({{ asset('back-office/assets/img/cover/cover-thumb-5.jpg);') }}\" data-theme-cover-class=\"bg-cover-5\" data-toggle=\"theme-cover-selector\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-container=\"body\" data-bs-title=\"Cover 5\">&nbsp;</a>
                                </div>
                            </div>

                        </div>


                        <div class=\"card-arrow\">
                            <div class=\"card-arrow-top-left\"></div>
                            <div class=\"card-arrow-top-right\"></div>
                            <div class=\"card-arrow-bottom-left\"></div>
                            <div class=\"card-arrow-bottom-right\"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<script src=\"{{ asset('back-office/assets/js/jquery-3.6.0.min.js') }}\" type=\"application/javascript\"/>


    <script data-cfasync=\"false\" src=\"{{ asset('back-office/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}\"></script><script src=\"{{ asset('back-office/assets/js/vendor.min.js') }}\" type=\"2d84e2308647906e156143e6-text/javascript\"></script>
    <script src=\"{{ asset('back-office/assets/js/app.min.js') }}\" type=\"2d84e2308647906e156143e6-text/javascript\"></script>


    <script src=\"{{ asset('back-office/assets/plugins/jvectormap-next/jquery-jvectormap.min.js') }}\" type=\"2d84e2308647906e156143e6-text/javascript\"></script>
    <script src=\"{{ asset('back-office/assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js') }}\" type=\"2d84e2308647906e156143e6-text/javascript\"></script>
    <script src=\"{{ asset('back-office/assets/plugins/apexcharts/dist/apexcharts.min.js') }}\" type=\"2d84e2308647906e156143e6-text/javascript\"></script>
    <script src=\"{{ asset('back-office/assets/js/demo/dashboard.demo.js') }}\" type=\"2d84e2308647906e156143e6-text/javascript\"></script>

    <script type=\"2d84e2308647906e156143e6-text/javascript\">
\t\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t\t})(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

\t\tga('create', 'UA-53034621-1', 'auto');
\t\tga('send', 'pageview');

\t</script>
    <script src=\"{{ asset('back-office/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}\" data-cf-settings=\"2d84e2308647906e156143e6-|49\" defer=\"\"></script><script defer src=\"https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194\" integrity=\"sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==\" data-cf-beacon='{\"rayId\":\"6db90f20384a39f9\",\"version\":\"2021.12.0\",\"r\":1,\"token\":\"4db8c6ef997743fda032d4f73cfeff63\",\"si\":100}' crossorigin=\"anonymous\"></script>
</body>

<!-- Mirrored from seantheme.com/hud/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Feb 2022 23:19:15 GMT -->
</html>
", "base-back-office.html.twig", "C:\\Users\\Ahmed Mahjoub\\Calometre\\templates\\base-back-office.html.twig");
    }
}