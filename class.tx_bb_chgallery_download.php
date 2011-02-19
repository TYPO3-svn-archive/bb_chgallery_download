<?php
class tx_bb_chgallery_download{
        function extraItemMarkerProcessor($markerArray, $path, $pb, $that){
        	if(!isset($_GET['download'])){
        		$markerArray['###DOWNLOAD_GALERIE###']=$that->conf['download_marker'];
        		$linkConf = $that->conf['category.']['link.'];
				$linkConf['parameter'] = $that->getLinkParameter();
				$linkConf['useCacheHash']=false;
				$linkConf['additionalParams'] = $that->getExtraVars.'&tx_chgallery_pi1[dir]='.($that->piVars['dir'])."&download"; 
	      		$markerArray['###DOWNLOAD_GALERIE###']=$that->cObj->typolink($markerArray['###DOWNLOAD_GALERIE###'], $linkConf);
        	}else{
				$path=$that->config['subfolders'][$that->piVars['dir']]['path'];
				$filelist=t3lib_div::getFilesInDir($path, $that->conf['download_types'],1,1);
				$filename = tempnam("/tmp", "/tmp/bb_chgallery_dl_".$that->piVars['dir']);
				$zip = new ZipArchive;
				if ($var=$zip->open($filename,ZipArchive::OVERWRITE) === TRUE) {
				    foreach($filelist as $singlefile){
				    	$single_filename=explode("/",$singlefile);
				    	$single_filename=$single_filename[count($single_filename)-1];
				    	$zip->addFile($singlefile, $single_filename);
				    }
				    
				    $zip->close();
					header("Content-length:".filesize($filename)); 
				    header('Content-Type: application/zip'); // ZIP file
				    header('Content-Type: application/octet-stream');
				    header('Content-Disposition: attachment; filename="'.$that->piVars['dir'].'.zip"'); 
				    header('Content-Transfer-Encoding: binary');
                	readfile ( $filename );
					exit();
				} else {
				    die("Es ist ein Fehler entstanden.");
				}
        	}
        	return $markerArray;
        }
}
?>