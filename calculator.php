<?php


    var_dump('aa');
    if (isset($_GET['operator'])) {
        $aa = '55';
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operator = $_GET['operator'];
        $result ='';//定义并初始化变量

        switch ($operator) {
            case '+';
                $result = $num1 + $num2;
                break;
            case '-';
                $result = $num1 - $num2;
                break;
            case '*';
                $result = $num1 * $num2;
                break;
            case '/';
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<script>document.write('除数不能为零！');</script>";
                }
                break;
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="HTML,ASP,PHP,SQL">
        <title>MyCalc</title>
    </head>
    <body>
        <div class="myCalc">
            <form action="">
                <input type="text" name="num1" value="<?php if (isset($num1)) {echo $num1;}?>" />
                <select name="operator" id="operator">
                    <option value="-" >-</option>
                    <option value="+" <?php if (isset($operator) AND $operator=='+') echo 'selected';?>>+</option>
                    <option value="*" <?php if (isset($operator) AND $operator=='*') echo 'selected';?>>x</option>
                    <option value="/" <?php if (isset($operator) AND $operator=='%') echo 'selected';?>>%</option>
                </select>
                <input type="text" name="num2" value="<?php if (isset($_GET['num2'])) {echo $_GET['num2'];}?>" />
                <input type="submit" name="btn" value="=" />
                <?php if(isset($result)) echo '结果是:'.$result;?>
            </form>
        </div>
    </body>
</html>
