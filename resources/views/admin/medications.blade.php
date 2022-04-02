<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>medications</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>

    <div class="left-side-bar">
		<div class="brand-logo">
			<a href="/adminhome">
				<img src="assets/images/logo.png" alt="" class="dark-logo">
				<img src="assets/images/logo.png" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">


                <a href="adminhome" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                </a>



                <a href="/users" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-user"></span><span class="mtext">Users</span>
                </a>


                <a href="/books" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-edit2"></span><span class="mtext">Books</span>

                </a>

                <a href="/clothes" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-edit2"></span><span class="mtext">Clothes</span>
                </a>

                <a href="" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-edit2"></span><span class="mtext">Furnitures</span>
                </a>

                <a href="" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-edit2"></span><span class="mtext">Medications</span>
                </a>

            </div>
        </div>
    </div>

    <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Medications</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Medications</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
                @foreach ($data as $books )
				<div class="product-wrap">
					<div class="product-list">
						<ul class="row">
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img"><img src="{{ asset('uploads/medications/' . $books->medicationsimage ) }}" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">{{ $books->nameuser }}</a></h4>
										<div class="price">
											<ins>{{ $books->typemedications }}</ins>
										</div>
										<a href="{{ url('/deletebooks',$books->id) }}"><i class="icon-copy dw dw-delete-3"></i></a>
									</div>
								</div>
							</li>

						</ul>
					</div>

				</div>
                @endforeach
			</div>

		</div>
	</div>

</body>
</html>
