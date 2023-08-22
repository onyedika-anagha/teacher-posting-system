$(document).ready(function () {
    $('#userUpdate').on('submit', (e) => {
        e.preventDefault();
        const formData = $('#userUpdate').serialize();
        $.ajax({
            type: "POST",
            url: "/api/update/user",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function (data) {
            console.log(data);
        });

    });
  $('#userUpdate2').on('submit', (e) => {
      e.preventDefault();
      const formData = $('#userUpdate2').serialize();
        $.ajax({
            type: "POST",
            url: "/api/update/user",
            data: formData,
            dataType: "json",
            encode: true,
            }).done(function (data) {
            console.log(data);
            });

        })
});