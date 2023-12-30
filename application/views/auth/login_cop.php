<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login in stay smartly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/aos.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/fancybox.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 15px;
            /* Menambahkan border-radius untuk melengkungkan sudut formulir */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin: auto;
            /* Memastikan formulir berada di tengah */
            box-sizing: border-box;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 5px;
            /* Melengkungkan sudut input */
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>

</head>

<body>
    <header class="site-header js-site-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="index.html">Stay Smartly</a></div>
                <div class="col-6 col-lg-8">
                    <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <form method="post" action="<?= base_url('auth/index'); ?>">
        <h2>Login</h2>
        <?php if ($this->session->flashdata('message')) : ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('message'); ?></div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
        <?php endif; ?>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <div class="row">
            <div class="col-md-6 form-group">
                <button type="submit" class="btn btn-primary text-white py-3 px-5 font-weight-bold">Login</button>
            </div>
        </div>
        <div>
            <p class="mb-0">Don't have an account? <a href="<?= base_url('auth/registration'); ?>" class="text-black-50 fw-bold">Sign Up</a></p>
        </div>
    </form>
</body>

</html>