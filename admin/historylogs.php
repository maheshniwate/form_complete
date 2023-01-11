<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Navbar & Tabs</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include("header.php")?>

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include("sidebar.php")?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-12">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Setting</a></li>
                <li class="breadcrumb-item active">Email&nbsp;</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">History Logs</h3>
              <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <button type="button" class="btn btn-info btn-sm" title="Export History Log" data-toggle="modal"
                      data-target="#export_history_log">
                      <i class="fa fa-history" aria-hidden="true"></i>
                      Export History Log </button>
                    <!-- <a class="nav-link active" href="https://zivaansolutions.com/apps/pro/currency/add" data-tt="tooltip" title="Click here to Export History Log">
                      <i class="fa fa-history mr-2"></i>Export History Log                    </a> -->
                  </li>
                </ul>
              </div>
            </div>
            <div class="card-body">
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length"
                          aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                          <option value="10">10</option>
                          <option value="15">15</option>
                          <option value="25">25</option>
                          <option value="35">35</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                          <option value="-1">All</option>
                        </select> entries</label></div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search"
                          class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                      aria-describedby="example1_info">
                      <thead>
                        <tr role="row">
                          <th width="15%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 93.1719px;">
                            User Name</th>
                          <th width="15%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 78.5px;">
                            Page(s)</th>
                          <th width="5%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 52.0938px;">
                            Action</th>
                          <th width="30%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 122.375px;">
                            Description</th>
                          <th width="35%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 809.859px;">
                            Data</th>
                          <th width="15%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 73.1719px;">
                            Date/Time</th>
                          <th width="10%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 107.391px;">IP
                            Address</th>
                          <th width="10%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 70.4062px;">
                            Reference</th>
                          <th width="10%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 58.8125px;">
                            Browser</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Quotation</td>
                          <td>
                            View </td>
                          <td>User has viewed list of quotation.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>17-05-2022 10:42:21</td>

                          <td>103.170.201.126</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/quotation/add" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/quotation/add">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Quotation</td>
                          <td>
                            View </td>
                          <td>User has viewed list of quotation.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>17-05-2022 10:41:52</td>

                          <td>103.170.201.126</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/supplier" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/supplier">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Supplier</td>
                          <td>
                            View </td>
                          <td>User has viewed list of supplier.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>17-05-2022 10:41:39</td>

                          <td>103.170.201.126</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/settings" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/settings">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Log</td>
                          <td>
                            View </td>
                          <td>User has viewed list of logs.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>17-05-2022 10:10:00</td>

                          <td>103.170.201.126</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/email_setup" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/email_setup">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Log</td>
                          <td>
                            View </td>
                          <td>User has viewed list of logs.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>16-05-2022 19:27:30</td>

                          <td>185.132.132.216</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/tax" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/tax">View</a>
                          </td>
                          <td>Firefox</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Expense</td>
                          <td>
                            View </td>
                          <td>User has viewed list of expense.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>16-05-2022 19:24:56</td>

                          <td>185.132.132.216</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/report/profit_and_loss" data-tt="tooltip"
                              title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/report/profit_and_loss">View</a>
                          </td>
                          <td>Firefox</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Log</td>
                          <td>
                            View </td>
                          <td>User has viewed list of logs.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>16-05-2022 19:22:16</td>

                          <td>185.132.132.216</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/bank_account" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/bank_account">View</a>
                          </td>
                          <td>Firefox</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Bank account</td>
                          <td>
                            View </td>
                          <td>User has viewed list of bank account.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>16-05-2022 19:22:06</td>

                          <td>185.132.132.216</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/auth/dashboard" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/auth/dashboard">View</a>
                          </td>
                          <td>Firefox</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Log</td>
                          <td>
                            View </td>
                          <td>User has viewed list of logs.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>16-05-2022 19:04:39</td>

                          <td>49.36.233.167</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/email_setup" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/email_setup">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Sale</td>
                          <td>
                            View </td>
                          <td>User has viewed list of sale.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>16-05-2022 18:54:48</td>

                          <td>49.36.233.167</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/quotation" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/quotation">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Quotation</td>
                          <td>
                            View </td>
                          <td>User has viewed list of quotation.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>16-05-2022 18:54:34</td>

                          <td>49.36.233.167</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/product" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/product">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Expense</td>
                          <td>
                            View </td>
                          <td>User has viewed list of expense.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>16-05-2022 18:42:37</td>

                          <td>49.36.233.167</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/sale/view/MzA=" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/sale/view/MzA=">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Transaction</td>
                          <td>
                            Created </td>
                          <td>Transaction entry of 1180 is successfully saved.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>16-05-2022 18:41:47</td>

                          <td>49.36.233.167</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/sale/view/MzA=" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/sale/view/MzA=">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Bank account</td>
                          <td>
                            View </td>
                          <td>User has viewed list of bank account.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>16-05-2022 08:37:05</td>

                          <td>102.89.32.20</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/gst_return" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/gst_return">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Bank account</td>
                          <td>
                            View </td>
                          <td>User has viewed list of bank account.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>16-05-2022 04:04:23</td>

                          <td>187.180.81.21</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/auth/dashboard" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/auth/dashboard">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Customer</td>
                          <td>
                            View </td>
                          <td>User has viewed list of customer.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>14-05-2022 18:15:26</td>

                          <td>49.36.214.200</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/gst_return" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/gst_return">View</a>
                          </td>
                          <td>Firefox</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Purchase return</td>
                          <td>
                            View </td>
                          <td>User has viewed list of purchase return.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>14-05-2022 18:12:16</td>

                          <td>49.36.214.200</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/auth/dashboard" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/auth/dashboard">View</a>
                          </td>
                          <td>Firefox</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Currency</td>
                          <td>
                            View </td>
                          <td>User has viewed list of currency.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>13-05-2022 14:06:48</td>

                          <td>203.194.101.12</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/application_settings" data-tt="tooltip"
                              title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/application_settings">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Sale</td>
                          <td>
                            View </td>
                          <td>User has viewed list of sale.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>13-05-2022 00:59:51</td>

                          <td>27.106.13.157</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/purchase" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/purchase">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Purchase</td>
                          <td>
                            View </td>
                          <td>User has viewed list of purchase.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>13-05-2022 00:58:55</td>

                          <td>27.106.13.157</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/purchase_return/add" data-tt="tooltip"
                              title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/purchase_return/add">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Purchase return</td>
                          <td>
                            View </td>
                          <td>User has viewed list of purchase return.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>13-05-2022 00:56:37</td>

                          <td>27.106.13.157</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/purchase" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/purchase">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Purchase</td>
                          <td>
                            Edited </td>
                          <td>Purchase (Reference No. -1652383510) is updated successfully.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>13-05-2022 00:56:30</td>

                          <td>27.106.13.157</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/purchase/edit/MzE=" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/purchase/edit/MzE=">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Purchase</td>
                          <td>
                            View </td>
                          <td>User has viewed list of purchase.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>13-05-2022 00:56:30</td>

                          <td>27.106.13.157</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/purchase/edit" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/purchase/edit">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Purchase</td>
                          <td>
                            View </td>
                          <td>User has viewed list of purchase.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>13-05-2022 00:55:11</td>

                          <td>27.106.13.157</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/purchase/add" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/purchase/add">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Purchase</td>
                          <td>
                            Created </td>
                          <td>purchase (Reference No. -1652383510) is added successfully.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>13-05-2022 00:55:10</td>

                          <td>27.106.13.157</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/purchase/add" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/purchase/add">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Purchase</td>
                          <td>
                            View </td>
                          <td>User has viewed list of purchase.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>13-05-2022 00:53:59</td>

                          <td>27.106.13.157</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/purchase_return/add" data-tt="tooltip"
                              title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/purchase_return/add">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Purchase return</td>
                          <td>
                            View </td>
                          <td>User has viewed list of purchase return.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>13-05-2022 00:51:05</td>

                          <td>27.106.13.157</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/purchase/add" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/purchase/add">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Purchase</td>
                          <td>
                            View </td>
                          <td>User has viewed list of purchase.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>13-05-2022 00:49:45</td>

                          <td>27.106.13.157</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/auth/dashboard" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/auth/dashboard">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Expense</td>
                          <td>
                            View </td>
                          <td>User has viewed list of expense.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>13-05-2022 00:46:13</td>

                          <td>27.106.13.157</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/auth/dashboard" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/auth/dashboard">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Bank account</td>
                          <td>
                            View </td>
                          <td>User has viewed list of bank account.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>12-05-2022 18:58:53</td>

                          <td>27.106.13.157</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/gst_return" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/gst_return">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Sale</td>
                          <td>
                            Edited </td>
                          <td>Sales (Reference No. -1652291285) is updated successfully.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 23:18:32</td>

                          <td>106.213.189.204</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/sale/edit/MzA=" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/sale/edit/MzA=">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Sale</td>
                          <td>
                            View </td>
                          <td>User has viewed list of sale.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 23:18:32</td>

                          <td>106.213.189.204</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/sale/edit" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/sale/edit">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Sale</td>
                          <td>
                            View </td>
                          <td>User has viewed list of sale.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 23:18:06</td>

                          <td>106.213.189.204</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/sale/add" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/sale/add">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Sale</td>
                          <td>
                            Created </td>
                          <td>Sales (Reference No. -1652291285) is added successfully.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 23:18:05</td>

                          <td>106.213.189.204</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/sale/add" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/sale/add">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Sale</td>
                          <td>
                            View </td>
                          <td>User has viewed list of sale.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 23:17:18</td>

                          <td>106.213.189.204</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/bank_account/add" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/bank_account/add">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Bank account</td>
                          <td>
                            View </td>
                          <td>User has viewed list of bank account.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 23:16:54</td>

                          <td>106.213.189.204</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/gst_return" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/gst_return">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Purchase</td>
                          <td>
                            View </td>
                          <td>User has viewed list of purchase.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 15:33:33</td>

                          <td>103.41.37.125</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/purchase" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/purchase">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Expense</td>
                          <td>
                            View </td>
                          <td>User has viewed list of expense.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 15:33:14</td>

                          <td>103.41.37.125</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/sale" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/sale">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Expense</td>
                          <td>
                            View </td>
                          <td>User has viewed list of expense.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 15:32:52</td>

                          <td>103.41.37.125</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/sale" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/sale">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Expense</td>
                          <td>
                            View </td>
                          <td>User has viewed list of expense.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 15:31:46</td>

                          <td>103.41.37.125</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/sale" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/sale">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Sale</td>
                          <td>
                            View </td>
                          <td>User has viewed list of sale.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 15:31:41</td>

                          <td>103.41.37.125</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/expense" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/expense">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Purchase</td>
                          <td>
                            View </td>
                          <td>User has viewed list of purchase.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 15:30:20</td>

                          <td>103.41.37.125</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/expense" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/expense">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Expense</td>
                          <td>
                            Created </td>
                          <td>Employee Benefits successfully added.</td>
                          <td style="text-align: left">


                            <table width="100%">
                              <tbody>
                                <tr>
                                  <th width="50%" style="text-align: center;border-bottom: 1px solid #ccc;">
                                    Before
                                  </th>
                                  <th width="50%"
                                    style="text-align: center;border-left: 1px solid #ccc;border-bottom: 1px solid #ccc;">
                                    After
                                  </th>
                                </tr>

                                <tr>
                                  <td>
                                    <table width="100%" style="padding-left: 5px;">
                                    </table>
                                  </td>
                                  <td style="border-left: 1px solid #ccc">
                                    <table width="100%" style="padding-left: 5px;">

                                      <tbody>
                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Supplier id </td>
                                          <td style="
                                                 
                                          ">
                                            torrent pharma </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Expense category id </td>
                                          <td style="
                                                 
                                          ">
                                            Employee Benefits </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Date </td>
                                          <td style="
                                                 
                                          ">
                                            11-05-2022 </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Amount </td>
                                          <td style="
                                                 
                                          ">
                                            100.00 </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Cgst </td>
                                          <td style="
                                                 
                                          ">
                                            0.00 </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Cgst tax </td>
                                          <td style="
                                                 
                                          ">
                                            0.00 </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Sgst </td>
                                          <td style="
                                                 
                                          ">
                                            0.00 </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Sgst tax </td>
                                          <td style="
                                                 
                                          ">
                                            0.00 </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Igst </td>
                                          <td style="
                                                 
                                          ">
                                            0.00 </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Igst tax </td>
                                          <td style="
                                                 
                                          ">
                                            0.00 </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Total amount </td>
                                          <td style="
                                                 
                                          ">
                                            100.00 </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Remarks </td>
                                          <td style="
                                                 
                                          ">
                                            5+65 </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Document </td>
                                          <td style="
                                                 
                                          ">
                                          </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Itc </td>
                                          <td style="
                                                 
                                          ">
                                            0 </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Created date </td>
                                          <td style="
                                                 
                                          ">
                                            11-05-2022 15:29:31 </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Company name </td>
                                          <td style="
                                                 
                                          ">
                                            torrent pharma </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Expense category name </td>
                                          <td style="
                                                 
                                          ">
                                            Employee Benefits </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Gst registration type </td>
                                          <td style="
                                                 
                                          ">
                                            0 </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Supplier state id </td>
                                          <td style="
                                                 
                                          ">
                                            12 </td>
                                        </tr>


                                        <tr style="border-bottom: 1px solid #DCDCDC">
                                          <td style="padding-left: 5px;">
                                            Supplier company name </td>
                                          <td style="
                                                 
                                          ">
                                            torrent pharma </td>
                                        </tr>

                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>

                          </td>
                          <td>11-05-2022 15:29:31</td>

                          <td>103.41.37.125</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/expense/add" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/expense/add">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Expense</td>
                          <td>
                            View </td>
                          <td>User has viewed list of expense.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 15:29:31</td>

                          <td>103.41.37.125</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/expense/add" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/expense/add">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Expense</td>
                          <td>
                            View </td>
                          <td>User has viewed list of expense.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 15:28:57</td>

                          <td>103.41.37.125</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/auth/dashboard" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/auth/dashboard">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Sale</td>
                          <td>
                            View </td>
                          <td>User has viewed list of sale.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 14:20:46</td>

                          <td>103.41.37.125</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/supplier/add" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/supplier/add">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Sale</td>
                          <td>
                            View </td>
                          <td>User has viewed list of sale.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 14:20:11</td>

                          <td>103.41.37.125</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/supplier/add" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/supplier/add">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Supplier</td>
                          <td>
                            View </td>
                          <td>User has viewed list of supplier.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 14:19:52</td>

                          <td>103.41.37.125</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td>A Solutions</td>
                          <td>Bank account</td>
                          <td>
                            View </td>
                          <td>User has viewed list of bank account.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 14:15:31</td>

                          <td>103.41.37.125</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/auth/dashboard" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/auth/dashboard">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                        <tr role="row" class="even">
                          <td>A Solutions</td>
                          <td>Currency</td>
                          <td>
                            View </td>
                          <td>User has viewed list of currency.</td>
                          <td style="text-align: left">


                            null

                          </td>
                          <td>11-05-2022 08:20:08</td>

                          <td>103.120.51.142</td>
                          <td>

                            <a href="https://zivaansolutions.com/apps/pro/email_setup" data-tt="tooltip" title=""
                              data-original-title="https://zivaansolutions.com/apps/pro/email_setup">View</a>
                          </td>
                          <td>Chrome</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th width="15%" rowspan="1" colspan="1">User Name</th>
                          <th width="15%" rowspan="1" colspan="1">Page(s)</th>
                          <th width="5%" rowspan="1" colspan="1">Action</th>
                          <th width="30%" rowspan="1" colspan="1">Description</th>
                          <th width="35%" rowspan="1" colspan="1">Data</th>
                          <th width="15%" rowspan="1" colspan="1">Date/Time</th>
                          <th width="10%" rowspan="1" colspan="1">IP Address</th>
                          <th width="10%" rowspan="1" colspan="1">Reference</th>
                          <th width="10%" rowspan="1" colspan="1">Browser</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 50 of
                      2,531 entries</div>
                  </div>
                  <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                      <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#"
                            aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="example1"
                            data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2"
                            tabindex="0" class="page-link">2</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3"
                            tabindex="0" class="page-link">3</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4"
                            tabindex="0" class="page-link">4</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5"
                            tabindex="0" class="page-link">5</a></li>
                        <li class="paginate_button page-item disabled" id="example1_ellipsis"><a href="#"
                            aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">…</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="7"
                            tabindex="0" class="page-link">51</a></li>
                        <li class="paginate_button page-item next" id="example1_next"><a href="#"
                            aria-controls="example1" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->

        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include("footer.php")?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>

</html>
