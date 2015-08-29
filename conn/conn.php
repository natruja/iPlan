<?php 
 try{
 	$handler = new PDO('mysql:host=127.0.0.1;dbname=app', 'root', '');
 	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 }catch(PDOException $e){
 	 echo $e->getMessage();
 	 die();
 }
 
// class GuestbookEntry{
// 	public $id, $name, $message, $posted, $entry;
// 	public function __construct(){
// 		$this->entry = "{$this->name} posted: {$this->message}";
// 	}
// }

// 	//echo '<pre>',print_r($r),'</pre>';
// $query = $handler->query("SELECT * FROM gustbook");
// $query->setFetchMode(PDO::FETCH_CLASS, 'GuestbookEntry');
// while($r = $query->fetch(PDO::FETCH_CLASS)){
// 	//echo $r->message,'<br >';
// 	//echo '<pre>',print_r($r),'</pre>';
// 	echo $r->entry, '<br >';
// }
?>
