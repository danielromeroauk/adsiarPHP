<?php

require APP_PATH . '/MySQL.php';

class Contact extends MySQL {

    /**
     * Devuelve todos los registros de la tabla contacts
     */
    public function all()
    {
        $this->connect();
        $sql = 'SELECT * FROM contacts';
        $results = $this->query($sql);
        $this->close();

        $contacts = array();

        if ($results) {
            while ($row = $results->fetch_assoc()) {
                $contacts[] = $row;
            }
        }

        return $contacts;
    }

}
