<html>

<head>
    <title>Broadband Connection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css" />
    <!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles"> -->
    <style>
        table {
            padding: 10px;
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
    <div class="container">
    <div id='loader'></div>
        <!-- <div class="page-controls-section mt-4">
            <a class="btn btn-secondary" href="/">Add</a>
            <a class="btn btn-light active" href="javascript:void(0)">View</a>
        </div> -->
        <div class="page-controls-section mt-4" style='float: right;'>
            <!-- <a class="btn btn-success" href="export">Excel</a> -->
            <a class="btn btn-danger" href="pdfex">PDF</a>
        </div>
        <div style="border:1px solid #dedbd5; border-top:none">
            <!-- <p class=text-primary>{{isset($message)?$message:''}}</p> -->
            <center>
                <h4 class="float-none w-auto text-primary p-2">Employee Salary Details</h4>
            </center>

            <!-- <div style="margin-left:1000px ;">
                <a href="export" class="btn btn-success">
                Excel
                </a>
                <a href="export" class="btn btn-success">
                    PDF
                </a>
            </div> -->

            <br>
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>EmpId</th>
                        <th>Name</th>
                        <th>Month/Year</th>
                        <th>Basic Sal</th>
                        <th>HRA</th>
                        <th>DA</th>
                        <th>TA</th>
                        <th>PF</th>
                        <th>Net Sal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sl = 1;
                    foreach ($regDetails as $value) { ?>
                        <tr>
                            <td>{{$sl++}}</td>
                            <td>{{$value->emp_id}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->month}}</td>
                            <td>{{$value->basic_salary}}</td>
                            <td>{{$value->hra}}</td>
                            <td>{{$value->da}}</td>
                            <td>{{$value->ta}}</td>
                            <td>{{$value->pf}}</td>
                            <td>{{$value->net_salary}}</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('asset/js/alert.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "lengthMenu": [
                    [5, 5, 10, -1],
                    [5, 5, 10, "All"]
                ], //"lengthMenu": [ [2, 4, 8, -1], [2, 4, 8, "All"] ],
            });
        });
    </script>
  
</body>

<footer class="col-md-3 mx-auto">
    <!-- © 2022. CSM Pvt Ltd. All Rights Reserved -->
</footer>

<html>

<!-- var phoneno = /^\d{10}$/;
var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/; -->