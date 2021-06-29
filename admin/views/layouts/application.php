
<!DOCTYPE html>
<html>
    <?php include 'shared/head.php'; ?>
    <body>
        <div class="page-loader">
            <div class="bg-primary"></div>
        </div>

        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-2">
            <div class="layout-inner">

                <!-- Layout sidenav -->
                <?php include 'shared/sidenav.php'; ?>
                <!-- / Layout sidenav -->

                <!-- Layout container -->
                <div class="layout-container">
                    <!-- Layout navbar -->
                    <?php include 'shared/navbar.php'; ?>
                    <!-- / Layout navbar -->

                    <!-- Layout content -->
                    <div class="layout-content">

                        <!-- Content -->
                        <?= @$content ?>
                        <!-- / Content -->

                        <!-- Layout footer -->
                        <?php include 'shared/footer.php'; ?>
                        <!-- / Layout footer -->

                    </div>
                    <!-- Layout content -->

                </div>
                <!-- / Layout container -->

            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-sidenav-toggle"></div>
        </div>
        <!-- / Layout wrapper -->
        <?php include 'shared/modal.php'; ?>
    </body>

</html>
