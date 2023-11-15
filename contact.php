<!doctype html>
<html class="no-js" lang="fr">

<head>
    <!-- title -->
    <title>POFO – Creative Agency, Corporate and Portfolio Multi-purpose Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="ThemeZaa">
    <!-- description -->
    <meta name="description"
        content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords"
        content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="css/bootsnav.css">
    <link rel="stylesheet" type="text/css" href="css/font-icons.min.css">
    <link rel="stylesheet" type="text/css" href="css/theme-vendors.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
</head>

<body>
    <div class="box-layout box-layout-md">
        <!-- start header -->
        <?php include 'include/header.php' ?>
        <!-- end header -->
        <!-- start page title section -->
        <section class="wow animate__fadeIn cover-background background-position-top top-space" style="background-image:url('images/contact-banner.jpg');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-12 page-title-large d-flex flex-column justify-content-center text-center padding-30px-tb">
                        <!-- start sub title -->
                        <span class="d-block text-white-2 opacity6 w-45 sm-w-100 alt-font margin-5px-bottom mx-auto">We are located in downtown New York</span>
                        <!-- end sub title -->
                        <!-- start page title -->
                        <h1 class="alt-font text-white-2 font-weight-600 mb-0">Contact simple</h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start form section -->
        <section class="wow animate__fadeIn" id="start-your-project">
            <div class="container">
                <div class="row justify-content-center">
                    <div
                        class="col-12 col-xl-6 col-lg-7 col-md-9 col-sm-10 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase">tell us about your project</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum is simply
                            dummy text.</p>
                    </div>
                </div>
                <form id="project-contact-form" action="email-templates/contact-form.php" method="post">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-results d-none"></div>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="name" id="name" placeholder="Name *" class="big-input required">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="tel" name="phone" id="phone" placeholder="Phone" class="big-input">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="email" name="email" id="email" placeholder="E-mail *" class="big-input required">
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="select-style big-select">
                                <select name="budget" id="budget" class="bg-transparent mb-0">
                                    <option value="">Select your budget</option>
                                    <option value="$500 - $1000">$500 - $1000</option>
                                    <option value="$1000 - $2000">$1000 - $2000</option>
                                    <option value="$2000 - $5000">$2000 - $5000</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <textarea name="comment" id="comment" placeholder="Describe your project" rows="6"
                                class="big-textarea"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button id="project-contact-us-button" type="submit"
                                class="btn btn-transparent-dark-gray btn-large margin-20px-top submit">send message</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- end form section -->
    </div>
    <!-- start footer -->
    <?php include 'include/footer.php' ?>
    <!-- end footer -->
    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
    <!-- end scroll to top -->
    <!-- javascript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootsnav.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/hamburger-menu.js"></script>
    <script type="text/javascript" src="js/theme-vendors.min.js"></script>
    <!-- setting -->
    <script type="text/javascript" src="js/main.js"></script>
    </body>
    
    </html>