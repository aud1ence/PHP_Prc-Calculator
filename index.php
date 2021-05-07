<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="value"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Calculator </title>
    <style type="text/css">
        .nhapvao {
            width:230px;
            margin:0;
            padding:10px;
            border:1px #CCC solid;
        }
        h2 {
            text-align: center;
        }
        .nhapvao input {
            padding:10px; margin:10px
        }
        label {
            text-align: left;
        }
        fieldset {
            width: 250px;
            margin: 0;
            padding: 10px;
            border: 1px #3e2e2e solid;
        }
    </style>

</head>
<body>
<form method="post">
    <fieldset>
        <legend>Calculator</legend>
    <div class="nhapvao">
        <h2>Simple Calculator </h2>
        <label>
            First operand:
            <input type="text" name="first" size="15"  placeholder="So hang dau" />
        </label>
        <label>Operator:
        <select id="operator" name="opera">
            <option value="+">Add</option>
            <option value="-">Subtract</option>
            <option value="*" selected>Multiply</option>
            <option value="/">Divide</option>
        </select>
        </label>
        <label>
            Second operand:
            <input type="text" name="second" size="15" placeholder="So hang hai" />
        </label>
        <input type="submit" value="Calculate" />
    </div>
    </fieldset>
</form>
<fieldset>
    <legend>Result</legend>
    <h2>Result</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $first = $_POST['first'];
        $second = $_POST['second'];
        $opera = $_POST['opera'];
    }
function calculate($first, $second, $opera) {
        if ($second != 0) {
            try {
                throw new Exception("throw new Exception('0')");
            }
            catch (Exception $e) {
                echo "Message: " . $e->getMessage();
                echo "";
            }
        }
    if ($opera == "+") {
        echo $first + $second;
    } elseif ($opera == "-") {
        echo $first - $second;
    } elseif ($opera == "*") {
        echo $first * $second;
    } elseif ($opera == "/") {
        echo $first / $second;
    }
}
    calculate($first, $second, $opera);

    ?>
</fieldset>
</body>
</html>