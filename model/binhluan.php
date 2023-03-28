<?php
function add_binhluan($noidung, $iduser, $idpro, $ngaybinhluan)
{
    $sql = "INSERT INTO `duanmau`.`binhluan` (`noidung`, `iduser`, `idpro`, `ngaybinhluan`)  VALUE ('$noidung', $iduser, $idpro, '$ngaybinhluan')";
    pdo_execute($sql);
}

function get_binhluan($idpro)
{
    $sql = "SELECT binhluan.noidung, binhluan.ngaybinhluan, taikhoan.`user` FROM binhluan INNER JOIN taikhoan ON binhluan.iduser = taikhoan.id WHERE binhluan.idpro = $idpro";
    $listbinhluan = pdo_query($sql);

    return $listbinhluan;
}

function get_list_binhluan()
{
    $sql = "SELECT binhluan.id, binhluan.noidung, binhluan.ngaybinhluan, taikhoan.`user`, sanpham.`name` as pro FROM binhluan INNER JOIN taikhoan ON binhluan.iduser = 
            " . "taikhoan.id INNER JOIN sanpham ON binhluan.idpro = sanpham.id";
    $listbinhluan = pdo_query($sql);

    return $listbinhluan;
}

function delete_binhluan($id)
{
    $sql = "DELETE FROM `duanmau`.`binhluan` WHERE `id` = $id;";
    pdo_execute($sql);
}

function delete_binhluan_check($_id)
{
    $sqlId = join(' OR ', array_map(function ($id) {
        return '`id` =' . $id;
    }, $_id));

    $sql = "DELETE FROM `duanmau`.`binhluan` WHERE $sqlId;";
    pdo_execute($sql);
}
