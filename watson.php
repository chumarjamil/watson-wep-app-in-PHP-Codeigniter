    <form method="post" action="./watson.php">
        <input type="text" id="txt" name="txt" size="50" value="<?php if (isset($_POST['txt'])){echo $_POST['txt'];}?>">
        <input type="button" id="btn" name="btn" value="Submit">
    </form>    
    <?php
        if (isset($_POST['txt'])){
            $arr = array('input' => array('text' => $_POST['txt']));        
            $uri = "https://gateway.watsonplatform.net/assistant/api/v1/workspaces/0c951de6-c32f-479e-a759-4a9200c2f6b2/message?version=2018-09-20";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($ch, CURLOPT_USERPWD, "apikey:paotIQpWdP6-g7q6QXiAeliv3LVSUevdb2gTkHQnw2za");
            curl_setopt($ch, CURLOPT_URL,$uri);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arr));
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            echo curl_error($ch);
            $result = json_decode($result, true);
            //echo '<pre>';print_r($result['output']['generic']);echo '</pre>';
            echo '<pre>';print_r($result['output']['text']);echo '</pre>';
        }
    ?>
