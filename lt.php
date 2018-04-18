<?php 
	header("Content-Type:text/html;charset=utf-8");
	$mess = $_POST["mess"];
switch ($mess) {
	case '哈哈':
		$arr  = array('aaa','bbb','ccc');
		$index = array_rand($arr,1);
		echo $arr[$index];
		break;
	
	default:
		$arr = array('你呵呵啥','傻呵呵啥','不回答');
			$index =array_rand($arr,1);
			echo $arr[$index];
		break;
}



	// switch ($mess){
	// 	case '哈哈':
	// 		$arr = array('你笑啥','傻笑啥','回答');
	// 		$index =array_rand($arr,1);
	// 		echo $arr[$index];
	// 	break;
	// 	// default：
	// 	// $arr = array('你笑啥','傻笑啥','回答');
	// 	// 	$index =array_rand($arr,1);
	// 	// 	echo $arr[$index];
	// 	// break;
		
		
	// 	default：
	// 		// $arr = array('你笑啥','傻笑啥','回答');
	// 		$arr = array('你呵呵啥','傻呵呵啥','不回答');
	// 		$index =array_rand($arr,1);
	// 		echo $arr[$index];
	// 	break;
	// }
 ?>