<?php
include '../../config.php'; //connexion bd
include_once '../../Model/User.php'; //appel model 

class UserC
{


	function rechercheUser($id, $nom, $prenom)
	{
		$sql = "SELECT * FROM user where id like '" . $id . "' or nom like '" . $nom . "' or prenom like '" . $prenom . "'";
		$db = config::getConnexion();

		try {

			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}


	function afficherUsertri()
	{
		$sql = 'SELECT * FROM user ORDER BY nom ASC';
		$db = config::getConnexion();

		try {
			$list = $db->query($sql);
			return ($list);
		} catch (Exception $e) {
			echo 'Erreur' . $e->getMessage();
		}
	}

	function afficherUser()
	{
		$sql = "SELECT * FROM user"; //declaration requête sql
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}

	function ajouterUser($user)
	{

		$sql = "INSERT INTO user ( nom, prenom, role, email, tel, password) 
			VALUES (:nom, :prenom, :role, :email, :tel, :password)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([

				'nom' => $user->getNom(),
				'prenom' => $user->getPrenom(),
				'role' => $user->getRole(),
				'email' => $user->getEmail(),
				'tel' => $user->getTel(),
				'password' => $user->getPassword()

			]);
			//	header('Location: afficherUser.php');
			$message = " Nouvel utilisateur ajouté !";
			echo "<script type='text/javascript'>alert('$message');</script>";	
			}
		catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}


	function modifierUser($user, $id)
	{
		try {
			$db = config::getConnexion();

			//$nom, $prenom, $role, $email, $tel, $password
			$sql = "UPDATE user SET nom= :nom, prenom= :prenom, role= :role, email=:email, tel= :tel, password= :password WHERE id= :id";
			$db = config::getConnexion();
			$req = $db->prepare($sql);
			$req->bindValue(':nom', $user->getNom());
			$req->bindValue(':prenom', $user->getPrenom());
			$req->bindValue(':role', $user->getRole());
			$req->bindValue(':email', $user->getEmail());
			$req->bindValue(':tel', $user->getTel());
			$req->bindValue(':id', $id);
			$req->bindValue(':password', $user->getPassword());
			$req->execute();
			//	echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

	function supprimerUser($id)
	{
		$sql = "DELETE FROM user WHERE id=:id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}


	function recupererUser($id)
	{
		$sql = "SELECT * from user where id=$id";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$user = $query->fetch();
			return $user;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function loginAdOrg($email, $password)
	{
		$sql = "SELECT * FROM user having email = '$email' and password = '$password'";
		$db = config::getConnexion();
		try {



			$query = $db->prepare($sql);
			$query->execute();
			$user = $query->fetch();


			$count = $query->rowCount();
			//var_dump($email);
			if ($count >= 1) {
				$role = $user['role'];
				$id = $user['id'];

				//convert email to username
				$parts = explode("@", $email);
				$username = $parts[0];
				$_SESSION['id'] = $id;
				$_SESSION['password'] = $password;
				$_SESSION['role'] = $role;
				$_SESSION['username'] = $username;

				//partie controle les roles .
				if ($role == 'administrateur') {
			
					header("Location:../user/interfaceAdmin.php");
				} else if ($role == 'organisateur') {
				
					
					header("Location:../user/interfaceOrganisateur.php");
				} else {
					$error = "Acces denied! Your Email or Password is invalid !";
					
					echo "<script type='text/javascript'>alert('$error');</script>";
				} //role wrong 
			} else {
				$error = "Your Email or Password is invalid";

				echo "<script type='text/javascript'>alert('$error');</script>";
			} //login information wrong 
		} catch (Exception $e) {
			echo 'Erreur' . $e->getMessage();
		}
	}

	function loginPart($email, $password)
	{
		$sql = "SELECT * FROM user having email = '$email' and password = '$password'";
		$db = config::getConnexion();
		try {



			$query = $db->prepare($sql);
			$query->execute();
			$user = $query->fetch();


			$count = $query->rowCount();
			//var_dump($email);
			if ($count >= 1) {
				$role = $user['role'];
				$id = $user['id'];
				$nom = $user['nom'];

				$prenom = $user['prenom'];
				//convert email to username
				$parts = explode("@", $email);
				$username = $parts[0];
				$_SESSION['id'] = $id;
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $email;
				$_SESSION['password'] = $password;
				$_SESSION['role'] = $role;

				//partie controle les roles .
				if ($role == 'participant') {
                   
					header("Location:my-profile.php?id=$id&email=$email&password=$password&nom=$nom&prenom=$prenom");
				} else {
					$error = " Access denied !Your Email or Password is invalid !";

					echo "<script type='text/javascript'>alert('$error');</script>";
				} //if role is wrong
			} else {
				$error = "Your Email or Password is invalid";

				echo "<script type='text/javascript'>alert('$error');</script>";
			} //if participant's information wrong
		} catch (Exception $e) {
			echo 'Erreur' . $e->getMessage();
		}
	}


}