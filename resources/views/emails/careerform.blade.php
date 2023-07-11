<html>

<head>
    <title>Thank you for contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="https://msb.plutustec.in/image/Plutus-logo(fevicon).ico">
    <style>
    * {
        box-sizing: border-box;
    }
    </style>
</head>

<body style="font-family: Noto Sans, sans-serif;
                    margin: 0px;
                    padding: 15px 0;
                    border: 0;
                    background-color: rgba(255, 108, 55, 0.2);
                ">
    <table cellpadding="0" cellspacing="0" style="max-width: 700px; width: 100%; margin: auto">
        <tr>
            <td style="
                        background-color: #ffffff;
                        padding: 10px 15px;
                        text-align: center;
                        ">
                <img src="https://msb.plutustec.in/image/Plutus-logo(new-o).png" style="max-width: 200px; margin: auto"
                    alt="logo" />

            </td>
        </tr>
        <tr>
            <td style="
                        background-color: #ff6c37;
                        padding: 15px 15px;
                        text-align: center;
                        vertical-align: middle;
                        background-image: url(\'https://msb.plutustec.in/image/career.png\');
                        height: 300px;
                        background-size: cover;
                        ">
                <h4 style="
                            color: #ffffff;
                            font-size: 42px;
                            line-height: 54px;
                            font-weight: 500;
                            max-width: 550px;
                            text-align: center;
                            margin: auto;
                        ">
                    Career email details
                </h4>
            </td>
        </tr>
        <tr>
            <td style="background-color: #ffffff; padding: 25px 15px">
                <p style="
                            color: #222222;
                            font-size: 20px;
                            line-height: 24px;
                            margin: 0px 0px 24px;
                        ">
                    Here are the submitted details by candidate:
                </p>
                <div style="margin-bottom: 24px">
                    <label style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            ">First name</label>
                    <h4 style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            ">
                        {{ $firstName }}
                    </h4>
                </div>
                <div style="margin-bottom: 24px">
                    <label style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            ">Last name</label>
                    <h4 style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            ">
                        {{ $lastName }}
                    </h4>
                </div>
                <div style="margin-bottom: 24px">
                    <label style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            ">Phone</label>
                    <h4 style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            ">
                        {{ $phone }}
                    </h4>
                </div>
                <div style="margin-bottom: 24px">
                    <label style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            ">Email</label>
                    <h4 style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            ">
                        <a href="mailto:{{ $email }}" style="color: #000000; text-decoration: none;">
                            {{ $email }}</a>
                    </h4>
                </div>
                <div style="margin-bottom: 24px;max-width: 330px;width:100%;display: inline-block;">
                    <label style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            ">Current CTC</label>
                    <h4 style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            ">
                        {{ $current_ctc }}
                    </h4>
                </div>
                <div style="margin-bottom: 24px;max-width: 330px;width:100%;display: inline-block;">
                    <label style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            ">Expected CTC</label>
                    <h4 style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            ">
                        {{ $expected_ctc }}
                    </h4>
                </div>
                <div style="margin-bottom: 24px;max-width: 330px;width:100%;display: inline-block;">
                    <label style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            ">Experience</label>
                    <h4 style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            ">
                        {{ $experience_year }} Year {{ $experience_month }} Months
                    </h4>
                </div>
                <div style="margin-bottom: 24px;max-width: 330px;width:100%;display: inline-block;">
                    <label style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            ">Notice period</label>
                    <h4 style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            ">
                        {{ $notice_period }} Month
                    </h4>
                </div>
                <div style="margin-bottom: 24px;max-width: 330px;width:100%;display: inline-block;">
                    <label style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            ">Current city</label>
                    <h4 style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            ">
                        {{ $current_city }}
                    </h4>
                </div>
                <div style="margin-bottom: 0px;max-width: 330px;width:100%;display: block;display: inline-block;">
                    <label style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            ">Resume or cv</label>
                    <h4 style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            ">
                        @if($file_type === 'pdf')
                        <img src="https://msb.plutustec.in/image/pdf.png" width="28"
                            style="display: inline-block;vertical-align: middle;" alt="resume" />
                        @else
                        <img src="https://msb.plutustec.in/image/employee-friendly-leave-policies.svg" width="28"
                            style="display: inline-block;vertical-align: middle;" alt="resume" />
                        @endif
                        <a style="margin-left: 5px;color: #000000;text-decoration: none;display: inline-block;vertical-align: middle;"
                            href="">{{$resume}}</a>
                    </h4>
                </div>
            </td>
        </tr>
        <tr>
            <td
                style="text-align: center;background-color: #f1f1f1;font-size: 14px;line-height: 20px;padding: 20px 15px;color: #000000;">
                © {{ date('Y') }} <a href="https://plutustec.com/"
                    style="text-decoration: none;color: #ff6c37;margin-left: 5px;">Plutus Technologies Pvt.Ltd.</a></td>
        </tr>
    </table>
</body>

</html>