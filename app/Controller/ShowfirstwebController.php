<?php
//showfirstwebController類別名稱必須對應專案資料夾的名稱。
class ShowfirstwebController extends AppController
{
	var $uses = null;//因為沒有設定連線資料庫，所以$uses就是等於null。
	function index()//控制/views/index.ctp的頁面。
	{
		//將/views/index.ctp裡面的$ShowValue的變數指定內容為Hello World。
		$this->set('ShowValue','Hello World');
	}
}
?>
