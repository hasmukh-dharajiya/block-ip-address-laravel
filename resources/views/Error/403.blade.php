
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- PAGE TITLE HERE -->
    <title>403 Error Page</title>

    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
            h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
            color: #3d4465;
        }
        .h-100 {
            height: 100% !important;
        }
        .align-items-center {
            align-items: center !important;
        }

        .justify-content-center {
            justify-content: center !important;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col-md-5 {
            flex: 0 0 41.6666666667%;
            max-width: 41.6666666667%;
        }
        .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto, .col-xxl-1, .col-xxl-2, .col-xxl-3, .col-xxl-4, .col-xxl-5, .col-xxl-6, .col-xxl-7, .col-xxl-8, .col-xxl-9, .col-xxl-10, .col-xxl-11, .col-xxl-12, .col-xxl, .col-xxl-auto {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }
        .text-center {
            text-align: center !important;
        }
        .error-page .error-text {
            font-size: 150px;
            line-height: 1;
        }

        .font-weight-bold {
            font-weight: 700 !important;
        }
        .error-page h4 {
            font-size: 40px;
            margin-bottom: 5px;
        }
        .text-danger {
            color: #f25767 !important;
        }


        .h-100 {
            height: 100% !important;
        }
        body {
            overflow-x: hidden;
            height: 100%;
            position: relative;
            max-width: 100%;
        }
        body {
            margin: 0;
            font-family: "Roboto", sans-serif;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1.5;
            color: #89879f;
            text-align: left;
            background-color: #ebeef6;
        }
        .mb-2 {
            margin-bottom: 0.5rem !important;
        }
        .img-fluid {
            max-width: 100%;
            height: auto;
        }
        img, svg {
            vertical-align: middle;
        }
    </style>

</head>
<body class="h-100">
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-5">
                <div class="form-input-content text-center error-page">
                    <img src="{{ asset('img/403.jpg') }}" class="img-fluid mb-2"/>
                    <h4>Forbidden Error!</h4>
                    <p>You do not have permission to view this resource.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
