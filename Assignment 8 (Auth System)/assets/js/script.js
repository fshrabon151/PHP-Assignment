(function ($) {
  $(document).ready(function () {
    /**
     * User registration System
     */

    $("#reg_user").submit(function (e) {
      e.preventDefault();

      let name = $('#reg_user input[name="name"]').val();
      let email = $('reg_user input[name="email"]').val();
      let username = $('reg_user input[name="username"]').val();
      let password = $('reg_user input[name="password"]').val();
      let cell = $('reg_user input[name="cell"]').val();
      let photo = $('reg_user input[name="photo"]').val();

      if (
        name == "" ||
        email == "" ||
        username == "" ||
        password == "" ||
        cell == "" ||
        photo == ""
      ) {
        $(".msg").html(validate("All fields are required"));
      } else {
        $.ajax({
          url: "inc/ajax_template/add_users.php",
          method: "POST",
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function (data) {
            if (data != "") {
              $(".msg").html(data);
            } else {
              $(".msg").html(
                validate("User registration successfull!", "success")
              );
              $("#reg_user")[0].reset();
            }

            console.log(data);
          },
        });
      }
    });

    //email check

    $("#reg_email").blur(function () {
      let email = $(this).val();

      $.ajax({
        url: "inc/ajax_template/email_check.php",
        method: "POST",
        data: { email: email },
        success: function (data) {
          console.log(data);
          if (data != "" && data == email) {
            $("#reg_email_notice").html("Email already exists !");
            $(".submit_data_email").attr("disabled", true);
          } else {
            $("#reg_email_notice").html("");
            $(".submit_data_email").attr("disabled", false);
          }
        },
      });
    });

    //username check
    $("#reg_username").blur(function () {
      let username = $(this).val();

      $.ajax({
        url: "inc/ajax_template/username_check.php",
        method: "POST",
        data: { username: username },
        success: function (data) {
          if (data != "" && data == username) {
            $("#reg_username_notice").html("Username already exists !");
            $(".submit_data_username").attr("disabled", true);
          } else {
            $("#reg_username_notice").html("");
            $(".submit_data_username").attr("disabled", false);
          }
        },
      });
    });

    // cell check

    $("#reg_cell").blur(function () {
      // let cell = $(this).val();

      $.ajax({
        url: "inc/ajax_template/cell_check.php",
        method: "POST",
        data: { cell: cell },
        success: function (data) {
          if (data != "" && data == cell) {
            $("#reg_cell_notice").html("Cell number already exists !");
            $(".submit_data_cell").attr("disabled", true);
          } else {
            $("#reg_cell_notice").html("");
            $(".submit_data_cell").attr("disabled", false);
          }
        },
      });
    });

    /**
     * User login validation
     */

    // end
  });
})(jQuery);
