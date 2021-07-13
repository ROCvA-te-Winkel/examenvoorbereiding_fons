<?php


class Database
{
	private PDO $pdo;

	public function __construct(string $db_user, string $db_pass)
	{
		$dsn = 'mysql:host=localhost;dbname=examenvoorbereiding_fons;charset=utf8mb4';
		$this->pdo = new PDO($dsn, $db_user, $db_pass);
	}

	public function create_default_users(): void
	{
		$admin_password = password_hash('adminadmin', PASSWORD_ARGON2ID);
		$user1_password = password_hash('user1user1', PASSWORD_ARGON2ID);
		$user2_password = password_hash('user2user2', PASSWORD_ARGON2ID);

		$sql = 'insert into users (type_id, username, password)
		values
		       (:admin_type, :admin_user, :admin_pass),
		       (:user_type, :user1_user, :user1_pass),
		       (:user_type, :user2_user, :user2_pass)';

		$statement = $this->pdo->prepare($sql);
		$statement->execute([
			'admin_type' => 1,
			'admin_user' => 'admin',
			'admin_pass' => $admin_password,

			'user_type' => 2,

			'user1_user' => 'user1',
			'user1_pass' => $user1_password,

			'user2_user' => 'user2',
			'user2_pass' => $user2_password,
		]);
	}

	public function login(string $username, string $password): bool
	{
		$sql = 'select type_id, password from users where username = :username';

		$statement = $this->pdo->prepare($sql);
		$statement->execute([
			'username' => $username
		]);

		$results = $statement->fetch(PDO::FETCH_ASSOC);

		if (!is_array($results) || !password_verify($password, $results['password']))
			echo 'De gebruikersnaam of het wachtwoord klopte niet. Probeer het nog een keer.<br />';
		else {
			session_start();

			$_SESSION['login']['admin'] = $results['type_id'] === '1';
			$_SESSION['login']['username'] = $username;

			header('Location: /examenvoorbereiding_fons/views/users');
		}
	}
}