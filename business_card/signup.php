<?php


    $connect = mysql_connect("localhost","root","apmsetup");
    $db_con = mysql_select_db("lss_db", $connect);

    $sql = 'select * from business_card where name=$_POST[name]';
    $result = mysql_query($sql,$connect);

    $row = mysql_fetch_array($result);

        $sql = "insert into business_card(name, password, email, company, side, jop, blog_url, facebook_id, twitter_id, github_id)
        values('$_POST[name]', '$_POST[password]', '$_POST[email]', '$_POST[company]', '$_POST[side]', '$_POST[jop]', '$_POST[blog_url]', 
                '$_POST[facebook_id]', '$_POST[twitter_id]', '$_POST[blog_url]')";

    $result = mysql_query($sql,$connect);
    if(!$result) {
        echo '<script> alert("에러발생!!");</script>';
    }

    mysql_close();
?>

<script>
    location.href="login_form.php";
</script>
