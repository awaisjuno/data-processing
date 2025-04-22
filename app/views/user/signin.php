
<div class="auth-container" style="margin-top: 100px; margin-bottom: 100px;">

    <div class="auth">
        <div class="auth-form">
            <h2 class="space-bottom">Sign In Area</h2>
            <form method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <button name="submit" class="btn btn-primary btn-cust">Sign In</button>
                </div>
            </form>
            <div class="auth-footer text-center">
                <a href="#">Forgot your password?</a>
            </div>
            <?php if (isset($message)) : ?>
                <?= $message ?>
            <?php endif; ?>
        </div>
    </div>
</div>