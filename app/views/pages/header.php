<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techlynxx - Data Processing Platform for AI/ML</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Gothic&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url()?>assets/css/styles.css">
</head>
<body>
<!-- Header -->
<header>
    <div class="container">
        <nav class="navbar">
            <a href="<?= base_url()?>" class="logo">
                <img src="<?= base_url()?>assets/img/logo.png" class="header_logo" alt="Logo" />
            </a>
            <ul class="nav-links">
                <li><a href="#features">Features</a></li>
                <li><a href="#how-it-works">How It Works</a></li>
                <li><a href="#use-cases">Use Cases</a></li>
                <li><a href="#pricing">Pricing</a></li>
            </ul>

                <?php if (!empty($user_email)) : ?>
                    <div class="auth-buttons">
                        <a href="<?= base_url() ?>User/dashboard" class="btn btn-primary"><?= $user_email ?></a>
                        <a href="<?= base_url() ?>logout" class="btn btn-outline">Logout</a>
                    </div>
                <?php else : ?>
                    <div class="auth-buttons">
                        <a href="<?= base_url() ?>signin" class="btn btn-outline">Sign In</a>
                        <a href="<?= base_url() ?>signup" class="btn btn-primary">Sign Up</a>
                    </div>
                <?php endif; ?>

        </nav>
    </div>
</header>