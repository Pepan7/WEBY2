<?php

function fetchPracovnik( $conn )
{
    $request = $conn->prepare(" SELECT * FROM Pracovnici");
    $request->setFetchMode(PDO::FETCH_CLASS, "Pracovnik");
    return $request->execute() ? $request->fetchAll() : false;
}

    function fetchInfo($conn, $id)
    {
        $request = $conn->prepare(" SELECT * FROM Pracovnici WHERE ID = '$id' ");
        $request->setFetchMode(PDO::FETCH_CLASS, "Pracovnik");
        return $request->execute() ? $request->fetchAll() : false;
    }


?>