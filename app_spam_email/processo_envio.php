
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spam is life</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
   <div class="container">
       <h1 class="text-center">
           App spam email
       </h1>
   </div>
   <div class="container">
        <?
            require "./PHPMailer/Exception.php";
            require "./PHPMailer/OAuth.php";
            require "./PHPMailer/PHPMailer.php";
            require "./PHPMailer/POP3.php";
            require "./PHPMailer/SMTP.php";
            ini_set('max_execution_time', 600);
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;
            class mensagem {
                private $de = null;
                private $senha = null;
                private $para = null;
                private $assunto = null;
                private $mensagem = null;
                private $quantidade = null;
                
                public function __get($arg){
                    return $this-> $arg;
                }
                public function __set($arg,$value){
                    $this->$arg = $value;
                }
                public function ValidaEmail()
                {
                if (empty($de)||empty($para)||empty($assunto)||empty($mensagem)||empty($quantidade)||empty($senha)) {
                    return true;
                }
                else{
                    return false;
                }
                }
            }
            $mensagem = new Mensagem();
            $mensagem->__set('para',$_POST['para']);
            $mensagem->__set('assunto',$_POST['assunto']);
            $mensagem->__set('mensagem',$_POST['mensagem']);
            $mensagem->__set('de',$_POST['de']);
            $mensagem->__set('senha',$_POST['senha']);
            $mensagem->__set('quantidade',$_POST['quantidade']);
            $a = $mensagem->__get('quantidade');
            $b = (int) $a;
            $c = 0;
            $k = false;
            if (!$mensagem->ValidaEmail()) {
            echo 'mensagem não foi validada';
            header("Location:index.php");
            } 
            $mail = new PHPMailer(true);
            while($c<=$b){
            try {
                //Server settings
                $mail->SMTPDebug = 0;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host = 'smtp.gmail.com ';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                                  // Enable SMTP authentication
                $mail->Username   = $mensagem->__get('de');                     // SMTP username
                $mail->Password   = $mensagem->__get('senha');                               // SMTP password
                $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom($mensagem->__get('de'), 'Admin');
                $mail->addAddress($mensagem->__get('para'), 'User');     // Add a recipient

                

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = $mensagem->__get('assunto') . " " . $c;
                $mail->Body    = $mensagem->__get('mensagem');
            

                $mail->send();
            
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            if ($c<$b) {
                
                $k=false;
            }
            else{
                $k=true;
            }

            $c++;
            
         }
        ?>
        <?if ($k==true) {?>
            <div>
            <h3 class="alert alert-success">Emails enviados com sucesso</h3>
            <a type="button" class="btn btn-outline-success" href="index.php">retornar</a>
           </div>
        <? }?>
        
</body>
</html>
