<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Quick Quiz Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://mediacity.co.in/quickquiz/public/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://mediacity.co.in/quickquiz/public/css/ionicons.min.css">
  <!-- Admin Theme style -->
  <link rel="stylesheet" href="https://mediacity.co.in/quickquiz/public/css/AdminLTE.css">
  <link rel="stylesheet" href="https://mediacity.co.in/quickquiz/public/css/skin-black.css">
  <!-- Select 2 -->
  <link rel="stylesheet" href="https://mediacity.co.in/quickquiz/public/css/select2.min.css">
  <!-- DataTable -->
  <link rel="stylesheet" href="https://mediacity.co.in/quickquiz/public/css/datatables.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
  @include('inc.navbar')
  @extends('layouts.app')


   <h1><center>{{$title}}</center></h1>

   <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
     <div class="my-3 py-3">
       <h2 class="display-5"></h2>
       <p class="lead">And an even wittier subheading.</p>
     </div>
     <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
   </div>
 </div>

 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Students Report By Topic Wise

    </h1>
  </section>
  <!-- Main content -->
  <section class="content container-fluid">
      <div class="row">
                <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">HTML Quiz</h3>
          <p title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin condimentum mauris dui, vel sagittis nisi elementum ut.">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin condimentum mauris dui, vel sagittis nisi elementum ut.
          </p>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>1</li>
                <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     10
                </li>
                <li>
                  10
                </li>
                <li>
                  15 minutes
                </li>
              </ul>
            </div>
          </div>
          <a href="https://mediacity.co.in/quickquiz/public/admin/all_reports/1" class="btn btn-wave">Show Report</a>
        </div>
      </div>
            <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">CSS Quiz</h3>
          <p title="Integer finibus ultricies ex in maximus. Duis nibh odio, condimentum eget est non, congue vestibulum leo. Vivamus sodales est diam.">
            Integer finibus ultricies ex in maximus. Duis nibh odio, condimentum eget est non, congue vestibulum leo. Vivamus sodale...
          </p>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>2</li>
                <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      10
                </li>
                <li>
                  5
                </li>
                <li>
                  10 minutes
                </li>
              </ul>
            </div>
          </div>
          <a href="https://mediacity.co.in/quickquiz/public/admin/all_reports/2" class="btn btn-wave">Show Report</a>
        </div>
      </div>
            <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">JS Test</h3>
          <p title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin condimentum mauris dui, vel sagittis nisi elementum ut.">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin condimentum mauris dui, vel sagittis nisi elementum ut.
          </p>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>5</li>
                <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        20
                </li>
                <li>
                  4
                </li>
                <li>
                  20 minutes
                </li>
              </ul>
            </div>
          </div>
          <a href="https://mediacity.co.in/quickquiz/public/admin/all_reports/3" class="btn btn-wave">Show Report</a>
        </div>
      </div>


            <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">Css</h3>
          <p title="">

          </p>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>1</li>
                <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                0
                </li>
                <li>
                  0
                </li>
                <li>
                  5 minutes
                </li>
              </ul>
            </div>
          </div>
          <a href="https://mediacity.co.in/quickquiz/public/admin/all_reports/5" class="btn btn-wave">Show Report</a>
        </div>
      </div>
            <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">Gangster</h3>
          <p title="Gangdt3r">
            Gangdt3r
          </p>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>2</li>
                <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                0
                </li>
                <li>
                  0
                </li>
                <li>
                  30 minutes
                </li>
              </ul>
            </div>
          </div>
          <a href="https://mediacity.co.in/quickquiz/public/admin/all_reports/6" class="btn btn-wave">Show Report</a>
        </div>
      </div>
            <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">Contoh Project</h3>
          <p title="">

          </p>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>4</li>
                <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              4
                </li>
                <li>
                  1
                </li>
                <li>
                  10 minutes
                </li>
              </ul>
            </div>
          </div>
          <a href="https://mediacity.co.in/quickquiz/public/admin/all_reports/7" class="btn btn-wave">Show Report</a>
        </div>
      </div>

            <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">compagnes</h3>
          <p title="">

          </p>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>6</li>
                <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                0
                </li>
                <li>
                  0
                </li>
                <li>
                  2 minutes
                </li>
              </ul>
            </div>
          </div>
          <a href="https://mediacity.co.in/quickquiz/public/admin/all_reports/9" class="btn btn-wave">Show Report</a>
        </div>
      </div>
            <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">IBH</h3>
          <p title="">

          </p>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>2</li>
                <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                0
                </li>
                <li>
                  0
                </li>
                <li>
                  3 minutes
                </li>
              </ul>
            </div>
          </div>
          <a href="https://mediacity.co.in/quickquiz/public/admin/all_reports/10" class="btn btn-wave">Show Report</a>
        </div>
      </div>
            <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">Mans tests</h3>
          <p title="">

          </p>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>1</li>
                <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            2
                </li>
                <li>
                  2
                </li>
                <li>
                   minutes
                </li>
              </ul>
            </div>
          </div>
          <a href="https://mediacity.co.in/quickquiz/public/admin/all_reports/11" class="btn btn-wave">Show Report</a>
        </div>
      </div>
            <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">eloquent</h3>
          <p title="">

          </p>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>15</li>
                <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                0
                </li>
                <li>
                  0
                </li>
                <li>
                   minutes
                </li>
              </ul>
            </div>
          </div>
          <a href="https://mediacity.co.in/quickquiz/public/admin/all_reports/13" class="btn btn-wave">Show Report</a>
        </div>
      </div>
          </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- /.content-wrapper -->
 <!-- Main Footer -->

</div>
<!-- ./wrapper -->
<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="https://mediacity.co.in/quickquiz/public/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://mediacity.co.in/quickquiz/public/js/bootstrap.min.js"></script>
<!-- DataTable -->
<script src="https://mediacity.co.in/quickquiz/public/js/datatables.min.js"></script>
<!-- Select2 -->
<script src="https://mediacity.co.in/quickquiz/public/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="https://mediacity.co.in/quickquiz/public/js/adminlte.min.js"></script>
<script>
 $(function () {
   $( document ).ready(function() {
      $('.sessionmodal').addClass("active");
      setTimeout(function() {
          $('.sessionmodal').removeClass("active");
     }, 4500);
   });

   $('#example1').DataTable({
     "sDom": "<'row'><'row'<'col-md-4'l><'col-md-4'B><'col-md-4'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
     buttons: [
           {
              extend: 'print',
              exportOptions: {
                  columns: ':visible'
              }
           },
           'csvHtml5',
           'excelHtml5',
           'colvis',
         ]
   });

   $('#questions_table').DataTable({
     "sDom": "<'row'><'row'<'col-md-4'l><'col-md-4'B><'col-md-4'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
     buttons: [
       {
          extend: 'print',
          exportOptions: {
              columns: ':visible'
          }
       },
       'csvHtml5',
       'excelHtml5',
       'colvis',
     ],
     columnDefs: [
       { targets: [7,8,9,10], visible: false},
     ]
   });

   $('#search').DataTable({
     'paging'      : false,
     'lengthChange': false,
     'searching'   : true,
     'ordering'    : false,
     'info'        : false,
     'autoWidth'   : true,
     "sDom": "<'row'><'row'<'col-md-4'B><'col-md-8'f>r>t<'row'>",
     buttons: [
           {
              extend: 'print',
              exportOptions: {
                  columns: ':visible'
              }
           },
           'excelHtml5',
           'csvHtml5',
           'colvis',
         ]
   });

   $('#topTable').DataTable({
     "order": [[ 5, "desc" ]],
     "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]],
     "sDom": "<'row'><'row'<'col-md-4'l><'col-md-4'B><'col-md-4'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
     buttons: [
           {
              extend: 'print',
              exportOptions: {
                  columns: ':visible'
              }
           },
           'excelHtml5',
           'csvHtml5',
           'colvis',
         ]
   });
   //Initialize Select2 Elements
   $('.select2').select2()
 });
</script>
</body>
</html>
