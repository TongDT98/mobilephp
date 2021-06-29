<!DOCTYPE html>
<html>

<head>
    <c:set var="context" value="${pageContext.request.contextPath}" />
    <title>Admin - Appwork</title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/phpfinal/admin/shared/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900"
        rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="/phpfinal/admin/assets/vendor/fonts/fontawesome.css">
    <link rel="stylesheet" href="/phpfinal/admin/assets/vendor/fonts/ionicons.css">
    <link rel="stylesheet" href="/phpfinal/admin/assets/vendor/fonts/linearicons.css">
    <link rel="stylesheet" href="/phpfinal/admin/assets/vendor/fonts/open-iconic.css">
    <link rel="stylesheet" href="/phpfinal/admin/assets/vendor/fonts/pe-icon-7-stroke.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="/phpfinal/admin/assets/vendor/css/rtl/bootstrap.css"
        class="theme-settings-bootstrap-css">
    <link rel="stylesheet" href="/phpfinal/admin/assets/vendor/css/rtl/appwork.css" class="theme-settings-appwork-css">
    <link rel="stylesheet" href="/phpfinal/admin/assets/vendor/css/rtl/theme-corporate.css"
        class="theme-settings-theme-css">
    <link rel="stylesheet" href="/phpfinal/admin/assets/vendor/css/rtl/colors.css" class="theme-settings-colors-css">
    <link rel="stylesheet" href="/phpfinal/admin/assets/vendor/css/rtl/uikit.css">
    <link rel="stylesheet" href="/phpfinal/admin/shared/assets/css/demo.css">
    <link rel="stylesheet" href="/phpfinal/admin/assets/vendor/libs/datatables/datatables.css">

    <script src="/phpfinal/admin/assets/vendor/js/material-ripple.js"></script>
    <script src="/phpfinal/admin/assets/vendor/js/layout-helpers.js"></script>

    <!-- Theme settings -->
    <!-- This file MUST be included after core stylesheets and layout-helpers.js in the <head> section -->
    <script src="/phpfinal/admin/assets/vendor/js/theme-settings.js"></script>
    <script>
    window.themeSettings = new ThemeSettings({
        cssPath: '/phpfinal/admin/assets/vendor/css/rtl/',
        themesPath: '/phpfinal/admin/assets/vendor/css/rtl/'
    });
    </script>

    <!-- Core scripts -->
    <script src="/phpfinal/admin/assets/vendor/js/pace.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Libs -->
    <link rel="stylesheet" href="/phpfinal/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/phpfinal/admin/assets/vendor/libs/growl/growl.css">
    <link rel="stylesheet" href="/phpfinal/admin/assets/vendor/libs/spinkit/spinkit.css">

    <script src="/phpfinal/admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="/phpfinal/admin/assets/vendor/js/bootstrap.js"></script>
    <script src="/phpfinal/admin/assets/vendor/js/sidenav.js"></script>

    <!-- Libs -->
    <script src="/phpfinal/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/phpfinal/admin/assets/vendor/libs/chartjs/chartjs.js"></script>
    <script src="/phpfinal/admin/assets/vendor/libs/datatables/datatables.js"></script>
    <script src="/phpfinal/admin/assets/vendor/libs/growl/growl.js"></script>

    <!-- Demo -->
    <script src="/phpfinal/admin/shared/assets/js/demo.js"></script>

    <script src="/phpfinal/admin/shared/assets/js/validate.js"></script>
    <style>
    .text-required:after {
        content: "*";
        color: red;
    }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.1.0" type="text/javascript"></script>

</head>