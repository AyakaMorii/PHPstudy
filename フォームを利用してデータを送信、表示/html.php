<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>POST_SAMPLE</title>
    </head>

    <body>
        <?php
            echo "名前は「".$_POST["name"] ."」です。";
            echo "メールアドレスは「".$_POST["email"] ."」です。";
            echo "内容は「".$_POST["message"] ."」です。";
        ?>
        </form>
        <div>
            <p><a href="index.php" title="戻る">戻る</a></p>
        </div>
    </body>
</html>