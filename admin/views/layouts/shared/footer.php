
<nav class="layout-footer footer bg-footer-theme">
    <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
        <div class="pt-3">
            <span class="footer-text font-weight-bolder">Appwork</span> ©
        </div>
        <div>
            <a href="javascript:void(0)" class="footer-link pt-3">About Us</a>
            <a href="javascript:void(0)" class="footer-link pt-3 ml-4">Help</a>
            <a href="javascript:void(0)" class="footer-link pt-3 ml-4">Contact</a>
            <a href="javascript:void(0)" class="footer-link pt-3 ml-4">Terms &amp; Conditions</a>
        </div>
    </div>
</nav>
<style>

</style>
<script>
    $(function () {
        var pgurl = window.location.href.substr(window.location.href
                .lastIndexOf("/") + 1);
        //console.log(pgurl)
        $(".sidenav  ul li ul li a").each(function () {
            $(this).parent().removeClass("active");
            if ($(this).attr("href") == pgurl || $(this).attr("href") == '')
            {
                $(this).parent().addClass("active");
                $(this).addClass("active");
            }
        })
    });
</script>