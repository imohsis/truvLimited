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
    public static $STAGEONELEVELONE = 8;
    public static $STAGETWO = 16;
    public static $STAGETWOLEVELONE = 32;
    public static $STAGETHREE = 64;
    public static $STAGETHREELEVELONE = 128;
    public static $STAGEFOUR = 256;
    public static $STAGEFOURLEVELONE = 512;
    public static $STAGEFIVE = 1024;
    public static $STAGEFIVELEVELONE = 2048;
    public static $STAGESIX = 4096;

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
        if ($figure >= self::$STAGEFIVE && $figure < self::$STAGEFIVELEVELONE)
            return "Stage Five";
        if ($figure >= self::$STAGEFIVELEVELONE && $figure < self::$STAGESIX)
            return "Stage Five Level One";
        if ($figure >= self::$STAGESIX)
            return "Stage Six";
    }

}
