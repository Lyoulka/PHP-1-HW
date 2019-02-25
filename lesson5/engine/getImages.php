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
				$src = $source.'/'.$file;
           		 $thumbs = $source.'/thumbs/'. $file;
           		 img_resize($src, $thumbs, 240, 160);
			};
				
		}
	}
