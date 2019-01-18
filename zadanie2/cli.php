<?php

$filePath = __DIR__ . '/report.csv';

$intervalCollection = []; // zbiór w przedziałów 10 minutowych (po 1 minucie)
$maxIntervalCollection = null; // największy przedział

if (file_exists($filePath)) {

    if (($handle = fopen($filePath, "r")) !== FALSE) {
        $row = 0;
        $lastTime = null;
        $tmpCollection = []; // pomocniczy przedział 1 minutowy

        while (($data = fgetcsv($handle, 20, ",")) !== FALSE) {
            $row++;
            // pomiń header
            if ($row <= 1) {
                continue;
            }

            if (isset($data[0])) {
                $rowTime = strtotime($data[0]);

                // tworzenie przedziału 1 minutowego
                if (empty($tmpCollection) || ($rowTime - $tmpCollection[0]) <= 60) {
                    $tmpCollection[] = $rowTime;
                    continue;
                }

                if (count($intervalCollection) < 10) {
                    $intervalCollection[] = $tmpCollection;
                } else {

                    // jeśli największy przedział jest pusty to przypisz jako max pierwszy znaleziony przedział
                    if (null === $maxIntervalCollection) {
                        $maxIntervalCollection = $intervalCollection;
                    } else {

                        // zdejmij pierwszy elent z bierzącego przedziału
                        array_shift($intervalCollection);

                        // umieść na końcu nową kolekcję
                        array_push($intervalCollection, $tmpCollection);

                        // czy $intervalCollection po zmianach jest większy od obecnie największego ($maxIntervalCollection)?
                        $intervalCollectionSum = array_sum([
                            count($intervalCollection[0]),
                            count($intervalCollection[1]),
                            count($intervalCollection[2]),
                            count($intervalCollection[3]),
                            count($intervalCollection[4]),
                            count($intervalCollection[5]),
                            count($intervalCollection[6]),
                            count($intervalCollection[7]),
                            count($intervalCollection[8]),
                            count($intervalCollection[9])
                        ]);

                        // można zrobić cache na $maxIntervalCollectionSum, żeby nie liczyć za każdym razem, ale mało czasu na zadanie.
                        $maxIntervalCollectionSum = array_sum([
                            count($maxIntervalCollection[0]),
                            count($maxIntervalCollection[1]),
                            count($maxIntervalCollection[2]),
                            count($maxIntervalCollection[3]),
                            count($maxIntervalCollection[4]),
                            count($maxIntervalCollection[5]),
                            count($maxIntervalCollection[6]),
                            count($maxIntervalCollection[7]),
                            count($maxIntervalCollection[8]),
                            count($maxIntervalCollection[9])
                        ]);

                        // jeśli nowy przedział 10 min jest większy, to zamień z maksymalnym
                        if ($intervalCollectionSum > $maxIntervalCollectionSum) {
                            $maxIntervalCollection = $intervalCollection;
                        }
                    }
                }

                $tmpCollection = [];

            }
            $row++;
        }
        fclose($handle);

        // największy przedział to:
        var_dump($maxIntervalCollection);
    }

}


?>