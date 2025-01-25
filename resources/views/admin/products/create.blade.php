@extends('admin.layouts.master')

@section('content')
    <div class="dashboard-main-body">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
            <h6 class="fw-semibold mb-0">Create Product</h6>
            <ul class="d-flex align-items-center gap-2">
                <li class="fw-medium">
                    <a href="index.php" class="d-flex align-items-center gap-1 hover-text-primary">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                        Dashboard
                    </a>
                </li>
                <li>-</li>
                <li class="fw-medium"> Product / Create Product</li>
            </ul>


        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">


                    <!-- Form Wizard Start -->
                    <div class="form-wizard">
                        <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data">

                            @csrf

                            <div class="form-wizard-header overflow-x-auto scroll-sm pb-8 my-32">
                                <ul class="list-unstyled form-wizard-list">
                                    <li class="form-wizard-list__item active">
                                        <div class="form-wizard-list__line">
                                            <span class="count">1</span>
                                        </div>
                                        <span class="text text-xs fw-semibold">Product Information</span>
                                    </li>
                                    <li class="form-wizard-list__item">
                                        <div class="form-wizard-list__line">
                                            <span class="count">2</span>
                                        </div>
                                        <span class="text text-xs fw-semibold">Pricing</span>
                                    </li>
                                    <li class="form-wizard-list__item">
                                        <div class="form-wizard-list__line">
                                            <span class="count">3</span>
                                        </div>
                                        <span class="text text-xs fw-semibold">Stock</span>
                                    </li>
                                    <li class="form-wizard-list__item">
                                        <div class="form-wizard-list__line">
                                            <span class="count">4</span>
                                        </div>
                                        <span class="text text-xs fw-semibold">Product Image</span>
                                    </li>
                                    <li class="form-wizard-list__item">
                                        <div class="form-wizard-list__line">
                                            <span class="count">5</span>
                                        </div>
                                        <span class="text text-xs fw-semibold">Completed</span>
                                    </li>

                                </ul>
                            </div>

                            <!-- Step 1: Product Information -->
                            <fieldset class="wizard-fieldset show">
                                <h6 class="text-md text-neutral-500">Product Details</h6>
                                <div class="row gy-3">
                                    <div class="col-sm-6">
                                        <label class="form-label">Product Code*</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control wizard-required" name="code"
                                                placeholder="Enter code" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label">Product Name*</label>
                                        <div class="position-relative">
                                            <input type="text" id="product_name" name="name"
                                                class="form-control wizard-required" placeholder="Enter Product Name"
                                                required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label">Category*</label>
                                        <div class="position-relative">
                                            <select class="form-control wizard-required" name="product_category_id"
                                                required>
                                                <option value="">Select Product Category</option>
                                                @if ($productCategories->count() > 0)
                                                    @foreach ($productCategories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label">Unit of Measurement*</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control wizard-required"
                                                name="unit_measurement" placeholder="Enter Unit (e.g., kg, liter, piece)"
                                                required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Description*</label>
                                        <div class="position-relative">
                                            <textarea class="form-control wizard-required" name="description" placeholder="Enter Product Description"></textarea>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="form-group text-end">
                                        <button type="button"
                                            class="form-wizard-next-btn btn btn-primary-800 text-sm rounded-pill px-32">Next</button>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 2: Pricing & Stock -->
                            <fieldset class="wizard-fieldset">
                                <h6 class="text-md text-neutral-500">Pricing </h6>
                                <div class="row gy-3">
                                    <div class="col-sm-6">
                                        <label class="form-label">Price*</label>
                                        <div class="position-relative">
                                            <input type="number" class="form-control wizard-required" name="price"
                                                placeholder="Enter Price" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Cost Price*</label>
                                        <div class="position-relative">
                                            <input type="number" class="form-control wizard-required" name="sales_price"
                                                placeholder="Enter Cost Price" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>

                                    <div class="form-group d-flex align-items-center justify-content-end gap-8">
                                        <button type="button"
                                            class="form-wizard-previous-btn btn btn-neutral-400  text-sm rounded-pill   border-neutral-100 px-32">Back</button>
                                        <button type="button"
                                            class="form-wizard-next-btn btn btn-primary-800  text-sm rounded-pill px-32">Next</button>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 3: Packaging & Expiry -->
                            <fieldset class="wizard-fieldset">
                                <h6 class="text-md text-neutral-500">Stock</h6>
                                <div class="row gy-3">

                                    <div class="col-6">
                                        <label class="form-label">Stock Quantity*</label>
                                        <div class="position-relative">
                                            <input type="number" class="form-control wizard-required" name="stock_qty"
                                                placeholder="Enter Stock Quantity" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Reorder Level*</label>
                                        <div class="position-relative">
                                            <input type="number" class="form-control wizard-required" name="threshold"
                                                placeholder="Enter Reorder Level" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-end gap-8">
                                        <button type="button"
                                            class="form-wizard-previous-btn btn btn-neutral-400  text-sm rounded-pill   border-neutral-100 px-32">Back</button>
                                        <button type="button"
                                            class="form-wizard-next-btn btn btn-primary-800  text-sm rounded-pill px-32">Next</button>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 4: Product Image -->
                            <fieldset class="wizard-fieldset">
                                <h6 class="text-md text-neutral-500">Product Image</h6>
                                <div class="row gy-3">
                                    <div class="col-12">
                                        <label class="form-label">Product Image*</label>
                                        <div class="position-relative">
                                            <input type="file" class="form-control wizard-required" name="image">
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-end gap-8">
                                        <button type="button"
                                            class="form-wizard-previous-btn btn btn-neutral-800  text-sm rounded-pill text-black  border-neutral-100 px-32">Back</button>
                                        <button type="button"
                                            class="form-wizard-next-btn btn btn-primary-800  text-sm rounded-pill px-32">Next</button>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 5: Completed -->
                            <fieldset class="wizard-fieldset">
                                <div class="text-center mb-40">
                                    <img src="assets/images/gif/success-img3.gif" alt="" class="gif-image mb-24">
                                    <h6 class="text-md text-neutral-600">Congratulations</h6>
                                    <p class="text-neutral-400 text-sm mb-0">Well done! You have successfully
                                        completed.</p>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-end gap-8">
                                    <button type="button"
                                        class="form-wizard-previous-btn btn btn-neutral-800  text-sm rounded-pill text-black border-neutral-100 px-32">Back</button>
                                    <button type="submit"
                                        class="form-wizard-submit btn btn-primary-600 px-32">Publish</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>

                    <!-- Form Wizard End -->
                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        // =============================== Wizard Step Js Start ================================
        $(document).ready(function() {
            // click on next button
            $('.form-wizard-next-btn').on("click", function() {
                var parentFieldset = $(this).parents('.wizard-fieldset');
                var currentActiveStep = $(this).parents('.form-wizard').find('.form-wizard-list .active');
                var next = $(this);
                var nextWizardStep = true;
                parentFieldset.find('.wizard-required').each(function() {
                    var thisValue = $(this).val();

                    if (thisValue == "") {
                        $(this).siblings(".wizard-form-error").show();
                        nextWizardStep = false;
                    } else {
                        $(this).siblings(".wizard-form-error").hide();
                    }
                });
                if (nextWizardStep) {
                    next.parents('.wizard-fieldset').removeClass("show", "400");
                    currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',
                        "400");
                    next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show", "400");
                    $(document).find('.wizard-fieldset').each(function() {
                        if ($(this).hasClass('show')) {
                            var formAtrr = $(this).attr('data-tab-content');
                            $(document).find('.form-wizard-list .form-wizard-step-item').each(
                                function() {
                                    if ($(this).attr('data-attr') == formAtrr) {
                                        $(this).addClass('active');
                                        var innerWidth = $(this).innerWidth();
                                        var position = $(this).position();
                                        $(document).find('.form-wizard-step-move').css({
                                            "left": position.left,
                                            "width": innerWidth
                                        });
                                    } else {
                                        $(this).removeClass('active');
                                    }
                                });
                        }
                    });
                }
            });
            //click on previous button
            $('.form-wizard-previous-btn').on("click", function() {
                var counter = parseInt($(".wizard-counter").text());;
                var prev = $(this);
                var currentActiveStep = $(this).parents('.form-wizard').find('.form-wizard-list .active');
                prev.parents('.wizard-fieldset').removeClass("show", "400");
                prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show", "400");
                currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',
                    "400");
                $(document).find('.wizard-fieldset').each(function() {
                    if ($(this).hasClass('show')) {
                        var formAtrr = $(this).attr('data-tab-content');
                        $(document).find('.form-wizard-list .form-wizard-step-item').each(
                            function() {
                                if ($(this).attr('data-attr') == formAtrr) {
                                    $(this).addClass('active');
                                    var innerWidth = $(this).innerWidth();
                                    var position = $(this).position();
                                    $(document).find('.form-wizard-step-move').css({
                                        "left": position.left,
                                        "width": innerWidth
                                    });
                                } else {
                                    $(this).removeClass('active');
                                }
                            });
                    }
                });
            });
            //click on form submit button
            $(document).on("click", ".form-wizard .form-wizard-submit", function() {
                var parentFieldset = $(this).parents('.wizard-fieldset');
                var currentActiveStep = $(this).parents('.form-wizard').find('.form-wizard-list .active');
                parentFieldset.find('.wizard-required').each(function() {
                    var thisValue = $(this).val();
                    if (thisValue == "") {
                        $(this).siblings(".wizard-form-error").show();
                    } else {
                        $(this).siblings(".wizard-form-error").hide();
                    }
                });
            });
            // focus on input field check empty or not
            $(".form-control").on('focus', function() {
                var tmpThis = $(this).val();
                if (tmpThis == '') {
                    $(this).parent().addClass("focus-input");
                } else if (tmpThis != '') {
                    $(this).parent().addClass("focus-input");
                }
            }).on('blur', function() {
                var tmpThis = $(this).val();
                if (tmpThis == '') {
                    $(this).parent().removeClass("focus-input");
                    $(this).siblings(".wizard-form-error").show();
                } else if (tmpThis != '') {
                    $(this).parent().addClass("focus-input");
                    $(this).siblings(".wizard-form-error").hide();
                }
            });
        });
        // =============================== Wizard Step Js End ================================
    </script>

    <script>
        //===================================Unsaved warning =============================

        const beforeUnloadHandler = (event) => {
            event.preventDefault();
            // Included for legacy support, e.g. Chrome/Edge < 119
            event.returnValue = true;
        };
        const nameInput = document.querySelector("#product_name");
        nameInput.addEventListener("input", (event) => {
            if (event.target.value !== "") {
                window.addEventListener("beforeunload", beforeUnloadHandler);
            } else {
                window.removeEventListener("beforeunload", beforeUnloadHandler);
            }
        });
    </script>
@endpush
