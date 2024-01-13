<?php
require_once __DIR__ . '/inc/header.php';

?>

<div id="top" class="sa-app__body">
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container container--max--xl">
            <div class="py-5">
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <nav class="mb-2" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-sa-simple">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="app-coupons-list.html">Coupons</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Coupon</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">Edit Coupon</h1>
                    </div>
                    <div class="col-auto d-flex"><a href="#" class="btn btn-secondary me-3">Delete</a><a href="#"
                            class="btn btn-primary">Edit</a></div>
                </div>
            </div>
            <div class="sa-entity-layout"
                data-sa-container-query="{&quot;920&quot;:&quot;sa-entity-layout--size--md&quot;,&quot;1100&quot;:&quot;sa-entity-layout--size--lg&quot;}">
                <div class="sa-entity-layout__body">
                    <div class="sa-entity-layout__main">
                        <div class="card">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <h2 class="mb-0 fs-exact-18">Basic information</h2>
                                </div>
                                <div class="mb-4"><label for="form-coupon/code" class="form-label">Code</label><input
                                        type="text" class="form-control" id="form-coupon/code" placeholder="QWERTY12" />
                                </div>
                                <div class="mb-4">
                                    <div class="form-label mb-3">Type</div><label class="form-check"><input type="radio"
                                            class="form-check-input" name="type" checked="" /><span
                                            class="form-check-label">Percentage</span></label><label
                                        class="form-check"><input type="radio" class="form-check-input"
                                            name="type" /><span class="form-check-label">Fixed amount</span></label>
                                    <label class="form-check mb-0"><input type="radio" class="form-check-input"
                                            name="type" /><span class="form-check-label">Free shipping</span></label>
                                </div>
                                <div class="mb-4"><label for="form-coupon/value" class="form-label">Discount
                                        value</label><input type="text" class="form-control" id="form-coupon/value"
                                        value="$10.00" /></div>
                                <div class="mb-4"><label for="form-coupon/limit" class="form-label">Usage
                                        limit</label><input type="text" class="form-control" id="form-coupon/limit"
                                        value="100" /></div>
                                <div class="mb-n2 pt-2"><label class="form-check"><input type="checkbox"
                                            class="form-check-input" name="type" /><span class="form-check-label">Only
                                            for registered customers</span></label></div>
                            </div>
                        </div>
                    </div>
                    <div class="sa-entity-layout__sidebar">
                        <div class="card w-100">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <h2 class="mb-0 fs-exact-18">Status</h2>
                                </div>
                                <div class="mb-n2 mt-n3"><label class="form-check"><input type="radio"
                                            class="form-check-input" name="status" checked="" /><span
                                            class="form-check-label">Enabled</span></label><label
                                        class="form-check mb-0"><input type="radio" class="form-check-input"
                                            name="status" /><span class="form-check-label">Disabled</span></label></div>
                            </div>
                        </div>
                        <div class="card w-100 mt-5">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <h2 class="mb-0 fs-exact-18">Schedule</h2>
                                    <div class="mt-3 text-muted">Use these settings to limit the coupon expiration date.
                                    </div>
                                </div>
                                <div class="mb-4"><label for="form-coupon/start-date" class="form-label">Start
                                        date</label><input type="text" class="form-control datepicker-here"
                                        id="form-coupon/start-date" data-auto-close="true" data-language="en" /></div>
                                <div><label for="form-coupon/end-date" class="form-label">End date</label><input
                                        type="text" class="form-control datepicker-here" id="form-coupon/end-date"
                                        data-auto-close="true" data-language="en" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- sa-app__body / end -->
<!-- sa-app__footer -->
<?php
require_once __DIR__ . '/inc/footer.php';
?>