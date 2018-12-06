<?php


class News
{

	/** Returns single news items with specified id
	* @rapam integer &id
	*/

	public static function getNewsItemByID($id)
	{
		$id = intval($id);

		if ($id) {
/*			$host = 'localhost';
			$dbname = 'mytodo';
			$user = 'root';
			$password = '1';
			$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);*/
			$db = Db::getConnection();
			$result = $db->query('SELECT * FROM users WHERE id=' . $id);

			/*$result->setFetchMode(PDO::FETCH_NUM);*/
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$newsItem = $result->fetch();

			return $newsItem;
		}

	}

	/**
	* Returns an array of news items
	*/
	public static function getNewsList() {
/*		$host = 'localhost';
		$dbname = 'mytodo';
		$user = 'root';
		$password = '1';
		$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);*/

		$db = Db::getConnection();
		$newsList = array();

		$result = $db->query('SELECT * FROM users ');

		$i = 0;
		while($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
            $newsList[$i]['name'] = $row['name'];
            $newsList[$i]['username'] = $row['username'];
			$i++;
		}

		return $newsList;
	
}

}