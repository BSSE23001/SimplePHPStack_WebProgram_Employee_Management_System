<?php
// SETTING THE RESPONSE HEADER
header("Content-Type: text/plain");
$data = json_decode(file_get_contents("php://input"), true);

// IF THERE IS NO DATA THEN ERROR CODE IS GENERATED, BUT THE VALIDATION IS MOSTLY HANDLED BY HTML AND JAVASCRIPT
if (!$data || !isset($data['name'], $data['date'], $data['attendance'])) {
    http_response_code(400);
    echo "Invalid data.";
    exit;
}

// PREPARING THE PHP ARRAY TO SAVE DATA
$newRecord = [
    'name' => $data['name'],
    'date' => $data['date'],
    'attendance' => $data['attendance'],
    'reason' => isset($data['reason']) ? $data['reason'] : ''
];

// DATA WILL BE SAVED IN JSON FILE
$file = 'records.json';
$records = [];

// LOADING EXISTING DATA IF ANY
if (file_exists($file)) {
    $json = file_get_contents($file);
    $records = json_decode($json, true) ?: [];
}

// APPENDING THE NEW RECORD
$records[] = $newRecord;

// SAVING BACK THE JSON FILE
if (file_put_contents($file, json_encode($records, JSON_PRETTY_PRINT))) {
    echo "Record added successfully.";
} else {
    http_response_code(500);
    echo "Failed to save record.";
}