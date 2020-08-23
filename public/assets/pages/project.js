$(document).ready(function() {
  var page = {
    init: function () {
      var self = this;



      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
          var request = $.ajax({
            url: "/view-project",
            type: "POST",
            data: {

            },
            dataType: 'JSON',
            success: function (projectSkripsi) {
              $(function () {
                $('#myList li:last-child').tab('show')
              })
            },
            error: function (e) {
              console.log("ERROR MASUK")
            }
          });



    }
  }
  if ($('#halaman-project').length = 1) {
      page.init()
  }
});
