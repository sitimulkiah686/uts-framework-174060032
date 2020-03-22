<?php
class HomeModel extends CI_Model {
    public function getData() {
        $data = array(
            'Nama'      => 'Irpan Budiana',
            'Kampus'    => 'STMIK Jabar',
            'Website'   => 'https://stmik-jabar.ac.id'
        );
        return $data;
    }
}