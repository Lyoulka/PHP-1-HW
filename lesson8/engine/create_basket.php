<?php
function createBasket($login, $mysql) {
	if (isset($login)) {
    
      $i=0;
      echo ' <h2>Корзина</h2>
        <p>Ниже представлены товары, добавленные в вашу корзину:</p>    
        <div>        
        <table class="table">
         <tbody>';
   $path = 'img/';
   $thumb = 'thumbs/';
   $query = sprintf("SELECT * FROM `temp_orders` WHERE `user_login`='%s'", $login);
   $resDB = mysqli_query($mysql, $query);
   $goodsTemp = mysqli_fetch_all($resDB, MYSQLI_ASSOC);
    if (count($goodsTemp) !== 0) {
        foreach ($goodsTemp as $good) {
            echo '<tr>
       				<td><img src='. $path . $thumb . $good['goods_img'].'></td>
       				<td><a href=catalogue.php?id='. $good['goods_id'].'#'. $good['goods_id'].'>'.$good['goods_name'].'</a></td>
        			<td>'.$good['goods_price'].' руб.</td>
        			<td> 
                <div class="input_numbers">
                  <button type="button" class="btn btn-primary" onclick="item(\''. $good['goods_id'].'\')">+</button>
                  <input class="form-control" type="text" name="numbers" id="count'. $good['goods_id'].'" onchange="change(\''. $good['goods_id'].'\')" value="'. $good['numbers'] .'" style="width: 50px;">
                  <button  type="button" class="btn btn-primary" onclick="deleteItem(\''. $good['goods_id'].'\')">-</button>
                </div> 
              </td>
      			</tr>';
      $i++;
      $price_res += ($good['goods_price'] * $good['numbers']);
      $count_res += $good['numbers'];
    }
   	echo '<tr><td></td><td>Количество наименований: <b>'. $i .'</b> шт.</td><td>Общая сумма: <b>'. $price_res.'</b> руб.</td><td>Общее количество товаров: <b>'. $count_res .'</b> шт.</td></tr>
       </tbody>
 			 </table>
		</div>';
    if (isset($_SESSION["user_login"]) && isset($_SESSION["password"])){
       echo "<p><a href='order_form.php'><b><u>Оформить заказ</u></b></a></p>";
    } else {
      echo "<p><a href='login.php'><b><u>Вы должны авторизироваться</u></b></a></p>";
    }
    echo "<p><a href='basket.php?action=clear'><b><u>Удалить товары из корзины</u></b></a></p>";
	}
   else {
   echo "<p>Вы еще не добавили ни одного товара!</p>";
  } 
 }
}
function createBasketOrder($login, $table, $mysql){
   echo $message.'<table class="table">
         <tbody>';
  $query = sprintf("SELECT * FROM `{$table}` WHERE `user_login`='%s'", $login);
    $resDB = mysqli_query($mysql, $query);
       if (isset($resDB)){ 
        foreach ($resDB as $good) {
            echo '<tr>
                    <td>'.$good['goods_name'].'</td>
                    <td>'.$good['goods_price'].' руб.</td>
                    <td>'.$good['numbers'].' шт.</td>
                  </tr>';
      $price_res += ($good['goods_price'] * $good['numbers']);
      $count_res += $good['numbers'];
     }
    echo '<tr><td></td><td>Общая сумма: <b>'. $price_res.'</b> руб.</td><td>Общее количество товаров: <b>'. $count_res .'</b> шт.</td></tr>
       </tbody>
       </table>';
       if (isset($good['order_status']) && $good['order_status'] !== NULL){
        echo '<p>Статус заказа: <b>'.$good['order_status'].'</b></p>';
       }
     } 
}

function createAdminBasket($mysql){
  if ($_SESSION["admin"] == 1){
  $query = "SELECT * FROM `orders` order by 'user_id'";
  $orderTemp = mysqli_query($mysql, $query);
  $lastLogin = null;
  $count = 1;
  $counter = $count;
  $price_res = 0;
  echo '<table class="table">
         <tbody>';
    foreach ($orderTemp as $order) {
    if ($order['user_login'] !== $lastLogin){
      if ($price_res > 0) {
        echo '<tr>
                <td></td><td><b>Итог: </b></td><td><b>'.$price_res.' руб.</b></td><td></td><td>Общее количество единиц товара: '.$count_res.' шт.</td>
             </tr>';
      }
        echo 
            '<tr><td colspan="5" style="border: none;"></tr>
            <tr>
            <td colspan="5" style="background: #98FB98;"><b> ЗАКАЗ №'.$count.'</b></td>
            </tr>
            <tr>
                <td>Логин:</td><td><b>'.$order['user_login'].'</b></td><td>ID пользователя: </td><td colspan="2"><b>'.$order['user_id'].'</b></td>
             <tr>
                <td style="width: 150px;">Имя получателя:</td><td><b>'.$order['user_name'].'</b></td><td>Фамилия получателя: </td><td colspan="2"><b>'.$order['user_surname'].'</b></td>
             </tr>
             <tr>
                <td>Город доставки:</td><td><b>'.$order['user_city'].'</b></td><td>Адрес доставки:</td><td colspan="2"><b>'.$order['user_adress'].'</b></td>
             </tr>
             <tr>
                <td>Статус заказа:</td><td colspan="4"><input class="form-control" type="text" name="order_status" id="order_status'.$order['user_login'].'" onchange="changeStatus(\''.$order['user_login'].'\')" value="'.$order['order_status'].'" style="width: 300px;"></td>
             </tr>
             <tr><td colspan="5">Состав заказа:</tr>
             ';
        $lastLogin = $order['user_login'];
        $count++;        
        $price_res = 0;
        $count_res = 0;
        $i=1;
      } 
     
         echo '<tr style="background: #FDF5E6;">
         <td rowspan="2" style="width:10px; text-align: center; vertical-align:middle;">'.$i.'</td>
            <td >ID товара:</td><td><b>'.$order['goods_id'].'</b></td><td>Название товара:</td><td><b>'.$order['goods_name'].'</b></td>
            </tr>
            <tr style="background: #FDF5E6;">
            <td>Цена товара:</td><td><b>'.$order['goods_price'].'</b> руб.</td><td>Количество:</td><td><b>'.$order['numbers'].'</b> шт.</td>
            </tr>';

        $price_res += ($order['goods_price'] * $order['numbers']);
        $count_res += $order['numbers'];   
        $i++;  
      }
      if ($price_res > 0) {
        echo '<tr>
                <td></td><td><b>Итог: </b></td><td><b>'.$price_res.' руб.</b></td><td></td><td>Общее количество единиц товара: '.$count_res.' шт.</td>
             </tr>';
      }
  }
  echo "</tbody>
       </table>";
}