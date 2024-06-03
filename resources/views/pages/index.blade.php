@extends('layout.apppage')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <div class="empty-content text-center">
                    <img src="assets/img/404.png" alt="logo" class="img-fluid">
                    <h2>Page not found</h2>
                    <p>Oops! looks like you followed a bad link. If you think this is a problem with us, please
                        tell us.</p>
                    <div class="btn-item">
                        <a class="btn get-btn" href="index.html">Go To Home <i class="feather-arrow-right ms-2"></i></a>
                        <a class="btn courses-btn" href="javascript:void(0);">Back <i
                                class="feather-arrow-right ms-2"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
