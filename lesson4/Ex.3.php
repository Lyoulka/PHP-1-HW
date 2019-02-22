<?php
		function getImages ($source){
			if (!file_exists($source)){
				return false;
			}
		$files = scandir($source);
		$images = [];
			foreach ($files as $file){
				$type = mime_content_type($source.'/'.$file);
				if (strpos ($type, 'image') === 0){
					$images[] = $file;
				};
				
			}
			return $images;
		}
		$source = 'img';
		$images = getImages ($source);
	?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script>$('#myModalsearch').on('shown.bs.modal', function () {
		$('#myInput').trigger('focus')})</script>
    <title>Hello, world!</title>

  </head>
  <body>

	<?php foreach ($images as $image):
	$path = $source.'/'.$image;
	$i++;
	?>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalsearch-<? echo $i?>" style="background: #ffffff; border: none;"><img src='<? echo $path?>' style="width: 200px;"></button>
				<div class="modal fade" id="myModalsearch-<? echo $i?>" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content" style="background: none; border: none; width: 900px;">
							<div class="modal-body">
								<img src='<?echo $path?>' style="width: 100%;">
							</div>
						</div>
					</div>
				</div>
	<?php endforeach;?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>