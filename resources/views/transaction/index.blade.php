@extends('layout.app')

@section('content')
<div class="content report-box container-fluid">

    <div class="page-header subscribe-head border-bottom-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Transactions</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Transactions</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="subscribe-employe users-list">
                <ul>
                    <li class="active"><a href="transaction.html">All Transaction </a></li>
                    <li><a href="transaction-deposit.html">Deposit</a></li>
                    <li><a href="transaction-withdraw.html">Withdraw</a></li>
                    <li><a href="transaction-pending.html">Pending</a></li>
                    <li><a href="transaction-onhold.html">Onhold</a></li>
                    <li><a href="transaction-completed.html">Completed</a></li>
                </ul>
            </div>

            <div class="page-header user-active">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">All Transaction</h3>
                        <p>Total <span>57</span> Transaction</p>
                    </div>
                    <div class="col-auto">
                        <a href="javascript:void(0);" class="btn export-btn me-1">
                            <img src="assets2/img/export.svg" alt="Img"> Export
                        </a>
                        <a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
                            <i class="fas fa-filter"></i>
                        </a>
                    </div>
                </div>
            </div>


            <div class="card filter-card" id="filter_inputs">
                <div class="card-body pb-0">
                    <form action="#" method="post">
                        <div class="row filter-row">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Expertise</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block"
                                        type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-center table-hover mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input"
                                                id="select-all">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </th>
                                    <th>Order</th>
                                    <th>User</th>
                                    <th>Details</th>
                                    <th>Tnx By</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td>#14586414</td>
                                    <td>
                                        <div class="table-avatar user-profile">
                                            <a href="profile.html"><img class="avatar-img rounded-circle "
                                                    src="assets2/img/profiles/avatar-14.jpg"
                                                    alt="User Image"></a>
                                            <div>
                                                <h5><a href="javascript:void(0);">Janet Paden</a></h5>
                                                <p> <a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="e780828895808290828b8b94a7829f868a978b82c984888a">[email&#160;protected]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5>Withdraw Funds</h5>
                                                <p> Aug 21, 2022</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="content-user">
                                        <p>PayPal</p>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5 class="text-danger">- 4,165,000 USD</h5>
                                                <p> Balance : 6,335.006 USD</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);"
                                            class="user-active-btn">Completed</a>
                                    </td>
                                    <td class="text-end three-dots">
                                        <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                            data-bs-toggle="dropdown"><i
                                                class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu user-menu-list">
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                data-bs-toggle="modal"
                                                data-bs-target="#transaction-category"><img class="me-2 "
                                                    src="assets2/img/icon/icon-01.svg" alt="Img"> View
                                                Details</a>
                                            <a class="dropdown-item" href="user-profile.html"><img
                                                    class="me-2 " src="assets2/img/icon/icon-05.svg"
                                                    alt="Img"> User Profile</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets2/img/icon/icon-06.svg"
                                                    alt="Img"> Approve</a>
                                            <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets2/img/icon/icon-07.svg"
                                                    alt="Img"> Reject </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td>#44586414</td>
                                    <td>
                                        <div class="table-avatar user-profile">
                                            <a href="profile.html"><img class="avatar-img rounded-circle "
                                                    src="assets2/img/profiles/avatar-15.jpg"
                                                    alt="User Image"></a>
                                            <div>
                                                <h5><a href="profile.html">Floyd Lewis</a></h5>
                                                <p> <a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="3f595350465b535a48564c7f5a475e524f535a115c5052">[email&#160;protected]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5>Deposit Funds</h5>
                                                <p> Apr 18, 2022</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="content-user">
                                        <p>PayPal</p>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5 class="text-success">+ 6,335.006 USD</h5>
                                                <p> Balance : 6,335.006 USD</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="pending">Pending</a>
                                    </td>
                                    <td class="text-end three-dots">
                                        <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                            data-bs-toggle="dropdown"><i
                                                class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu user-menu-list">
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                data-bs-toggle="modal"
                                                data-bs-target="#transaction-category"><img class="me-2 "
                                                    src="assets2/img/icon/icon-01.svg" alt="Img"> View
                                                Details</a>
                                            <a class="dropdown-item" href="user-profile.html"><img
                                                    class="me-2 " src="assets2/img/icon/icon-05.svg"
                                                    alt="Img"> User Profile</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets2/img/icon/icon-06.svg"
                                                    alt="Img"> Approve</a>
                                            <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets2/img/icon/icon-07.svg"
                                                    alt="Img"> Reject </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td>#84586414</td>
                                    <td>
                                        <div class="table-avatar user-profile">
                                            <a href="profile.html"><img class="avatar-img rounded-circle "
                                                    src="assets2/img/profiles/avatar-16.jpg"
                                                    alt="User Image"></a>
                                            <div>
                                                <h5><a href="profile.html">Andrew Glover</a></h5>
                                                <p><a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="eeaf808a9c8b99898281988b9cae8b968f839e828bc08d8183">[email&#160;protected]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5>Withdraw Funds</h5>
                                                <p> Apr 26, 2022</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="content-user">
                                        <p>Bank Transfer</p>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5 class="text-danger">- 1,165,000 USD</h5>
                                                <p> Balance : 6,335.006 USD</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="text-danger"> Cancelled</a>
                                    </td>
                                    <td class="text-end three-dots">
                                        <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                            data-bs-toggle="dropdown"><i
                                                class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu user-menu-list">
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                data-bs-toggle="modal"
                                                data-bs-target="#transaction-category"><img class="me-2 "
                                                    src="assets2/img/icon/icon-01.svg" alt="Img"> View
                                                Details</a>
                                            <a class="dropdown-item" href="user-profile.html"><img
                                                    class="me-2 " src="assets2/img/icon/icon-05.svg"
                                                    alt="Img"> User Profile</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets2/img/icon/icon-06.svg"
                                                    alt="Img"> Approve</a>
                                            <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets2/img/icon/icon-07.svg"
                                                    alt="Img"> Reject </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td>#14586414</td>
                                    <td>
                                        <div class="table-avatar user-profile">
                                            <a href="profile.html"><img class="avatar-img rounded-circle "
                                                    src="assets2/img/profiles/avatar-14.jpg"
                                                    alt="User Image"></a>
                                            <div>
                                                <h5><a href="javascript:void(0);">Janet Paden</a></h5>
                                                <p> <a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="f790929885909280929b9b84b7928f969a879b92d994989a">[email&#160;protected]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5>Withdraw Funds</h5>
                                                <p> Aug 21, 2022</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="content-user">
                                        <p>PayPal</p>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5 class="text-danger">- 4,165,000 USD</h5>
                                                <p> Balance : 6,335.006 USD</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);"
                                            class="user-active-btn">Completed</a>
                                    </td>
                                    <td class="text-end three-dots">
                                        <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                            data-bs-toggle="dropdown"><i
                                                class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu user-menu-list">
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                data-bs-toggle="modal"
                                                data-bs-target="#transaction-category"><img class="me-2 "
                                                    src="assets2/img/icon/icon-01.svg" alt="Img"> View
                                                Details</a>
                                            <a class="dropdown-item" href="user-profile.html"><img
                                                    class="me-2 " src="assets2/img/icon/icon-05.svg"
                                                    alt="Img"> User Profile</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets2/img/icon/icon-06.svg"
                                                    alt="Img"> Approve</a>
                                            <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets2/img/icon/icon-07.svg"
                                                    alt="Img"> Reject </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td>#44586414</td>
                                    <td>
                                        <div class="table-avatar user-profile">
                                            <a href="profile.html"><img class="avatar-img rounded-circle "
                                                    src="assets2/img/profiles/avatar-15.jpg"
                                                    alt="User Image"></a>
                                            <div>
                                                <h5><a href="profile.html">Floyd Lewis</a></h5>
                                                <p> <a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="ccaaa0a3b5a8a0a9bba5bf8ca9b4ada1bca0a9e2afa3a1">[email&#160;protected]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5>Deposit Funds</h5>
                                                <p> Jun 19, 2022</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="content-user">
                                        <p>PayPal</p>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5 class="text-success">+ 6,335.006 USD</h5>
                                                <p> Balance : 6,335.006 USD</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="pending">Pending</a>
                                    </td>
                                    <td class="text-end three-dots">
                                        <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                            data-bs-toggle="dropdown"><i
                                                class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu user-menu-list">
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                data-bs-toggle="modal"
                                                data-bs-target="#transaction-category"><img class="me-2 "
                                                    src="assets2/img/icon/icon-01.svg" alt="Img"> View
                                                Details</a>
                                            <a class="dropdown-item" href="user-profile.html"><img
                                                    class="me-2 " src="assets2/img/icon/icon-05.svg"
                                                    alt="Img"> User Profile</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets2/img/icon/icon-06.svg"
                                                    alt="Img"> Approve</a>
                                            <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets2/img/icon/icon-07.svg"
                                                    alt="Img"> Reject </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td>#34586414</td>
                                    <td>
                                        <div class="table-avatar user-profile">
                                            <a href="profile.html"><img class="avatar-img rounded-circle "
                                                    src="assets2/img/profiles/avatar-16.jpg"
                                                    alt="User Image"></a>
                                            <div>
                                                <h5><a href="profile.html">Andrew Glover</a></h5>
                                                <p><a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="3a7b545e485f4d5d56554c5f487a5f425b574a565f14595557">[email&#160;protected]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5>Withdraw Funds</h5>
                                                <p> Apr 26, 2022</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="content-user">
                                        <p>Bank Transfer</p>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5 class="text-danger">- 1,165,000 USD</h5>
                                                <p> Balance : 6,335.006 USD</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="text-danger"> Cancelled</a>
                                    </td>
                                    <td class="text-end three-dots">
                                        <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                            data-bs-toggle="dropdown"><i
                                                class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu user-menu-list">
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                data-bs-toggle="modal"
                                                data-bs-target="#transaction-category"><img class="me-2 "
                                                    src="assets2/img/icon/icon-01.svg" alt="Img"> View
                                                Details</a>
                                            <a class="dropdown-item" href="user-profile.html"><img
                                                    class="me-2 " src="assets2/img/icon/icon-05.svg"
                                                    alt="Img"> User Profile</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets2/img/icon/icon-06.svg"
                                                    alt="Img"> Approve</a>
                                            <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets2/img/icon/icon-07.svg"
                                                    alt="Img"> Reject </a>
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
