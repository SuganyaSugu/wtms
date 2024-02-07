// Call the dataTables jQuery plugin
// $(document).ready(function() {
//   $('#dataTable').DataTable();
// });

$(document).ready(function() {
var table = $('#dataTable').DataTable({ 
  select: false,
  "columnDefs": [{
      className: "Name", 
      "targets":[0],
      "visible": false,
      "searchable":false
  }]
});
