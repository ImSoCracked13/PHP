<?php

function query($pdo, $sql, $parameters = []) {
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}

function all_staffs($pdo) {
    $query = query($pdo, 'SELECT staff.id, staffname, staffdate, companyname, companyaddress
    FROM staff
    INNER JOIN company ON companyid = company.id');
    return $query->fetchAll();
    }

function insert_staff($pdo, $staffname, $staffdate, $companyId) {
$query = 'INSERT INTO staff
          SET staffname = :staffname,
              staffdate = :staffdate,
              companyid = :companyId';
$parameters = [':staffname' => $staffname, ':staffdate' => $staffdate, ':companyId'=> $companyId];
query($pdo, $query, $parameters);
}

function all_companies($pdo) {
	$query = query($pdo, 'SELECT * FROM company');
	return $query->fetchAll();
}

function insert_company($pdo, $companyname, $companyaddress) {
	$query = 'INSERT INTO company (companyname, companyaddress)
	VALUES (:companyname, :companyaddress)';
	$parameters = [':companyname' => $companyname, ':companyaddress' => $companyaddress];
	query($pdo, $query, $parameters);
}