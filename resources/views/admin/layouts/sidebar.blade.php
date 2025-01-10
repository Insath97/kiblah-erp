<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="index.php" class="sidebar-logo">
            <img src="{{ asset('admin/assets/images/logo.png') }}" alt="site logo" class="light-logo">
            <img src="{{ asset('admin/assets/images/logo-light.png') }}" alt="site logo" class="dark-logo">
            <img src="{{ asset('admin/assets/images/logo-icon.png') }}" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">

            {{-- dasboard --}}
            <li>
                <a href="#">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-menu-group-title">Application</li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Dashboard</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="index.php"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> AI</a>
                    </li>
                    <li>
                        <a href="index-2.php"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                            CRM</a>
                    </li>
                    <li>
                        <a href="index-3.php"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                            eCommerce</a>
                    </li>
                    <li>
                        <a href="index-4.php"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                            Cryptocurrency</a>
                    </li>
                    <li>
                        <a href="index-5.php"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i>
                            Investment</a>
                    </li>
                    <li>
                        <a href="index-6.php"><i class="ri-circle-fill circle-icon text-purple w-auto"></i> LMS</a>
                    </li>
                    <li>
                        <a href="index-7.php"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> NFT &
                            Gaming</a>
                    </li>
                    <li>
                        <a href="index-8.php"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                            Medical</a>
                    </li>
                    <li>
                        <a href="index-9.php"><i class="ri-circle-fill circle-icon text-purple w-auto"></i>
                            Analytics</a>
                    </li>
                    <li>
                        <a href="index-10.php"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> POS &
                            Inventory </a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Invoice</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="invoice-list.php"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                            List</a>
                    </li>
                    <li>
                        <a href="invoice-preview.php"><i
                                class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Preview</a>
                    </li>
                    <li>
                        <a href="invoice-add.php"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Add
                            new</a>
                    </li>
                    <li>
                        <a href="invoice-edit.php"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                            Edit</a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="blank-page.php">
                    <i class="ri-checkbox-multiple-blank-line text-xl me-6 d-flex w-auto"></i>
                    <span>Blank Page</span>
                </a>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
                    <span>Settings</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="company.php"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                            Company</a>
                    </li>
                    <li>
                        <a href="notification.php"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                            Notification</a>
                    </li>
                    <li>
                        <a href="notification-alert.php"><i
                                class="ri-circle-fill circle-icon text-info-main w-auto"></i> Notification Alert</a>
                    </li>
                    <li>
                        <a href="theme.php"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                            Theme</a>
                    </li>
                    <li>
                        <a href="currencies.php"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                            Currencies</a>
                    </li>
                    <li>
                        <a href="language.php"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                            Languages</a>
                    </li>
                    <li>
                        <a href="payment-gateway.php"><i
                                class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Payment Gateway</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</aside>
