<?php
    class Controller {
        protected function model($model) {
            require_once './Model/' . $model . '.php';
            return new $model();
        }
    }