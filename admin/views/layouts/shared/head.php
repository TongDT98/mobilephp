<!DOCTYPE html>
<html>

<head>
    <c:set var="context" value="${pageContext.request.contextPath}" />
    <title>Eco-mobile</title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/mobilephp/admin/shared/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900"
        rel="stylesheet">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="/mobilephp/admin/assets/css/sleek.css" />


    <!-- Icon fonts -->
    <link rel="stylesheet" href="/mobilephp/admin/assets/vendor/fonts/fontawesome.css">
    <link rel="stylesheet" href="/mobilephp/admin/assets/vendor/fonts/ionicons.css">
    <link rel="stylesheet" href="/mobilephp/admin/assets/vendor/fonts/linearicons.css">
    <link rel="stylesheet" href="/mobilephp/admin/assets/vendor/fonts/open-iconic.css">
    <link rel="stylesheet" href="/mobilephp/admin/assets/vendor/fonts/pe-icon-7-stroke.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="/mobilephp/admin/assets/vendor/css/rtl/bootstrap.css"
        class="theme-settings-bootstrap-css">
    <link rel="stylesheet" href="/mobilephp/admin/assets/vendor/css/rtl/appwork.css" class="theme-settings-appwork-css">
    <link rel="stylesheet" href="/mobilephp/admin/assets/vendor/css/rtl/theme-corporate.css"
        class="theme-settings-theme-css">
    <link rel="stylesheet" href="/mobilephp/admin/assets/vendor/css/rtl/colors.css" class="theme-settings-colors-css">
    <link rel="stylesheet" href="/mobilephp/admin/assets/vendor/css/rtl/uikit.css">
    <link rel="stylesheet" href="/mobilephp/admin/shared/assets/css/demo.css">
    <link rel="stylesheet" href="/mobilephp/admin/assets/vendor/libs/datatables/datatables.css">

    <script src="/mobilephp/admin/assets/vendor/js/material-ripple.js"></script>
    <script src="/mobilephp/admin/assets/vendor/js/layout-helpers.js"></script>

    <!-- Theme settings -->
    <!-- This file MUST be included after core stylesheets and layout-helpers.js in the <head> section -->
    <script src="/mobilephp/admin/assets/vendor/js/theme-settings.js"></script>
    <script>
    window.themeSettings = new ThemeSettings({
        cssPath: '/mobilephp/admin/assets/vendor/css/rtl/',
        themesPath: '/mobilephp/admin/assets/vendor/css/rtl/'
    });
    </script>

    <!-- Core scripts -->
    <script src="/mobilephp/admin/assets/vendor/js/pace.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Libs -->
    <link rel="stylesheet" href="/mobilephp/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/mobilephp/admin/assets/vendor/libs/growl/growl.css">
    <link rel="stylesheet" href="/mobilephp/admin/assets/vendor/libs/spinkit/spinkit.css">

    <script src="/mobilephp/admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="/mobilephp/admin/assets/vendor/js/bootstrap.js"></script>
    <script src="/mobilephp/admin/assets/vendor/js/sidenav.js"></script>

    <!-- Libs -->
    <script src="/mobilephp/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/mobilephp/admin/assets/vendor/libs/chartjs/chartjs.js"></script>
    <script src="/mobilephp/admin/assets/vendor/libs/datatables/datatables.js"></script>
    <script src="/mobilephp/admin/assets/vendor/libs/growl/growl.js"></script>

    <!-- Demo -->
    <script src="/mobilephp/admin/shared/assets/js/demo.js"></script>

    <script src="/mobilephp/admin/shared/assets/js/validate.js"></script>
    <style>
    .text-required:after {
        content: "*";
        color: red;
    }

    .theme-settings-open-btn {
        display: none !important;
    }

    /*css scroll*/
    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #F2F3F3;
        border-radius: 2.5px;
    }

    ::-webkit-scrollbar {
        width: 5px;
        height: 0px;
        background-color: #0888b1;
    }

    ::-webkit-scrollbar-thumb {
        width: 5px;
        border-radius: 2.5px;
        background-color: #0888b1;
    }

    .layout-wrapper.layout-2 {
        position: absolute;
        top: 0;
    }

    .paginate_button.page-item.previous .page-link,
    .paginate_button.page-item.next .page-link {
        height: 25px !important;
    }

    /*end*/
    </style>
    <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.1.0" type="text/javascript"></script>

</head>