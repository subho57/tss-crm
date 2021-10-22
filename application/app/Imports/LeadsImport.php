<?php

namespace App\Imports;

use App\Models\Lead;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class LeadsImport implements ToModel, WithStartRow, WithHeadingRow, WithValidation, SkipsOnFailure {

    use Importable, SkipsFailures;
    
    private $rows = 0;

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row) {

        ++$this->rows;
        
        return new Lead([
            'lead_importid' => request('import_ref'),
            'lead_firstname' => $row['firstname'] ?? '',
            'lead_lastname' => $row['lastname'] ?? '',
            'lead_email' => $row['email'] ?? '',
            'lead_title' => $row['title'] ?? '',
            'lead_value' => $row['value'] ?? '',
            'lead_phone' => $row['telephone'] ?? '',
            'lead_source' => $row['source'] ?? '',
            'lead_company_name' => $row['companyname'] ?? '',
            'lead_job_position' => $row['jobposition'] ?? '',
            'lead_street' => $row['street'] ?? '',
            'lead_city' => $row['city'] ?? '',
            'lead_state' => $row['state'] ?? '',
            'lead_zip' => $row['zipcode'] ?? '',
            'lead_country' => $row['country'] ?? '',
            'lead_website' => $row['website'] ?? '',
            'lead_description' => $row['description'] ?? '',
            'lead_custom_field_1' => $row['customfield1'] ?? '',
            'lead_custom_field_2' => $row['customfield2'] ?? '',
            'lead_custom_field_3' => $row['customfield3'] ?? '',
            'lead_custom_field_4' => $row['customfield4'] ?? '',
            'lead_custom_field_5' => $row['customfield5'] ?? '',
            'lead_custom_field_6' => $row['customfield6'] ?? '',
            'lead_custom_field_7' => $row['customfield7'] ?? '',
            'lead_custom_field_8' => $row['customfield8'] ?? '',
            'lead_custom_field_9' => $row['customfield9'] ?? '',
            'lead_custom_field_10' => $row['customfield10'] ?? '',
            'lead_creatorid' => auth()->id(),
            'lead_created' => now(),
            'lead_status' => request('lead_status'),
        ]);
    }

    public function rules(): array
    {
        return [
            'firstname' => [
                'required',
            ],
            'lastname' => [
                'required',
            ],
            'email' => [
                'required',
                'email'
            ],
            'title' => [
                'required',
            ],   
        ];
    }

    /**
     * we are ignoring the header and so we will start with row number (2)
     * @return int
     */
    public function startRow(): int {
        return 2;
    }


    /**
     * lets count the total imported rows
     * @return int
     */
    public function getRowCount(): int
    {
        return $this->rows;
    }
}
