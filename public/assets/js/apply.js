$(document).ready(function () {
  $('#userUpdate').on('submit', (e) => {
    e.preventDefault();
$.ajax({
      type: "POST",
      url: "/api/update/user",
      data: new FormData(this),
      dataType: "json",
      encode: true,
    }).done(function (data) {
      console.log(data);
    });

})
});