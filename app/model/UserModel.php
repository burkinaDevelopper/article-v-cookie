<?php
class UserModel
{
    private $csvFile = ROOT . '/public/asset/database/login.csv';

    public function readUser($username, $password)
    {

        if (($handle = fopen($this->csvFile, "r")) !== FALSE) {

            while (($data = fgetcsv($handle, 50, ",")) !== false) {
                $col = [$data[0], $data[1], $data[2], $data[3]];
                if (in_array($username, $col) && in_array($password, $col)) {
                    $result = true;
                } else {
                    $result = false;
                }
            }
            return $result;
            fclose($handle);
        }
    }
}
