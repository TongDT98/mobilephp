<?php
require_once(realpath(dirname(__FILE__)) . '/../../models/loaisanpham.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php
include 'shared/head.php';
?>

<body>

    <div class="super_container">

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

        <!-- Ad -->



        <!-- Icon Boxes -->


        <?php
		include 'shared/iconbox.php';
		?>

        <!-- Newsletter -->

        <?php
		include 'shared/newsletter.php';
		?>

        <!-- Footer -->
        <?php
		include 'shared/footer.php';
		?>

    </div>

</body>

</html>