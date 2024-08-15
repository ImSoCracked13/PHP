<?php

function query($pdo, $sql, $parameters = []) {
	$query = $pdo->prepare($sql);
	$query->execute($parameters);
	return $query;
}



function getBook($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM joke WHERE id = :id', $parameters);
	return $query->fetch();
}

function totalBooks($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM joke');
	$row = $query->fetch();
	return $row[0];
}

function allBooks($pdo) {
	$jokes = query($pdo, 'SELECT joke.id, joketext, `name`, email, categoryName FROM joke
	INNER JOIN author ON authorid  = author.id
	INNER JOIN category ON categoryid = category.id');
	return $jokes->fetchAll();
}

function insertBook($pdo, $joketext, $authorid, $categoryid) {
	$query = 'INSERT INTO joke (joketext, jokedate, authorid, categoryid)
	VALUES (:joketext, CURDATE(), :authorid, :categoryid)';
	$parameters = [':joketext' => $joketext, ':authorid' => $authorid, ':categoryid' => $categoryid];
	query($pdo, $query, $parameters);
}

function updateBook($pdo, $jokeId, $joketext) {
	$query = 'UPDATE joke SET joketext = :joketext WHERE id = :id';
	$parameters = [':joketext' => $joketext, ':id' => $jokeId];
	query($pdo, $query, $parameters);
}

function deleteBook($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM joke WHERE id = :id', $parameters);
}


function allGenres($pdo) {
	$authors = query($pdo, 'SELECT * FROM author');
	return $authors->fetchAll();
}

