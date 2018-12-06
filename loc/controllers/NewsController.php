<?php

include_once '/home/roman/www/test.loc/loc/models/News.php';

class NewsController {

	public function actionIndex()
	{
		
		$newsList = array();
		$newsList = News::getNewsList();

		require_once( '/home/roman/www/test.loc/loc/views/news/index.php');

		return true;
	}

	public function actionView($id)
	{
		if ($id) {
			$newsItem = News::getNewsItemByID($id);

	//require_once(ROOT . '/views/news/view.php');
	//require_once  '/home/roman/www/test.loc/loc/views/news/view.php';

/*			echo 'actionView'; */
		}

		return true;

	}

}

