<?php

##REUSABLE QUERY FUNCTION##
function query($pdo, $sql, $parameters = []) {
	$query = $pdo->prepare($sql);
	$query->execute($parameters);
	return $query;
}

function get_question($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM question WHERE id = :id', $parameters);
	return $query->fetch();
}

function total_questions($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM question');
	$row = $query->fetch();
	return $row[0];
}

function all_questions($pdo) {
	$jokes = query($pdo, 'SELECT question.id, questiontext, questiondate, questionimage, studentname, studentemail, studentclass, categoryname 
	FROM question
	INNER JOIN student ON studentid  = student.id
	INNER JOIN category ON categoryid = category.id');
	return $jokes->fetchAll();
}

function insert_question($pdo, $questiontext, $questiondate, $studentid, $categoryid, $questionimage) {
	$query = 'INSERT INTO question 
	          SET questiontext = :questiontext,
			      questiondate = :questiondate,
				  studentid = :studentid,
				  categoryid = :categoryid,
				  questionimage = :questionimage';
	$parameters = [':questiontext' => $questiontext, ':questiondate' => $questiondate, ':studentid' => $studentid, ':categoryid' => $categoryid, 'questionimage' => $questionimage];
	query($pdo, $query, $parameters);
}

function update_question($pdo, $questionId, $questiontext) {
	$query = 'UPDATE question SET questiontext = :questiontext WHERE id = :id';
	$parameters = [':questiontext' => $questiontext, ':id' => $questionId];
	query($pdo, $query, $parameters);
}

function remove_question($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM question WHERE id = :id', $parameters);
}

function get_student($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM student WHERE id = :id', $parameters);
	return $query->fetch();
}

function total_students($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM student');
	$row = $query->fetch();
	return $row[0];
}

function all_students($pdo) {
	$students = query($pdo, 'SELECT * FROM student');
	return $students->fetchAll();
}

function insert_student($pdo, $studentname, $studentemail, $studentclass) {
	$query = 'INSERT INTO student (studentname, studentemail, studentclass)
	VALUES (:studentname, :studentemail, :studentclass)';
	$parameters = [':studentname' => $studentname, ':studentemail' => $studentemail, ':studentclass' => $studentclass];
	query($pdo, $query, $parameters);
}

function update_student($pdo, $studentId, $studentname) {
	$query = 'UPDATE student SET studentname = :studentname WHERE id = :id';
	$parameters = [':studentname' => $studentname, ':id' => $studentId];
	query($pdo, $query, $parameters);
}

function remove_student($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM student WHERE id = :id', $parameters);
}

function get_category($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM category WHERE id = :id', $parameters);
	return $query->fetch();
}

function all_categories($pdo) {
	$categories = query($pdo, 'SELECT * FROM category');
	return $categories->fetchAll();
}

function total_categories($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM category');
	$row = $query->fetch();
	return $row[0];
}

function insert_category($pdo, $categoryname) {
	$query = 'INSERT INTO category 
	SET categoryname = :categoryname';
	$parameters = [':categoryname' => $categoryname];
	query($pdo, $query, $parameters);
}

function update_category($pdo, $categoryId, $categoryname) {
	$query = 'UPDATE category SET categoryname = :categoryname WHERE id = :id';
	$parameters = [':categoryname' => $categoryname, ':id' => $categoryId];
	query($pdo, $query, $parameters);
}

function remove_category($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM category WHERE id = :id', $parameters);
}


function register($pdo, $username, $password, $email) {
	$query = "INSERT INTO user SET username = :username, password = :password, email = :email, role = 'User'";
	$parameters = [':username'=> $username, ':password'=> $password, ':email'=> $email];
	query($pdo, $query, $parameters);
}


