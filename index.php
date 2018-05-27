<?php
    $current = "";
    $answer = "";
    if (!empty($_POST))
    {
        $current = $_POST["appcode1"];
        $file = "cplusplus.cpp";
        file_put_contents($file, $current);
        putenv("PATH=C:\Program Files (x86)\Dev-Cpp\MinGW64\bin");
        shell_exec("g++ cplusplus.cpp -o cplusplus.exe");
        $answer = shell_exec("cplusplus.exe");
    }
?>

<style>
    .textArea{
        resize: none;
        outline: none;
        width: 390px;
        height: 590px;
        border: 3px solid #cccccc;
        padding: 5px;
        font-family: Tahoma, sans-serif;
        background-position: bottom right;
        background-repeat: no-repeat;
        font-size:17.5px;
        text-color: #757575;
    }
</style>
<form method="POST">
    <textarea name="appcode1" style="background: #EEEEF1" placeholder="Enter C++ Code..." class="textArea"><?php echo $current; ?></textarea>
    <input type="submit" name="" value="FST Run Code">
    <textarea name="appcode2" style="background: #EEEEF1" disabled placeholder="See Result..." class="textArea"><?php echo $answer; ?></textarea>
</form>