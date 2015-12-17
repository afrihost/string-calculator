<?php
namespace StringCalculator;

class StringCalculator
{
    /**
     * @param string $string
     * @return int
     */
    public function add($string)
    {
        $total = 0;
        if (strlen($string) > 0) {
            foreach (preg_split("/[\\n|" . $this->getDelimiter($string) . "]+/", $string) as $number) {
                $total += $number;
            }
        }

        return $total;
    }

    /**
     * @param string $string
     * @return string
     */
    public function getDelimiter($string)
    {
        return preg_match('/^\/\/(.?)\\n/', $string, $delimiter) ? $delimiter[1] : ',';
    }
}