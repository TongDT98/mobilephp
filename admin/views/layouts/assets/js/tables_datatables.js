$(function() {
  $('.datatables-demo').dataTable({
    scrollX: true,
    scrollCollapse: true,
    autoWidth: true,
    paging: true,
    columnDefs: [
        { "width": "300px", "targets": [0] }                  
    ]

  });
});
