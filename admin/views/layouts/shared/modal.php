

<div class="modal fade" id="globalModalIframe" tabindex="-1" role="dialog" aria-labelledby="globalModalIframeLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="padding-top: 5px; padding-bottom: 5px">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="globalModalIframeClose">&times;</button>
                <h4 class="modal-title" id="globalModalIframeLabel"></h4>
            </div>
            <div class="modal-body" style="padding:0.5625rem !important;">
                <div id="globalModalIframeContent" class="content">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function CloseModal() {
        $('#globalModalIframe').modal('hide');
    }
    /**
     * Comment
     */
    function ShowViewLoading(el) {
        $.ajax({
            type: "GET",
            url: '/phpfinal/admin/shared/loading.php',
            success: function (data) {
                $(el).html(data);
            },
        });
    }
    $(document).ready(function () {
        $('#globalModalIframe').on('hidden.bs.modal',function (event){
            $("#globalModalIframeContent").html('');
        });
        $('#globalModalIframe').on('show.bs.modal', function (event) {
            var modal = $(this);
            //lay thong tin tu button de hien thi popup
            var button = $(event.relatedTarget);
            if (!button)
                return;
            //ShowViewLoading("#globalModalIframeContent");
            var src = button.data('src');
            if (!src)
                return;
            var width = button.data('width') || 800;
            console.log(width.toString().includes("%"));
            if (!width.toString().includes("%")) {
                width = (parseInt(width) + 25).toString();
            }
            //var height = button.data('height') || 500;

            modal.find('.modal-title').text(button.data('title'));
            modal.find('.modal-dialog').css({
                width: width, //probably not needed
                height: 'auto',
                maxWidth: '100%',
                //probably not needed
            });
            //load iframe
            $.ajax({
                type: "GET",
                url: src,
                success: function (data) {
                    $("#globalModalIframeContent").html(data);
                },
            });


        });


        $('.mytable').dataTable({
            scrollX: true,
            scrollCollapse: true,
            autoWidth: false,
            paging: true,

        });

    })
</script>