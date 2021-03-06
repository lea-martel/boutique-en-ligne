<?php
include 'src/Base.php';
$url = '';
$admin = new \Base\Admin();
$product = new \Base\product__cat();
$reduc =  new \Base\discount();
$return = [];

switch ($_POST['type']) {
    case 'delete' :
        $url = 'admin_user.php';
        $return = ['url' => $url, 'return' => $admin->deleteUser()];
        break;
    case 'modifAdminUser' :
        $url = 'admin_user.php';
        $return = [$url, $admin->updateUser()];
        break;
    case 'deleteProduct' :
        $url = 'admin_product.php';
        $return = ['url' => $url, 'return' => $product->deleteProduct()];
        break;
    case 'modifAdminProduct' :
        $url = 'admin_product.php';
        $return = [$url, $product->updateProduct()];
        break;
    case 'addproduct' :
        $url = 'admin_product.php';
        $return = [$url, $product->addProduct()];
        break;
    case 'addcategorie' :
        $url ='admin_categorie.php';
        $return = [$url, $product->addCategorie()];
        break;
    case 'deleteCat' :
        $url ='admin_categorie.php';
        $return = ['url' => $url, 'return' => $product->deleteCategorie()];
        break;
    case 'modifCat' ;
        $url ='admin_categorie.php';
        $return = [$url, $product->updateCategory()];
        break;
    case 'addreduc' ;
        $url ='admin_reduction.php';
        $return = [$url, $reduc->addReduc()];
        break;
    case 'deleteReduc' ;
        $url ='admin_reduction.php';
        $return = ['url' => $url, 'return' => $reduc->deleteReduc()];
        break;
}

echo json_encode($return);