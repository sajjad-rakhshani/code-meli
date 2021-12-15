<?php
namespace SajjadRakhshani\CodeMeli;

class CodeMeli
{
    /**
     * check that given national code is valid or not
     * @param string $natinalCode
     * @return bool
     */
    public static function isValid($natinalCode = '')
    {
        if (empty(trim($natinalCode))){
            return false;
        }

        $natinalCode = strval($natinalCode);
        if (strlen($natinalCode) < 8 || strlen($natinalCode) > 10){
            return false;
        }

        $natinalCode = str_pad($natinalCode, 10, '0', STR_PAD_LEFT);

        $control = $natinalCode[9];
        $sum = 0;
        for ($i = 10; $i > 1; $i--){
            $sum += $natinalCode[10 - $i] * $i;
        }

        $remain = $sum % 11;

        $expect = $remain < 2 ? $remain : 11 - $remain;

        return $control != $expect ? false : true;
    }
}