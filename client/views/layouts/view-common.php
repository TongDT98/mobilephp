<?php
require_once(realpath(dirname(__FILE__)) . '/../../models/loaisanpham.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php
include 'shared/head.php';
?>

<body>

    <div class="super_container w-100">

        <!-- Header -->

        <header class="header">
            <div class="header_container">
                <div class="container" style="width: 100%; margin: 0;max-width: 100%;">
                    <div class="row">
                        <div class="col p-0">
                            <?php
							include 'shared/header.php';
							?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Products -->
        <?= @$content ?>
        <!-- Footer -->
        <?php
		include 'shared/footer.php';
		?>
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1//mobilephp/client/assets/js/bootstrap.bundle.min.js">
    </script>
    <script src="/mobilephp/client/assets/lib/easing/easing.min.js"></script>
    <script src="/mobilephp/client/assets/lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="/mobilephp/client/assets/js/main.js"></script>
</body>

</html>