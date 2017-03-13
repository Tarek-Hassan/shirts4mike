<?
/*this used to take detials from user
* $_server it check for the method of the form
* header it contain the address of the page that should go to(here it contain the same page)
* ?status=thanks it is variable to check and determind the content of the page (thanxxxxxx )or(the form)
*tirm  for remove every space 
*/?>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST')
     {
        $name=trim ($_POST['name']);
        $email=trim ($_POST['email']);
        $message=trim ($_POST['message']);
        if($name="" || $emai="" ||$message="")
        {
            
            print"please check your input information";
            exit;
        }
        foreach($_POST as $value){                        // this for check the type of every input
           if( stripos($value,'Content-Type:')!==false)
             {
               print "error in information u entered";
               exit;
             }
        }
        //  the form of the email will be sent 
        $emailbody="";
        $emailbody.="name".$name ."<br/>";
        $emailbody.="email".$email ."<br/>";
        $emailbody.="message".$message; 
         // call the class for email in this page 
        // it instal only on time 
        require_once'class.phpmailer.php';
        $mail= new PHPMailer();
        if($mail->ValidateAddress($mail)){ 
         print"your email not valid";
            exit;
        }
        
        $mail->SetFrom($email,$name); //for know the sender
        $address="shirt@ddddddd.com"; // the email i send for him
        $mail->AddAddress($address,"shirts");// 
        $mail->Subject("this message  submission by: " .$name);
        $mail->MsgHTML($emailbody);// that will determind  the shap of the email form 
        if(!$mail->send()){
            print"there is a problem in sending an email" .$mail->ErrorInfo;
            exit; }
        
        header("Location: contact.php?status=thanks");
        exit;
     }
?>

<?php 
    $pagetitle ="contact US";
    $section="contact";
    include("header.php");
?>
<div class="section page">
   <div class="wrapper">
       <h1>contact us</h1>
       
<?//the step of check the variable in the header?>
       
<?php
    if(isset($_GET['status']) AND ($_GET['status']=='thanks'))
    {
        print"<center> thanxxx for send emails </center>";
    } 
       else {
?>
                
       <p> U shoud fill the form to send us an _email </p>
       <form method="post" action="contact.php">
           <table>
               <tr>
                   <th>
                       <lable for="name">Name</lable>
                   </th>
                   <td>
                       <input type="text" name="name" id="name">
                   </td>
               </tr>
               <tr>
                   <th>
                       <lable for="email">E-Mail</lable>
                   </th>
                   <td>
                       <input type="text" name="email" id="email">
                   </td>
               </tr>
               <tr>
                   <th>
                       <lable for="message">Message</lable>
                   </th>
                   <td>
                       <textarea name="message" id="message"></textarea> 
                   </td>
               </tr>
           </table>
           <input type="submit" name="submit" value="send"/>
       </form>  
       
<?php } ?>
       
   </div>
</div>

	<?php include("footer.php");?>