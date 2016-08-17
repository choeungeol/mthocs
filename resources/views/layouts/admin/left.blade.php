<nav class="left-menu" left-menu>
    <div class="logo-container">
        <a href="/" class="logo">
            <img src="vendor/assets/common/img/logo.png" alt="마스터관리" />
            <img class="logo-inverse" src="vendor/assets/common/img/logo-inverse.png" alt="마스터관리" />
        </a>
    </div>
    <div class="left-menu-inner scroll-pane">
        <ul class="left-menu-list left-menu-list-root list-unstyled">
            <li class="left-menu-list-submenu">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-cog util-spin-delayed-pseudo"><!-- --></i>
                    <span class="menu-top-hidden">화면</span> 설정
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
                                            <label class="btn btn-default active">
                                                <input type="radio" name="options-mode" value="mode-superclean" checked=""> On
                                            </label>
                                        </div>
                                        <div class="btn-group">
                                            <label class="btn btn-default">
                                                <input type="radio" name="options-mode" value="mode-default"> Off
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
                        <a class="left-menu-link" ui-sref="create_code_group">
                            코드그룹생성
                        </a>
                    </li>
                    <li class="left-menu-list-separator"><!-- --></li>
                    <li ng-repeat="codeGroup in codeGroups">
                        <a class="left-menu-link" ui-sref="modify_code_group">
                            @{{ codeGroup.group_name }}
                        </a>
                    </li>
                </ul>
            </li>
            <li class="left-menu-list-separator"><!-- --></li>
            <li class="left-menu-list-submenu">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-cart5"><!-- --></i>
                    Ecommerce
                </a>
                <ul class="left-menu-list list-unstyled">
                    <li>
                        <a class="left-menu-link" href="ecommerce-dashboard.html">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="ecommerce-orders.html">
                            Orders
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="ecommerce-products-list.html">
                            Products List
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="ecommerce-products-catalog.html">
                            Products Catalog
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="ecommerce-product-details.html">
                            Product Details
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="ecommerce-product-edit.html">
                            Product Edit
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="ecommerce-cart.html">
                            Cart
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="ecommerce-checkout.html">
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
                        <a class="left-menu-link" href="forms-basic-form-elements.html">
                            Basic Form Elements
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="forms-buttons.html">
                            Buttons
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="forms-dropdowns.html">
                            Dropdowns
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="forms-selectboxes.html">
                            Selectboxes
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="forms-checkboxes-radio.html">
                            Checkboxes / Radio
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="forms-form-wizard.html">
                            Form Wizard
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="forms-form-validation.html">
                            Form Validation
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="forms-autocomplete.html">
                            Autocomplete
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="forms-input-mask.html">
                            Input Mask
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="forms-extras.html">
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
                        <a class="left-menu-link" href="components-date-picker.html">
                            Date Picker
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="components-calendar.html">
                            Calendar
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="components-carousel.html">
                            Carousel
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="components-media-players.html">
                            Media Players <span class="label left-menu-label label-default">22$ FREE</span>
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="components-slider.html">
                            Slider
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="components-modal.html">
                            Modal
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="components-tooltips-popovers.html">
                            Tooltips & Popovers
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="components-notifications-alerts.html">
                            Notifications & Alerts
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="components-loading-progress.html">
                            Loading Progress
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="components-progress-bars.html">
                            Progress Bars
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="components-badges-labels.html">
                            Badges & Labels
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="components-steps.html">
                            Steps
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="components-pagination.html">
                            Pagination
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="components-collapse.html">
                            Collapse
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="components-tabs.html">
                            Tabs
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="components-text-editor.html">
                            Text Editor
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="components-nestable.html">
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
                        <a class="left-menu-link" href="tables-basic-tables.html">
                            Basic Tables
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="tables-datatables.html">
                            DataTables
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="tables-editable-tables.html">
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
                        <a class="left-menu-link" href="charts-chartistjs.html">
                            Chartist.js
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="charts-c3.html">
                            C3
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="charts-peity.html">
                            Peity
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="left-menu-link" href="components-mail-templates">
                    <i class="left-menu-link-icon icmn-mail2"><!-- --></i>
                    Mail Templates
                </a>
            </li>
            <li class="left-menu-list-separator"><!-- --></li>
            <li>
                <a class="left-menu-link" href="apps-profile.html">
                    <i class="left-menu-link-icon icmn-profile"><!-- --></i>
                    Profile
                </a>
            </li>
            <li>
                <a class="left-menu-link" href="apps-messaging.html">
                    <i class="left-menu-link-icon icmn-bubbles5"><!-- --></i>
                    Messaging
                </a>
            </li>
            <li>
                <a class="left-menu-link" href="apps-mail.html">
                    <i class="left-menu-link-icon icmn-mail2"><!-- --></i>
                    Mail
                </a>
            </li>
            <li>
                <a class="left-menu-link" href="apps-calendar.html">
                    <i class="left-menu-link-icon icmn-calendar"><!-- --></i>
                    Calendar
                </a>
            </li>
            <li>
                <a class="left-menu-link" href="apps-gallery.html">
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
                        <a class="left-menu-link" href="layout-grid.html">
                            Grid
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="layout-panels.html">
                            Panels / Cards
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="layout-sidebars.html">
                            Sidebars
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="layout-utilities.html">
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
                        <a class="left-menu-link" href="icons-icomoon-ultimate.html">
                            IcoMoon Ultimate <span class="label left-menu-label label-default">59$ FREE</span>
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="icons-fontawesome.html">
                            FontAwesome
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="left-menu-link" href="layout-typography.html">
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
            <li class="menu-top-hidden no-colorful-menu">
                <div class="left-menu-item">
                    Last Week Sales
                </div>
            </li>
            <li class="menu-top-hidden no-colorful-menu">
                <div class="example-left-menu-chart chartist-animated chartist-theme-dark"></div>
                <script>
                    $(function () {
                        // CSS STYLING & ANIMATIONS
                        var cssAnimationData = {
                                    labels: ["S", "M", "T", "W", "T", "F", "S"],
                                    series: [
                                        [11, 14, 24, 16, 20, 16, 24]
                                    ]
                                },
                                cssAnimationOptions = {
                                    fullWidth: !0,
                                    chartPadding: {
                                        right: 2,
                                        left: 30
                                    },
                                    axisY: {
                                        position: 'end'
                                    }
                                },
                                cssAnimationResponsiveOptions = [
                                    [{
                                        axisX: {
                                            labelInterpolationFnc: function(value, index) {
                                                return index % 2 !== 0 ? !1 : value
                                            }
                                        }
                                    }]
                                ];

                        new Chartist.Line(".example-left-menu-chart", cssAnimationData, cssAnimationOptions, cssAnimationResponsiveOptions);

                    });
                </script>
            </li>
            <li class="menu-top-hidden no-colorful-menu">
                <div class="left-menu-item">
                    Solar System
                </div>
            </li>
            <li class="menu-top-hidden">
                <div class="left-menu-item">
                    <span class="donut donut-success"></span> Jupiter
                </div>
            </li>
            <li class="menu-top-hidden">
                <div class="left-menu-item">
                    <span class="donut donut-primary"></span> Earth
                </div>
            </li>
            <li class="menu-top-hidden">
                <div class="left-menu-item">
                    <span class="donut donut-danger"></span> Mercury
                </div>
            </li>
        </ul>
    </div>
</nav>