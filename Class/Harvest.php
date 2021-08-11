<?php
require_once 'Controller.php';

class Harvest extends Controller {
    public function index(){
        //Подсчитываем Надой
        $daily_milk = 0;
        $daily_egg = 0;
        $cow = $this->model('Cow');

        //Коровы
        $cow_ar = $cow->Add_Cow();
        $count_cow = count($cow_ar);
        for ($i = 1; $i <= $count_cow; $i++) {
            $daily_milk = $daily_milk + $cow->Milk_yield();
        }

        //Курицы
        $chicken = $this->model('Farm_Chicken');
        $chicken_ar = $chicken->Add_Farm_Chicken();
        $count_chicken = count($chicken_ar);
        for ($i = 1; $i <= $count_chicken; $i++) {
            $daily_egg = $daily_egg + $chicken->Farm_Chicken_yield();
        }

        //Общее Кол-во
        $total_beasts = $count_cow + $count_chicken;
        $total_harvest = $daily_milk + $daily_egg;

        //Вывод
        echo 'Total Milk: ' . $daily_milk .' Total Cow: '. $count_cow . PHP_EOL;
        echo 'Total Egg: ' . $daily_egg .' Total Chicken: '. $count_chicken . PHP_EOL;
        echo 'Total Harvest: '. $total_harvest .' Total Beasts: ' . $total_beasts;
    }
}
