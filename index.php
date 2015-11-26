<?php
/*require('/var/lib/php/Smarty/Smarty.class.php');*/
//error_reporting(0);
require 'smarty/config.php';
require 'php/dbConnect.php';
if (session_status() == PHP_SESSION_NONE) {
    session_set_cookie_params(3600,"/");
    session_start();
}
if(isset($_GET['lang']))
{
    if($_GET['lang'] == 'en' or $_GET['lang'] == 'lt' or $_GET['lang'] == 'ru')
    {
        $lang = $_GET['lang'];
        $_SESSION["lang"] = $lang;
    }
    else{
       header("Location: 404.php");
    }
}
else{
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if($lang == "en" or $lang == "lt" or $lang == "ru")
    {
        $_SESSION["lang"] = $lang;
        header("Location: $lang");
    }
    else{
        $lang == "en";
        $_SESSION["lang"] = "en";
        header("Location: en");
    }
}
/*session_start();
if (isset($_SESSION['lang']))
{
    $lang = $_SESSION['lang'];
}
else{
    $lang = "lt";
}*/
$showMenu = true;
date_default_timezone_set("Europe/Vilnius");
$today = date('Y-m-d H:i:s'); 
$sql = "SELECT * FROM skills WHERE lang = '$lang'";
$result = mysqli_query($link, $sql) or die(mysql_error());
while($row = (mysqli_fetch_assoc($result)))
{
    $list[] = $row;
}
$sql = "SELECT  en, lt, ru FROM translations";
$result = mysqli_query($link, $sql) or die(mysql_error());
while($row = (mysqli_fetch_assoc($result)))
{
    $translations[] = $row;
}
$sql = "SELECT * FROM experience ORDER BY experienceid DESC";
$result = mysqli_query($link, $sql) or die(mysql_error());
while($row = (mysqli_fetch_assoc($result)))
{
    $experience[] = $row;
}
$query = "SELECT * FROM projects ORDER BY projectid ASC";
$result = mysqli_query($link,$query) or die(mysql_error());
while($row = (mysqli_fetch_assoc($result)))
{
    $projects[] = $row;
}
$query = "SELECT * FROM user WHERE userid = 1";
$result = mysqli_query($link,$query) or die(mysql_error());
while($row = (mysqli_fetch_assoc($result)))
{
    $about[] = $row;
}
$query = "SELECT * FROM sections ";
$result = mysqli_query($link,$query) or die(mysql_error());
while($row = (mysqli_fetch_assoc($result)))
{
    $sections[] = $row;
}
$query = "SELECT * FROM startpage WHERE startid = 1";
$result = mysqli_query($link, $query) or die(mysql_error());
while($row = (mysqli_fetch_assoc($result)))
{
    $startpage[] = $row;
}

if (isset($_SESSION['username']))
{
    $is_admin = true;
    $loged_as = $_SESSION['username'];
    $session_id = session_id();
    $smarty->assign('SID', $session_id);
    $smarty->assign('loged_as', $loged_as);
   // $smarty->assign('language', $langId);
}
else {
    $is_admin = false;
}
$query = "SELECT * FROM sections where shown=1";
$result = mysqli_query($link,$query) or die(mysql_error());
while($row = (mysqli_fetch_assoc($result)))
{
    $section[] = $row['name'];
}
$count = count($section);
//print_r($sections);
for($i=0; $i<= $count-1; $i++)
{
   // getContent($section[$i], $link);
}
function getContent($pageToShow, $link){
    $lang = $_GET['lang'];
    $sectionname = $pageToShow;
    $query = "SELECT usingTable FROM sections WHERE name = '$pageToShow'";
    $res = mysqli_query($link, $query) or die(mysqli_error($link));
    $usingTable = (mysqli_fetch_assoc($res));
    $comma = implode(",", (array)$usingTable);
    $sql = "SELECT * FROM $comma";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    $smarty = new Smarty();
    if($result){
        while($row = (mysqli_fetch_assoc($result)))
        {
            $page[] = $row;
        }
        $smarty->assign("$pageToShow", $page);
        $smarty->assign('is_admin', false);
        $smarty->assign('lang', $lang);
        $smarty->assign('showMenu', true);
       // $smarty->display("smarty/templates/main/index.tpl");
    }
    else{
        $smarty->assign('is_admin', false);
        $smarty->assign('lang', $lang);
        $smarty->assign('showMenu', true);
      //  $smarty->display("smarty/templates/main/index.tpl");
    }  
}
function smarty_function_translation($params, &$smarty)
{
    require 'php/dbConnect.php';
    $sql = "SELECT translationid, en, lt, ru FROM translations";
    $result = mysqli_query($link, $sql) or die(mysql_error());
    while($row = (mysqli_fetch_assoc($result)))
    {
        $translations[] = $row;
    }
    if(isset($_SESSION['lang']))
    {
        $lang = $_SESSION['lang'];
    }
    else{
        $lang = "lt";
    }
    if(isset($params['langEn'])){
        $en = $params['langEn'];
        foreach ($translations as $b) {
            if ($b['en'] == $en) {
                $output = $b[$lang];
                return $output;
            }
        } 
    }
    if(isset($params['langId'])){
        $id = $params['langId'];
        foreach ($translations as $b) {
            if ($b['translationid'] == $id) {
                $output = $b[$lang];
                return $output;
            }
        } 
    }
   
}
function smarty_function_skills($params, &$smarty)
{
    $cat = $params['cat'];
    require 'php/dbConnect.php';
    $sql = "SELECT * FROM skills WHERE lang = 'en' AND category = '$cat'";
    $result = mysqli_query($link, $sql) or die(mysql_error());
    while($row = (mysqli_fetch_assoc($result))){
        $skills[] = $row;
    }
    $maxCount = count($skills);
    $nCount = ceil($maxCount/4);
    $index = 1;
    $count = 4;
    for($n=1; $n<=$nCount; $n++){
            echo '<ul class="skills-list">';
            if($count > $maxCount ){
                $count = $maxCount;
            }
            for($i=$index; $i<=$count; $i++){
                $in = $i-1;
                if($count < $maxCount){
                    echo '<li><img id="skill',$skills[$in]['skillid'],'" class="skill-image" src="',$skills[$in]['skillimage'],'" alt=""> </li>';
                    if($i%4 == 0 ){
                        echo '</ul>';
                        for($i=$index; $i<=$count; $i++){
                            echo '<article id="skill',$skills[$i-1]['skillid'],'-desc" class="skill-description">
                            <h4>',$skills[$i-1]['skillname'],'</h4>
                            ',$skills[$i-1]['skilldescription'],'
                            </article>';
                        }
                    }
                }
                else if ($count == $maxCount){
                    for($i=$index; $i<=$count; $i++){
                        echo '<li><img id="skill',$skills[$i-1]['skillid'],'" class="skill-image" src="',$skills[$i-1]['skillimage'],'" alt=""> </li>';
                    }
                    echo '</ul>';
                    for($i=$index; $i<=$count; $i++){
                        echo '<article id="skill',$skills[$i-1]['skillid'],'-desc" class="skill-description">
                        <h4>',$skills[$i-1]['skillname'],'</h4>
                        ',$skills[$i-1]['skilldescription'],'
                        </article>';
                    }
                }
            }
            $index = $index+4;
            $count = $count+4;
    } 
}
$smarty->assign('is_admin', false);
$smarty->assign('list', $list);
$smarty->assign('lang', $lang);
$smarty->assign('translations', $translations);
$smarty->assign('projects', $projects);
$smarty->assign('experience', $experience);
$smarty->assign('startpage', $startpage);
$smarty->assign('about', $about);
$smarty->assign('sections', $sections);
$smarty->assign('date', $today);
$smarty->assign('cms', 'false');
$smarty->assign('showMenu', 'true');
$smarty->display('smarty/templates/main/index.tpl');
?>