<?php

class tableMaker{
    public function initTable() {
        return "<table>";
    }

    public function endTable() {
        return "</table>";
    }

    public function makeHeaders($headers) {
        $output = '<tr>';
            foreach ( $headers as $header ) {
                $output .= '<th>' . $header . '</th>';
            }
        return $output.'</tr>';
    }

    public function makeRow($row) {
        $output = '<tr>';
            foreach ( $row as $cell ) {
                $output .= '<td>' . $cell . '</td>';
            }
        return $output.'</tr>';
    }

    public function makeRows($rows) {
        $output = '';
        foreach ($rows as $row) {
            $output .= makeRow($row);
        }
        return $output;
    }

}

?>
