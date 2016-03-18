<?php	 	
$to ='leo@bigwestdiesel@com.au';

// subject
$subject = 'FR8 Services - Contact Form Submission';

// message
$message = '
<table border="0" width="550px">
    <tr>
        <td colspan="2" align="left" ></td>
    </tr>
    <tr>
        <td colspan="2" align="left" height="20px">You have received a new e-mail.</td>
    </tr>
    <tr>
        <td colspan="2" ></td>
    </tr>
    <tr>
        <td colspan="2" align="left" height="8px">Here are the details:</td>
    </tr>
    <tr>
        <td>Contact Name:</td>
        <td>'.$_POST['comp_name'].'</td>
    </tr>
    <tr>
        <td>Contact Email:</td>
        <td>'.$_POST['email'].'</td>
    </tr>
    <tr>
        <td>Phone No:</td>
        <td>'.$_POST['phone'].'</td>
    </tr>
	   <tr>
        <td>Subject:</td>
        <td>'.$_POST['subject'].'</td>
    </tr>
    <tr>
        <td>Message:</td>
        <td>'.$_POST['message'].'</td>
    </tr>
    <tr>
        <td colspan=2>&nbsp;</td>
    </tr>
    <tr>
        <td colspan=2>&nbsp;</td>
    </tr>
    <tr>
        <td colspan="2">The FR8 Services Team.</td>
    </tr>
</table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers

$headers .= 'From:'.$_POST['email']. "\r\n";


// Mail it
mail($to, $subject, $message, $headers);

echo "<script>alert('Thank you for contacting us! We will be in touch with you shortly.')</script>";
echo"<script>window.location='contactus.php'</script>";
?>