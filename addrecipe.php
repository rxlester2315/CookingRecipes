<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
        <!-- Styles -->
        <link href="templatepo/assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
        <link href="templatepo/assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
        <link href="templatepo/assets/css/lib/font-awesome.min.css" rel="stylesheet">
        <link href="templatepo/assets/css/lib/themify-icons.css" rel="stylesheet">
        <link href="templatepo/assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
        <link href="templatepo/assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
        <link href="templatepo/assets/css/lib/weather-icons.css" rel="stylesheet" />
        <link href="templatepo/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
        <link href="templatepo/assets/css/lib/bootstrap.min.css" rel="stylesheet">
        <link href="templatepo/assets/css/lib/helper.css" rel="stylesheet">
        <link href="templatepo/assets/css/style.css" rel="stylesheet">

        <link rel="stylesheet" href="cssfile/style2.css">


        <style>
        form {
            background-color: #DCDCDC;
            padding: 40px;
        }

        form h1 {
            font-size: 25px;
        }

        form h2 {
            font-size: 20px;
        }

        .input-form {
            display: flex;
            flex-direction: column;
            width: 400px;

        }



        .input-form input {
            padding: 8px;
            margin: 15px;
        }

        .select-form select {
            width: 300px;
            padding: 10px;
            margin: 15px;
        }

        .text-area-form textarea {
            width: 700px;
            margin: 30px;
            height: 150px;

        }

        form button {
            background-color: #228B22;
            border: none;
            padding: 10px;
            color: white;
            border-radius: 8px;

        }

        .image-con input {
            padding: 20px;
        }

        .text-area-form span {
            font-size: 12px;
            font-style: italic;
        }

        .price-form {
            padding: 20px;
        }

        .price-form input {
            padding: 8px;
        }

        .header-prod {
            background-color: #9B59B6;
            display: flex;
            justify-content: center;
            border: 1px solid white;
            border-radius: 3px;
            color: white;
            width: 300px;


        }



        .page-title {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 100px;
            padding: 15px;

        }
        </style>

    </head>

    <body>

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <ul>
                        <div class="logo">
                            <a href="chef.php">
                                <img src="assets/images/logo.png" alt="" />
                                <span>Recipe</span>
                            </a>
                        </div>
                        <li class="label">Main</li>
                        <li><a href="chef.php" class="sideba"><i class="ti-home"></i> Dashboard</a></li>
                        <li class="label">Apps</li>
                        <li>
                            <a href="addrecipe.php"><i class="ti-map"></i> Add Recipe
                                <span></span></a>
                        </li>

                        <li>
                            <a href="adddesert.php"><i class="ti-map"></i> Add Desert
                                <span></span></a>
                        </li>





                        <li>
                            <a href="logout.php"><i class="ti-close"></i> Logout</a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->
        ------
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. Soeng Souy</div>
                                                        <div class="notification-text">5 members joined today </div>
                                                    </div>
                                                </a>z
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mariam</div>
                                                        <div class="notification-text">likes a photo of you</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Tasnim</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let
                                                            you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. Soeng Souy</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let
                                                            you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-email"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="email.html">
                                            <i class="ti-pencil-alt pull-right"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/1.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let
                                                            you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. Soeng Souy</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let
                                                            you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let
                                                            you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. Soeng Souy</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let
                                                            you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">Soeng Souy
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Upgrade Now</span>
                                        <p class="trial-day">30 Days Trail</p>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-email"></i>
                                                    <span>Inbox</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-settings"></i>
                                                    <span>Setting</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-lock"></i>
                                                    <span>Lock Screen</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 p-r-0 title-margin-right">
                            <div class="page-header">
                                <div class="page-title">
                                    <h1 class="header-prod" style="font-size:25px;">Add New Recipe Dish</h1>

                                </div>
                            </div>
                        </div>
                        <!-- /# column -->

                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <section id="main-content">
                        <div class="row">



                        </div>

















                        <form action="addproduct_backend.php" method="POST" enctype="multipart/form-data">


                            <div class="image-con">
                                <h2>Image Product</h2>
                                <img id="image-preview" src="" alt="Recipe Image"
                                    style="display: none; width: 350px; height: 100%;">
                                <input type="file" id="image-upload" name="recipeimage" accept="image/*" required>
                            </div>
                            <hr>
                            <div class="input-form">
                                <h1>Name Of Recipe</h1>
                                <input type="text" name="recipename" placeholder="Enter Name Recipe" required>

                            </div>

                            <hr>

                            <div class="select-form">
                                <h2>Type Of Dish</h2>
                                <select name="typeofdish" id="" required>
                                    <option value="">Select Type Of Dish</option>
                                    <option value="Filipino">Filipino Food</option>
                                    <option value="Italian">Italian Food</option>
                                    <option value="Japanese">Japanese Food</option>
                                    <option value="Chinese">Chinese Food</option>
                                    <option value="American">American</option>
                                </select>
                            </div>

                            <hr>
                            <div class="price-form">
                                <h2>Price</h2>
                                <input type="number" name="price" placeholder="Enter Price" required>
                            </div>

                            <hr>

                            <div class="input-form" id="ingredients-container">
                                <h2>Ingredients</h2>
                                <input type="text" placeholder="Enter Ingredient 1" name="ingredients_one" required>
                                <input type="text" placeholder="Enter Ingredient 2" name="ingredients_two" required>
                                <input type="text" placeholder="Enter Ingredient 3" name="ingredients_three" required>
                            </div>

                            <button type="button" id="add-more-btn">Add More</button>

                            <hr>

                            <div class="text-area-form">
                                <h2>Instruction</h2>
                                <textarea name="description" id="" placeholder="Description" required></textarea>

                                <hr>
                                <h2>Dish Info <span>(Tell About the Dish)</span></h2>
                                <textarea name="dishdescription" id="" placeholder="Description" required></textarea>

                            </div>


                            <button type="submit" name="submit">Submit</button>



                        </form>



                </div>

                </section>
            </div>
        </div>
        </div>

        <script>
        // Ordinal names array
        const ordinalNames = [
            "ingredients_one", "ingredients_two", "ingredients_three", "ingredients_four", "ingredients_five",
            "ingredients_six", "ingredients_seven", "ingredients_eight", "ingredients_nine", "ingredients_ten",
            "ingredients_eleven", "ingredients_twelve", "ingredients_thirteen", "ingredients_fourteen",
            "ingredients_fifteen"
        ];

        // Add More button click handler
        document.getElementById('add-more-btn').addEventListener('click', function() {
            // Get the container for ingredients
            const container = document.getElementById('ingredients-container');

            // Count the existing input fields
            const ingredientCount = container.getElementsByTagName('input').length;

            // Check if the ordinalNames array has a name for the next input
            if (ingredientCount < ordinalNames.length) {
                // Create a new input field
                const newInput = document.createElement('input');
                newInput.type = 'text';
                newInput.placeholder = `Enter Ingredient ${ingredientCount + 1}`;
                newInput.name = ordinalNames[ingredientCount]; // Assign the next ordinal name
                newInput.required = true;

                // Add the new input field to the container
                container.appendChild(newInput);
            } else {
                alert("Maximum number of ingredients reached!");
            }
        });
        </script>




        s

        <script>
        // Get the file input and image preview elements
        const imageInput = document.getElementById('image-upload');
        const imagePreview = document.getElementById('image-preview');

        // Event listener for file input change
        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();

                // Set up a callback function to run after the file is read
                reader.onload = function(e) {
                    // Set the image source to the uploaded file
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block'; // Show the image
                };

                // Read the uploaded file as a data URL
                reader.readAsDataURL(file);
            }
        });
        </script>
        <!-- jquery vendor -->
        <script src="templatepo/assets/js/lib/jquery.min.js"></script>
        <script src="templatepo/assets/js/lib/jquery.nanoscroller.min.js"></script>
        <!-- nano scroller -->
        <script src="templatepo/assets/js/lib/menubar/sidebar.js"></script>
        <script src="templatepo/assets/js/lib/preloader/pace.min.js"></script>
        <!-- sidebar -->

        <script src="templatepo/assets/js/lib/bootstrap.min.js"></script>
        <script src="templatepo/assets/js/scripts.js"></script>
        <!-- bootstrap -->

        <script src="templatepo/assets/js/lib/calendar-2/moment.latest.min.js"></script>
        <script src="templatepo/assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
        <script src="templatepo/assets/js/lib/calendar-2/pignose.init.js"></script>


        <script src="templatepo/assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
        <script src="templatepo/assets/js/lib/weather/weather-init.js"></script>
        <script src="templatepo/assets/js/lib/circle-progress/circle-progress.min.js"></script>
        <script src="templatepo/assets/js/lib/circle-progress/circle-progress-init.js"></script>
        <script src="templatepo/assets/js/lib/chartist/chartist.min.js"></script>
        <script src="templatepo/assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
        <script src="templatepo/assets/js/lib/sparklinechart/sparkline.init.js"></script>
        <script src="templatepo/assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
        <script src="templatepo/assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
        <!-- scripit init-->
        <script src="templatepo/assets/js/dashboard2.js"></script>
    </body>

</html>