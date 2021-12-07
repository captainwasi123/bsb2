<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Website Design - Template </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style type="text/css">
        body {
            background: url(images/background.jpg);
            background-size: contain;
        }

        .table-1 {
            font-family: Roboto;
        }

        table.table-1 {
            width: 100%;
            max-width: 750px;
            margin: auto;
            box-shadow: 1px 1px 10px silver;
            background: white;
        }

        table.table-1 thead tr th {
            background: #000;
            padding: 12px 0px;
        }

        .table-1 tbody {
            text-align: center;
            z-index: 9999;
            position: relative;
            text-align: center;
        }

        td.text-1 {
            font-weight: 700;
            font-size: 40px;
            letter-spacing: 0.6px;
            padding-top: 40px;
            padding-bottom: 10px;
            font-family: 'Dancing Script';
            color: #c98827;
        }

        td.text-2 {
            padding: 0px 100px;
            padding-bottom: 10px;
            color: #000;
            font-size: 16px;
            letter-spacing: 0.3px;
            line-height: 21px;
        }

        td.button-1 {
            padding-top: 30px;
            padding-bottom: 10px;
        }

        .custom-btn1 {
            background: #132d66;
            color: white;
            text-decoration: none;
            font-size: 18px;
            letter-spacing: 0.6px;
            padding: 14px 30px;
            display: inline-block;
            font-weight: 500;
        }

        .custom-btn1:hover {
            background: black;
        }

        td.text-3 {
            padding: 0px 100px;
            padding-bottom: 0px;
            color: #454545;
            font-size: 16px;
            letter-spacing: 0.3px;
            line-height: 21px;
            padding-top: 8px;
        }

        td.social-links {
            padding: 25px 0px 30px 0px;
        }

        td.social-links a {
            text-decoration: none;
            display: inline-block;
            margin: 0px 1px;
        }

        td.social-links a img {
            width: 25px;
        }

        td.menu-1 {
            border-top: 1px solid silver;
            padding-top: 15px;
            padding-bottom: 10px;
        }

        td.menu-1 a {
            color: #999999;
            text-decoration: none;
            display: inline-block;
            border-right: 1px solid silver;
            padding-right: 10px;
            padding-left: 10px;
        }

        td.menu-1 a:nth-last-child(1) {
            border-right: none;
        }

        td.contact-1 a:hover,
        td.menu-1 a:hover {
            color: #132d66;
        }

        .contact-1 a {
            color: #999999;
            text-decoration: none;
            display: inline-block;
            margin: 0px 10px;
        }

        .contact-1 a img {
            width: 20px;
            vertical-align: middle;
            margin-right: 3px;
            margin-top: -2px;
        }

        td.contact-1 {
            padding-bottom: 15px;
        }

        tfoot tr td {
            background: #000;
            text-align: center;
            color: white;
            font-size: 13px;
            padding: 10px 0px;
            letter-spacing: 0.3px;
        }

        thead tr th img {
            width: 192px;
        }

        @media screen and (max-width:650px) and (min-width:320px) {
            td.text-1 {
                font-weight: 700;
                font-size: 25px;
                letter-spacing: 0.6px;
                padding-top: 30px;
                padding-bottom: 20px;
            }
            thead tr th img {
                width: 140px;
            }
            td.text-2 {
                padding: 0px 20px;
                padding-bottom: 10px;
                color: #454545;
                font-size: 16px;
                letter-spacing: 0.3px;
                line-height: 20px;
            }
            td.button-1 {
                padding-top: 15px;
                padding-bottom: 10px;
            }
            .custom-btn1 {
                font-size: 16px;
            }
            td.menu-1 {
                border-top: 1px solid silver;
                padding-top: 15px;
                padding-bottom: 15px;
            }
        }
    </style>
</head>

<body>

    <table class="table-1">
        <thead>
            <tr>
                <th> <img src="{{URL::to('/public/website')}}/images/email/logo.png"> </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-1"> Welcome to the BSB Collaborative! </td>
            </tr>
            <tr>
                <td class="text-2" style="font-weight: 500;"> Connecting Small Businesses to Success</td>
            </tr>
            <tr>
                <td class="text-2" style="text-align: left;">
                    <p><b>Subject Line:</b> BSB Vendor Subscription Renewal</p>
                    {{--  <p>Hello <b>{{ $name }}!</b></p>  --}}
                    <p>Thank you for being a part of the BSB Collaborative’s Virtual Box!</p>

                    <p>We wanted to remind you that you’ve chosen the automatic renewal option. Your subscription will be renewed for <b> $5000</b> on <b>25-05-2021</b>. If you wish to stick to your current plan, no action is required. If your billing information
                        has changed, you can update your payment details in your Virtual Vendor portal.</p>

                    <p>Our entire team is dedicated to ensuring your BSB Vendor experience is superior. If you have any questions, concerns, or suggestions, simply send us an email and we’ll get back to you with a prompt response.</p>

                    <p>Thank you,</p>

                    <p><b>Meko, Natalia, & A’Mera</b></p>

                </td>
            </tr>
            <!-- 	<tr >
 			 <td class="text-3"> Thanks </td>
 			</tr> -->
            <tr>
                <td class="text-3"> <b>BSB Team</b> </td>
            </tr>
            <tr>
                <td class="social-links">


                    <a href="#"> <img src="{{URL::to('/public/website')}}/images/email/fb-icon.svg"> </a>
                    <a href="#"> <img src="{{URL::to('/public/website')}}/images/email/instagram-icon.svg"> </a>
                    <a href="#"> <img src="{{URL::to('/public/website')}}/images/email/linkedin-icon.svg"> </a>
                    <a href="#"> <img src="{{URL::to('/public/website')}}/images/email/twitter-icon.svg"> </a>
                </td>
            </tr>
            <tr>
                <td class="menu-1">
                    <a href="https://thevirtualbsb.com/"> Home </a>
                    <a href="https://thevirtualbsb.com/physicalBox"> Physical Box </a>
                    <a href="https://thevirtualbsb.com/about"> About Us </a>
                    <a href="https://thevirtualbsb.com/about#contact-us"> Contact Us </a>
                    <a href="https://thevirtualbsb.com/login"> Login </a>
                    <a href="https://thevirtualbsb.com/register"> Register </a>
                </td>
            </tr>
            <tr>
                <td class="contact-1">
                    <a href="tel:+8134971101"> <img src="{{URL::to('/public/website')}}/images/email/phone-icon.png"> +(813) 497-1101 </a>
                    <a href="mailto:bsb@gmail.com"> <img src="{{URL::to('/public/website')}}/images/email/email-icon.png"> bsb@gmail.com </a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td> © 2021 BSB. All Rights Reserved. </td>
            </tr>
        </tfoot>
    </table>

</body>

</html>
