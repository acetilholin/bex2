<?php

if (isset($_POST['email']) && isset($_POST['message']) && isset($_POST['recipient'])) {
    // $to = $_POST['recipient'];
    $to = 'kosmina.gregor@gmail.com';
    $subject = 'Neue Nachricht von der Website';

    $msg = $_POST['message'];
    $email = $_POST['email'];
    $date = date("d.m.Y H:i");

    $message = "
<!doctype html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width\"/>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <title>Neue Nachricht</title>
    <style>

    img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%;
    }

    body {
        background-color: #f6f6f6;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }

    table {
        border-collapse: separate;
        mso-table-lspace: 0;
        mso-table-rspace: 0;
        width: 100%;
    }

    table td {
        font-family: sans-serif;
        font-size: 14px;
        vertical-align: top;
    }

    .body {
        background-color: #f6f6f6;
        width: 100%;
    }
    .container {
        display: block;
        margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding-top: 10rem;
        width: 580px;
    }


    .content {
        box-sizing: border-box;
        display: block;
        margin: 0 auto;
        max-width: 580px;
        padding: 10px;
    }

    .main {
        background: #ffffff;
        border-radius: 0 !important;
        width: 100%;
    }

    .wrapper {
        box-sizing: border-box;
        padding: 20px;
    }

    .content-block {
        padding-bottom: 10px;
        padding-top: 10px;
    }

    .footer {
        clear: both;
        margin-top: 10px;
        text-align: center;
        width: 100%;
    }

    .footer td,
    .footer p,
    .footer span,
    .footer a {
        color: #999999;
        font-size: 12px;
        text-align: center;
    }

    /* -------------------------------------
        TYPOGRAPHY
    ------------------------------------- */
    h1,
    h2,
    h3,
    h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        margin-bottom: 30px;
    }

    h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize;
    }

    p,
    ul,
    ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        margin-bottom: 15px;
    }

    p li,
    ul li,
    ol li {
        list-style-position: inside;
        margin-left: 5px;
    }

    a {
        color: #3498db;
        text-decoration: underline;
    }

    .powered-by a {
        text-decoration: none;
    }

    hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        margin: 20px 0;
    }

    /* -------------------------------------
        RESPONSIVE AND MOBILE FRIENDLY STYLES
    ------------------------------------- */
    @media only screen and (max-width: 620px) {
        table[class=body] h1 {
            font-size: 28px !important;
            margin-bottom: 10px !important;
        }

        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
            font-size: 16px !important;
        }

        table[class=body] .wrapper,
        table[class=body] .article {
            padding: 10px !important;
        }

        table[class=body] .content {
            padding: 0 !important;
        }

        table[class=body] .container {
            padding: 0 !important;
            width: 100% !important;
        }

        table[class=body] .main {
            border-left-width: 0 !important;
            border-radius: 0 !important;
            border-right-width: 0 !important;
        }

        table[class=body] .btn table {
            width: 100% !important;
        }

        table[class=body] .btn a {
            width: 100% !important;
        }

        table[class=body] .img-responsive {
            height: auto !important;
            max-width: 100% !important;
            width: auto !important;
        }
    }

    /* -------------------------------------
        PRESERVE THESE STYLES IN THE HEAD
    ------------------------------------- */
    @media all {
        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        .apple-link a {
            color: inherit !important;
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            text-decoration: none !important;
        }

        #MessageViewBody a {
            color: inherit;
            text-decoration: none;
            font-size: inherit;
            font-family: inherit;
            font-weight: inherit;
            line-height: inherit;
        }

        .btn-primary table td:hover {
            background-color: #34495e !important;
        }

        .btn-primary a:hover {
            background-color: #34495e !important;
            border-color: #34495e !important;
        }
    }
</style>
</head>
<body>
<table role='presentation' border='0' cellpadding='0' cellspacing='0' class='body'>
    <tr>
        <td>&nbsp;</td>
        <td class='container'>
            <div class='content'>               
                <table role='presentation' class='main'>                   
                    <tr>
                        <td class='wrapper'>
                            <table role='presentation' border='0' cellpadding='0' cellspacing='0'>
                                <tr>
                                    <td style='text-align: center;'>
                                        <span><img src=\"http://ogrevanjejanjic.si/test/img/logo.gif\" alt='' height='60px' /></span>
                                        <p>
                                            Neue Nachricht wurde über www.bex.at verschickt:
                                        </p>                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            Von: $email <br>
                                            Datum: $date <br>
                                            Nachricht: $msg<br>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <div class='footer'>
                    <table role='presentation' border='0' cellpadding='0' cellspacing='0'>
                        <tr>
                            <td class='content-block'>
                                <span class='apple-link'>
                                    Bex Baugesellschaft m.b.H.<br>
                                    Hedwiggasse 4<br>
                                    1020 Wien
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>              
            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>
";

    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: '" . $email . "'" . "\r\n";

    mail($to, $subject, $message, $headers);

    echo json_encode(array('status' => 'success'));
} else {
    echo json_encode(array('status' => 'error'));
}




