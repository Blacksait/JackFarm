<?php

class Cow
{
    //����� ������
    public function Milk_yield() {
        return rand(8,12);
    }
    //���������� ������
    public function Add_Cow(){
        $filename = 'cow_array.txt';

        $data = file_get_contents($filename);
        $cow_ar = json_decode($data);
        $count_json = count($cow_ar);
        $cow_ar[] = array(
            $count_json => 'Cow'
        );
        $data = json_encode($cow_ar);
        file_put_contents($filename, $data);

        // ��������� ������
        $data = file_get_contents($filename);
        $cow_ar = json_decode($data, TRUE);
        return $cow_ar;
    }
}