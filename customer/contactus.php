


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="shortcut icon" href="http://gmcts.co.kr/image/favicon.ico">
        <title>지금 바로 견적 | 굿모닝CTS</title>
        <style type="text/css">
            body {margin: 0; padding:0; color: #000; font-size: 12px; line-height: 40px; text-align:center;}
            .complete_box{margin:33em auto; width:800px; height:500px; text-align:center; border:solid 2px #000;}
            h2{margin: 230px auto 0; font-size: 32px;font-family: "noto-sans"; letter-spacing: -0.05em;}
            h5{font-size: 16px; font-family: "noto-sans"; letter-spacing: -0.05em;font-weight: 600;}
        </style>
    </head>
    <body>
    

        <div class="complete_box">
            <h2>발송 성공</h2>
            <a href="http://gmcts.co.kr/"><h5>홈으로 돌아가기 ></h5></a>
        </div>
        <?php

        $company_01=$_POST['company'];
        $name_02=$_POST['name'];
        $phone_number_03=$_POST['phone_number'];
        $mail_04=$_POST['mail_address'];
        $detail_05=$_POST['detail'];


        $interst_fld_01=$_POST['interest_field_01'];
        $interst_fld_02=$_POST['interest_field_02'];
        $interst_fld_03=$_POST['interest_field_03'];
        $interst_fld_04=$_POST['interest_field_04'];
        $interst_fld_05=$_POST['interest_field_05'];
        $interst_fld_06=$_POST['interest_field_06'];
        $interst_fld_07=$_POST['interest_field_07'];
        $interst_fld_08=$_POST['interest_field_08'];

        $interst_prd_01=$_POST['interest_product_01'];
        $interst_prd_02=$_POST['interest_product_02'];
        $interst_prd_03=$_POST['interest_product_03'];
        $interst_prd_04=$_POST['interest_product_04'];
        $interst_prd_05=$_POST['interest_product_05'];
        $interst_prd_06=$_POST['interest_product_06'];
        $interst_prd_07=$_POST['interest_product_07'];
        $interst_prd_08=$_POST['interest_product_08'];
        $interst_prd_09=$_POST['interest_product_09'];
        $interst_prd_10=$_POST['interest_product_10'];
        $interst_prd_11=$_POST['interest_product_11'];
        $interst_prd_12=$_POST['interest_product_12'];

        
        $to='morning01@gmcts.co.kr';
        $subject="Contact to GoodmorningCTS";
        $msg="기업명: $company_01\n".
        "담당자명: $name_02\n".
        "휴대폰 번호: $phone_number_03\n".
        "이메일: $mail_04\n".

        "관심업종: $interst_fld_01$interst_fld_02$interst_fld_03$interst_fld_04$interst_fld_05$interst_fld_06$interst_fld_07$interst_fld_08\n".
        "관심제품: $interst_prd_01$interst_prd_02$interst_prd_03$interst_prd_04$interst_prd_05$interst_prd_06$interst_prd_07$interst_prd_08$interst_prd_09$interst_prd_10 $interst_prd_11$interst_prd_12\n".

        "내용: $detail_05\n";

        mail($to,$mail_04,$subject,$msg);
        /*
        echo "기업명: ".$company_01.'<br />';
        echo "담당자명: ".$name_02.'<br />';
        echo "휴대폰 번호: ".$phone_number_03.'<br />';
        echo "이메일: ".$mail_04.'<br />';
        echo "관심업종: ".$interst_fld_01, $interst_fld_02, $interst_fld_03, $interst_fld_04, $interst_fld_05, $interst_fld_06, $interst_fld_07, $interst_fld_08.'<br />';
        echo "관심제품: ".$interst_prd_01, $interst_prd_02, $interst_prd_03, $interst_prd_04, $interst_prd_05, $interst_prd_06, $interst_prd_07, $interst_prd_08, $interst_prd_09, $interst_prd_10, $interst_prd_11, $interst_prd_12.'<br />';
        echo "내용: ".$detail_05.'<br />';
    */
        ?>
        
    </body>
</html>