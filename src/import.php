<?php
class Import
{
    public function importCharitiesFromCSV($filename, &$charity)
    {
        if (!file_exists($filename) || !is_readable($filename)) {
            echo "Error: File not found or not readable.\n";
            return false;
        }

        $header = null;
        $data = array();

        if (($handle = fopen($filename, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, ',')) !== false) {
                if (!$header) {
                    $header = $row;
                } else {
                    $data[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }

        foreach ($data as $charityData) {
            $charity[] = new Charities($charityData['id'], $charityData['name'], $charityData['email']);
        }

        echo count($data) . " charities imported successfully.\n";
        return true;
    }

}
