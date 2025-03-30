<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
        body {
            font-family: 'Urbanist', sans-serif;
        }

        .site-header {
            background: url('<?php echo get_template_directory_uri(); ?>/assets/header-bg.jpg') no-repeat center center/cover;
            padding: 20px 0;
            position: relative;
            width: 100%;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
        }

        .main-nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 30px;
        }

        .main-nav ul li {
            display: inline-block;
        }

        .main-nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            font-weight: 600;
        }

        .contact-btn {
            background-color: #ff5a5f;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: 600;
            border-radius: 5px;
        }

        /* Popup Styles */
        .popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;
            background: rgba(0, 0, 0, 0.9);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: 600;
            transform: translateY(-100%);
            transition: transform 0.5s ease-in-out;
        }

        .popup.show {
            transform: translateY(0);
        }

        .popup .close-popup {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="header-container">
        <div class="logo">
            <?php if (has_custom_logo()) {
                the_custom_logo();
            } else { ?>
                <h1 style="color:white;"><?php bloginfo('name'); ?></h1>
            <?php } ?>
        </div>

        <nav class="main-nav">
            <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => 'ul',
                'menu_class'     => 'nav-links'
            )); ?>
        </nav>

        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="contact-btn">Contact Us</a>
    </div>
</header>

<!-- Popup -->
<div class="popup" id="popup">
    Discover Your Dream Property with Estatein <a href="<?php echo esc_url(home_url('/about')); ?>" style="color:#ff5a5f;">Learn More</a>
    <button class="close-popup" onclick="closePopup()">✖</button>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(() => {
            document.getElementById('popup').classList.add('show');
        }, 1000);
    });

    function closePopup() {
        document.getElementById('popup').classList.remove('show');
    }
</script>

<?php wp_footer(); ?>
</body>
</html>
