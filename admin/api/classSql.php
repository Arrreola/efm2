<?php

class consultar
{
    public $listRtn = '';

    public function __construct($qry)
    {
        $conex = '';
        require 'conexion.php';

        $temp = array();

        if (!$result = $conex->query($qry)) {

            die('There was an error running the query [' . $conex->error . ']');

            $conex->close();

        } else {

            $sql = $conex->query($qry);

            while ($row = $sql->fetch_array(MYSQLI_ASSOC)) {

                array_push($temp, $row);

            }

            mysqli_free_result($sql);

            $conex->close();

            $this->listRtn = $temp;


        }

    }

}

class toolMethods
{
    public static function urls_amigables($url)
    {

        $url = strtolower($url);

        //Rememplazamos caracteres especiales latinos

        $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ', 'Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ', '°');

        $repl = array('a', 'e', 'i', 'o', 'u', 'n', 'A', 'E', 'I', 'O', 'U', 'N', 'o');

        $url = str_replace($find, $repl, $url);

        // Añaadimos los guiones

        $find = array(' ', '&', '\r\n', '\n', '+');
        $url = str_replace($find, '-', $url);

        // Eliminamos y Reemplazamos demás caracteres especiales

        $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');

        $repl = array('', '-', '');

        $url = preg_replace($find, $repl, $url);

        return $url;
    }

    public static function clearNamePic($url)
    {

        $string = strtolower(trim($url));

        $string = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $string
        );
        $string = strtolower($string);
        $string = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $string
        );
        $string = strtolower($string);
        $string = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $string
        );
        $string = strtolower($string);
        $string = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $string
        );
        $string = strtolower($string);
        $string = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $string
        );
        $string = strtolower($string);
        $string = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C',),
            $string
        );
        $string = strtolower($string);
        //Esta parte se encarga de eliminar cualquier caracter extraño
        $string = str_replace(
            array("\\", "¨", "º", "_", "~", "#", "@", "|", "!", "\"", "$", "%", "&", "/", "(", ")", "?", "'", "¡", "¿", "[", "^", "`", "]", "+", "}", "{", "¨", "´", ">", "< ", ";", ",", ":", " "), '-', $string);

        return $string;
    }

    public static function getFirstParagraph($excerpt, $maxSpace)
    {
        $unir = '';

        preg_match('#<p>.*?</p>#mi', $excerpt, $m);

        $explod = explode(" ", $m[0]);

        for ($i = 0; $i < count($explod); $i++) {

            if ($i < ($maxSpace - 1)) {
                $unir .= $explod[$i] . " ";
            }

        }

        return $unir;

    }

    public static function GetSQLValueString($theValue, $theType, $longTxt)
    {
        //AQUI REMOVI EL % debo de buscar una manera de que cuando encuentre estas palabras las escape para que no exista problema.
        $clearString = array('SELECT', 'COPY', 'DELETE', 'DROP', 'DUMP', ' OR ', 'LIKE', '--', '^', '[', ']', '\\');

        if ($longTxt == false) {
            $theValue = strip_tags($theValue);
        }

        $theValue = str_ireplace($clearString, '', $theValue);

        $theValue = preg_replace("#<script(.*?)</script>#", '', $theValue);

        switch ($theType) {
            case "text" :
                $theValue = ($theValue != "") ? htmlentities(trim($theValue), ENT_QUOTES) : "NULL";
                break;
            case "long" :
            case "int" :
                $theValue = ($theValue != "") ? intval($theValue) : "NULL";
                break;
            case "double" :
                $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
                break;
            case "date" :
                $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
                break;
        }

        return $theValue;
    }

    public static function dia_semana($fecha, $format, $len)
    {
        $separa = explode('-', $fecha);
        $ano = $separa[0];
        $mes = $separa[1];
        $sepDh = explode(' ', $separa[2]);
        $dia = $sepDh[0];
        $hrs = $sepDh[1];
        //$semana = $

        if ($len == 'es') :

            $dias = array('DOMINGO', 'LUNES', 'MARTES', 'MIERCOLES', 'JUEVES', 'VIERNES', 'SABADO');
            $mounth = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

        else :

            $dias = array('SUN', 'MON', 'TUE', 'WED', 'THUR', 'FRI', 'SAT');
            $mounth = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

        endif;

        switch ($format) :

            case 'smdy' :
                $fechafinal = $dias[date("w", mktime(0, 0, 0, $mes, $dia, $ano))] . ", " . $mounth[($mes - 1)] . " " . $dia . ", " . $ano;
                break;
            case 'mdy' :
                $fechafinal = $mounth[($mes - 1)] . " " . $dia . ", " . $ano;
                break;
            case 'dmy' :
                $fechafinal = $dia . " - " . $mounth[($mes - 1)] . " - " . $ano;
                break;
            case 'dmyt' :
                $fechafinal = $dia . "  " . $mounth[($mes - 1)] . "  " . $ano . " a las " . $hrs;
                break;
            case 'my' :
                $fechafinal = $mounth[($mes - 1)] . " " . $ano;
                break;
            default:
                $fechafinal = $dias[date("w", mktime(0, 0, 0, $mes, $dia, $ano))] . " " . $dia . " de " . $mounth[($mes - 1)] . ", " . $ano;
                break;

        endswitch;

        return $fechafinal;

    }

}

class loginUser
{
    //variable publica
    public $callback;

    public function __construct($usr, $pass)
    {
        $conex = '';
        include 'conexion.php';

        $qryLogin = "SELECT * FROM admin WHERE usuario='{$usr}' AND password='{$pass}'";
        $conLogin = $conex->query($qryLogin);
        while ($rowLogin = $conLogin->fetch_assoc()):
            if ($rowLogin['id_usr'] != ''):
                $this->callback = $rowLogin['id_usr'];
            endif;
        endwhile;
        $conLogin->free();
        $conex->close();
    }
}

class saveNot
{
    public static function crud($tit_es, $tit_en, $ds_es, $ds_en, $desc_es, $desc_en, $imgArray, $cf, $cat, $art_rel, $status, $destacar, $sem, $idReg, $action)
    {
        $conex = '';
        $arrayPic = [];
        include 'conexion.php';
        $url_es = toolMethods::urls_amigables($tit_es);
        $url_en = toolMethods::urls_amigables($tit_en);
        $urlFolder = '../img/blog/';

        switch ($action) :

            case 'update' :
            case 'insert' :

                if (count($imgArray) > 0) :
                    $i = 0;
                    foreach ($imgArray as $key => $valor) :

                        $archivo = $imgArray[$key]['name'];
                        $prefijo = substr(md5(uniqid(rand())), 0, 6);
                        $cleanName = toolMethods::clearNamePic($archivo);
                        $file = $prefijo . "_" . $cleanName;
                        $folder_img_temp = $urlFolder . $file;

                        $extensions = array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'pdf');

                        if ($archivo != "" && $archivo != $cf[$i]) :
                            if (in_array(pathinfo($archivo, PATHINFO_EXTENSION), $extensions)):
                                if (copy($imgArray[$key]['tmp_name'], $folder_img_temp)) :
                                    $arrayPic[] = $file;
                                endif;
                            endif;
                        else:
                            $arrayPic[] = $cf[$i];
                        endif;
                        $i++;
                    endforeach;
                endif;

                if ($action == 'insert') :

                    $qry = "INSERT INTO blog (tit_es,tit_en,desc_short_es,desc_short_en,info_es,info_en,img,cate,status,url_es,url_en,fecha,destacar,pdf_es,pdf_en,sem) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,NOW(),?,?,?,?)";
                    $stmt = $conex->prepare($qry);
                    $stmt->bind_param("sssssssiississi", $tit_es, $tit_en, $ds_es, $ds_en, $desc_es, $desc_en, $arrayPic[0], $cat, $status, $url_es, $url_en, $destacar, $arrayPic[1], $arrayPic[2], $sem);
                    $resp = $stmt->execute();
                    if (false === $resp) :
                        die('execute() failed: ' . htmlspecialchars($stmt->error));
                    endif;
                    $new_id = $conex->insert_id;

                endif;

                if ($action == 'update') :

                    if ($arrayPic[0] != $cf[0]):
                        self::unlinkFiles($urlFolder, $cf[0]);
                    endif;

                    if ($arrayPic[1] != $cf[1]):
                        self::unlinkFiles($urlFolder, $cf[1]);
                    endif;

                    if ($arrayPic[2] != $cf[2]) :
                        self::unlinkFiles($urlFolder, $cf[2]);
                    endif;

                    $qry = "UPDATE blog SET tit_es=?,tit_en=?,desc_short_es=?,desc_short_en=?,info_es=?,info_en=?,img=?,cate=?,status=?,url_es=?,url_en=?,destacar=?,pdf_es=?,pdf_en=?,sem=? WHERE id_not=?";
                    $stmt = $conex->prepare($qry);
                    $stmt->bind_param("sssssssiississii", $tit_es, $tit_en, $ds_es, $ds_en, $desc_es, $desc_en, $arrayPic[0], $cat, $status, $url_es, $url_en, $destacar, $arrayPic[1], $arrayPic[2], $sem, $idReg);
                    $resp = $stmt->execute();
                    if (false === $resp) :
                        die('execute() failed: ' . htmlspecialchars($stmt->error));
                    endif;

                    $new_id = $idReg;

                endif;

                break;

            case'delete' :

                $urlPic = '../images/blog/' . $cf;

                if (is_file($urlPic)) :

                    unlink($urlPic);

                endif;

                $sqlPost = $conex->prepare("DELETE FROM blog WHERE id_blo = ?");
                $sqlPost->bind_param('i', $idReg);
                $sqlPost->execute();
                $sqlPost->close();

                break;
        endswitch;

        $qry = "DELETE FROM rel_tags WHERE id_post=" . $new_id;
        $conex->query($qry);

        if (count($art_rel) > 0) :

            for ($i = 0; $i < count($art_rel); $i++) :

                $sqlRel = $conex->prepare("INSERT INTO rel_tags (id_post,id_tag) VALUES(?,?)");
                $sqlRel->bind_param('ii', $new_id, $art_rel[$i]);
                $sqlRel->execute();
                $sqlRel->close();

            endfor;

        endif;

        $stmt->close();
        $conex->close();

    }

    private static function unlinkFiles($_urlFolder, $file)
    {

        if (is_file($_urlFolder . $file)):
            unlink($_urlFolder . $file);
        endif;

    }

}

class cateLen
{
    public static function crud($tit_es, $tit_en, $idReg, $action)
    {
        $conex = '';
        require 'conexion.php';

        $url_es = toolMethods::urls_amigables($tit_es);
        $url_en = toolMethods::urls_amigables($tit_en);

        switch ($action):
            case'insert':

                $qry = "INSERT INTO categorias (tit_es,tit_en,url_es,url_en) VALUES (?, ?, ?, ?)";
                $stmt = $conex->prepare($qry);
                //investivar como funciona el bind_param
                $stmt->bind_param("ssss", $tit_es, $tit_en, $url_es, $url_en);

                break;
            case 'update':

                $qry = "UPDATE categorias SET tit_es = ?,tit_en = ?,url_es = ?,url_en = ? WHERE id_cate = ?";
                $stmt = $conex->prepare($qry);

                $stmt->bind_param("ssssi", $tit_es, $tit_en, $url_es, $url_en, $idReg);

                break;
            case 'delete':
                $qry = "DELETE FROM categorias WHERE id_cate = ?";
                $stmt = $conex->prepare($qry);

                $stmt->bind_param("i", $idReg);
                break;
        endswitch;

        $resp = $stmt->execute();
        if (false === $resp) :
            die('execute() failed: ' . htmlspecialchars($stmt->error));
        endif;

        $stmt->close();
        $conex->close();

    }
}

class edosLen
{
    public static function crud($tit_es, $tit_en, $idReg, $action)
    {

        $conex = '';
        require 'conexion.php';

        switch ($action):

            case'insert':

                $qry = "INSERT INTO statuspro (edo_es,edo_en) VALUES (?, ?)";
                $stmt = $conex->prepare($qry);
                //investivar como funciona el bind_param
                $stmt->bind_param("ss", $tit_es, $tit_en);

                break;
            case 'update':

                $qry = "UPDATE statuspro SET edo_es = ?,edo_en = ? WHERE id_st = ?";
                $stmt = $conex->prepare($qry);

                $stmt->bind_param("ssi", $tit_es, $tit_en, $idReg);

                break;
            case 'delete':

                $qry = "DELETE FROM statuspro WHERE id_st = ?";
                $stmt = $conex->prepare($qry);
                $stmt->bind_param("i", $idReg);
                break;

        endswitch;

        $resp = $stmt->execute();
        if (false === $resp) :
            die('execute() failed: ' . htmlspecialchars($stmt->error));
        endif;

        $stmt->close();
        $conex->close();

    }
}

class saveOp
{
    public static function crud($tit_es, $tit_en, $ds_es, $ds_en, $desc_es, $desc_en, $imgNot, $cf, $stOp, $btnEs, $btnEn, $linkBtnEs, $linkBtnEn, $status, $idReg, $action)
    {

        $conex = '';
        $arrayPic = [];
        include 'conexion.php';
        $url_es = toolMethods::urls_amigables($tit_es);
        $url_en = toolMethods::urls_amigables($tit_en);
        $urlFolder = '../img/operaciones/';

        switch ($action) :

            case 'update' :
            case 'insert' :

                if ($imgNot['imgNot']['name'] != '') :

                    $archivo = $imgNot['imgNot']['name'];
                    $prefijo = substr(md5(uniqid(rand())), 0, 6);
                    $cleanName = toolMethods::clearNamePic($archivo);
                    $file = $prefijo . "_" . $cleanName;
                    $folder_img_temp = $urlFolder . $file;

                    $extensions = array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'pdf');

                    if (in_array(pathinfo($archivo, PATHINFO_EXTENSION), $extensions)):

                        if (copy($imgNot['imgNot']['tmp_name'], $folder_img_temp)) :

                            if ($action == 'insert') :

                                $qry = "INSERT INTO operaciones (tit_es,tit_en,desc_short_es,desc_short_en,info_es,info_en,img,edo,status,url_es,url_en,fecha,btn_es,btn_en,linkBtn_es,linkBtn_en) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?, ?, ?,?)";
                                $stmt = $conex->prepare($qry);
                                $stmt->bind_param("sssssssiissssss", $tit_es, $tit_en, $ds_es, $ds_en, $desc_es, $desc_en, $file, $stOp, $status, $url_es, $url_en, $btnEs, $btnEn, $linkBtnEs, $linkBtnEn);

                            endif;

                            if ($action == 'update') :

                                if ($file != $cf):
                                    self::unlinkFiles($urlFolder, $cf);
                                endif;

                                $qry = "UPDATE operaciones SET tit_es=?,tit_en=?,desc_short_es=?,desc_short_en=?,info_es=?,info_en=?,img=?,edo=?,status=?,url_es=?,url_en=?,btn_es=?,btn_en=?,linkBtn_es=?,linkBtn_en=? WHERE id_op=?";
                                $stmt = $conex->prepare($qry);
                                $stmt->bind_param("sssssssiissssssi", $tit_es, $tit_en, $ds_es, $ds_en, $desc_es, $desc_en, $file, $stOp, $status, $url_es, $url_en, $btnEs, $btnEn, $linkBtnEs, $linkBtnEn, $idReg);

                            endif;

                        endif;

                    endif;
                else:
                    if ($action == 'insert') :

                        $qry = "INSERT INTO operaciones (tit_es,tit_en,desc_short_es,desc_short_en,info_es,info_en,,edo,status,url_es,url_en,fecha,btn_es,btn_en,linkBtn_es,linkBtn_en) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?, ?, ?,?)";
                        $stmt = $conex->prepare($qry);
                        $stmt->bind_param("sssssssiisssss", $tit_es, $tit_en, $ds_es, $ds_en, $desc_es, $desc_en, $stOp, $status, $url_es, $url_en, $btnEs, $btnEn, $linkBtnEs, $linkBtnEn);

                    endif;

                    if ($action == 'update') :

                        $qry = "UPDATE operaciones SET tit_es=?,tit_en=?,desc_short_es=?,desc_short_en=?,info_es=?,info_en=?,edo=?,status=?,url_es=?,url_en=?,btn_es=?,btn_en=?,linkBtn_es=?,linkBtn_en=? WHERE id_op=?";
                        $stmt = $conex->prepare($qry);
                        $stmt->bind_param("ssssssiissssssi", $tit_es, $tit_en, $ds_es, $ds_en, $desc_es, $desc_en, $stOp, $status, $url_es, $url_en, $btnEs, $btnEn, $linkBtnEs, $linkBtnEn, $idReg);

                    endif;
                endif;

                break;

            case'delete' :

                $urlPic = '../images/operaciones/' . $cf;

                if (is_file($urlPic)) :

                    unlink($urlPic);

                endif;

                $sqlPost = $conex->prepare("DELETE FROM operaciones WHERE id_op = ?");
                $sqlPost->bind_param('i', $idReg);
                $sqlPost->execute();
                $sqlPost->close();

                break;
        endswitch;

        $resp = $stmt->execute();
        if (false === $resp) :
            die('execute() failed: ' . htmlspecialchars($stmt->error));
        endif;

        $stmt->close();
        $conex->close();

    }

    private static function unlinkFiles($_urlFolder, $file)
    {

        if (is_file($_urlFolder . $file)):
            unlink($_urlFolder . $file);
        endif;

    }

}

class tagsLen
{
    public static function crud($tit_es, $tit_en, $idReg, $action)
    {
        $conex = '';
        require 'conexion.php';

        $url_es = toolMethods::urls_amigables($tit_es);
        $url_en = toolMethods::urls_amigables($tit_en);

        switch ($action):
            case'insert':
                $qry = "INSERT INTO tags (tit_es,tit_en,url_es,url_en) VALUES (?, ?, ?, ?)";
                $stmt = $conex->prepare($qry);
                $stmt->bind_param("ssss", $tit_es, $tit_en, $url_es, $url_en);
                break;
            case 'update':
                $qry = "UPDATE tags SET tit_es = ?,tit_en = ?,url_es = ?,url_en = ? WHERE id_tag = ?";
                $stmt = $conex->prepare($qry);
                $stmt->bind_param("ssssi", $tit_es, $tit_en, $url_es, $url_en, $idReg);
                break;
            case 'delete':
                $qry = "DELETE FROM tags WHERE id_tag = ?";
                $stmt = $conex->prepare($qry);
                $stmt->bind_param("i", $idReg);
                break;
        endswitch;

        $resp = $stmt->execute();
        if (false === $resp) :
            die('execute() failed: ' . htmlspecialchars($stmt->error));
        endif;

        $stmt->close();
        $conex->close();

    }
}

class conteoPost
{
    public static function getList($len)
    {
        $moreVisit = array();
        $chkVisit = new consultar('SELECT *,COUNT(idVist) as totalReg FROM visitpost GROUP BY idPost ORDER BY totalReg DESC LIMIT 5');
        $rowVisit = $chkVisit->listRtn;
        $totVisit = count($rowVisit);
        if ($totVisit > 0):
            for ($v = 0; $v < $totVisit; $v++):
                //NOMBRE DEL POST
                $chckBlog = new consultar('SELECT * FROM blog WHERE id_not=' . $rowVisit[$v]['idPost']);
                $rowBlog = $chckBlog->listRtn;
                $namePost = html_entity_decode($rowBlog[0]['tit_' . $len]);
                //COLOR DE LA CATEGORIA
                $sqlCat = new consultar('SELECT * FROM categorias WHERE id_cate=' . $rowVisit[$v]['idCat']);
                $rowCat = $sqlCat->listRtn;
                array_push($moreVisit, array($rowBlog[0]['url_' . $len], $namePost, $rowCat[0]['url_' . $len]));
            endfor;
        endif;
        return $moreVisit;
    }

    public static function countVisit($idPost, $idCat)
    {
        $conex = '';
        require "conect.php";
        $sql = $conex->prepare("INSERT INTO visitpost (idPost,idCat) VALUES (?,?)");
        $sql->bind_param('ii', $idPost, $idCat);
        $rc = $sql->execute();
        if (false === $rc) :
            $insert = die('execute() failed: ' . htmlspecialchars($sql->error));
        else:
            $insert = 'ok';
        endif;
        $sql->close();
        $conex->close();
        //return $insert;
    }
}//END CLASS CONTEOPOST