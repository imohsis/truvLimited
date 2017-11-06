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
    public static $STAGEONELEVELONE = 6;
    public static $STAGETWO = 14;
    public static $STAGETWOLEVELONE = 30;
    public static $STAGETHREE = 62;
    public static $STAGETHREELEVELONE = 126;
    public static $STAGEFOUR = 254;
    public static $STAGEFOURLEVELONE = 510;
    public static $STAGEFIVE = 1022;
    public static $STAGESIX = 2046;

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
            return "<span style='color: green'>Stage Zero</span>";
        if ($figure >= self::$STAGEONE && $figure < self::$STAGEONELEVELONE)
            return "<span style='color: green'>Stage One</span>";
        if ($figure >= self::$STAGEONELEVELONE && $figure < self::$STAGETWO)
            return "<span style='color: green'>Stage One</span> | <span style='color:#4C97DD'> Level One</span>";
        if ($figure >= self::$STAGETWO && $figure < self::$STAGETWOLEVELONE)
            return "<span style='color: green'>Stage Two</span>";
        if ($figure >= self::$STAGETWOLEVELONE && $figure < self::$STAGETHREE)
            return "<span style='color: green'>Stage Two</span> | <span style='color:#4C97DD'> Level Two</span>";
        if ($figure >= self::$STAGETHREE && $figure < self::$STAGETHREELEVELONE)
            return "<span style='color: green'>Stage Three</span>";
        if ($figure >= self::$STAGETHREELEVELONE && $figure < self::$STAGEFOUR)
            return "<span style='color: green'>Stage Three</span> | <span style='color:#4C97DD'> Level Three</span>";
        if ($figure >= self::$STAGEFOUR && $figure < self::$STAGEFOURLEVELONE)
            return "<span style='color: green'>Stage Four</span>";
        if ($figure >= self::$STAGEFOURLEVELONE && $figure < self::$STAGEFIVE)
            return "<span style='color: green'>Stage Four</span> | <span style='color:#4C97DD'> Level Four</span>";
        if ($figure >= self::$STAGEFIVE && $figure < self::$STAGESIX)
            return "<span style='color: green'>Stage Five</span>";
      
        if ($figure >= self::$STAGESIX)
            return "<span style='color: green'>Stage Six</span>";
    }

}
