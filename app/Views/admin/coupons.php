<?php
require_once __DIR__ . '/inc/header.php';

?>

<div id="top" class="sa-app__body">
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container">
            <div class="py-5">
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <nav class="mb-2" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-sa-simple">
                                <li class="breadcrumb-item"><a href="<?php url('') ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Coupons</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">Coupons</h1>
                    </div>
                    <div class="col-auto d-flex"><a href="app-coupon.html" class="btn btn-primary">New coupon</a></div>
                </div>
            </div>
            <div class="card">
                <div class="p-4"><input type="text" placeholder="Start typing to search for coupons"
                        class="form-control form-control--search mx-auto" id="table-search" /></div>
                <div class="sa-divider"></div>
                <table class="sa-datatables-init text-nowrap" data-order="[[ 1, &quot;asc&quot; ]]"
                    data-sa-search-input="#table-search">
                    <thead>
                        <tr>
                            <th class="w-min" data-orderable="false"><input type="checkbox"
                                    class="form-check-input m-0 fs-exact-16 d-block" aria-label="..." /></th>
                            <th>Code</th>
                            <th>Type</th>
                            <th>Discount</th>
                            <th>Status</th>
                            <th>Start date</th>
                            <th>End date</th>
                            <th class="w-min" data-orderable="false"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td><a href="app-coupon.html" class="text-reset">NEWYEAR</a></td>
                            <td>Percentage</td>
                            <td>10%</td>
                            <td>
                                <div class="d-flex fs-16">
                                    <div class="badge badge-sa-pill badge-sa-primary">Planned</div>
                                </div>
                            </td>
                            <td>2021-01-01 00:00</td>
                            <td>2021-01-10 00:00</td>
                            <td>
                                <div class="dropdown"><button class="btn btn-sa-muted btn-sm" type="button"
                                        id="coupon-context-menu-0" data-bs-toggle="dropdown" aria-expanded="false"
                                        aria-label="More"><svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg></button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="coupon-context-menu-0">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td><a href="app-coupon.html" class="text-reset">REDPARTS24</a></td>
                            <td>Fixed amount</td>
                            <td>$10.00</td>
                            <td>
                                <div class="d-flex fs-16">
                                    <div class="badge badge-sa-pill badge-sa-success">Enabled</div>
                                </div>
                            </td>
                            <td>2020-10-19 00:00</td>
                            <td>
                                <div class="sa-dash"></div>
                            </td>
                            <td>
                                <div class="dropdown"><button class="btn btn-sa-muted btn-sm" type="button"
                                        id="coupon-context-menu-1" data-bs-toggle="dropdown" aria-expanded="false"
                                        aria-label="More"><svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg></button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="coupon-context-menu-1">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td><a href="app-coupon.html" class="text-reset">FIVESTARS</a></td>
                            <td>Fixed amount</td>
                            <td>$5.55</td>
                            <td>
                                <div class="d-flex fs-16">
                                    <div class="badge badge-sa-pill badge-sa-success">Enabled</div>
                                </div>
                            </td>
                            <td>2020-05-05 00:00</td>
                            <td>2020-06-05 00:00</td>
                            <td>
                                <div class="dropdown"><button class="btn btn-sa-muted btn-sm" type="button"
                                        id="coupon-context-menu-2" data-bs-toggle="dropdown" aria-expanded="false"
                                        aria-label="More"><svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg></button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="coupon-context-menu-2">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td><a href="app-coupon.html" class="text-reset">PROMO78</a></td>
                            <td>Fixed amount</td>
                            <td>$50.00</td>
                            <td>
                                <div class="d-flex fs-16">
                                    <div class="badge badge-sa-pill badge-sa-info">Finished</div>
                                </div>
                            </td>
                            <td>2020-01-01 12:00</td>
                            <td>2020-02-01 12:00</td>
                            <td>
                                <div class="dropdown"><button class="btn btn-sa-muted btn-sm" type="button"
                                        id="coupon-context-menu-3" data-bs-toggle="dropdown" aria-expanded="false"
                                        aria-label="More"><svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg></button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="coupon-context-menu-3">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td><a href="app-coupon.html" class="text-reset">LATROP2</a></td>
                            <td>Percentage</td>
                            <td>15%</td>
                            <td>
                                <div class="d-flex fs-16">
                                    <div class="badge badge-sa-pill badge-sa-info">Finished</div>
                                </div>
                            </td>
                            <td>2019-12-05 12:00</td>
                            <td>2019-12-15 12:00</td>
                            <td>
                                <div class="dropdown"><button class="btn btn-sa-muted btn-sm" type="button"
                                        id="coupon-context-menu-4" data-bs-toggle="dropdown" aria-expanded="false"
                                        aria-label="More"><svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg></button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="coupon-context-menu-4">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td><a href="app-coupon.html" class="text-reset">STROYKASTART</a></td>
                            <td>Fixed amount</td>
                            <td>$15.00</td>
                            <td>
                                <div class="d-flex fs-16">
                                    <div class="badge badge-sa-pill badge-sa-info">Finished</div>
                                </div>
                            </td>
                            <td>2019-02-19 10:00</td>
                            <td>2019-02-29 10:00</td>
                            <td>
                                <div class="dropdown"><button class="btn btn-sa-muted btn-sm" type="button"
                                        id="coupon-context-menu-5" data-bs-toggle="dropdown" aria-expanded="false"
                                        aria-label="More"><svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg></button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="coupon-context-menu-5">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td><a href="app-coupon.html" class="text-reset">ANNIVERSARY70</a></td>
                            <td>Percentage</td>
                            <td>25%</td>
                            <td>
                                <div class="d-flex fs-16">
                                    <div class="badge badge-sa-pill badge-sa-info">Finished</div>
                                </div>
                            </td>
                            <td>2015-05-09 00:00</td>
                            <td>2015-05-19 00:00</td>
                            <td>
                                <div class="dropdown"><button class="btn btn-sa-muted btn-sm" type="button"
                                        id="coupon-context-menu-6" data-bs-toggle="dropdown" aria-expanded="false"
                                        aria-label="More"><svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg></button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="coupon-context-menu-6">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td><a href="app-coupon.html" class="text-reset">AUTHORKOS</a></td>
                            <td>Percentage</td>
                            <td>50%</td>
                            <td>
                                <div class="d-flex fs-16">
                                    <div class="badge badge-sa-pill badge-sa-info">Finished</div>
                                </div>
                            </td>
                            <td>2014-03-12 00:00</td>
                            <td>2014-03-17 00:00</td>
                            <td>
                                <div class="dropdown"><button class="btn btn-sa-muted btn-sm" type="button"
                                        id="coupon-context-menu-7" data-bs-toggle="dropdown" aria-expanded="false"
                                        aria-label="More"><svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg></button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="coupon-context-menu-7">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td><a href="app-coupon.html" class="text-reset">BESTRONG</a></td>
                            <td>Percentage</td>
                            <td>10%</td>
                            <td>
                                <div class="d-flex fs-16">
                                    <div class="badge badge-sa-pill badge-sa-info">Finished</div>
                                </div>
                            </td>
                            <td>2013-01-01 00:00</td>
                            <td>2013-01-31 00:00</td>
                            <td>
                                <div class="dropdown"><button class="btn btn-sa-muted btn-sm" type="button"
                                        id="coupon-context-menu-8" data-bs-toggle="dropdown" aria-expanded="false"
                                        aria-label="More"><svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg></button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="coupon-context-menu-8">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td><a href="app-coupon.html" class="text-reset">LUCKYDAY</a></td>
                            <td>Fixed amount</td>
                            <td>$100.00</td>
                            <td>
                                <div class="d-flex fs-16">
                                    <div class="badge badge-sa-pill badge-sa-primary">Planned</div>
                                </div>
                            </td>
                            <td>2022-02-01 00:00</td>
                            <td>2022-03-01 00:00</td>
                            <td>
                                <div class="dropdown"><button class="btn btn-sa-muted btn-sm" type="button"
                                        id="coupon-context-menu-9" data-bs-toggle="dropdown" aria-expanded="false"
                                        aria-label="More"><svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg></button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="coupon-context-menu-9">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td><a href="app-coupon.html" class="text-reset">UNKNOWN</a></td>
                            <td>Percentage</td>
                            <td>$100.00</td>
                            <td>
                                <div class="d-flex fs-16">
                                    <div class="badge badge-sa-pill badge-sa-primary">Planned</div>
                                </div>
                            </td>
                            <td>2021-11-08 10:00</td>
                            <td>
                                <div class="sa-dash"></div>
                            </td>
                            <td>
                                <div class="dropdown"><button class="btn btn-sa-muted btn-sm" type="button"
                                        id="coupon-context-menu-10" data-bs-toggle="dropdown" aria-expanded="false"
                                        aria-label="More"><svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg></button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="coupon-context-menu-10">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td><a href="app-coupon.html" class="text-reset">REBEKKA</a></td>
                            <td>Percentage</td>
                            <td>10%</td>
                            <td>
                                <div class="d-flex fs-16">
                                    <div class="badge badge-sa-pill badge-sa-primary">Planned</div>
                                </div>
                            </td>
                            <td>2021-11-08 10:00</td>
                            <td>
                                <div class="sa-dash"></div>
                            </td>
                            <td>
                                <div class="dropdown"><button class="btn btn-sa-muted btn-sm" type="button"
                                        id="coupon-context-menu-11" data-bs-toggle="dropdown" aria-expanded="false"
                                        aria-label="More"><svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg></button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="coupon-context-menu-11">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- sa-app__body / end -->
<!-- sa-app__footer -->
<?php
require_once __DIR__ . '/inc/footer.php';
?>