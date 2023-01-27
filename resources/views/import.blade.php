<html>

<head>
    <title>Broadband Connection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles"> -->
    <style>
        .error {
            color: red;
        }

        p {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        .red {
            color: red;
            font-weight: bold;
        }

        #loader {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.75) url("public/uploads/loder.gif") no-repeat center center;
            z-index: 99999;
        }
    </style>


</head>

<body>
    <div class="container">
        <div id='loader'></div>
        <div class="page-controls-section mt-4">
            <!-- <div class="nav-item nav-link nav-fill">
                <a class="btn btn-light active" href="javascript:void(0);">Add</a>
                <a class="btn btn-secondary" href="/view">View</a>

            </div> -->
            <div style="border:1px solid #dedbd5; border-top:none">
                <center>
                    <h4 class="float-none w-auto text-primary p-2">Pay-Slip Generator</h4>
                </center>
                <form action="importFile" id="res" method="post" class="p-3" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="serviceProvider" class="form-label">Upload Pay Slip</label>
                                <sapn class="red">*</span>
                                    <input type="file" name="file" class="form">
                                    <input type="submit">
                            </div>
                            
                        </div>
                     
                    </div>
                
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script> -->
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="{{asset('asset/js/alert.js') }}"></script>