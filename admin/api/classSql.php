<?php

/**
 * Created by PhpStorm.
 * User: v09
 * Date: 02/08/16
 * Time: 11:25 AM
 */
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

        $string = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $string
        );

        $string = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $string
        );

        $string = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $string
        );

        $string = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $string
        );

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
    //http://stackoverflow.com/questions/2552545/mysqli-prepared-statements-error-reporting

    public static function crud($tit_es, $tit_en, $ds_es, $ds_en, $desc_es, $desc_en, $img, $cat, $status, $cf, $idReg, $action)
    {
        $conex = '';
        include 'conexion.php';
        $url_es = toolMethods::urls_amigables($tit_es);
        $url_en = toolMethods::urls_amigables($tit_en);
        if ($img['name'] != ''):

            $archivo = $img['name'];
            //INVESTIGAR SUBSTR, MD5,UNIQID,RAND
            $prefijo = substr(md5(uniqid(rand())), 0, 6);
            $clearImg = toolMethods::clearNamePic($archivo);
            $file = $prefijo . "_" . $clearImg;
            $folder_foto = "../img/blog/" . $file;

            $extensions = array('jpg', 'jpeg', 'gif', 'png', 'JPG');
            if (in_array(pathinfo($archivo, PATHINFO_EXTENSION), $extensions)):

                if (copy($img['tmp_name'], $folder_foto)) :


                    switch ($action):

                        case 'insert':
                            $qry = "INSERT INTO blog (tit_es,tit_en,desc_short_es,desc_short_en,info_es,info_en,img,cate,status,url_es,url_en) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                            $stmt = $conex->prepare($qry);
                            //investivar como funciona el bind_param
                            $stmt->bind_param("sssssssiiss", $tit_es, $tit_en, $ds_es, $ds_en, $desc_es, $desc_en, $file, $cat, $status, $url_es, $url_en);
                            break;
                        case 'update':

                            if (file_exists('../img/blog/' . $cf)):
                                unlink('../img/blog/' . $cf);
                            endif;

                            $qry = "UPDATE blog SET tit_es=?,tit_en=?,desc_short_es=?,desc_short_en=?,info_es=?,info_en=?,img=?,cate=?,status=?,url_es=?,url_en=? WHERE id_not=?";
                            $stmt = $conex->prepare($qry);
                            //investivar como funciona el bind_param
                            $stmt->bind_param("sssssssiissi", $tit_es, $tit_en, $ds_es, $ds_en, $desc_es, $desc_en, $file, $cat, $status, $url_es, $url_en, $idReg);
                            break;

                    endswitch;

                endif;

            endif;

        else:

            //ESTA PARTE SE INSERTA O ACTUALIZA UN REGISTRO CUANDO NO EXISTE LA IMAGEN
            switch ($action):

                case 'insert':
                    $qry = "INSERT INTO blog (tit_es,tit_en,desc_short_es,desc_short_en,info_es,info_en,cate,status,url_es,url_en) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = $conex->prepare($qry);
                    //investivar como funciona el bind_param
                    $stmt->bind_param("ssssssiiss", $tit_es, $tit_en, $ds_es, $ds_en, $desc_es, $desc_en, $cat, $status, $url_es, $url_en);
                    break;
                case 'update':
                    $qry = "UPDATE blog SET tit_es=?,tit_en=?,desc_short_es=?,desc_short_en=?,info_es=?,info_en=?,cate=?,status=?,url_es=?,url_en=? WHERE id_not=?";
                    $stmt = $conex->prepare($qry);
                    //investivar como funciona el bind_param
                    $stmt->bind_param("ssssssiissi", $tit_es, $tit_en, $ds_es, $ds_en, $desc_es, $desc_en, $cat, $status, $url_es, $url_en, $idReg);
                    break;

            endswitch;
        endif;

        $resp = $stmt->execute();
        if (false === $resp) :
            die('execute() failed: ' . htmlspecialchars($stmt->error));
        endif;

        $stmt->close();
        $conex->close();

    }

    public static function getDetail($id)
    {

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
                //investivar como funciona el bind_param
                $stmt->bind_param("ssssi", $tit_es, $tit_en, $url_es, $url_en, $idReg);

                break;
            case 'delete':
                $qry = "DELETE FROM categorias WHERE id_cate = ?";
                $stmt = $conex->prepare($qry);
                //investivar como funciona el bind_param
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