<?php

namespace com\bitshammer\collection\utils;

use Closure;

/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 25/10/2016
 * Time: 21:50
 */
class CollectionUtils
{
    /**
     * Retorna a intersceção dos dois
     * arrays recebidos por parâmetro
     *
     * @param array $c1
     * @param array $c2
     * @param $compare
     * @return array
     */
    public static function intersection(array $c1, array $c2, Closure $compare)
    {
        $intersection = array_filter($c1, function ($item) use ($c2, $compare) {
            return self::contains($c2, $item, $compare);
        });
        return $intersection;
    }

    /**
     * Retorna a disjunção dos dois
     * arrays recebidos por parâmetro
     *
     * @param array $c1
     * @param array $c2
     * @param $compare
     * @return array
     */
    public static function disjunction(array $c1, array $c2, Closure $compare)
    {
        $disjunction = array_filter($c1, function ($item) use ($c2, $compare) {
            return !self::contains($c2, $item, $compare);
        });
        return $disjunction;
    }

    /**
     * Valida se o array recebido
     * por parâmetro contém o objeto
     *
     * @param array $c1
     * @param $obj
     * @param $compare
     * @return bool
     */
    public static function contains(array $c1, $obj, Closure $compare)
    {
        foreach($c1 as $item){
            if($compare($item,$obj)){
                return true;
            }
        }
        return false;
    }

}