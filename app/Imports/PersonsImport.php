<?php

namespace App\Imports;

use App\Models\Person;
use App\Models\Client;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;

class PersonsImport implements ToModel, withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
         return new Client([
            'name'=>$row['name'],
            'branch'=>$row['branch']
        ]);
        
    }
}
