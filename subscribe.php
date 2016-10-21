// Simpleeee

<?php
$api_key = "0";
$list_id = "0";
$merge_vars = array('FNAME' => $_POST['fname'],'LNAME' => $_POST['lname'],'MMERGE2' => $_POST['MMERGE2']);
$double_optin = FALSE;
$email_type = 'html';

require('Mailchimp.php');
$Mailchimp = new Mailchimp( $api_key );
$Mailchimp_Lists = new Mailchimp_Lists( $Mailchimp );

$double_optin = FALSE;

$subscriber = $Mailchimp_Lists->subscribe( $list_id, array( 'email' => htmlentities($_POST['email'])), $merge_vars, $email_type, $double_optin, NULL, NULL, true );

if ( ! empty( $subscriber['leid'] ) ) {
   echo "success";
}
else
{
    echo "fail";
}

?>