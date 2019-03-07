<?php
   

function renderGoods($conDB)
{     
    echo '<div class="catalogue">
                <h3 class="title-comments">Каталог товаров</h3>
                    <div class="goods">';
    $path = 'img/';
    $thumb = 'thumbs/';
    $query = "SELECT * FROM geekbrains.catalogue";
    $resDB = mysqli_query($conDB, $query);
    $goods = mysqli_fetch_all($resDB, MYSQLI_ASSOC);
    if (count($goods) > 0) {
        foreach ($goods as $good) {
            echo '
            <div class="card">
                <img src='. $path . $thumbs. $good['goods_img'].' class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">'.$good['goods_name'].'</h5>
                  <p class="card-text"><b> Цена: '.$good['goods_price'].' руб.</b></p>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalsearch-'. $good['goods_id'].'">Подробнее...</button>
                    <div class="modal fade" id="myModalsearch-'. $good['goods_id'].'" tabindex="-1" role="dialog"> 
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="background: #ffffff;">
                            <div class="modal-body">
                                <img src='. $path . $good['goods_img'].'>
                                <h5 class="modal-title">'.$good['goods_name'].'</h5>
                                <p>Назначение: '.$good['goods_type'].'</p>
                                <p>'.$good['goods_description'].'</p>
                                <p class="card-text"> <b>Цена: '.$good['goods_price'].' руб.</b></p>
                                <button type="button" class="btn btn-primary">В корзину</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
            
            } 
    } else {
        echo '<div class="page-header"><h4>Каталог пуст!</h4></div>';
    }
echo "</div>
    </div>";
} 