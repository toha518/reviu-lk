<?php

namespace App\Imports;

use App\Models\NeracaPercobaan;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');
class NeracaPercobaanImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        return new NeracaPercobaan([
            'kode_akun' => $row['Kode Akun'],
            'nama_akun' => $row['Nama Akun'],
            's1_ba_sb' => $row['Semester I 2022 Berbasis Akrual'], // semester 1 berbasis akrual sebelum reviu
            's1_bk_sb' => $row['Semester I 2022 Berbasis Kas'], // semester 1 berbasis kas sebelum reviu
            'ta_ba_sb' => $row['Tahun 2021 Berbasis Akrual'], // tahun xx berbasis akrual sebelum reviu
            'ta_bk_sb' => $row['Tahun 2021 Berbasis Kas'], // tahun xx berbasis kas sebelum reviu

            's1_ba_st' => $row['Semester I 2022 Berbasis Akrual'], // semester 1 berbasis akrual setelah reviu
            's1_bk_st' => $row['Semester I 2022 Berbasis Kas'], // semester 1 berbasis kas setelah reviu
            'ujkd' => $row['Usulan Jurnal Koreksi (Debet)'], // usulan jurnal koreksi (debit)
            'ujkk' => $row['Usulan Jurnal Koreksi (Kredit)'], // usulan jurnal koreksi (kredit)
            'npsk' => $row['Neraca Percobaan Setelah Koreksi'] // neraca percobaan setelah koreksi
        ]);
    }
}
