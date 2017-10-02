<?php

namespace App;

/**
 * |----------------------------------------------------------------------------
 * |-------------------------- Stages Class -----------------------------------
 * |----------------------------------------------------------------------------
 * |
 * | This class is serves as a constant list of the stages supported by this 
 * | platform.
 * |
 * |----------------------------------------------------------------------------
 * |
 */
class Stages {

    public static $STAGEONE = 2;
    public static $STAGEONELEVELONE = 4;
    public static $STAGETWO = 8;
    public static $STAGETWOLEVELONE = 16;
    public static $STAGETHREE = 32;
    public static $STAGETHREELEVELONE = 64;
    public static $STAGEFOUR = 128;
    public static $STAGEFOURLEVELONE = 256;
    public static $STAGEFIVE = 512;
    public static $STAGESIX = 1024;

    /**
     * 
     * This method is responsible for taking a value and determining what stage
     * that figure stands under.
     * 
     * @param int $figure | the figure used as the criteria.
     * 
     * @return String | a depicting the stage.
     * 
     */
    public static function determineStage($figure) {
        if ($figure < self::$STAGEONE)
            return "Stage Zero";
        if ($figure >= self::$STAGEONE && $figure < self::$STAGEONELEVELONE)
            return "Stage One";
        if ($figure >= self::$STAGEONELEVELONE && $figure < self::$STAGETWO)
            return "Stage One Level One";
        if ($figure >= self::$STAGETWO && $figure < self::$STAGETWOLEVELONE)
            return "Stage Two";
        if ($figure >= self::$STAGETWOLEVELONE && $figure < self::$STAGETHREE)
            return "Stage Two Level One";
        if ($figure >= self::$STAGETHREE && $figure < self::$STAGETHREELEVELONE)
            return "Stage Three";
        if ($figure >= self::$STAGETHREELEVELONE && $figure < self::$STAGEFOUR)
            return "Stage Three Level One";
        if ($figure >= self::$STAGEFOUR && $figure < self::$STAGEFOURLEVELONE)
            return "Stage Four";
        if ($figure >= self::$STAGEFOURLEVELONE && $figure < self::$STAGEFIVE)
            return "Stage Four Level One";
        if ($figure >= self::$STAGEFIVE && $figure < self::$STAGESIX)
            return "Stage Five";
      
        if ($figure >= self::$STAGESIX)
            return "Stage Six";
    }

}
