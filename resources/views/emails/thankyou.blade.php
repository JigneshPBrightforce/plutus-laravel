<!DOCTYPE html>
<html>

<head>
    <title>Plutus</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="font-family: 'Roboto', sans-serif;">
    <table style="padding: 0px; max-width: 740px;width:100%; margin: 0px auto;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td>
                    <img src="{{ asset('image/web_email_design.png') }}" alt="Ecommerce"
                        style="max-width: 450px; height:auto; margin:60px auto; display: block;" />

                </td>
            </tr>
            <tr>
                <td style="width:100%;border: 0;text-align: center;padding: 0 0 40px">
                    <h4 style="font-size: 30px;margin:0;font-weight: 500; padding: 0px 0px">Thank you for joining with
                        us</h4>
                    <p style="color: #1a1a1a;font-weight: 400;font-size: 14px;">
                        Our project manager will reach to you in 2 to 3 working day.
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <div
                        style="width: 100%;background-color: #ffffff;height:auto; text-align: center;align-items: center; padding: 20px 0px;">
                        <a href="{{ env('APP_URL') }}" target=" _blank" style="text-align:center;display: block;">
                            <img src="{{ asset('image/Plutus-logo.png') }}" alt="Logo"
                                style="height: 60px;margin: auto;"></a>
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
                        <p style="color: #020202;font-size: 12px;font-weight: 400;">1222-1223 Zion Z1 , Off Sindhu
                            Bhavan Road, Nr. Avalon Hotel, Bodakdev , Ahmedabad 380054
                        </p>
                        <p style="color: #020202;font-size: 12px;font-weight: 400;">
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