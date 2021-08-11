<?php


class Farm_Chicken
{
    //Подсчет Куриных Яиц
    public function Farm_Chicken_yield() {
        return rand(0,1);
    }
    //Добавление Курицы
    public function Add_Farm_Chicken(){
        $filename = 'chicken_array.txt';

        $data = file_get_contents($filename);
        $chicken_ar = json_decode($data);
        $count_json = count($chicken_ar);
        $chicken_ar[] = array(
            $count_json => 'Chicken'
        );
        $data = json_encode($chicken_ar);
        file_put_contents($filename, $data);

        // Считываем Массив
        $data = file_get_contents($filename);
        $chicken_ar = json_decode($data, TRUE);
        return $chicken_ar;
    }
}