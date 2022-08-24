<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="text-align: right">
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style type="text/css">
        /* FONTS */
        @media screen {
            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 400;
                src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 700;
                src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 400;
                src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 700;
                src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
            }
        }

        /* CLIENT-SPECIFIC STYLES */
        body, table, td, a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table, td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* MOBILE STYLES */
        @media screen and (max-width: 600px) {
            h1 {
                font-size: 32px !important;
                line-height: 32px !important;
            }
        }

        /* ANDROID CENTER FIX */
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
    </style>
</head>
<body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">

<!-- HIDDEN PREHEADER TEXT -->
<div
    style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    We're thrilled to have you here! Get ready to dive into your new account.
</div>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <!-- LOGO -->
    <tr>
        <td bgcolor="#009EF7" align="center">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td align="center" valign="top" style="padding: 60px 0 10px 0;">
                        <div style="background-color: #FFF; border-radius: 5px;">
                            <a href="{{env("APP_URL")}}" target="_blank">
                                <img alt="Logo" src="{{asset("assets/admin/images/logo.png")}}" width="300" height="300"
                                     style="display: block; font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; color: #ffffff; font-size: 18px;"
                                     border="0">
                            </a>
                        </div>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <!-- HERO -->
    <tr>
        <td bgcolor="#009EF7" align="center" style="padding: 0px 10px 0px 10px;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

                <tr>
                    @if(@$sender_title)
                        <td bgcolor="#ffffff" align="center" valign="top"
                            style="text-align: right ;padding: 30px 20px 15px 20px; color: #111111; /*letter-spacing: 4px;*/">
                            <h3 style=" margin: 0;">{{@$sender_title}} - <span
                                    style="margin-left: 10px">{{@$sender_name}}</span></h3>
                            <p style=" text-align: right; color: #8a8a8a; margin: 0; font-size: 13px">{{@$sender_email}}</p>
                        </td>
                    @endif
                    <td bgcolor="#ffffff" align="center" valign="top"
                        style="text-align: left ;padding: 30px 20px 15px 20px; color: #111111; /*letter-spacing: 4px;*/">
                        <p style=" text-align: end; color: #8a8a8a; margin: 0; padding: 0;font-size: 13px">
                            <span>{{\Carbon\Carbon::now()->format('F-d-Y h:i A')}}</span></p>
                        {{--<p style=" text-align: end; color: #8a8a8a; font-size: 13px; margin: 0; padding: 0">
                            (<span>{{\Carbon\Carbon::parse(\Carbon\Carbon::now())->diffForHumans()}}</span>)</p>--}}
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <!-- COPY BLOCK -->
    <tr>
        <td align="center">
            <div style="width: 600px;">
                <div style="padding: 10px 0; background-color: #FFF">
                    <div align="left"
                         style="margin:0 10px; padding: 20px 10px; color: #666666; background-color: #f6f6f6;">
                        <p style="margin: 0;font-weight: bold; text-align: right; color: #666666">@lang("str.Welcome!"),
                            <span
                                style="margin-left: 10px; margin-top: 10px">{{@$user_name}}</span></p>
                        <h3 style="margin-top: 15px; text-align: right; color: #338bca">{{@$subject}}</h3>
                        <p style="margin: 10px 0 10px 0; text-align: right;">{{@$name_ar}}</p>
                        <h6 style="margin: 10px 0 10px 0; text-align: right;">{{@$description}}</h6>
                        <div style="text-align: center; margin: 40px 0 30px 0">
                            <a href="{{@$path}}" target="_blank"
                               style="font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; background-color: #338bca; text-decoration: none; padding: 12px 50px; border-radius: 2px;
                                                     border: 1px solid #338bca; display: inline-block;">@lang("str.Visit")</a>
                        </div>
                        <p style="margin: 0; text-align: right;">@lang("str.Cheers"),<br>{{organization_name()}}</p>
                    </div>
                    {{--<p style="padding: 10px 20px; margin: 0; text-align: right;">@lang("str.Cheers"),<br>{{organization_name()}}</p>--}}
                </div>
            </div>
        </td>
    </tr>
</table>
<br>
<br>
<br>
<br>
</body>
</html>
