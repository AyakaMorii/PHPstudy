<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="index.php; charset=UTF-8">
<title>値を出力</title>

<html>
<head>
        <title>calculator</title>  
        <meta charset="UTF-8">
    </head>
    <body>	
        <?php	
        $num1 = $_POST['num1'];	
        $num2 = $_POST['num2'];	

        $operation = $_POST['r1'];	
        
              if ($num1 == "" || $num2 == ""  || $operation == "") {	
            echo("エラーです。値を入力してください。");	
            } 	
            
            else{	
                
                if ($operation === "+") {	
                      $add = $num1 + $num2;	
                      echo ("足し算の結果: " . $add);	
                  }	
                  else if ($operation === "-") {	
                      $sub = $num1 - $num2;	
                      echo ("引き算の結果: " . $sub);	
                  }	
                  else if ($operation === "*") {	
                      $mul = $num1 * $num2;	
                      echo ("掛け算の結果: " . $mul);	
                  }	
                  else if ($operation === "/") {	
                      if ($num2 == 0) {	
                          echo ("0での割り算はできません");	
                      }	
                      else {	
                          $div = $num1 / $num2;	
                          echo ("割り算の結果: " . $div);	
                      }	
                      
                  }	
                  
                  else {	
                      echo ("符号がおかしい為、計算できません。 " );	
                        }
            }	
	
        ?>	
        <div>
          <p><a href="index.php" title="戻る">戻る</a></p>
        </div>
    </body>	
</html>