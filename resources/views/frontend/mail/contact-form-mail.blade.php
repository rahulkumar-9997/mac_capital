<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <style>
        table,
        td,
        div,
        h1,
        p {
            font-weight: 500;
            font-family: Arial, sans-serif;
        }
        .btn {margin: 10px 0px;
            border-radius: 4px;
            text-decoration: none;
            color: #fff !important;
            height: 46px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
            background-image: linear-gradient(to right top, #021d68, #052579, #072d8b, #09369d, #093fb0) !important;
        }
        .btn:hover {
            text-decoration: none;
            opacity: .8;
        }
    </style>
</head>
<body style="margin:0;padding:0;">
    <div style="margin: 0; padding: 0 !important;  color: rgba(0,0,0,.4); line-height: 1.8;     font-family: 'Playfair Display', serif;  font-weight: 400; font-size: 15px;">
        <center style="width: 100%; background-color: #f1f1f1;">
			<div style="max-width: 600px; margin: 0 auto;" class="email-container">
				<table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                    <tr>
                        <td style="padding: 0em 2.5em; text-align: center; background-color: #fffbfb;">
                            <img src="{{asset('fronted/mac-image/logo/mac-capital-logo.png')}}" style="width: 45%; padding-top: 10px; padding-bottom: 10px;">
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:center; background-color: #4282AA; color: #ffffff;">
                            <h2 style="color: #ffffff; font-size: 20px; margin-bottom: 5px; font-family: oswald,sans-serif; margin-top: 5px; ">
                                Contact Form Enquiry Message
                            </h2>
                        </td>
                    </tr>
				    <tr>
                        <td style="padding: 20px; width: 100%; background:  #ffffff; text-align: left;">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $data['name'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $data['email'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone/Mobile No.</th>
                                        <td>{{ $data['phone']}}</td>
                                    </tr>
                                    <tr>
                                        <th>Subject.</th>
                                        <td>{{ $data['subject']}}</td>
                                    </tr>
                                    <tr>
                                        <th>Message</th>
                                        <td>{{ $data['message'] }}</td>
                                    </tr>
                                    
                            </table>
                        </td>
				    </tr>
				</table>
				<!-- <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                    <tr>
                        <td valign="middle" style="background-color: #0e1029; color: #fff; padding: 1.1em;">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td style="text-align: center; padding-right: 10px; font-family: oswald,sans-serif;">
                                    <p><strong style="font-size:20px; color: #fff; line-height: 30px;">Contact Details </strong></p>
                                    Email :  
                                    <a style="color:#557e00; text-decoration: none;" href="mailto:info@sankalpbanaras.com" target="_blank" rel="noreferrer">sankalpbanaras@gmail.com, 
                                    info@sankalpbanaras.com</a>
                                    <br>
                                    Contact :  +91-9415285030, 
                                    +91-9208464648 </p>
                                    </td>
                                </tr>
							</table>
                        </td>
                    </tr>
				</table> -->
			</div>
        </center>
    </div>
    


    
</body>
</html>