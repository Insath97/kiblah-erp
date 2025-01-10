@extends('admin.layouts.master')

@section('content')
    <div class="dashboard-main-body">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
            <h6 class="fw-semibold mb-0">Dashboard</h6>
            <ul class="d-flex align-items-center gap-2">
                <li class="fw-medium">
                    <a href="index.php" class="d-flex align-items-center gap-1 hover-text-primary">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                        Dashboard
                    </a>
                </li>
                <li>-</li>
                <li class="fw-medium">Kiblah ERP</li>
            </ul>
        </div>
        <div class="row gy-4">
            <div class="col-xxl-9">
                <div class="card radius-8 border-0">
                    <div class="row">
                        <div class="col-xxl-6 pe-xxl-0">
                            <div class="card-body p-24">
                                <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                                    <h6 class="mb-2 fw-bold text-lg">Revenue Report</h6>
                                    <div class="">
                                        <select
                                            class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                                            <option>Yearly</option>
                                            <option>Monthly</option>
                                            <option>Weekly</option>
                                            <option>Today</option>
                                        </select>
                                    </div>
                                </div>
                                <ul class="d-flex flex-wrap align-items-center mt-3 gap-3">
                                    <li class="d-flex align-items-center gap-2">
                                        <span class="w-12-px h-12-px radius-2 bg-primary-600"></span>
                                        <span class="text-secondary-light text-sm fw-semibold">Earning:
                                            <span class="text-primary-light fw-bold">$500,00,000.00</span>
                                        </span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2">
                                        <span class="w-12-px h-12-px radius-2 bg-yellow"></span>
                                        <span class="text-secondary-light text-sm fw-semibold">Expense:
                                            <span class="text-primary-light fw-bold">$20,000.00</span>
                                        </span>
                                    </li>
                                </ul>
                                <div class="mt-40">
                                    <div id="paymentStatusChart" class="margin-16-minus"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div class="row h-100 g-0">
                                <div class="col-6 p-0 m-0">
                                    <div
                                        class="card-body p-24 h-100 d-flex flex-column justify-content-center border border-top-0">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">
                                            <div>
                                                <span
                                                    class="mb-12 w-44-px h-44-px text-primary-600 bg-primary-light border border-primary-light-white flex-shrink-0 d-flex justify-content-center align-items-center radius-8 h6 mb-12">
                                                    <iconify-icon icon="fa-solid:box-open" class="icon"></iconify-icon>
                                                </span>
                                                <span class="mb-1 fw-medium text-secondary-light text-md">Total
                                                    Products</span>
                                                <h6 class="fw-semibold text-primary-light mb-1">300</h6>
                                            </div>
                                        </div>
                                        <p class="text-sm mb-0">Increase by <span
                                                class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm">+200</span>
                                            this week</p>
                                    </div>
                                </div>
                                <div class="col-6 p-0 m-0">
                                    <div
                                        class="card-body p-24 h-100 d-flex flex-column justify-content-center border border-top-0 border-start-0 border-end-0">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">
                                            <div>
                                                <span
                                                    class="mb-12 w-44-px h-44-px text-yellow bg-yellow-light border border-yellow-light-white flex-shrink-0 d-flex justify-content-center align-items-center radius-8 h6 mb-12">
                                                    <iconify-icon icon="flowbite:users-group-solid"
                                                        class="icon"></iconify-icon>
                                                </span>
                                                <span class="mb-1 fw-medium text-secondary-light text-md">Total
                                                    Customer</span>
                                                <h6 class="fw-semibold text-primary-light mb-1">50,000</h6>
                                            </div>
                                        </div>
                                        <p class="text-sm mb-0">Increase by <span
                                                class="bg-danger-focus px-1 rounded-2 fw-medium text-danger-main text-sm">-5k</span>
                                            this week</p>
                                    </div>
                                </div>
                                <div class="col-6 p-0 m-0">
                                    <div
                                        class="card-body p-24 h-100 d-flex flex-column justify-content-center border border-top-0 border-bottom-0">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">
                                            <div>
                                                <span
                                                    class="mb-12 w-44-px h-44-px text-lilac bg-lilac-light border border-lilac-light-white flex-shrink-0 d-flex justify-content-center align-items-center radius-8 h6 mb-12">
                                                    <iconify-icon icon="majesticons:shopping-cart"
                                                        class="icon"></iconify-icon>
                                                </span>
                                                <span class="mb-1 fw-medium text-secondary-light text-md">Total
                                                    Orders</span>
                                                <h6 class="fw-semibold text-primary-light mb-1">1500</h6>
                                            </div>
                                        </div>
                                        <p class="text-sm mb-0">Increase by <span
                                                class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm">+1k</span>
                                            this week</p>
                                    </div>
                                </div>
                                <div class="col-6 p-0 m-0">
                                    <div
                                        class="card-body p-24 h-100 d-flex flex-column justify-content-center border border-top-0 border-start-0 border-end-0 border-bottom-0">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">
                                            <div>
                                                <span
                                                    class="mb-12 w-44-px h-44-px text-pink bg-pink-light border border-pink-light-white flex-shrink-0 d-flex justify-content-center align-items-center radius-8 h6 mb-12">
                                                    <iconify-icon icon="ri:discount-percent-fill"
                                                        class="icon"></iconify-icon>
                                                </span>
                                                <span class="mb-1 fw-medium text-secondary-light text-md">Total Sales</span>
                                                <h6 class="fw-semibold text-primary-light mb-1">$25,00,000.00</h6>
                                            </div>
                                        </div>
                                        <p class="text-sm mb-0">Increase by <span
                                                class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm">+$10k</span>
                                            this week</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6">
                <div class="card h-100 radius-8 border-0">
                    <div class="card-body p-24">
                        <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                            <h6 class="mb-2 fw-bold text-lg">Customers Statistics</h6>
                            <div class="">
                                <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                                    <option>Yearly</option>
                                    <option>Monthly</option>
                                    <option>Weekly</option>
                                    <option>Today</option>
                                </select>
                            </div>
                        </div>

                        <div class="position-relative">
                            <span
                                class="w-80-px h-80-px bg-base shadow text-primary-light fw-semibold text-xl d-flex justify-content-center align-items-center rounded-circle position-absolute end-0 top-0 z-1">+30%</span>
                            <div id="statisticsDonutChart"
                                class="mt-36 flex-grow-1 apexcharts-tooltip-z-none title-style circle-none"></div>
                            <span
                                class="w-80-px h-80-px bg-base shadow text-primary-light fw-semibold text-xl d-flex justify-content-center align-items-center rounded-circle position-absolute start-0 bottom-0 z-1">+25%</span>
                        </div>

                        <ul class="d-flex flex-wrap align-items-center justify-content-between mt-3 gap-3">
                            <li class="d-flex align-items-center gap-2">
                                <span class="w-12-px h-12-px radius-2 bg-primary-600"></span>
                                <span class="text-secondary-light text-sm fw-normal">Male:
                                    <span class="text-primary-light fw-bold">20,000</span>
                                </span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <span class="w-12-px h-12-px radius-2 bg-yellow"></span>
                                <span class="text-secondary-light text-sm fw-normal">Female:
                                    <span class="text-primary-light fw-bold">25,000</span>
                                </span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-xxl-9 col-lg-6">
                <div class="card h-100">
                    <div class="card-body p-24">
                        <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mb-20">
                            <h6 class="mb-2 fw-bold text-lg mb-0">Recent Orders</h6>
                            <a href="javascript:void(0)"
                                class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                                View All
                                <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                            </a>
                        </div>
                        <div class="table-responsive scroll-sm">
                            <table class="table bordered-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Users</th>
                                        <th scope="col">Invoice</th>
                                        <th scope="col">Items</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col" class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/users/user1.png" alt=""
                                                    class="flex-shrink-0 me-12 radius-8">
                                                <span class="text-lg text-secondary-light fw-semibold flex-grow-1">Dianne
                                                    Russell</span>
                                            </div>
                                        </td>
                                        <td>#6352148</td>
                                        <td>iPhone 14 max</td>
                                        <td>2</td>
                                        <td>$5,000.00</td>
                                        <td class="text-center"> <span
                                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/users/user2.png" alt=""
                                                    class="flex-shrink-0 me-12 radius-8">
                                                <span class="text-lg text-secondary-light fw-semibold flex-grow-1">Wade
                                                    Warren</span>
                                            </div>
                                        </td>
                                        <td>#6352148</td>
                                        <td>Laptop HPH </td>
                                        <td>3</td>
                                        <td>$1,000.00</td>
                                        <td class="text-center"> <span
                                                class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/users/user3.png" alt=""
                                                    class="flex-shrink-0 me-12 radius-8">
                                                <span class="text-lg text-secondary-light fw-semibold flex-grow-1">Albert
                                                    Flores</span>
                                            </div>
                                        </td>
                                        <td>#6352148</td>
                                        <td>Smart Watch </td>
                                        <td>7</td>
                                        <td>$1,000.00</td>
                                        <td class="text-center"> <span
                                                class="bg-info-focus text-info-main px-24 py-4 rounded-pill fw-medium text-sm">Shipped</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/users/user4.png" alt=""
                                                    class="flex-shrink-0 me-12 radius-8">
                                                <span class="text-lg text-secondary-light fw-semibold flex-grow-1">Bessie
                                                    Cooper</span>
                                            </div>
                                        </td>
                                        <td>#6352148</td>
                                        <td>Nike Air Shoe</td>
                                        <td>1</td>
                                        <td>$3,000.00</td>
                                        <td class="text-center"> <span
                                                class="bg-danger-focus text-danger-main px-24 py-4 rounded-pill fw-medium text-sm">Canceled</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/users/user5.png" alt=""
                                                    class="flex-shrink-0 me-12 radius-8">
                                                <span class="text-lg text-secondary-light fw-semibold flex-grow-1">Arlene
                                                    McCoy</span>
                                            </div>
                                        </td>
                                        <td>#6352148</td>
                                        <td>New Headphone </td>
                                        <td>5</td>
                                        <td>$4,000.00</td>
                                        <td class="text-center"> <span
                                                class="bg-danger-focus text-danger-main px-24 py-4 rounded-pill fw-medium text-sm">Canceled</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3">
                <div class="card h-100">

                    <div class="card-body">
                        <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                            <h6 class="mb-2 fw-bold text-lg">Transactions</h6>
                            <div class="">
                                <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                                    <option>This Month</option>
                                    <option>Last Month</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-32">
                            <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/payment/payment1.png" alt=""
                                        class="w-40-px h-40-px radius-8 flex-shrink-0">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-normal">Paytm</h6>
                                        <span class="text-sm text-secondary-light fw-normal">Starbucks</span>
                                    </div>
                                </div>
                                <span class="text-danger text-md fw-medium">-$20</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/payment/payment2.png" alt=""
                                        class="w-40-px h-40-px radius-8 flex-shrink-0">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-normal">PayPal</h6>
                                        <span class="text-sm text-secondary-light fw-normal">Client Payment</span>
                                    </div>
                                </div>
                                <span class="text-success-main text-md fw-medium">+$800</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/payment/payment3.png" alt=""
                                        class="w-40-px h-40-px radius-8 flex-shrink-0">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-normal">Stripe</h6>
                                        <span class="text-sm text-secondary-light fw-normal">Ordered iPhone 14</span>
                                    </div>
                                </div>
                                <span class="text-danger-main text-md fw-medium">-$300</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/payment/payment4.png" alt=""
                                        class="w-40-px h-40-px radius-8 flex-shrink-0">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-normal">Razorpay</h6>
                                        <span class="text-sm text-secondary-light fw-normal">Refund</span>
                                    </div>
                                </div>
                                <span class="text-success-main text-md fw-medium">+$500</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/payment/payment1.png" alt=""
                                        class="w-40-px h-40-px radius-8 flex-shrink-0">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-normal">Paytm</h6>
                                        <span class="text-sm text-secondary-light fw-normal">Starbucks</span>
                                    </div>
                                </div>
                                <span class="text-danger-main text-md fw-medium">-$1500</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/payment/payment3.png" alt=""
                                        class="w-40-px h-40-px radius-8 flex-shrink-0">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-normal">Stripe</h6>
                                        <span class="text-sm text-secondary-light fw-normal">Ordered iPhone 14</span>
                                    </div>
                                </div>
                                <span class="text-success-main text-md fw-medium">+$800</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="card h-100 radius-8 border">
                    <div class="card-body p-24">
                        <h6 class="mb-12 fw-bold text-lg mb-0">Recent Orders</h6>
                        <div class="d-flex align-items-center gap-2">
                            <h6 class="fw-semibold mb-0">$27,200</h6>
                            <p class="text-sm mb-0">
                                <span
                                    class="bg-success-focus border border-success px-8 py-2 rounded-pill fw-semibold text-success-main text-sm d-inline-flex align-items-center gap-1">
                                    10%
                                    <iconify-icon icon="iconamoon:arrow-up-2-fill" class="icon"></iconify-icon>
                                </span>
                                Increases
                            </p>
                        </div>
                        <div id="recent-orders" class="mt-28"></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6">
                <div class="card radius-8 border-0">

                    <div class="card-body">
                        <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                            <h6 class="mb-2 fw-bold text-lg">Distribution Maps</h6>
                            <div class="">
                                <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                                    <option>Yearly</option>
                                    <option>Monthly</option>
                                    <option>Weekly</option>
                                    <option>Today</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div id="world-map"></div>

                    <div class="card-body p-24 max-h-266-px scroll-sm overflow-y-auto">
                        <div class="">

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                                <div class="d-flex align-items-center w-100">
                                    <img src="assets/images/flags/flag1.png" alt=""
                                        class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                                    <div class="flex-grow-1">
                                        <h6 class="text-sm mb-0">USA</h6>
                                        <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 w-100">
                                    <div class="w-100 max-w-66 ms-auto">
                                        <div class="progress progress-sm rounded-pill" role="progressbar"
                                            aria-label="Success example" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar bg-primary-600 rounded-pill" style="width: 80%;">
                                            </div>
                                        </div>
                                    </div>
                                    <span class="text-secondary-light font-xs fw-semibold">80%</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                                <div class="d-flex align-items-center w-100">
                                    <img src="assets/images/flags/flag2.png" alt=""
                                        class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                                    <div class="flex-grow-1">
                                        <h6 class="text-sm mb-0">Japan</h6>
                                        <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 w-100">
                                    <div class="w-100 max-w-66 ms-auto">
                                        <div class="progress progress-sm rounded-pill" role="progressbar"
                                            aria-label="Success example" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar bg-orange rounded-pill" style="width: 60%;"></div>
                                        </div>
                                    </div>
                                    <span class="text-secondary-light font-xs fw-semibold">60%</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                                <div class="d-flex align-items-center w-100">
                                    <img src="assets/images/flags/flag3.png" alt=""
                                        class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                                    <div class="flex-grow-1">
                                        <h6 class="text-sm mb-0">France</h6>
                                        <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 w-100">
                                    <div class="w-100 max-w-66 ms-auto">
                                        <div class="progress progress-sm rounded-pill" role="progressbar"
                                            aria-label="Success example" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar bg-yellow rounded-pill" style="width: 49%;"></div>
                                        </div>
                                    </div>
                                    <span class="text-secondary-light font-xs fw-semibold">49%</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3">
                                <div class="d-flex align-items-center w-100">
                                    <img src="assets/images/flags/flag4.png" alt=""
                                        class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                                    <div class="flex-grow-1">
                                        <h6 class="text-sm mb-0">Germany</h6>
                                        <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 w-100">
                                    <div class="w-100 max-w-66 ms-auto">
                                        <div class="progress progress-sm rounded-pill" role="progressbar"
                                            aria-label="Success example" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar bg-success-main rounded-pill" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                    <span class="text-secondary-light font-xs fw-semibold">100%</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6">
                <div class="card h-100">

                    <div class="card-body">
                        <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mb-20">
                            <h6 class="mb-2 fw-bold text-lg mb-0">Top Customers</h6>
                            <a href="javascript:void(0)"
                                class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                                View All
                                <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                            </a>
                        </div>

                        <div class="mt-32">

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/users/user6.png" alt=""
                                        class="w-40-px h-40-px radius-8 flex-shrink-0">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-normal">Dianne Russell</h6>
                                        <span class="text-sm text-secondary-light fw-normal">017******58</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">Orders: 30</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/users/user1.png" alt=""
                                        class="w-40-px h-40-px radius-8 flex-shrink-0">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-normal">Wade Warren</h6>
                                        <span class="text-sm text-secondary-light fw-normal">017******58</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">Orders: 30</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/users/user2.png" alt=""
                                        class="w-40-px h-40-px radius-8 flex-shrink-0">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-normal">Albert Flores</h6>
                                        <span class="text-sm text-secondary-light fw-normal">017******58</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">Orders: 35</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/users/user3.png" alt=""
                                        class="w-40-px h-40-px radius-8 flex-shrink-0">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-normal">Bessie Cooper</h6>
                                        <span class="text-sm text-secondary-light fw-normal">017******58</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">Orders: 20</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/users/user4.png" alt=""
                                        class="w-40-px h-40-px radius-8 flex-shrink-0">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-normal">Arlene McCoy</h6>
                                        <span class="text-sm text-secondary-light fw-normal">017******58</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">Orders: 25</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/users/user6.png" alt=""
                                        class="w-40-px h-40-px radius-8 flex-shrink-0">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-normal">John Doe</h6>
                                        <span class="text-sm text-secondary-light fw-normal">017******58</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">Orders: 32</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card h-100">
                    <div class="card-body p-24">
                        <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mb-20">
                            <h6 class="mb-2 fw-bold text-lg mb-0">Top Selling Product</h6>
                            <a href="javascript:void(0)"
                                class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                                View All
                                <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                            </a>
                        </div>
                        <div class="table-responsive scroll-sm">
                            <table class="table bordered-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Items</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Discount </th>
                                        <th scope="col">Sold</th>
                                        <th scope="col" class="text-center">Total Orders</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/product/product-img1.png" alt=""
                                                    class="flex-shrink-0 me-12 radius-8 me-12">
                                                <div class="flex-grow-1">
                                                    <h6 class="text-md mb-0 fw-normal">Blue t-shirt</h6>
                                                    <span class="text-sm text-secondary-light fw-normal">Fashion</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$500.00</td>
                                        <td>15%</td>
                                        <td>300</td>
                                        <td class="text-center">
                                            <span
                                                class="bg-success-focus text-success-main px-32 py-4 rounded-pill fw-medium text-sm">70</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/product/product-img2.png" alt=""
                                                    class="flex-shrink-0 me-12 radius-8 me-12">
                                                <div class="flex-grow-1">
                                                    <h6 class="text-md mb-0 fw-normal">Nike Air Shoe</h6>
                                                    <span class="text-sm text-secondary-light fw-normal">Fashion</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$150.00</td>
                                        <td>N/A</td>
                                        <td>200</td>
                                        <td class="text-center">
                                            <span
                                                class="bg-success-focus text-success-main px-32 py-4 rounded-pill fw-medium text-sm">70</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/product/product-img3.png" alt=""
                                                    class="flex-shrink-0 me-12 radius-8 me-12">
                                                <div class="flex-grow-1">
                                                    <h6 class="text-md mb-0 fw-normal">Woman Dresses</h6>
                                                    <span class="text-sm text-secondary-light fw-normal">Fashion</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$300.00</td>
                                        <td>$50.00</td>
                                        <td>1500</td>
                                        <td class="text-center">
                                            <span
                                                class="bg-success-focus text-success-main px-32 py-4 rounded-pill fw-medium text-sm">70</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/product/product-img4.png" alt=""
                                                    class="flex-shrink-0 me-12 radius-8 me-12">
                                                <div class="flex-grow-1">
                                                    <h6 class="text-md mb-0 fw-normal">Smart Watch</h6>
                                                    <span class="text-sm text-secondary-light fw-normal">Fashion</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$400.00</td>
                                        <td>$50.00</td>
                                        <td>700</td>
                                        <td class="text-center">
                                            <span
                                                class="bg-success-focus text-success-main px-32 py-4 rounded-pill fw-medium text-sm">70</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/product/product-img5.png" alt=""
                                                    class="flex-shrink-0 me-12 radius-8 me-12">
                                                <div class="flex-grow-1">
                                                    <h6 class="text-md mb-0 fw-normal">Hoodie Rose</h6>
                                                    <span class="text-sm text-secondary-light fw-normal">Fashion</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$300.00</td>
                                        <td>25%</td>
                                        <td>500</td>
                                        <td class="text-center">
                                            <span
                                                class="bg-success-focus text-success-main px-32 py-4 rounded-pill fw-medium text-sm">70</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card h-100">
                    <div class="card-body p-24">
                        <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mb-20">
                            <h6 class="mb-2 fw-bold text-lg mb-0">Stock Report</h6>
                            <a href="javascript:void(0)"
                                class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                                View All
                                <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                            </a>
                        </div>
                        <div class="table-responsive scroll-sm">
                            <table class="table bordered-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Items</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">
                                            <div class="max-w-112 mx-auto">
                                                <span>Stock</span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nike Air Shoes</td>
                                        <td>$500.00</td>
                                        <td>
                                            <div class="max-w-112 mx-auto">
                                                <div class="w-100">
                                                    <div class="progress progress-sm rounded-pill" role="progressbar"
                                                        aria-label="Success example" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar bg-primary-600 rounded-pill"
                                                            style="width: 0%;"></div>
                                                    </div>
                                                </div>
                                                <span class="mt-12 text-secondary-light text-sm fw-medium">Out of
                                                    Stock</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nike Air Shoes</td>
                                        <td>$300.00</td>
                                        <td>
                                            <div class="max-w-112 mx-auto">
                                                <div class="w-100">
                                                    <div class="progress progress-sm rounded-pill" role="progressbar"
                                                        aria-label="Success example" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar bg-danger-main rounded-pill"
                                                            style="width: 40%;"></div>
                                                    </div>
                                                </div>
                                                <span class="mt-12 text-secondary-light text-sm fw-medium">18 Low
                                                    Stock</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nike Air Shoes</td>
                                        <td>$500.00</td>
                                        <td>
                                            <div class="max-w-112 mx-auto">
                                                <div class="w-100">
                                                    <div class="progress progress-sm rounded-pill" role="progressbar"
                                                        aria-label="Success example" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar bg-success-main rounded-pill"
                                                            style="width: 80%;"></div>
                                                    </div>
                                                </div>
                                                <span class="mt-12 text-secondary-light text-sm fw-medium">80 High
                                                    Stock</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nike Air Shoes</td>
                                        <td>$300.00</td>
                                        <td>
                                            <div class="max-w-112 mx-auto">
                                                <div class="w-100">
                                                    <div class="progress progress-sm rounded-pill" role="progressbar"
                                                        aria-label="Success example" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar bg-success-main rounded-pill"
                                                            style="width: 50%;"></div>
                                                    </div>
                                                </div>
                                                <span class="mt-12 text-secondary-light text-sm fw-medium">50 High
                                                    Stock</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nike Air Shoes</td>
                                        <td>$150.00</td>
                                        <td>
                                            <div class="max-w-112 mx-auto">
                                                <div class="w-100">
                                                    <div class="progress progress-sm rounded-pill" role="progressbar"
                                                        aria-label="Success example" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar bg-success-main rounded-pill"
                                                            style="width: 70%;"></div>
                                                    </div>
                                                </div>
                                                <span class="mt-12 text-secondary-light text-sm fw-medium">70 High
                                                    Stock</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // ================================ Recent Orders Chart Start ================================
        function createChartTwo(chartId, chartColor) {

            var options = {
                series: [{
                    name: 'This Day',
                    data: [18, 25, 20, 35, 25, 55, 45, 50, 40],
                }, ],
                chart: {
                    type: 'area',
                    width: '100%',
                    height: 360,
                    sparkline: {
                        enabled: false // Remove whitespace
                    },
                    toolbar: {
                        show: false
                    },
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 4,
                    colors: [chartColor],
                    lineCap: 'round'
                },
                grid: {
                    show: true,
                    borderColor: '#D1D5DB',
                    strokeDashArray: 1,
                    position: 'back',
                    xaxis: {
                        lines: {
                            show: false
                        }
                    },
                    yaxis: {
                        lines: {
                            show: true
                        }
                    },
                    row: {
                        colors: undefined,
                        opacity: 0.5
                    },
                    column: {
                        colors: undefined,
                        opacity: 0.5
                    },
                    padding: {
                        top: -30,
                        right: 0,
                        bottom: -10,
                        left: 0
                    },
                },
                fill: {
                    type: 'gradient',
                    colors: [chartColor], // Set the starting color (top color) here
                    gradient: {
                        shade: 'light', // Gradient shading type
                        type: 'vertical', // Gradient direction (vertical)
                        shadeIntensity: 0.5, // Intensity of the gradient shading
                        gradientToColors: [`${chartColor}00`], // Bottom gradient color (with transparency)
                        inverseColors: false, // Do not invert colors
                        opacityFrom: .6, // Starting opacity
                        opacityTo: 0.3, // Ending opacity
                        stops: [0, 100],
                    },
                },
                // Customize the circle marker color on hover
                markers: {
                    colors: [chartColor],
                    strokeWidth: 3,
                    size: 0,
                    hover: {
                        size: 10
                    }
                },
                xaxis: {
                    labels: {
                        show: false
                    },
                    categories: [`Jan`, `Feb`, `Mar`, `Apr`, `May`, `Jun`, `Jul`, `Aug`, `Sep`, `Oct`, `Nov`, `Dec`],
                    tooltip: {
                        enabled: false,
                    },
                    tooltip: {
                        enabled: false
                    },
                    labels: {
                        formatter: function(value) {
                            return value;
                        },
                        style: {
                            fontSize: "14px"
                        }
                    },
                },
                yaxis: {
                    labels: {
                        show: false
                    },
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                },
            };

            var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
            chart.render();
        }
        createChartTwo('recent-orders', '#487fff');
        // ================================ Recent Orders Chart End ================================

        // ================================ Custom Statistics Donut chart Start ================================
        var options = {
            series: [30, 25],
            colors: ['#FF9F29', '#487FFF'],
            labels: ['Female', 'Male'],
            legend: {
                show: false
            },
            chart: {
                type: 'donut',
                height: 230,
                sparkline: {
                    enabled: true // Remove whitespace
                },
                margin: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                }
            },
            stroke: {
                width: 0,
            },
            dataLabels: {
                enabled: false
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }],
        };

        var chart = new ApexCharts(document.querySelector("#statisticsDonutChart"), options);
        chart.render();
        // ================================ Custom Statistics Donut chart End ================================

        // ================================ Revenue Report Chart Start ================================
        var options = {
            series: [{
                name: 'Net Profit',
                data: [20000, 16000, 14000, 25000, 45000, 18000, 28000, 11000, 26000, 48000, 18000, 22000]
            }, {
                name: 'Revenue',
                data: [15000, 18000, 19000, 20000, 35000, 20000, 18000, 13000, 18000, 38000, 14000, 16000]
            }],
            colors: ['#487FFF', '#FF9F29'],
            labels: ['Active', 'New', 'Total'],
            legend: {
                show: false
            },
            chart: {
                type: 'bar',
                height: 250,
                toolbar: {
                    show: false
                },
            },
            grid: {
                show: true,
                borderColor: '#D1D5DB',
                strokeDashArray: 4, // Use a number for dashed style
                position: 'back',
            },
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    columnWidth: 10,
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            },
            yaxis: {
                categories: ['0', '5000', '10,000', '20,000', '30,000', '50,000', '60,000', '60,000', '70,000',
                    '80,000', '90,000', '100,000'
                ],
            },
            fill: {
                opacity: 1,
                width: 18,
            },
        };

        var chart = new ApexCharts(document.querySelector("#paymentStatusChart"), options);
        chart.render();
        // ================================ Revenue Report Chart End ================================

        // ================================ J Vector Map Start ================================
        $('#world-map').vectorMap({
            map: 'world_mill_en',
            backgroundColor: 'transparent',
            borderColor: '#fff',
            borderOpacity: 0.25,
            borderWidth: 0,
            color: '#000000',
            regionStyle: {
                initial: {
                    fill: '#D1D5DB'
                }
            },
            markerStyle: {
                initial: {
                    r: 5,
                    'fill': '#fff',
                    'fill-opacity': 1,
                    'stroke': '#000',
                    'stroke-width': 1,
                    'stroke-opacity': 0.4
                },
            },
            markers: [{
                    latLng: [35.8617, 104.1954],
                    name: 'China : 250'
                },

                {
                    latLng: [25.2744, 133.7751],
                    name: 'AustrCalia : 250'
                },

                {
                    latLng: [36.77, -119.41],
                    name: 'USA : 82%'
                },

                {
                    latLng: [55.37, -3.41],
                    name: 'UK   : 250'
                },

                {
                    latLng: [25.20, 55.27],
                    name: 'UAE : 250'
                }
            ],

            series: {
                regions: [{
                    values: {
                        "US": '#487FFF ',
                        "SA": '#FF9F29',
                        "AU": '#45B369',
                        "CN": '#F86624',
                        "GB": '#487FFF',
                    },
                    attribute: 'fill'
                }]
            },
            hoverOpacity: null,
            normalizeFunction: 'linear',
            zoomOnScroll: false,
            scaleColors: ['#000000', '#000000'],
            selectedColor: '#000000',
            selectedRegions: [],
            enableZoom: false,
            hoverColor: '#fff',
        });
        // ================================ J Vector Map End ================================
    </script>
@endpush
