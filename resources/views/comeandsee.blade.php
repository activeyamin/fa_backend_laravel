
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/fa_inter_logo.png">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <title>FA international</title>
</head>
<!-- ========== Start Section come and see content ========== -->
<section id="come_and_see_main_item">
    <div class="container">
        <div class="come_see_contents">
            <h3 class="mb-3">404</h3>
            <h4 class="mb-3">Sorry About That</h4>
            <h5 class="mb-3">The page you’re looking for is busy studying in Sydney</h5>
            <button class="btn btn-outline-success mt-4">
                <a class="text-white" href="{{ url('/') }}">Go Home</a>
            </button>
            <button class="btn btn-outline-success mt-4">
                <a class="text-white" href="{{ route('findcourse') }}">Find a Courses</a>
            </button>
        </div>
    </div>
</section>
<!-- ========== end Section come and see content ========== -->

<!-- ========== Start Section js ========== -->
<script src="{{ asset('frontend_assets') }}/js/jquery-1.12.4.min.js"></script>
<script src="{{ asset('frontend_assets') }}/js/bootstrap.bundle.min.js"></script>
<!-- ========== End Section js ========== -->
</body>

</html>
