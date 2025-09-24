<?php
echo "<h2>Árbol Generado</h2>";

class Nodo {
    public $val; public $izq; public $der;
    function __construct($v){ $this->val=$v; }
}

function buildPrePost(&$pre, $post) {
    if (empty($pre)) return null;
    $raiz = new Nodo(array_shift($pre));
    if (!$pre) return $raiz;

    $izqRaiz = $pre[0];
    $idx = array_search($izqRaiz, $post);

    if ($idx !== false) {
        $izqPost = array_slice($post, 0, $idx+1);
        $derPost = array_slice($post, $idx+1, count($post)-$idx-2);

        $raiz->izq = buildPrePost($pre, $izqPost);
        $raiz->der = buildPrePost($pre, $derPost);
    }
    return $raiz;
}

function buildPreIn($pre, $in) {
    if (!$pre || !$in) return null;
    $raiz = new Nodo(array_shift($pre));
    $i = array_search($raiz->val, $in);
    $raiz->izq = buildPreIn(array_slice($pre,0,$i), array_slice($in,0,$i));
    $raiz->der = buildPreIn(array_slice($pre,$i), array_slice($in,$i+1));
    return $raiz;
}

function buildPostIn($post, $in) {
    if (!$post || !$in) return null;
    $raiz = new Nodo(array_pop($post));
    $i = array_search($raiz->val, $in);
    $raiz->izq = buildPostIn(array_slice($post,0,$i), array_slice($in,0,$i));
    $raiz->der = buildPostIn(array_slice($post,$i), array_slice($in,$i+1));
    return $raiz;
}

function show($n, $nivel=0) {
    if(!$n) return;
    echo str_repeat("&nbsp;&nbsp;&nbsp;", $nivel) . $n->val . "<br>";
    show($n->izq, $nivel+1);
    show($n->der, $nivel+1);
}


$pre = $_POST['preorden'] ? explode(" ", trim($_POST['preorden'])) : [];
$in  = $_POST['inorden']  ? explode(" ", trim($_POST['inorden']))  : [];
$post= $_POST['postorden']? explode(" ", trim($_POST['postorden'])): [];

if($pre && $in) {
    $raiz = buildPreIn($pre,$in);
}
elseif($post && $in) {
    $raiz = buildPostIn($post,$in);
}
elseif($pre && $post) {
    $raiz = buildPrePost($pre,$post);
}
else {
    die("<p>Debes ingresar al menos dos recorridos válidos (Inorden + Preorden, Inorden + Postorden o Preorden + Postorden)</p>");
}
show($raiz);

?>