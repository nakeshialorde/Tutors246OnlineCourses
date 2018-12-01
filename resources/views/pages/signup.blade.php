<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Tutors246 Online Courses</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/docs/4.1/examples/pricing/pricing.css" rel="stylesheet">
</head>

<body>
<div class="content">

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Tutors246</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="http://tutors246.com/">Home</a>
        <a class="p-2 text-dark" href="http://tutors246.com/services.html">Services</a>
        <a class="p-2 text-dark" href="http://tutors246.com/earlychildhood.html">Resources</a>
        <a class="p-2 text-dark" href="https://tutors246.wordpress.com/">Blog</a>
    </nav>
    <a class="btn btn-outline-primary" href="http://tutors246.com/requestatutor.html">Contact Us</a>
</div>

    <div class="center"><center><h1>{{$title}}</h1></center></div>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Pricing</h1>
    <p class="lead">Select the course of your choice, click on check out, make payment and you will be redirected to our registration page. All our courses are currently CXC CSEC Courses but addtional courses for CAPE and Common Entrance are comming soon. </p>
</div>

<div class="container">
    <div class="card-deck mb-3 text-center">

        <?php if(!empty($response['code'])) { ?>
        <div class="alert alert-<?php echo $response['code']; ?>">
            <?php echo $response['message']; ?>
        </div>
        <?php } ?>

        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Mathematics</h4>
            </div>

            <div class="card-body">
                <h1 class="card-title pricing-card-title">$99 BDS</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li> Comprehensive coverage of syllabus</li>
                    <li>Progress Reports</li>
                    <li>Practice Tests and Past Papers</li>
                    <li>Access to tutors (terms and conditions apply)</li>
                </ul>
                <a class="btn btn-outline-primary" href="{{url('paypal/checkout')}}">Checkout</a>
            </div>
        </div>

        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">English A</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$99 BDS</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li> Comprehensive coverage of syllabus</li>
                    <li>Progress Reports</li>
                    <li>Practice Tests and Past Papers</li>
                    <li>Access to tutors (terms and conditions apply)</li>
                </ul>
                <a class="btn btn-outline-primary" href="{{url('paypal/checkout')}}">Checkout</a>
            </div>
        </div>

        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Social Studies </h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$99 BDS</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li> Comprehensive coverage of syllabus</li>
                    <li>Progress Reports</li>
                    <li>Practice Tests and Past Papers</li>
                    <li>Access to tutors (terms and conditions apply)</li>
                </ul>
                <a class="btn btn-outline-primary" href="{{url('paypal/checkout')}}">Checkout</a>
            </div>
        </div>
    </div>

    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">POB</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$99 BDS</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li> Comprehensive coverage of syllabus</li>
                    <li>Progress Reports</li>
                    <li>Practice Tests and Past Papers</li>
                    <li>Access to tutors (terms and conditions apply)</li>
                </ul>
                <a class="btn btn-outline-primary" href="{{url('paypal/checkout')}}">Checkout</a>
            </div>
        </div>

        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">POA</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$99 BDS</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li> Comprehensive coverage of syllabus</li>
                    <li>Progress Reports</li>
                    <li>Practice Tests and Past Papers</li>
                    <li>Access to tutors (terms and conditions apply)</li>
                </ul>
                <a class="btn btn-outline-primary" href="{{url('paypal/checkout')}}">Checkout</a>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });
    </script>
</body>
</html>