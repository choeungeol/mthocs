<nav class="left-menu" left-menu ng-class="{'hidden-left-menu': hideLeftMenu}">
    <div class="logo-container">
        <a href="#/dashboards/alpha" class="logo">
            <img src="../assets/common/img/logo.png" alt="Clean UI Admin Template" />
            <img class="logo-inverse" src="../assets/common/img/logo-inverse.png" alt="Clean UI Admin Template" />
        </a>
    </div>
    <div class="left-menu-inner scroll-pane">
        <ul class="left-menu-list left-menu-list-root list-unstyled">
            <li class="left-menu-list-submenu">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-cog util-spin-delayed-pseudo"><!-- --></i>
                    <span class="menu-top-hidden">화면</span>설정
                </a>
                <ul class="left-menu-list list-unstyled">
                    <li>
                        <div class="left-menu-item">
                            <div class="left-menu-block">
                                <div class="left-menu-block-item">
                                    <small>This menu gives possibility to construct custom blocks with any widgets, components and elements inside, like this theme settings</small>
                                </div>
                                <div class="left-menu-block-item">
                                    <span class="font-weight-600">Theme Style:</span>
                                </div>
                                <div class="left-menu-block-item" id="options-theme">
                                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                                        <div class="btn-group">
                                            <label class="btn btn-default active">
                                                <input type="radio" name="options-theme" value="theme-default" autocomplete="off" checked=""> Light
                                            </label>
                                        </div>
                                        <div class="btn-group">
                                            <label class="btn btn-default">
                                                <input type="radio" name="options-theme" value="theme-dark" autocomplete="off"> Dark
                                            </label>
                                        </div>
                                    </div>
                                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                                        <div class="btn-group">
                                            <label class="btn btn-default">
                                                <input type="radio" name="options-theme" value="theme-green" autocomplete="off"> Green
                                            </label>
                                        </div>
                                        <div class="btn-group">
                                            <label class="btn btn-default">
                                                <input type="radio" name="options-theme" value="theme-blue" autocomplete="off"> Blue
                                            </label>
                                        </div>
                                    </div>
                                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                                        <div class="btn-group">
                                            <label class="btn btn-default">
                                                <input type="radio" name="options-theme" value="theme-red" autocomplete="off"> Red
                                            </label>
                                        </div>
                                        <div class="btn-group">
                                            <label class="btn btn-default">
                                                <input type="radio" name="options-theme" value="theme-orange" autocomplete="off"> Orange
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-menu-block-item">
                                    <span class="font-weight-600">Fixed Top Menu</sup>:</span>
                                </div>
                                <div class="left-menu-block-item" id="options-menu">
                                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                                        <div class="btn-group">
                                            <label class="btn btn-default active">
                                                <input type="radio" name="options-menu" value="menu-fixed" checked=""> On
                                            </label>
                                        </div>
                                        <div class="btn-group">
                                            <label class="btn btn-default">
                                                <input type="radio" name="options-menu" value="menu-static"> Off
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-menu-block-item">
                                    <span class="font-weight-600">Super Clean Mode:</span>
                                </div>
                                <div class="left-menu-block-item" id="options-mode">
                                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                                        <div class="btn-group">
                                            <label class="btn btn-default">
                                                <input type="radio" name="options-mode" value="mode-superclean"> On
                                            </label>
                                        </div>
                                        <div class="btn-group">
                                            <label class="btn btn-default active">
                                                <input type="radio" name="options-mode" value="mode-default" checked=""> Off
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-menu-block-item">
                                    <span class="font-weight-600">Colorful Menu:</span>
                                </div>
                                <div class="left-menu-block-item" id="options-colorful">
                                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                                        <div class="btn-group">
                                            <label class="btn btn-default active">
                                                <input type="radio" name="options-colorful" value="colorful-enabled" checked=""> On
                                            </label>
                                        </div>
                                        <div class="btn-group">
                                            <label class="btn btn-default">
                                                <input type="radio" name="options-colorful" value="colorful-disabled"> Off
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-menu-block-item">
                                    <span class="font-weight-600">Menu Shadow:</span>
                                </div>
                                <div class="left-menu-block-item" id="mode-box-shadow">
                                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                                        <div class="btn-group">
                                            <label class="btn btn-default">
                                                <input type="radio" name="mode-box-shadow" value="mode-box-shadow"> On
                                            </label>
                                        </div>
                                        <div class="btn-group">
                                            <label class="btn btn-default active">
                                                <input type="radio" name="mode-box-shadow" value="mode-box-shadow-disabled" checked=""> Off
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-menu-block-item">
                                    <span class="font-weight-600">Squared Corners:</span>
                                </div>
                                <div class="left-menu-block-item" id="mode-squared">
                                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                                        <div class="btn-group">
                                            <label class="btn btn-default">
                                                <input type="radio" name="mode-squared" value="mode-squared"> On
                                            </label>
                                        </div>
                                        <div class="btn-group">
                                            <label class="btn btn-default active">
                                                <input type="radio" name="mode-squared" value="mode-squared-disabled" checked=""> Off
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="left-menu-list-separator"><!-- --></li>
            <li class="left-menu-list-submenu">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-files-empty2"><!-- --></i>
                    코드마스터
                </a>
                <ul class="left-menu-list list-unstyled">
                    <li>
                        <a class="left-menu-link" href="#">
                            장애분류
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#">
                            종별
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#">
                            유형
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#">
                            관계
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#">
                            자격구분
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/pages/invoice">
                            Invoice
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/pages/page-404">
                            Page 404
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/pages/page-500">
                            Page 500
                        </a>
                    </li>
                </ul>
            </li>
            <li class="left-menu-list-submenu">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-cart5"><!-- --></i>
                    Ecommerce
                </a>
                <ul class="left-menu-list list-unstyled">
                    <li>
                        <a class="left-menu-link" href="#/ecommerce/dashboard">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/ecommerce/orders">
                            Orders
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/ecommerce/products-list">
                            Products List
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/ecommerce/products-catalog">
                            Products Catalog
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/ecommerce/product-details">
                            Product Details
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/ecommerce/product-edit">
                            Product Edit
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/ecommerce/cart">
                            Cart
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/ecommerce/checkout">
                            Checkout
                        </a>
                    </li>
                </ul>
            </li>
            <li class="left-menu-list-separator"><!-- --></li>
            <li class="left-menu-list-submenu">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-pencil5"><!-- --></i>
                    Forms
                </a>
                <ul class="left-menu-list list-unstyled">
                    <li>
                        <a class="left-menu-link" href="#/forms/basic-form-elements">
                            Basic Form Elements
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/forms/buttons">
                            Buttons
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/forms/dropdowns">
                            Dropdowns
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/forms/selectboxes">
                            Selectboxes
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/forms/checkboxes-radio">
                            Checkboxes / Radio
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/forms/form-wizard">
                            Form Wizard
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/forms/form-validation">
                            Form Validation
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/forms/autocomplete">
                            Autocomplete
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/forms/input-mask">
                            Input Mask
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/forms/extras">
                            Extras
                        </a>
                    </li>
                </ul>
            </li>
            <li class="left-menu-list-submenu">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-stack3"><!-- --></i>
                    Components
                </a>
                <ul class="left-menu-list list-unstyled">
                    <li>
                        <a class="left-menu-link" href="#/components/date-picker">
                            Date Picker
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/components/calendar">
                            Calendar
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/components/carousel">
                            Carousel
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/components/media-players">
                            Media Players <span class="label left-menu-label label-default">22$ FREE</span>
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/components/slider">
                            Slider
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/components/modal">
                            Modal
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/components/tooltips-popovers">
                            Tooltips & Popovers
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/components/notifications-alerts">
                            Notifications & Alerts
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/components/loading-progress">
                            Loading Progress
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/components/progress-bars">
                            Progress Bars
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/components/badges-labels">
                            Badges & Labels
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/components/steps">
                            Steps
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/components/pagination">
                            Pagination
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/components/collapse">
                            Collapse
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/components/tabs">
                            Tabs
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/components/text-editor">
                            Text Editor
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/components/nestable">
                            Nestable
                        </a>
                    </li>
                </ul>
            </li>
            <li class="left-menu-list-submenu">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-grid3"><!-- --></i>
                    Tables
                </a>
                <ul class="left-menu-list list-unstyled">
                    <li>
                        <a class="left-menu-link" href="#/tables/basic-tables">
                            Basic Tables
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/tables/datatables">
                            DataTables
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/tables/editable-tables">
                            Editable Tables
                        </a>
                    </li>
                </ul>
            </li>
            <li class="left-menu-list-submenu">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-pie-chart2"><!-- --></i>
                    Charts
                </a>
                <ul class="left-menu-list list-unstyled">
                    <li>
                        <a class="left-menu-link" href="#/charts/chartistjs">
                            Chartist.js
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/charts/c3">
                            C3
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/charts/peity">
                            Peity
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="left-menu-link" href="#/components/mail-templates">
                    <i class="left-menu-link-icon icmn-mail2"><!-- --></i>
                    Mail Templates
                </a>
            </li>
            <li class="left-menu-list-separator"><!-- --></li>
            <li>
                <a class="left-menu-link" href="#/apps/profile">
                    <i class="left-menu-link-icon icmn-profile"><!-- --></i>
                    Profile
                </a>
            </li>
            <li>
                <a class="left-menu-link" href="#/apps/messaging">
                    <i class="left-menu-link-icon icmn-bubbles5"><!-- --></i>
                    Messaging
                </a>
            </li>
            <li>
                <a class="left-menu-link" href="#/apps/mail">
                    <i class="left-menu-link-icon icmn-mail2"><!-- --></i>
                    Mail
                </a>
            </li>
            <li>
                <a class="left-menu-link" href="#/apps/calendar">
                    <i class="left-menu-link-icon icmn-calendar"><!-- --></i>
                    Calendar
                </a>
            </li>
            <li>
                <a class="left-menu-link" href="#/apps/gallery">
                    <i class="left-menu-link-icon icmn-images"><!-- --></i>
                    Gallery
                </a>
            </li>
            <li class="left-menu-list-separator"><!-- --></li>
            <li class="left-menu-list-submenu">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-stack3"><!-- --></i>
                    Layout
                </a>
                <ul class="left-menu-list list-unstyled">
                    <li>
                        <a class="left-menu-link" href="#/layout/grid">
                            Grid
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/layout/panels">
                            Panels / Cards
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/layout/sidebars">
                            Sidebars
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/layout/utilities">
                            Utilities
                        </a>
                    </li>
                </ul>
            </li>
            <li class="left-menu-list-submenu">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-star-full"><!-- --></i>
                    Icons
                </a>
                <ul class="left-menu-list list-unstyled">
                    <li>
                        <a class="left-menu-link" href="#/icons/icomoon-ultimate">
                            IcoMoon Ultimate <span class="label left-menu-label label-default">59$ FREE</span>
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="#/icons/fontawesome">
                            FontAwesome
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="left-menu-link" href="#/layout/typography">
                    <i class="left-menu-link-icon icmn-font-size"><!-- --></i>
                    Typography
                </a>
            </li>
            <li class="left-menu-list-separator"><!-- --></li>
            <li class="left-menu-list-disabled">
                <a class="left-menu-link" href="javascript: void(0);">
                    Disabled Item
                </a>
            </li>
            <li class="menu-top-hidden left-menu-list-submenu">
                <a class="left-menu-link" href="javascript: void(0);">
                    Infinity Nested
                </a>
                <!-- level 1 -->
                <ul class="left-menu-list list-unstyled">
                    <li class="left-menu-list-submenu">
                        <a class="left-menu-link" href="javascript: void(0);">
                            Level 1
                        </a>
                        <!-- level 2 -->
                        <ul class="left-menu-list list-unstyled">
                            <li class="left-menu-list-submenu">
                                <a class="left-menu-link" href="javascript: void(0);">
                                    Level 1.2
                                </a>
                                <!-- level 3 -->
                                <ul class="left-menu-list list-unstyled">
                                    <li>
                                        <a class="left-menu-link" href="javascript: void(0);">
                                            Level 1.2.3
                                        </a>
                                    </li>
                                    <li class="left-menu-list-submenu">
                                        <a class="left-menu-link" href="javascript: void(0);">
                                            Level 1.2.3
                                        </a>
                                        <!-- level 4 -->
                                        <ul class="left-menu-list list-unstyled">
                                            <li>
                                                <a class="left-menu-link" href="javascript: void(0);">
                                                    Level 1.2.3.4
                                                </a>
                                            </li>
                                        </ul>

                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="left-menu-link" href="javascript: void(0);">
                                    Level 1.2
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="left-menu-link" href="javascript: void(0);">
                            Level 1
                        </a>
                    </li>
                </ul>

            </li>
            <li class="left-menu-list-separator"><!-- --></li>
        </ul>
    </div>
</nav>