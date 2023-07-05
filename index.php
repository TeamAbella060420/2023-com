<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>2023</title>
    <script src="assets/js/rem.js"></script>
    <!--设置字体大小-->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <!--轮播库-->
    <script src="assets/js/MobEpp-1.1.1.js"></script>
    <script>
      $(document).ready(function () {
        $.ajax({
          url: "./dkS3ksSkjfl3ap/controller/apiController.php",
          type: "GET",
          dataType: "json",
          success: function (response) {
            $.each(response, function (index, value) {
              $("." + value.class).attr("href", value.link);
            });
          },
          error: function (error) {
            console.log(error);
          },
        });
      });
    </script>
  </head>
  <body>
    <p>　</p>
    <p>　</p>
    <p>　</p>
    <div style="display: flex; text-align: center;">
    <table
      border="0"
      width="644"
      cellspacing="0"
      cellpadding="0"
      align="center"
      bgcolor="#ffffff"
      style="
        color: rgb(0, 0, 0);
        font-family: arial, sans-serif;
        font-size: 14px;
        font-style: normal;
        font-variant-ligatures: normal;
        font-variant-caps: normal;
        font-weight: normal;
        letter-spacing: normal;
        orphans: 2;
        text-align: start;
        text-indent: 0px;
        text-transform: none;
        white-space: normal;
        widows: 2;
        word-spacing: 0px;
        -webkit-text-stroke-width: 0px;
      "
    >
      <tr>
        <td
          colspan="3"
          height="60"
          style="
            font-family: 'Microsoft Yahei', Arial, Helvetica, sans-serif;
            text-align: center;
            font-size: 20px;
            letter-spacing: 1px;
            margin: 0px;
            padding-top: 20px;
            padding-bottom: 20px;
          "
        >
          <a
            style="
              font-weight: bold;
              text-decoration: none;
              border-radius: 5px;
              padding-left: 50px;
              padding-right: 50px;
              padding-top: 20px;
              padding-bottom: 20px;
              background: #030001;
            "
			class="link1"
            href="/"
          >
            <font size="6" color="#D1C77C">请点击继续访问</font></a
          >
        </td>
      </tr>
      <tr>
        <td
          colspan="1"
          style="font-family: arial, sans-serif; margin: 0px"
          width="8"
        >
          　
        </td>
        <td
          style="
            font-family: 'Microsoft Yahei', Arial, Helvetica, sans-serif;
            font-size: 13px;
            letter-spacing: 1px;
            margin: 0px;
          "
          width="486"
        >
          <p align="center">&nbsp;&nbsp;</p>
          <p align="center">
            <a
              target="_blank"
              href="/"
			  class="link2"
            >
              <img border="0" src="kf1.png" width="220" height="64"
            /></a>
          </p>
          <p align="center">　</p>
          <p align="center">　</p>
          <p align="center">　</p>
          <p align="center">　</p>
        </td>

        <td
          colspan="1"
          style="font-family: arial, sans-serif; margin: 0px"
          width="6"
        >
          　
        </td>
      </tr>
    </table>
    </div>
  </body>
</html>
