<!DOCTYPE html>
<html>

<head>
    <title>Plutus Technologies pvt.Ltd.</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="font-family: 'Roboto', sans-serif;">
    <table style="padding: 0px; max-width: 740px;width:100%; margin: 0px auto;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr style="width: 100%;display: table;border: 0;">
                <td style="width:90%;padding: 15px 0 15px 40px;border: 0;text-align: center;background-color:#f8f8f6">
                    <a href="{{ env('APP_URL') }}" target="_blank"> <img src="{{ asset('image/Plutus-logo.png') }}"
                            alt="Logo" style="height: 60px;"></a>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{{ asset('image/contact.png') }}" alt="Ecommerce"
                        style="max-width: 450px; height:auto; margin:10px auto; display: block;" />

                </td>
            </tr>
            <tr>
                <td style="width:100%;border: 0;text-align: center;">
                    <h4 style="font-size: 30px;margin:0;font-weight: 500; padding: 10px 0px">Career email details:
                    </h4>
                    <p style="color: #1a1a1a;font-weight: 300;font-size: 14px;">
                        Here are the submitted details:
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="padding: 10px 10px 10px 10px; max-width: 740px;width:100%; margin: 0px auto;"
                        cellpadding="0" cellspacing="0">
                        <tr style="background-color:#FFF3EE">
                            <td style="padding-left: 10px;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px;">
                                    First name
                                </p>
                            </td>
                            <td style="padding-left: 10px;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px;">
                                    {{ $firstName }}
                                </p>
                            </td>
                        </tr>
                        <tr style="background-color:#ffffff">
                            <td style="padding-left: 10px;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px;">
                                    Last name
                                </p>
                            </td>
                            <td style="padding-left: 10px;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px;">
                                    {{ $lastName }}
                                </p>
                            </td>
                        </tr>
                        <tr style="background-color:#FFF3EE">
                            <td style="padding-left: 10px;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px;">
                                    Email
                                </p>
                            </td>
                            <td style="padding-left: 10px;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px;">
                                    <a href="mailto:{{ $email }}" style="color: #000000; text-decoration: none;">
                                        {{ $email }}</a>
                                </p>
                            </td>
                        </tr>
                        <tr style="background-color:#ffffff">
                            <td style="padding-left: 10px;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px;">
                                    Phone
                                </p>
                            </td>
                            <td style="padding-left: 10px;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px;">
                                    {{ $phone }}
                                </p>
                            </td>
                        </tr>
                        <tr style="background-color:#FFF3EE">
                            <td style="padding-left: 10px;vertical-align: top;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px; ">
                                    Expected CTC
                                </p>
                            </td>
                            <td style="padding-left: 10px;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px;">
                                    {{ $expected_ctc }}
                                </p>
                            </td>
                        </tr>
                        <tr style="background-color:#ffffff">
                            <td style="padding-left: 10px;vertical-align: top;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px; ">
                                    Experience
                                </p>
                            </td>
                            <td style="padding-left: 10px;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px;">
                                    {{ $experience_year }} Year {{ $experience_month }} Months
                                </p>
                            </td>
                        </tr>
                        <tr style="background-color:#FFF3EE">
                            <td style="padding-left: 10px;vertical-align: top;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px; ">
                                    Notice period
                                </p>
                            </td>
                            <td style="padding-left: 10px;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px;">
                                    {{ $notice_period }} Month
                                </p>
                            </td>
                        </tr>
                        <tr style="background-color:#ffffff">
                            <td style="padding-left: 10px;vertical-align: top;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px; ">
                                    Current city
                                </p>
                            </td>
                            <td style="padding-left: 10px;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px;">
                                    {{ $current_city }}
                                </p>
                            </td>
                        </tr>
                        <tr style="background-color:#FFF3EE">
                            <td style="padding-left: 10px;vertical-align: top;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px; ">
                                    Resume or cv
                                </p>
                            </td>
                            <td style="padding-left: 10px;">
                                <p style="color: #020202;font-weight: 300;font-size: 14px;">
                                    @if($file_type === 'pdf')
                                    <img src="https://msb.plutustec.in/image/pdf.png" width="28"
                                        style="display: inline-block;vertical-align: middle;" alt="resume" />
                                    @else
                                    <img src="https://msb.plutustec.in/image/doc.png" width="28"
                                        style="display: inline-block;vertical-align: middle;" alt="resume" />
                                    @endif
                                    <a style="margin-left: 5px;color: #000000;text-decoration: none;display: inline-block;vertical-align: middle;"
                                        href="">{{$resume}}</a>
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <div
                        style="width: 100%;background-color: #ffffff;height:auto; text-align: center;align-items: center; padding: 20px 0px;">
                        <ul style=" padding-left: 0px;">
                            <li style="display: inline-block;margin-right:20px;margin-left: 0;">
                                <a href="https://www.facebook.com/PlutusTechnologies/" target="_blank">
                                    <img src="{{ asset('image/facebook.png') }}" alt="ecommerce"
                                        style="padding-right: 10px; width: 20px;"></a>
                                <a href="https://www.linkedin.com/company/plutus-technologies-pvt-ltd/mycompany/"
                                    target="_blank"><img src="{{ asset('image/linkedin.png') }}" alt="ecommerce"
                                        style="padding-right: 10px; width: 20px;"></a>
                                <a href="https://twitter.com/PlutusTech" target="_blank">
                                    <img src="{{ asset('image/twitter.png') }}" alt="ecommerce"
                                        style="padding-right: 10px; width: 20px;">
                                </a>
                            </li>
                        </ul>
                        <p style="color: #020202;font-size: 12px;font-weight: 300;">1222-1223 Zion Z1 , Off Sindhu
                            Bhavan Road, Nr. Avalon Hotel, Bodakdev , Ahmedabad 380054
                        </p>
                        <p style="color: #020202;font-size: 12px;font-weight: 300;">
                            copyright @ {{ date('Y')}} <span style="color: #ff6c37;"> Plutus Technologies
                                Pvt.Ltd.</span>
                        </p>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

</body>

</html>