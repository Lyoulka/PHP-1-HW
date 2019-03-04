<?php
function renderComments($conDB, $id)
{     
    echo '<div class="comments">
                <h3 class="title-comments">Комментарии '. commentsCounter($conDB) .'</h3>
                  <ul class="media-list">';
    $query = "SELECT * FROM comments";
    if ($id) {
        $id = (int)$id;
        $query .= " WHERE id = " . $id;
    }
    $resDB = mysqli_query($conDB, $query);
    $item = mysqli_fetch_all($resDB, MYSQLI_ASSOC);
    if (count($item) > 0) {
        foreach ($item as $media) {
            $fileOriginal = $media['path'] . $media['imgName'];
            $fileThumb = $media['path'] . "thumbs/" . $media['imgName'];
            echo ' <li class="media">
                     <div class="media-left">
                        <a href="#">
                             <img class="media-object img-thumbnail mr-3" src="'. $fileThumb . '" alt="...">
                         </a>
                     </div>
                    <div class="media-body">
                         <div class="media-heading">
                            <div class="author">'. $media[name] . '</div>
        <div class="metadata">
          <span class="date">'. $media[date] .'</span>
        </div>
      </div>
      <div class="media-text text-justify">'. $media[message] .'</div>
      <div class="footer-comment">
    <!--    <button type="submit" class="btn btn-default" name="operation" value="answer">Ответить</button> -->
      </div>
      <hr></li>';
            } 
    } else {
        echo '<div class="page-header"><h4>Комментарии отсутствуют!</h4></div>';
    }
    echo '</ul>
        </div> ';
}



   