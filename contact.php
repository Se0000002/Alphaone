<?php
header("Content-Type: text/html; charset=UTF-8");
if(empty($_POST['form-control'])) 		|| // post로 넘어온 name값이 비었는지 확인
  {
    echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> <script>
         window.alert('빈 요소를 작성해 주세요. ');
         history.go(-1);
         </script>";
	return false;  
     }

    $name = strip_tags(htmlspecialchars($_POST['First name','Last name']));
    $message = strip_tags(htmlspecialchars($_POST['Message']));
    $message = strip_tags(htmlspecialchars($_POST['Message']));

    $to = 'abc21389@unist.ac.kr'; // 받는 측의 이메일 주소를 기입하는 부분
    $from = 'sender';
    $email_subject = " $name"; // 메일 제목에 해당하는 부분
    $email_body = "본 메일은 Alphaone Investment에 등록된 문의입니다.\n\n"."세부내용은 다음과 같습니다.\n\nSubject: $name\n\nMessage:\n$message";
    $headers = "From : $from"; // 답장 주소
    
    mail($to,'=?UTF-8?B?'.base64_encode($email_subject).'?=',$email_body, $headers);

    return true;

    if (!$name)
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> <script>
         window.alert('메일 발송이 실패하였습니다. ');
         history.go(-1);
         </script>";
    else
        echo "         <script>
         window.alert('메일이 정상적으로 발송되었습니다.');
         history.go(-1);
         </script>";

?>
